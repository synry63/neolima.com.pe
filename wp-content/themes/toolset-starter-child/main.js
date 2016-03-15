/**
 * Created by pmary-game on 10/7/15.
 */

function hideIframe (){
    jQuery( "#info-contact-seccion .block-iframe").hide();
    jQuery( ".link-location").removeClass('selected-location');
}
jQuery( document ).ready(function() {
    setTimeout(function(){
        jQuery( "#wp-live-chat-close").remove();
    },5000);
    jQuery( ".link-location").click(function(){
        hideIframe();
        var id = jQuery(this).attr('id');
        jQuery("#"+id+"-iframe").show();
        jQuery("#"+id+"-iframe iframe").css('height','300px');
        jQuery(this).addClass('selected-location');

        return false;
    });

    jQuery('a.popup-mag').magnificPopup({type:'inline'});

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        jQuery('.my-drop-down').addClass('open');
    }
    //ancle link
    jQuery('body').plusAnchor({
        easing: 'swing',
        //offsetTop: -65,
        speed:  700
    });


    //menu javascript
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

    }
    else{
        jQuery('.modelos-items-menu li a.link-menu-item').click(function(){
            jQuery('.menu-item-text-wrap').removeClass('selected');

            var index = jQuery(this).parent().index();
            var pixel_y = index*15;
            jQuery(this).parent().find('.marsque').css('background-position','0px -'+pixel_y+'px');
            jQuery(this).find('.menu-item-text-wrap').addClass('selected');
            jQuery('.modelos-items-menu li.li-menu-item').css('height','auto');
            jQuery('.modelos-items-menu li .inside').hide();
            jQuery(this).parent('li').css('height','320px');
            jQuery(this).parent('li').find('.inside').show();

            return false;
        });
    }

    jQuery('.my-drop-down').click(function(event){
        event.preventDefault();
        jQuery('#modelos-menu-wrap').slideToggle(500);
    });
    jQuery('.my-drop-down-2').click(function(event){
        event.preventDefault();
        var url = jQuery(this).find('a').first().attr('href');
        window.open(url,"_self");
    });


        //date picker
        jQuery.extend(jQuery.fn.pickadate.defaults,{monthsFull:["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],monthsShort:["ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"],weekdaysFull:["domingo","lunes","martes","miércoles","jueves","viernes","sábado"],weekdaysShort:["dom","lun","mar","mié","jue","vie","sáb"],today:"hoy",clear:"borrar",close:"cerrar",firstDay:1,format:"dddd d !de mmmm !de yyyy",formatSubmit:"yyyy/mm/dd"});

        jQuery('.datepicker input').pickadate();

         //jQuery('.timepicker input').pickatime();

        //cotizar form switch
        /*jQuery('.select-form li a').click(function(){
            jQuery('.form-wrap-item').hide();
            jQuery('.select-form li a').removeClass('selected');
            jQuery(this).addClass('selected');
            var id = jQuery(this).attr('id').split('-')[1];
            jQuery('.form-wrap-item:nth-child('+id+')').fadeToggle(300);
        });
        //form select option
        jQuery('#uso-type input').change(function(){
            if(jQuery(this).val()=='empresa'){
                jQuery('.optional').show();
            }
            else{
                jQuery('.optional').hide();
            }
        });
        jQuery('.visit-box input').change(function(){
            if(jQuery(this).val()=='Si'){
                jQuery('.disponibilidad').show();
            }
            else{
                jQuery('.disponibilidad').hide();
            }
        });*/





});