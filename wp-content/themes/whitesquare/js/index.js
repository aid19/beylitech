$(document).ready(function() {

    $('#Carousel').carousel() 
        interval:   1000
    });

    $('.a11').click(function(){
        $('.a11').removeClass('project-active')
        $('.a11').removeClass('bounceIn')

        $(this).addClass('project-active')
        $(this).addClass('bounceIn')

    })


    //   $('div').click(function() {
    //     if (!$(this).hasClass('a11')) {
    //         console.log('not have class')
    //         $('.a11').css('background-color', '#c9dbed');
    //     }
    //     return false;
    // });

    // $('section').click(function() {
    //     if (!$(this).hasClass('a11')) {
    //         console.log('not have class')
    //         $('.a11').css('background-color', '#c9dbed');
    //     }
    //     return false;
    // });

    $('#form-submit').click(function() {

        console.log('button clicked')

        var Email = $("#Email").val();

        console.log(Email)

        var Message = $("#Message").val();

        console.log(Message)

 

        $.ajax({
            type: "get",
            url: "index.php",
            data: {
                Email: Email,
                Message: Message,

            },
            dataType: "json",
            success: function (response) {
                console.log('success')
                
            }
        });


    });



    //   $('section').click(function(){

        // var myClass = $(this).attr("class");

        // console

        // if(myClass !== 'a11') {
        //     $('.a11').css('background-color', '#c9dbed');
        // }


        // console.log(myClass)

        //     if($(e).hasClass('a11')){
        //       alert('У этого блока есть класс a11');
        //       }else{
        //         alert('У этого блока нет класса a11');
        //       }
        // $('.a11').css('background-color', '#c9dbed');
        // e.preventDefault();
    //   })
