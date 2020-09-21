(function ($) {


        $(function () {

            var ajaxurl = admin_url + 'admin-ajax.php';

            $('#aligan-search-form').submit(function (e) {
                e.preventDefault();
                var form = $("#aligan-search-form").serialize();
                var data = {
                    action: "aligan_search",
                    data: form,
                    security: security_suscribirse
                };
                $.post(ajaxurl, data, function (response) {
                    var obj = $.parseJSON(response);
                    if (obj.answer =='true') {
                        if(obj.url!=''){
                            window.location.href = obj.url;
                        }
                    }
                });
            });

            $('.page-template-page-ueb .content-section h2, .page-template-page-nosotros .news-content h2').each(function (i, item) {
                $(this).after('<span class="content-header">'+$(this).text()+'</span><hr class="content-separator w-50 mb-5">');
                $(this).remove();
            });

            $('.producto-content-section .content-text p').each(function (i, item) {
                $(this).addClass('content-text w-50 px-3');
            });
            $('.productos-caracteristicas p').each(function (i, item) {
                $(this).addClass('card-text');
            });

            $('.activeLanguage li a').each(function (i, item) {
                var str = $(this).text();
                var res = str.substring(0, 2);
                $(this).text(res);
            });



            $('.page-template-page-ueb #side-navigation li.link a').click(function (e) {
                e.preventDefault();
                if($(this).parent().hasClass('active')){

                }else{
                    $('.page-template-page-ueb #side-navigation li.link').removeClass('active');
                    $(this).parent().addClass('active');
                    $('.ueb-content').slideUp();
                    $($(this).attr('data-target')).slideDown();
                    $('html, body').animate({scrollTop: $('.uebs-content-wrapper').offset().top - 130}, 1000);
                }

            });

            $('.products-container .products-card-small').click(function (e) {
                e.preventDefault();
                if($(this).hasClass('active')){

                }else{
                    $('.products-container .products-card-small').removeClass('active');
                    $(this).addClass('active');
                    $('.producto-content-section').slideUp();
                    $($(this).attr('datasrc')).slideDown();
                    $('html, body').animate({scrollTop: $('.products-container-content').offset().top - 130}, 1000);
                    $('.products-table').slideUp();
                    $($(this).attr('data-table')).slideDown();
                }

            });

            $('.nav-item-tablapienso').click(function (e) {
                e.preventDefault();
                $('#buttonpiensolist').trigger("click");
                if($(this).parent().hasClass('active')){

                }else{

                    $('.title-tipo-pienso').text($(this).text());
                    $('.nav-item-tablapienso').parent().removeClass('active');
                    $(this).parent().addClass('active');
                    $('.tablapienso').slideUp();
                    $($(this).attr('data-src')).slideDown();
                    $('html, body').animate({scrollTop: $('#producto-table-0').offset().top - 130}, 1000);
                }

            });

            $('.comment-form').addClass('aligan-form');



        });

    })(jQuery);
