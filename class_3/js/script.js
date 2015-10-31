/**
 * Created by lenovo_pc on 10/28/2015.
 */
jQuery(function(e){

jQuery(".btn-click").click(function(event){
    event.preventDefault();

    var main_popup  = jQuery("#popup_1");

    main_popup.fadeIn();
    //main_popup.find(".popup_main").slideDown().css('top','30%');
    main_popup.find(".popup_main").animate({
        'top':'30%'
    },500, function(){

    });

})

    jQuery(".popup-trash").click(function(e){
        e.preventDefault();

        var main_popup = jQuery(this).parents("#popup_1");
        //main_popup.hide();
        //main_popup.find(".popup_main").css('top','-100%');
        main_popup.hide().find(".popup_main").css('top','-100%');

    })

    jQuery(window).click(function(e){
       if( e.target.className =='popup'){
          jQuery(".popup-trash").click();
        }
    })
})