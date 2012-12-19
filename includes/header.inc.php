<?php

/*
 * Header file that is included on all pages (for our simple base kit)
 * 
 * @author Gareth Fuller
 * 
 */

$currentPage = str_replace('.php', '', end(explode('/', $_SERVER['SCRIPT_FILENAME'])));

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>

    	<title>Gareth Fuller | HTML5 Base</title>
            
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="assets/js/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta name="description" content="" />
    	<meta name="author" content="" />
        <meta name="keywords" content="" />
	
        <!-- Humans file -->
        <link rel="author" type="text/plain" href="/humans.txt" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/favicons/16.ico" />
    	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicons/57.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicons/72.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicons/114.png" />
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicons/144.png" />
        
    	<!-- CSS -->
        <link rel="stylesheet" href="assets/css/combined.css" media="screen" type="text/css" />
    	<link rel="stylesheet" href="assets/css/print.css" media="print" type="text/css"/>
        
        <!--[if lte IE 7]>
            <link rel="stylesheet" href="assets/css/grid-fixed.css" media="screen" type="text/css"/>
        <![endif]-->

        <!-- Syntax highlighter -->
        <link rel="stylesheet" href="librarys/syntax-highlighter/shCoreDefault.css" media="screen" type="text/css"/>
        
        <!-- Google font -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        
        <!-- used for sticky footer -->
        <div id="site-wrapper">
            
            <!-- Main navigation -->
            <nav id="main-nav" role="navigation" class="col grid-12 end">
                <div class="center-content">
                    <ul>
                        <li><a href="index.php" title="index" <?php echo ($currentPage == 'index') ? "class='active'" : ''; ?>><span class="icon">&#128240;</span>Forms</a></li>
                        <li><a href="tags.php" title="tags" <?php echo ($currentPage == 'tags') ? "class='active'" : ''; ?>><span class="icon">&#59148;</span>Tags</a></li>
                        <li><a href="grid.php" title="grid" <?php echo ($currentPage == 'grid') ? "class='active'" : ''; ?>><span class="icon">&#9871;</span>Grid</a></li>
                        <li><a href="gallery.php" title="gallery" <?php echo ($currentPage == 'gallery') ? "class='active'" : ''; ?>><span class="icon">&#128247;</span>Gallery</a></li>
                    </ul>
                </div>
            </nav>
            
            <header id="header" class="col grid-12 end" role="banner">
                <div class="center-content">

                    <a href="#" class="mobile-nav" title="Main navigation"><span class="icon">&#9776;</span></a>

                    <h1>Gareth Fuller - HTML5 Base</h1>

                </div>
            </header>