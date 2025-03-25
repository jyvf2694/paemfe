/**
 * Global utilities.
 *
 * @file
 */
(function ($, Drupal){
  "use strict";
  Drupal.behaviors.paemfe ={
    attach: function (context, settings){
      //addClass previous table
      jQuery("table").closest("div").addClass("table-responsive");
      
      //Delete element H2 "menusuperior"
      jQuery("#block-menusuperior-menu").remove();

      //Lazy load iframe
      jQuery(".media-oembed-content").attr("loading", "lazy");

      //Img width and height default
      jQuery(".featured-bottom .paragraph--type--link-list img, .header .navbar-with-logo-superior .navbar-brand img").attr({
        "width": "100%",
        "height": "100%"
      });

      //Clean url parameters general 'views'
      function cleanParametersUrl(){
        var url = window.location.href;
        var parameters = new URL(url).search;
        if(parameters){
          var newUrl = url.split('?')[0];
          window.history.pushState({path: newUrl}, '', newUrl);
        }
      }

      //Delete id field autocomplete
      jQuery('.ui-autocomplete-input').on('autocompleteclose', function(event, ui){
        var currentValue = jQuery(this).val();
        var idRegex = /\((\d+)\)$/;
        var match = currentValue.match(idRegex);
        if (match){
          var notId = currentValue.replace(idRegex, '').trim();
          jQuery(this).val(notId);
        }
      });

      //Delete tags - not <p> / TC News=field-lead
      var divContainer=jQuery('.node--type-news .field--name-field-lead');
      var idRegex=':not(a):not(b):not(cite):not(code):not(em):not(i):not(mark):not(small):not(span):not(strong):not(sub):not(sup):not(u)';
      setTimeout(function(){ 
        divContainer.find(':not(p)'+idRegex).remove();
        divContainer.find('p *:not(p)'+idRegex).remove();
        divContainer.find('p:empty').remove();
      });

      //Update title view 'shedule'
      function titleViewShedule(){
        if(jQuery("form#views-exposed-form-regulations-resolutions-page-1 #edit-tipo--2 :selected").val() == "All"){
          jQuery("body.page-view-regulations-resolutions #block-pagetitle .content h1.title").text("Normativa");
        }
        else{
          jQuery("body.page-view-regulations-resolutions #block-pagetitle .content h1.title").text(jQuery("form#views-exposed-form-regulations-resolutions-page-1 #edit-tipo--2 :selected").text());
        }
      }
      titleViewShedule();
      jQuery("form#views-exposed-form-regulations-resolutions-page-1 .form-actions .button").on("click", function(){
        jQuery(document).ajaxComplete(function(){
          cleanParametersUrl();
          titleViewShedule();
        });
      });

      //Sliders
      //slide-news
      $(once('slide-news', '.slide-news', context)).each((_, slide) =>{
        $(slide).slick({
          arrows: true,
          autoplay: true,
          autoplaySpeed: 2000,
          cssEase: 'linear',
          dots: true,
          fade: true,
          infinite: true,
          speed: 500
        });
      });
    },
  };
})(jQuery, Drupal);
