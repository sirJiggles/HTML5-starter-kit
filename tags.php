<?php include('includes/header.inc.php'); ?>

<header id="header" class="col grid-12 end" role="banner">
        <div class="center-content">
            <h1>Gareth Fuller - HTML5 Base</h1>

            <!-- Main navigation -->
            <nav id="main-nav" role="navigation">
                <ul>
                    <li class="first"><a href="index.php" title="index"><span data-icon="&#128240;"></span>Forms</a></li>
                    <li><a href="tags.php" title="tags" class="active"><span data-icon="&#59148;"></span>Tags</a></li>
                    <li><a href="grid.php" title="grid"><span data-icon="&#9871;"></span>Grid</a></li>
                    <li><a href="gallery.php" title="gallery"><span data-icon="&#128247;"></span>Gallery</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="center-content">

<!-- Main content -->
<div id="main" role="main">

    <section id="content" class="col grid-12 end">
        
        <h2>New Tags (worth using) in HTML 5</h2>
        
        <div id="accordian">
            
            <a href="#" title="Article"><span data-icon="&#59236;"></span><h3>Article</h3></a>
            <div class="accordian-slide">
                <p>Should be stand alone and portable to any page. Examples of use:</p>
                <ul>
                    <li>Posts</li>
                    <li>News article</li>
                    <li>Forum comments</li>
                </ul>

                <pre class="brush: js">

                    <article>
                        <h4>This is the article title</h4>
                        <p>These are the article details</p>
                    </article>

                </pre>
            </div>


            <a href="#" title="Aside"><span data-icon="&#59236;"></span><h3>Aside</h3></a>
            <div class="accordian-slide">
                <p>Content "to the side" of some other related content.</p>
                <pre class="brush: js">
                    <div id="main" role="main">
                        <h2>Boats</h2>
                        <p>Boats are just great!</p>
                    </div>
                    <aside>
                        <ul>
                            <li>Get boats now!</li>
                            <li>We love boats</li>
                            <li>Have you seen a boat?</li>
                        </ul>
                    </aside>
                </pre>
            </div>


                <a href="#" title="Audio"><span data-icon="&#59236;"></span><h3>Audio</h3></a>
            <div class="accordian-slide">
                <p>The audio tag enables you to embed audio into the page.</p>
                <pre class="brush: js">
                    <audio controls="controls">
                        <source src="gareth.ogg" type="audio/ogg">
                        <source src="gareth.mp3" type="audio/mp3">
                        Your browser does not support the new audio tag.
                    </audio>
                </pre>
                <p>The audio tag comes with some options, like in the example with controls switched on. The full list is</p>
                <ul>
                    <li>autoplay</li>
                    <li>controls</li>
                    <li>loop</li>
                    <li>preload</li>
                    <li>source</li>
                </ul>
            </div>

            <a href="#" title="Embed"><span data-icon="&#59236;"></span><h3>Embed</h3></a>
            <div class="accordian-slide">
                <p>Embed flash video into the page.</p>
                <pre class="brush: js">
                    <embed src="/assets/swf/somefile.swf">
                </pre>
                <p>This tag also comes with some options, they are:</p>
                <ul>
                    <li>height</li>
                    <li>src</li>
                    <li>width</li>
                    <li>type (MIME_type)</li>
                </ul>
            </div>
        </div>

    </section>
    
</div>

<?php include('includes/footer.inc.php');?>
                    