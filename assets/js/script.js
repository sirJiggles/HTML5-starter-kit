/*
 * Main javascript file
 * 
 * @author Gareth Fuller
 */

$(document).ready(function() {
    
    // init syntax highlighter
    SyntaxHighlighter.all();
    
    /* Main navigation */
   
    $('#main-nav a').click(function(){
         if (!$(this).hasClass('active')){
            var url = "/" + $(this).attr('title') + '.html';
            // Load the content (from secific div content) into the div contente on the current page
            $('#content').load(url+' #content > *', function(){
                // init syntax highlighter
               SyntaxHighlighter.highlight();
            });
            // swap active class
            $('#main-nav a').removeClass('active');
            $(this).addClass('active');

        }
        return false;
    });
    
});