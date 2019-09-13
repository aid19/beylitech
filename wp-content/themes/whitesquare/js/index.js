$(document).ready(function() {

    $('#Carousel').carousel() 
        interval:   1000
    });

    
    $('.block-form').click(function(){

        $('.block-form').removeClass('project-active')
        $('.block-form').removeClass('bounceIn')

        $(this).addClass('project-active')
        $(this).addClass('bounceIn')

    })

    $('.btn-order-project').click(function() {
        var email = $('#email').val();
        var message = $('#message').val();

        if(email != "") {
            Swal.fire({
                    type: 'success',
                    title: 'Əla !',
                    text: 'Məlumat göndərildi',
                }
            )
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Zəhmət olmasa e-mail işarəsini doldurun !',
            })
        }  
    });


    $('#form-submit').click(function() {

        var email = $("#email").val();
        var message = $("#message").val(); 

        $.ajax({
            type: "get",
            url: "index.php",
            data: {
                email: email,
                message: message,
            },
            dataType: "json",
            success: function (response) {
                console.log('success')
            }
        });
    });


