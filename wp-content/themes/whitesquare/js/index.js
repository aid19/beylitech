$(document).ready(function() {

    $('#Carousel').carousel() 
        interval:   1000
    });

    $('.a11').click(function(e){
        $('.a11').css('background-color', '#c9dbed');
        $(this).css('background-color', '#93a1d6');
        e.preventDefault();
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

        var name = $("#name").val();

        console.log(name)
      
        var lastname = $("#lastname").val();

        console.log(lastname)

        var Email = $("#Email").val();

        console.log(Email)

        var Message = $("#Message").val();

        console.log(Message)

        var city = $("#city").val();

        console.log(city)

        var state = $("#state").val();


        $.ajax({
            type: "get",
            url: "index.php",
            data: {
                name: name,
                lastname: lastname,
                Email: Email,
                Message: Message,
                city: city,
                state: state,

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
