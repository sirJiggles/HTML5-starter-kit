/* 
 * Simple plugin that will create a gallery
 * 
 * requires 
 * 
 * hammer js (for touch events)
 * jquery
 * 
 * @author Gareth Fuller
 * 
 */

/* 
 * Settup al the global options etc
 */
var GarethGallery = function(options){
    
    // Define the defaults
    var  defaults = {
        leftButton  : 'previous-button',
        rightButton : 'next-button',
        speed       : 500,
        autoMove    : true,
        touch       : true,
        thumbnails  : false,
        thumbLeft   : 'thumbnail-left',
        thumbRight  : 'thumbnail-right',
        fade        : false,
        swapImages  : false,
        progressBar : false,
        autoMoveSpeed: 4000,
        swapWidth : 550,
        swapHeight: 550,
        element : 'gallery'
    };
    
    // set the options
    this.options = $.extend( {}, defaults, options);
    
    // set the DOM element for the gallery
    this.element = '#'+options.element;
    
    this._defaults = defaults;
    this._name = 'GarethGallery';

    // define the global vars used by the plugin
    this.currentIndex = 1;
    this.thumbIndex = 1;
    this.paneWidth = 0;
    this.amountItems = 0;

    // some vars for the thumbnail functionality
    this.thumbWidth = 0;
    this.thumbsPerPane = 0;
    this.amountThumbPanes = 0;
    this.totalThumbs = 0;

    // var for swapping images
    this.imagesSwapped = false;
    
    this.autoGalleryRunning = false;

}

/*
 * start function this is where the main functions are called from
 * its kind of a main switch board for the plugin, makes things easier to
 * read
 */
GarethGallery.prototype.start = function(){
    
    if(this.options.thumbnails){
        this.totalThumbs = $('#'+this.options.thumbnails).children().length;
        this.thumbWidth = $('#'+this.options.thumbnails).children(0).outerWidth(true);
        this.thumbsPerPane = Math.floor($('#'+this.options.thumbnails).parent().width() / this.thumbWidth);
        // How many 'large' panes do we now have
        this.amountThumbPanes = Math.ceil(this.totalThumbs / this.thumbsPerPane);
    }
    
    //check to swap the images
    if(this.swapImages){
        if (($(this.element).height() > this.options.swapHeight) && ($(this.element).width() > this.options.swapWidth)){
            // swap images set flag
            this.swapImages();
        }
    }

    // on resize reset the gallery
    $(window).bind('resize', {instance:this}, function(e){
        e.data.instance.resize();
    });
    
    // settup the automove functionality
    this.settupAutoMove();
    
     // Adjust image widths (for first load)
    $(this.element).children().css('width', $(this.element).parent().width());

    // change the pane width
    this.paneWidth = $(this.element).parent().width();

    // set the amount of items
    this.amountItems = $(this.element).children().length;
    
    // set up the click events
    this.bindClickEvents();
    
    if(this.options.fade){
        // hide all items appart from active (for start)
        $(this.element).find('li:not(.active)').fadeOut('fast');
    }
    
     // Touch events (if enabled)
    if (this.options.touch){
        this.addTouchSupport(this.options.thumbnails);
    }
};

/*
 * Auto mve handles the timer for the auto move functionality and the
 * progress bar functionality
 */
GarethGallery.prototype.settupAutoMove = function(){
    
    var instance = this;
    // Handle the auto move functionality
    if (this.options.autoMove){
        
        this.autoGalleryRunning = true;
        
        // If they want to update the width of an element using the progress bar
        if (this.options.progressBar){
            // run once to start with
            $("#"+this.options.progressBar).animate( 
                    {width: "100%"}, 
                    instance.options.autoMoveSpeed,
                function(){
                    $("#"+instance.options.progressBar).css('width', '0%');
                }
            );
            // start the timer
            this.galleryTimeout = setInterval(function(){
                $("#"+instance.options.progressBar).animate( 
                    {width: "100%"}, 
                    instance.options.autoMoveSpeed,
                    function(){
                        $("#"+instance.options.progressBar).css('width', '0%');
                    }
                );
                instance.move();
            }, instance.options.autoMoveSpeed);
        }else{
            this.galleryTimeout = setInterval(function(instance){instance.move();}, this.options.autoMoveSpeed);
        }
    }
}

