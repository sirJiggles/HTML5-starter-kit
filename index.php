<?php include('includes/header.inc.php'); ?>

<!-- Main content -->
<div id="main" role="main">

    <section id="content" class="col grid-9">

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

    <?php include('includes/aside.inc.php'); ?>


</div>

<?php include('includes/footer.inc.php');?>