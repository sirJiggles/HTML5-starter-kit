/*
 * Main javascript file
 * 
 * @author Gareth Fuller
 */
$(document).ready(function() {
    
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
    
    
});

/* Function for the accordan */
function accordianJs(){
    
    $('.accordian-slide').slideUp();
    
    $('#accordian').find('a').click(function(){
        if (!$(this).hasClass('open')){
            
            $('.accordian-slide').slideUp();
            
            $(this).next().slideToggle();
            $('#accordian').find('a').removeClass('open');
            $(this).toggleClass('open');

            console.log($(this).find('span').attr('data-icon'));
            
            if($(this).find('span').attr('data-icon') == '\&#59236;'){
                $(this).find('span').attr('data-icon', '\&#59239;');
            }else{
                $(this).find('span').attr('data-icon', '\&#59236;');
            }
        }
        return false;
    })
    
    runAccordian = true;
   
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