/*
 *  Set up the click event actions for all controlls
 */
GarethGallery.prototype.bindClickEvents = function(){
    
    // Add click events for the next and previous buttons
    $('#'+this.options.leftButton).bind('click', {instance: this}, function(e){
        e.data.instance.clearGalleryTimeout();
        e.data.instance.move('left');
        return false;

    });
    $('#'+this.options.rightButton).bind('click', {instance: this}, function(e){
        e.data.instance.clearGalleryTimeout();
        e.data.instance.move('right');
        return false;
    });
    
    if (this.options.thumbnails){

        // Thumbnail clicking
        $('#'+this.options.thumbnails+' a').bind('click', {instance: this}, function(e){

            e.data.instance.clearGalleryTimeout();

            var currentActive = $(this).parent().parent().find('.active');

            var diff =  Math.abs($(this).parent().index() - $(currentActive).index());

            if (diff != 0){

                if( $(this).parent().index() > $(currentActive).index()){
                    e.data.instance.move('right', diff, false, true);
                }else{
                    e.data.instance.move('left', diff, false, true);
                }

            }
            return false;
        });

        // Thumbnail next and previous button clicking
        $('#'+this.options.thumbLeft).bind('click', {instance: this}, function(e){
            e.data.instance.clearGalleryTimeout();
            e.data.instance.moveThumbs('left');
            return false;

        });
        $('#'+this.options.thumbRight).bind('click', {instance: this}, function(e){
            e.data.instance.clearGalleryTimeout();
            e.data.instance.moveThumbs('right');
            return false;
        });

    }
    
    
}

/*
 * What to do on resize, for the most part its just swap images
 * clear images, reset the gallery to the first slide
 */ 
GarethGallery.prototype.resize = function(){
    
    var resizeDone = 0;
    var instance = this;

    // Adjust image widths (for first load)
    $(this.element).children().css('width', $(this.element).parent().width());

    // change the pane width
    this.paneWidth = $(this.element).parent().width();
    
    if (this.autoGalleryRunning){
        this.clearGalleryTimeout();
    }

    // reset the main gallery (and curent index)
    if (this.options.fade){
        // have to try to do the fade-reset after a certain amount of time
        clearTimeout(resizeDone);
        resizeDone = setTimeout(function(instance){instance.fadeItem();}, 1500);
    }else{
        $(this.element).css('left', 0);
    }
    this.currentIndex = 1;

    // reset thumbnails
    if (this.options.thumbnails){

        this.thumbIndex = 1;
        $('#'+this.options.thumbnails).css('left', 0);

        // reset the active state
        $('#'+this.options.thumbnails).find('.active').removeClass('active');
        $('#'+this.options.thumbnails).find('li').eq(0).addClass('active');

        // re-calculate the thumbnail params!
        this.thumbWidth = $('#'+this.options.thumbnails).children(0).outerWidth(true);
        this.thumbsPerPane = Math.floor($('#'+this.options.thumbnails).parent().width() / this.thumbWidth);
        // How many 'large' panes do we now have
        this.amountThumbPanes = Math.ceil(this.totalThumbs / this.thumbsPerPane);

    }

    // Image swapping
    if(this.swapImages){
        if (!this.imagesSwapped){
            if (($(this).height() > this.options.swapHeight) && ($(this).width() > this.options.swapWidth)){
                // swap images set flag
                this.swapImages();
            }
        }
    }
    
};


/*
 * Function for reset the images DRY
 */
GarethGallery.prototype.swapImages = function(){
    // swap gallery images
    $(this.element).find('img').each(function() {
        $(this).attr('src', $(this).attr('data-high-res'));
    });
    this.imagesSwapped = true;
}


