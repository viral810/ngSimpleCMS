jQuery(document).ready(function(){
    jQuery('#trigger').click(function(event){
        event.preventDefault();
        jQuery('.menu').toggleClass('active');
        jQuery('.body-wrapper').toggleClass('active-menu');
    });

});
