(function ($) {


    $(function () {

        var ajaxurl = admin_url + 'admin-ajax.php';

        function atencion_form() {
            $('#atencion-form button.btn-submit').addClass('loading');
            $('#atencion-form button.btn-submit span').html($('#atencion-form .target-button-wait').html());
            $('#atencion-form button.btn-submit').attr('disabled','');
            var form = $("#atencion-form").serialize();
                var data = {
                    action: "atencion_ciudadana",
                    data: form,
                    security: security_suscribirse
                };
            $.post(ajaxurl, data, function (response) {
                var obj = $.parseJSON(response);
                if(obj.answer=='true'){
                    $('body').append('<div class="popup-message status"><div class="popup-message-inner">'+obj.message+'</div></div>');
                    $('.popup-message').delay(7000).fadeOut('fast');
                }else{
                    $('body').append('<div class="popup-message error"><div class="popup-message-inner">'+obj.message+'</div></div>');
                    $('.popup-message').delay(7000).fadeOut('fast');
                }
                $('#atencion-form button.btn-submit').removeClass('loading');
                $('#atencion-form button.btn-submit span').html($('#atencion-form .target-button-text').html());
                $('#atencion-form button.btn-submit').removeAttr('disabled');
            });
        }

        $('#atencion-form #typeIdentified').trigger('click');

        $('.upload-file').click(function (e) {
            e.preventDefault();
            if($('#validatedCustomFile').val()!=''){
                $('.upload-file').addClass('uploading-file');
                var file_data = $('#validatedCustomFile')[0].files[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
                form_data.append('action', 'file_upload');
                jQuery.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function (response) {
                        var datos = JSON.parse(response);
                        $('.upload-file').removeClass('uploading-file');
                        if (datos.response == 'SUCCESS') {
                            $('.form-adjunto').val(datos.attachment_id);
                            $('body').append('<div class="popup-message status"><div class="popup-message-inner">'+$('#validatedCustomFile').attr('succes-messages')+'</div></div>');
                            $('.popup-message').delay(5000).fadeOut('fast');
                        }else{
                            $('body').append('<div class="popup-message error"><div class="popup-message-inner">'+$('#validatedCustomFile').attr('error-messages')+'</div></div>');
                            $('.popup-message').delay(5000).fadeOut('fast');
                            $('#validatedCustomFile').val('');
                        }
                    }
                });
            }else{

            }

        });


        $('input[type=radio][name=radio-stacked]').change(function() {
            if (this.value == 'identificado') {
                $('.form-nombre').slideDown();
                $('.form-apellidos').slideDown();
                $('.form-ci').slideDown();
                $('.form-direccion').slideDown();
                $('.form-telefono').slideDown();
                $('.form-celular').slideDown();
                $('.form-correo').slideDown();
            }
            else{
                $('.form-nombre').slideUp();
                $('.form-apellidos').slideUp();
                $('.form-ci').slideUp();
                $('.form-direccion').slideUp();
                $('.form-telefono').slideUp();
                $('.form-celular').slideUp();
                $('.form-correo').slideUp();
            }
        });

        $('.form-pais select').change(function() {
            if (this.value == 'Cuba') {
                $('.form-provincia').slideDown();
            }
            else{
                $('.form-provincia').slideUp();
            }
        });

        $("#atencion-form").submit(function (e) {
            e.preventDefault();
            atencion_form();
        });

    });

})(jQuery);
