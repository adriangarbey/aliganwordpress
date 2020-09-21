(function () {
    let navigation = document.getElementById('side-navigation');
    let collapse = document.getElementById('collapser');

    if (collapse) {
        collapse.onclick = function () {
            navigation.classList.toggle('expanded');
            navigation.classList.toggle('blured');
            collapse.classList.toggle('icon-sidenav-close');
            collapse.classList.toggle('icon-sidenav-collapsed');

        }
    }
})();



(function () {
    // ref to posible more search icons
    let searchIcons = document.getElementsByClassName('icon-search');
    let element = searchIcons[0];

    if (element) {
        element.onclick = function () {
            let collection = document.getElementsByClassName('search-container');
            let container = collection.length > 0 ? collection[0] : null;
            if (container) {
                container.classList.toggle('visible')
            }
        }
    }

    // collapse.onclick = function () {
    //     navigation.classList.toggle('expanded');
    //     navigation.classList.toggle('blured');
    //     collapse.classList.toggle('icon-sidenav-close');
    //     collapse.classList.toggle('icon-sidenav-collapsed');

    // }
})();

$('input[type="file"]').change(function (e) {
    var fileName = e.target.files[0].name;
    if (fileName.length > 25) {
        $('.aligan-file-label').html(fileName.substring(0, 25) + '...');
    } else {
        $('.aligan-file-label').html(fileName);
    }
});

$('.vote-card .icon').click(function (e) {
    //TODO send server request and disable hover
    $(this).toggleClass('clicked');

});

$('.vote-card .icon').hover(function (e) {
    let el = $(this);
    $('.vote-card .icon').each(function () {
        if ($(this).offset().left <= el.offset().left) {
            if (!$(this).hasClass('active')) {
                $(this).toggleClass('active');
            }
        } else {
            if ($(this).hasClass('active')) {
                $(this).toggleClass('active');
            }
        }
    })
})

/**
 * Index fixes
 */

 $("document").ready( function() {
     if( $( window ).width() < 768 ) {
        let el = $('#introText');
        el.toggleClass('position-absolute');
        el.css('top', function() {
            return (el.height() + $('.carousel-container').height() + 20) * -1;
        })

        $('.carousel-container').css('margin-top', el.height() + 20);
    }
 })


 /** Navigation */

function init() {
    // Initialize the navigation data
    let navCurrent = document.getElementById('location');
    if (navCurrent) {
        navCurrent.innerHTML = document.title;
    }
}

window.onload = init();

/** Carousel */

// Scroll proof of concept, probably end replaced for some WP scroll :3
const easingOutQuint = (x, t, b, c, d) =>
    c * ((t = t / d - 1) * t * t * t * t + 1) + b

//https://github.com/tootsuite/mastodon/blob/f59ed3a4fafab776b4eeb92f805dfe1fecc17ee3/app/javascript/mastodon/scroll.js
function smoothScrollPolyfill(node, key, target) {
    const startTime = Date.now()
    const offset = node[key]
    const gap = target - offset
    const duration = 1000
    let interrupt = false

    const step = () => {
        const elapsed = Date.now() - startTime
        const percentage = elapsed / duration

        if (interrupt) {
            return
        }

        if (percentage > 1) {
            cleanup()
            return
        }

        node[key] = easingOutQuint(0, elapsed, offset, gap, duration)
        requestAnimationFrame(step)
    }

    const cancel = () => {
        interrupt = true
        cleanup()
    }

    const cleanup = () => {
        node.removeEventListener('wheel', cancel)
        node.removeEventListener('touchstart', cancel)
    }

    node.addEventListener('wheel', cancel, { passive: true })
    node.addEventListener('touchstart', cancel, { passive: true })

    step()

    return cancel;
}

//Browser compat
function testSupportsSmoothScroll() {
    let supports = false
    try {
        let div = document.createElement('div')
        div.scrollTo({
            top: 0,
            get behavior() {
                supports = true
                return 'smooth'
            }
        })
    } catch (err) { } // Edge throws an error
    return supports
}

const hasNativeSmoothScroll = testSupportsSmoothScroll();

function smoothScroll(node, topOrLeft, horizontal) {
    if (hasNativeSmoothScroll) {
        return node.scrollTo({
            [horizontal ? 'left' : 'right']: topOrLeft,
            behavior: 'smooth'
        });
    } else {
        return smoothScrollPolyfill(node, horizontal ? 'scrollLeft' : 'scrollRight', topOrLeft)
    }
};


const indicators = document.querySelectorAll('.viewport .carousel-control');
const scroller = document.querySelector('.scroll');
const elements = document.querySelectorAll('.scroll-item-outer').length;

if (indicators && scroller && elements) {
    const items = Math.floor(scroller.clientWidth / (scroller.scrollWidth / elements));
    const steps = Math.floor(elements / items);




    let currentIndex = 0;

    if (indicators[0]) {
        indicators[0].addEventListener('click', e => {
            e.preventDefault()
            e.stopPropagation();
            if (currentIndex <= 0) {
                currentIndex = 0;
            }
            --currentIndex;
            const scrollLeft = Math.floor(scroller.scrollWidth * (currentIndex / steps));
            smoothScroll(scroller, scrollLeft, true)
        })
    }

    if (indicators[1]) {
        indicators[1].addEventListener('click', e => {
            e.preventDefault()
            e.stopPropagation();
            currentIndex++;
            if (currentIndex > steps) {
                currentIndex = 0;
            }
            const scrollRight = Math.floor(scroller.scrollWidth * (currentIndex / steps));
            smoothScroll(scroller, scrollRight, true)
            // const scrollRight = Math.floor(scroller.scrollWidth / steps);

        })
    }
}





