<?php include('includes/header.inc.php'); ?>

<header id="header" class="col grid-12 end" role="banner">
        <div class="center-content">
            <h1>Gareth Fuller - HTML5 Base</h1>

            <!-- Main navigation -->
            <nav id="main-nav" role="navigation">
                <ul>
                    <li class="first"><a href="index.php" title="index" class="active"><span data-icon="&#128240;"></span>Forms</a></li>
                    <li><a href="tags.php" title="tags"><span data-icon="&#59148;"></span>Tags</a></li>
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

        <h2>Forms in HTML5</h2>


        <form method="post" action="/">
            <fieldset>
                <legend>Things we can use now but not depend on</legend>

                <label for="name">Name: </label>
                <input type="text" name="name" id="name" required="required" placeholder="Your name" />

                <label for="phone">Phone: </label>
                <input type="tel" name="phone" id="phone" required="required" placeholder="Phone number" />

                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required="required" placeholder="Email" />

                <label for="range">Number Range: </label>
                <input type="number" value="1" min="3" max="20" name="range" id="range" />

                <label for="url">URL: </label>
                <input type="url" name="url" id="url" />

                <label for="search">Search: </label>
                <input type="search" name="search" id="search" /> 

            </fieldset>

            <fieldset>
                <legend>Won't work in all browsers but are cool</legend>

                <label for="date">Date: </label>
                <input type="date" name="email" id="date" required="required"  />

                <label for="color">Color: </label>
                <input type="color" name="color" id="color" value="white" />

                <label for="meter">Meter: </label>
                <meter name="meter" id="meter" min="0.5" high="2.4" max="5.00" value="4.3"></meter>

                <label for="progress">Progress: </label>
                <progress name="progress" id="porgress" max="100" value="50">50%</progress>
            </fieldset>

            <input type="submit" name="submit" value="Save" />
        </form>

    </section>

</div>

<?php include('includes/footer.inc.php');?>