/*
 * This is where we use hammer for touch support 
 */
GarethGallery.prototype.addTouchSupport = function(thumbs){
    
    if(typeof(thumbs)==='undefined') thumbs = false;
    
    // bind the swipe on the main gallery container
    $(this.element).hammer().bind('swipe', {instance:this}, function(e) {
        if(e.direction == 'left'){

            e.data.instance.move('right', 1, true);
            if (e.data.instance.autoGalleryRunning){
                e.data.instance.clearGalleryTimeout();
            }
        }else{
            e.data.instance.move('left', 1, true);
            if (e.data.instance.autoGalleryRunning){
                e.data.instance.clearGalleryTimeout();
            }
        }
    });
    
    // Thumbnail touch support
    if(thumbs){
        $('#'+thumbs).hammer().bind('swipe', {instance:this}, function(e) {
            if(e.direction == 'left'){
                e.data.instance.moveThumbs('right', true);
                if (e.data.instance.autoGalleryRunning){
                    e.data.instance.clearGalleryTimeout();
                }
            }else{
                e.data.instance.moveThumbs('left', true);
                if (e.data.instance.autoGalleryRunning){
                    e.data.instance.clearGalleryTimeout();
                }
            }
        });
    }
}
            
// Function to fade the gallery
GarethGallery.prototype.fadeItem = function(fadeToIndex){
    
    if(typeof(fadeToIndex)==='undefined') fadeToIndex = 1;
    
    var currentActive = $(this.element+' li.active');
    $(currentActive).fadeOut(this.options.speed);
    $(currentActive).removeClass('active');
    var nextActive = $(this.element+' li').eq((fadeToIndex - 1));
    nextActive.addClass('active');
    nextActive.fadeIn(this.options.speed);
}


/*
 * Function to reset the touch pane
 */
GarethGallery.prototype.touchPaneReset = function(thumbs){
    if(typeof(thumbs)==='undefined') thumbs = false;
    
    if (!thumbs){
        if (!this.options.fade){
            // tween pane back to where it was before the finger move!
            $(this.element).animate({
                left: (this.paneWidth * (this.currentIndex - 1)) * -1 
            }, 300);
        }
    }else{
        //double check 
        if (this.options.thumbnails){
            $('#'+this.options.thumbnails).animate({
                left: ((this.thumbWidth * this.thumbsPerPane) * (this.thumbIndex - 1)) * -1
            }, 300);

        } //end if options set
    }// end if flag passed


}


