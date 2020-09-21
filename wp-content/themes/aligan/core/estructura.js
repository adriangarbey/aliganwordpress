(function () {
    let icons = document.getElementsByClassName('icon');
    let collection = Array.from(icons);
    collection.forEach(element => {
        let target = element.getAttribute('data-target');
        if (target) {
            element.addEventListener('click', function() {
                // find the card
                let node = document.getElementById(target);
                if (node) {
                    node.classList.toggle('visible');
                }
            })
        }
    });
})();

