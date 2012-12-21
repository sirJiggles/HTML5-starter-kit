/*
 * Main javascript file
 * 
 * @author Gareth Fuller
 */


/* 
 * This function is used for detecting browser CSS3 functionality support 
 * 
 * Original code found here http://net.tutsplus.com/tutorials/html-css-techniques/quick-tip-detect-css-support-in-browsers-with-javascript/
 * only modified slightly (to exlude khtml webkit and break in the while loop)
 */
var supports = (function(prop) {  
   var div = document.createElement('div'),  
      vendors = 'Ms O Moz Webkit'.split(' '),  
      len = vendors.length;  
   
    if ( prop in div.style ) return true;  
    prop = prop.replace(/^[a-z]/, function(val) {  
        return val.toUpperCase();  
    });  
    while(len--) {  
        if ( vendors[len] + prop in div.style ) {  
        return true;  
        break;
        }  
    }  
    return false;  

});


/* Document ready function */
$(document).ready(function() {

    
    $('html').removeClass('no-js');

    // init syntax highlighter
    SyntaxHighlighter.all();
    
    /* Accordian */
    if ($('#accordian').length > 0){
        accordianJs();
    }

    /* Gallery */
    if ($('#gallery').length > 0){
        galleryJs();
    }
    
    /* Mobile navigation */    
    if ( $('.mobile-nav').length > 0 ){

        // click event for mobile button
        $('.mobile-nav').click(function(e){
            e.preventDefault();
            mobileNavToggle();

        });

    }

    
});

/* Function for the accordan */
function accordianJs(){
    
    $('.accordian-slide').slideUp();
    
    $('#accordian a').click(function(e){
        
        e.preventDefault();
        
        if (!$(this).hasClass('open')){
            
            $('.accordian-slide').slideUp();
            $(this).next().slideToggle();
            $('#accordian a').removeClass('open');
            $(this).toggleClass('open');
            
        }
    })
}

/* Function for the mobile navigation */
function mobileNavToggle(){
    
    $('.mobile-nav').toggleClass('active');

    $('body').toggleClass('css-nav-open');

    if( $('body').hasClass('css-nav-open') ){

        // swipe event for controlling the nav
        hammer = new Hammer(document.getElementById("main-wrapper"));

        hammer.onswipe = function(event){
            if(event.direction == 'left'){
                mobileNavToggle();
            }
        }

    }else{
        // remove the swipe event (to regain control)
        hammer.destroy()
    }  

    // CSS METHOD FIRST
    if (supports('transition')){
        return true;
    }

    // JS METHOD
    var speed = 500;
    if ($('.mobile-nav').hasClass('active')){
       
        $('#main-nav').stop().animate({
            left: '0' 
        }, speed);
        $('#main').stop().animate({
            left: '70%'
        }, speed);

    }else{
        
        $('#main-nav').stop().animate({
            left: '-100%' 
        }, speed);
        $('#main').stop().animate({
            left: '0'
        }, speed);
    }
}


/* function to init the gallery */
function galleryJs(){
    $('#gallery-inner').garethGallery({ 'leftButton'   : 'previous-button',
                                        'rightButton'  : 'next-button',
                                        'thumbnails'   : 'thumbnails-inner',
                                        'thumbLeft'    : 'previous-button-icons',
                                        'thumbRight'   : 'next-button-icons',
                                        'swapImages'   : true,
                                        'progressBar'  : 'status'
                                        });
}
