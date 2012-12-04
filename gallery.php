<?php

/*
 * Gallery
 */
?>

<?php include('includes/header.inc.php'); ?>

    <header id="header" class="col grid-12 end" role="banner">
        <div class="center-content">
            <h1>Gareth Fuller - HTML5 Base</h1>

            <!-- Main navigation -->
            <nav id="main-nav" role="navigation">
                <ul>
                    <li class="first"><a href="index.php" title="index"><span data-icon="&#128240;"></span>Forms</a></li>
                    <li><a href="tags.php" title="tags"><span data-icon="&#59148;"></span>Tags</a></li>
                    <li><a href="grid.php" title="grid"><span data-icon="&#9871;"></span>Grid</a></li>
                    <li><a href="gallery.php" title="gallery" class="active"><span data-icon="&#128247;"></span>Gallery</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="center-content main-content">

        <!-- Main content -->
        <div id="main" role="main">

            <section id="content" class="col grid-12 end">

                <div id="gallery-container">

                    <div id="gallery">

                        <ul id="gallery-inner">
                            <li>
                                <header>
                                    <h3>Title for slide one</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-one.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide one
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide two</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-two.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide two
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide three</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-three.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide three
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide four</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-four.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide four
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide five</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-five.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide five
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide six</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-one.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide six
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide seven</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-two.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide seven
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide eight</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-three.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide eight
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <header>
                                    <h3>Title for slide nine</h3>
                                </header>
                                <figure>
                                    <img src="assets/img/slide-four.gif" data-high-res="http://placekitten.com/g/570/400" />
                                    <figcaption>
                                        This is the text about slide nine
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>

                        <div id="progress-bar">
                            <div id="status"></div>
                        </div>

                        <!-- next and previous buttons -->
                        <a href="#" rel="prev" id="previous-button" class="gallery-buttons previous" title="Previous"></a>
                        <a href="#" rel="next" id="next-button" title="Next" class="gallery-buttons next"></a>
                    </div>

                    <div id="thumbnails-wrapper">
                        <ul id="thumbnails-inner">
                            <li class="active"><a href="#"><img src="assets/img/thumbs/thumb-one.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-two.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-three.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-four.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-five.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-one.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-two.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-three.gif" /></a></li>
                            <li><a href="#"><img src="assets/img/thumbs/thumb-four.gif" /></a></li>
                        </ul>

                        <a href="#" rel="prev" id="previous-button-icons" class="gallery-buttons-thumbs previous" title="Previous"></a>
                        <a href="#" rel="next" id="next-button-icons" title="Next" class="gallery-buttons-thumbs next"></a>
                    </div>
                </div>

            </section>

        </div>

    <?php include('includes/footer.inc.php');?>