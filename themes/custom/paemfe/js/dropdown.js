(function ($) {
    $( document ).ready(function() {

        $('.dropdown-link').click(function(){
            event.preventDefault();
    
            $(this).toggleClass('expanded');
    
            if($(this).attr("aria-expanded") == "false"){
                $(this).attr("aria-expanded","true");
            }else{
                $(this).attr("aria-expanded","false");
            }
    
            $(this).next().slideToggle(300);
        });

    });

    
  }(jQuery));
  
  
  
  