// Function for moving the gallery
GarethGallery.prototype.move = function(direction, multiplier, touch, thumbClick){
       
    if(typeof(direction)==='undefined') direction = 'right';
    if(typeof(multiplier)==='undefined') multiplier = 1;
    if(typeof(touch)==='undefined') touch = false;
    if(typeof(thumbClick)==='undefined') thumbClick = false;

    var currentLeft = (this.paneWidth * (this.currentIndex - 1)) * -1;
    // boolean this as index changes and becomes a pain (sort later)
    var cantMoveRight = false;
    var cantMoveLeft = false;

    // Handle right
    if (direction == 'right'){

        // can we move right?
        if( this.currentIndex < this.amountItems){

            if (this.options.fade){

                this.fadeItem(this.currentIndex + (1 * multiplier));
            }else{
                $(this.element).animate({
                    left: currentLeft - ( this.paneWidth * multiplier) 
                }, this.options.speed, function() {
                });
            }
            this.currentIndex = this.currentIndex + (1 * multiplier);

        }else{

            // cant move right so reset the gallery at the start
            if (!touch){
                if(this.options.fade){
                    this.fadeItem(1);
                }else{
                    $(this.element).animate({
                        left: 0
                    }, this.options.speed, function() {
                    });
                }
                cantMoveRight = true;
                this.currentIndex = 1;
            }else{
                this.touchPaneReset();
            }
        }
    }

    // Handle left move
    if (direction == 'left'){

        // can we move left?
        if( this.currentIndex != 1){

            if (this.options.fade){

                this.fadeItem(this.currentIndex - (1 * multiplier));

            }else{
                $(this.element).animate({
                    left: currentLeft + (this.paneWidth * multiplier)
                }, this.options.speed, function() {
                }); 
            }
            this.currentIndex = this.currentIndex - (1 * multiplier)
        }else{

            if(!touch){
                if(this.options.fade){
                    this.fadeItem(this.amountItems);
                }else{
                    $(this.element).animate({
                        left: ( (this.amountItems -1) * this.paneWidth) - (( (this.amountItems - 1) * this.paneWidth) * 2)
                    }, this.options.speed, function() {
                    });
                }
                cantMoveLeft = true;
                this.currentIndex = this.amountItems;
            }else{
                this.touchPaneReset();
            }
        }
    }

    // move active class on thumbs
    if (this.options.thumbnails){

        var currentActiveThumb = $('#'+this.options.thumbnails+' .active');
        $(currentActiveThumb).removeClass('active');
        $('#'+this.options.thumbnails+' li').eq((this.currentIndex - 1)).addClass('active');

        //thumbnails get clicked on touch move, this messes with the automove functionality for the thumbs
        if (!thumbClick){

            if (cantMoveRight || cantMoveLeft){
                if (cantMoveRight){this.moveThumbs('right');}
                if (cantMoveLeft){this.moveThumbs('left');}
            }else{
                // if the current active thumb is in the active pannel check (auto move the thumbs if not)
                var newPaneNumber = Math.ceil(this.currentIndex / this.thumbsPerPane);
                if (newPaneNumber != this.thumbIndex){
                    if (newPaneNumber > this.thumbIndex){
                        this.moveThumbs('right');
                    }else{
                        this.moveThumbs('left');
                    }
                }
            }
        }
    }
}

/*
 * Function to move the thumbnails
 */
GarethGallery.prototype.moveThumbs = function(direction, touch){
        
    if(typeof(direction)==='undefined') direction = 'right';
    if(typeof(touch)==='undefined') touch = false;

    // Get current left
    var currentLeft = ( ( this.thumbWidth * this.thumbsPerPane) * (this.thumbIndex - 1)) * -1;

    if(direction == 'right'){

        // check if we can move
        if ( this.thumbIndex < this.amountThumbPanes){
            $('#'+this.options.thumbnails).animate({
                left: currentLeft - ( this.thumbWidth * this.thumbsPerPane)
            }, this.options.speed, function() {
            });
            this.thumbIndex ++;
        }else{
            if (!touch){
                $('#'+this.options.thumbnails).animate({
                    left: 0
                }, this.options.speed, function(){ 
                });
                this.thumbIndex = 1;
            }else{
                this.touchPaneReset(true);
            }
        }
    }

    if(direction == 'left'){

        // check if we can move
        if ( this.thumbIndex != 1){
            $('#'+this.options.thumbnails).animate({
                left: currentLeft + ( this.thumbWidth * this.thumbsPerPane)
            }, this.options.speed, function() {
            });     
            this.thumbIndex --;
        }else{
            if (!touch){
                $('#'+this.options.thumbnails).animate({
                left: ((this.thumbWidth * this.thumbsPerPane) * (this.amountThumbPanes - 1)) * -1
                }, this.options.speed, function() {
                });    
                this.thumbIndex = this.amountThumbPanes;
            }else{
                this.touchPaneReset(true);
            }
        }
    }
}

/*
 * Function to stop the timer
 */
GarethGallery.prototype.clearGalleryTimeout = function(){
    if (this.options.autoMove){
        clearInterval(this.galleryTimeout);
        if (this.options.progressBar){
            $("#"+this.options.progressBar).stop();
            $("#"+this.options.progressBar).css('width', '0%');
        }
        this.autoGalleryRunning = false;
    }
}