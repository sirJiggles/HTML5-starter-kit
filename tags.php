<?php include('includes/header.inc.php'); ?>

<div class="center-content main-content">

<!-- Main content -->
<div id="main" role="main">

    <section id="content" class="col grid-12 end">
        
        <h2>New Tags (worth using / have sufficient support) in HTML 5</h2>
        
        <div id="accordian">
            
            <a href="#" class="accordian-link" title="Article"><span data-icon="&#59236;"></span><h3>Article</h3></a>
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


            <a href="#" class="accordian-link" title="Aside"><span data-icon="&#59236;"></span><h3>Aside</h3></a>
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


            <a href="#" class="accordian-link" title="Audio"><span data-icon="&#59236;"></span><h3>Audio</h3></a>
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
                
            <a href="#" class="accordian-link" title="Canvas"><span data-icon="&#59236;"></span><h3>Canvas</h3></a>
            <div class="accordian-slide">
                <p>Embed canvas in a page.</p>
                <pre class="brush: js">
                    <canvas id="canvasItem"></canvas>

                    <script type="text/javascript">
                        var context = $('canvasItem').getContext('2d');
                    </script>
                </pre>
               
            </div>

            <a href="#" class="accordian-link" title="Embed"><span data-icon="&#59236;"></span><h3>Embed</h3></a>
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
            
            <a href="#" class="accordian-link" title="Fig Caption"><span data-icon="&#59236;"></span><h3>Fig Caption</h3></a>
            <div class="accordian-slide">
                <p>Used in conjunction with the figure tag to state the text that supports the figure.</p> 
                <pre class="brush: js">
                    <figure>
                        <img src="gareth-image.gif" alt="a picture of gareth" />
                        <figcaption>
                            A picture of Gareth, aka our saviour.
                        </figcaption>
                    </figure>
                </pre>
                
            </div>
            
            <a href="#" class="accordian-link" title="Figure"><span data-icon="&#59236;"></span><h3>Figure</h3></a>
            <div class="accordian-slide">
                <p>State an element as a figure in the document, an example of its use would be to wrap around a photo, diagram or illustration.</p>
                <p>This tag will usually be used in conjunction with the figcaption tag (previous item).</p>
                <pre class="brush: js">
                    <figure>
                        <img src="gareth-image.gif" alt="a picture of gareth" />
                    </figure>
                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="Footer"><span data-icon="&#59236;"></span><h3>Footer</h3></a>
            <div class="accordian-slide">
                <p>The footer element states a section of the current context that is a footer. By this I mean you can have more than one!
                    You will have one for the main document (page) but you may have a section tag for some article details which may have another
                    internal footer, for example:</p>
                <pre class="brush: js">
                    <footer>
                        <ul>
                            <li><a href="#" class="accordian-link" title="Read about or terms and conditions">Terms</a></li>
                            <li><a href="#" class="accordian-link" title="Find out more about us">About</a></li>
                            <li><a href="#" class="accordian-link" title="View our site map">Sitemap</a></li>
                        </ul>
                        <section>
                            <header>
                                <h3>Some title in the footer</h3>
                            </header>
                            This is a separate section of the footer we have some self contained content in
                            <footer>
                                This is the footer of the section inside the footer
                            </footer>
                        </section>
                    </footer>
                </pre>
                
            </div>
            
            <a href="#" class="accordian-link" title="Header"><span data-icon="&#59236;"></span><h3>Header</h3></a>
            <div class="accordian-slide">
                <p>The header element as with the footer can appear multiple times in the document dependant on the context of the content.
                    This tag defines a header to a section</p>
                <pre class="brush: js">
                    <header>
                        <h1>This is the main title</h1>
                    </header>

                    <div role="main">
                        <article>
                            <header>
                                <h3>Article title</h2>
                            </header>
                            <p>Article content</p>
                            <footer>
                                Article footer
                            </footer>
                        </article>
                    </div>

                    <footer>
                        some footer content
                    </footer>
                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="hgroup"><span data-icon="&#59236;"></span><h3>Hgroup</h3></a>
            <div class="accordian-slide">
                <p>The hgroup tag is for a group of headers, for example a title with a strap-line.</p>
                <pre class="brush: js">
                    <hgroup>
                        <h1>This is the main title</h1>
                        <h2>Providing tags to the nation</h2>
                    </hgroup>
                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="Mark"><span data-icon="&#59236;"></span><h3>Mark</h3></a>
            <div class="accordian-slide">
                <p>State that the text in this tag is highlighted or should be 'Marked'.</p>
                <pre class="brush: js">
                    <p>I need to remember that <mark>gareth</mark> is his name!</p>
                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="Nav"><span data-icon="&#59236;"></span><h3>Nav</h3></a>
            <div class="accordian-slide">
                <p>State that the following is navigation, this does not just apply to main nav it can be used for all 'navigation'.</p>
                <pre class="brush: js">
                    <nav>
                        <ul class="mainNav">
                            <li><a href="#" class="accordian-link" title="Navigate to the homepage">Home</a></li>
                            <li><a href="#" class="accordian-link" title="Navigate to the about us page">About</a></li>
                        </ul>
                    </nav>
                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="Section"><span data-icon="&#59236;"></span><h3>Section</h3></a>
            <div class="accordian-slide">
                <p>Section tag, this is one of those tags that people will no doubt give different versions of how it should be used :S
                    In practice and what seems to make the most sense to me is to us the section tag as a wrapper of a section of content
                    that is isolated in its context. An example would be to wrap article details (header, footer and content) all in a section tag.
                    An exemption to this rule would be something like an article tag as this is already stating 'I have here a section of content ... and it is an
                    article did you know!'</p>
                    
                <pre class="brush: js">
                    
                    <header>
                        <h1>Page title</h1>
                        <nav>
                            Page navigation
                        </nav>
                    </header>
                    <div role="main">
                        <article>
                            <header>
                                <h3>This is the header of the article</h3>
                            </header>
                            This is the article content.
                            <footer>
                                This is the article footer.
                            </footer>
                        </article>
                        
                        <section class="review">
                            <header>
                                <h3>Section title!</h3>
                            </header>
                                This is a separate section of content.
                            <footer>
                                This is the footer of the section.
                            </footer>
                        </section>
                    </div>
                    <footer>
                        Page footer
                    </footer>

                </pre>
            </div>
            
            <a href="#" class="accordian-link" title="Source"><span data-icon="&#59236;"></span><h3>Source</h3></a>
            <div class="accordian-slide">
                <p>The source tag is usually used inside an audio and a video tag, it is used to define the source to
                    a file, you can also define the type of file in the source tag. The browser will try to load the source files from top to
                bottom, when it can use one it will stop looking.</p>
                <pre class="brush: js">
                    <source src="fileOne.ogg" type="audio/ogg">
                    <source src="fileTwo.mp3" type="audio/mp3">
                </pre>
            </div>
            
            
            <a href="#" class="accordian-link" title="Time"><span data-icon="&#59236;"></span><h3>Time</h3></a>
            <div class="accordian-slide">
                <p>This tag is used to define a time, shockingly. This tag supports some new attributes datetime and pubdate pubdate's future
                    is undecided at the moment but it stands for publish date. The format for the datetime attribute is YYYY-MM-DDThh:mm:ssTZD</p>
                <pre class="brush: js">
                    //Example one
                    <p>The bar opens at <time>10:00</time></p>
                    // Example two
                    <p>My birthday is on <time datetime="2013-02-19">Febuary the 19th 2013</time> and I can't wait</p>
                    // Exmaple three
                    <article>
                        <header>
                            <h4>Article title</h4>
                            <p>Posted on <time pubdate="2012-02-19">Febuary 19th</time></p>
                        </header>
                        Some content
                    </article>
                </pre>
            </div>
            
            
            <a href="#" class="accordian-link" title="Video"><span data-icon="&#59236;"></span><h3>Video</h3></a>
            <div class="accordian-slide">
                <p>The video tag is used for embedding video content into a site. There is a great article on using the video tag here:
                    <a href="http://camendesign.co.uk/code/video_for_everybody" title="Click here to view examples of the video tag">Video tag examples</a>
                   The main thing to remember is the video tag (as with the audio tag) uses the source tag to look for the source of the media. It will
                   use the first on it finds (and supports) then as an emergency fallback we have a flash video using a swf converter for old browsers.</p>
                <p>The swf file converts a file (usually in mp4 format) into flash video, there are many providers of this sort of swf file namely JwPlayer, 
                    google it</p>
                <pre class="brush: js">

                    <video controls="controls" autoplay="" url="/some/file/path.mp4" poster="/path/to/some/poster.jpg">
                        <source src="/path/to/gareth.mp4" type="video/mp4" />
                        <source src="/path/to/gareth.ogv" type="video/ogg" />
                        <!-- fallback to Flash: -->
                        <object type="application/x-shockwave-flash" data="swf-converter.swf">
                                <param name="movie" value="swf-converter.swf" />
                                <param name="flashvars" value="controlbar=over&amp;image=/path/to/some/poster.jpg&amp;file=/path/to/video.mp4" />
                                <img src="/path/to/some/poster.jpg" alt="Poster title" 
                                     title="No video playback capabilities" />
                        </object>
                    </video>

                </pre>
                <p>The video tag as with the audio tag comes with a host of attributes:</p>
                <ul>
                    <li><em>autoplay:</em> autoplay | empty</li>
                    <li><em>preload:</em> none | metadata | auto</li>
                    <li><em>controls:</em> controls | empty</li>
                    <li><em>loop:</em> loop | empty</li>
                    <li><em>poster:</em> imagepath</li>
                    <li><em>height:</em> non-negative int</li>
                    <li><em>width:</em> non-negative int</li>
                    <li><em>muted:</em> muted | empty</li>
                    <li><em>mediagroup:</em> instructs UA to link multiple audio/video streams together</li>
                    <li><em>src:</em> the url for the video</li>
                </ul>
                
                <p>In reality you will only use half of those at most.</p>
            </div>
            

        </div>

    </section>
    
</div>

<?php include('includes/footer.inc.php');?>
                    