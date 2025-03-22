(function ($) {
    
    $( document ).ready(function() {

        $('.open-anep-bar').click(function(){
            $('.overlay').fadeIn();
            $('.anep-bar-nav').addClass('active');
        });

        $('.menu-anep-link').click(function(){
            closeMenu();
        });

        $('.close-anep-bar').click(function(){
            closeMenu();
        });

        $('.overlay').click(function(){
            closeMenu();
        });


        /*-------------------------------------*/


        $('.open-icon').click(function(){
            $('.site-bar-nav').slideToggle(300);
        });

        $('.menu-link').click(function(){
            $('#block-menuprincipal').slideToggle(300);
        });

    });


    function closeMenu(){
        $('.anep-bar-nav').removeClass('active');
        $('.overlay').fadeOut();
    }   


    /*---------------------------------------*/

    $('.search-box input').attr("placeholder","Buscar...");


    $('.open-searchBox').click(function(){
        $('.search-box input').toggleClass('opened-SearchBox');
        $('.opened-SearchBox').focus();
    });


  }(jQuery));

