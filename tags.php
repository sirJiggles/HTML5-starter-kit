<?php include('includes/header.inc.php'); ?>

<!-- Main content -->
<div id="main" role="main">

    <section id="content" class="col grid-12 end">
        
        <h2>New Tags (worth using) in HTML 5</h2>
                    
        <div class="row">
            <h3>Article</h3>
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

        <div class="row">
            <h3>Aside</h3>
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

        <div class="row">
            <h3>Audio</h3>
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

        <div class="row">
            <h3>Embed</h3>
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
        
    </section>
    
</div>

<?php include('includes/footer.inc.php');?>
                    