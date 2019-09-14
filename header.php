<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibrahim
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Ibrahim A. Rahhal</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,700|Lalezar|Open+Sans+Condensed:300,700|Rubik|Satisfy&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.10.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Cabin:400,500|Raleway" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js">
    </script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
    <?php 
    wp_head();
    ?>

</head>
<body>

<div id="particles-js"></div>
<?php  if(!is_front_page() && !is_page('about')&& !is_page('blog') ): ?>
<div class="headerWithNavigation">
        <header class=" headerInSingular d-flex align-items-center justify-content-between px-3 py-2">
                <div class="fullLogo d-flex align-items-center justify-content-center">
                    <div class="logoHeader mr-2">
        
                    </div>    
                    <div class="nameInFullLogo">Ibrahim Rahhal</div>
                </div>
        
                <div class="subscribeButton rounded">
                    <i class="fas fa-bell"></i>
                    Subscribe
                </div>
                <button class="hamburger hamburger--emphatic" type="button">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                      </button>
            </header>
			



            <div class="navigationInSingular px-3 py-3 d-flex align-items-center justify-content-center ">
                <span class="mx-4 menuNavigationItem">Home</span>
                <span class="mx-4 menuNavigationItem">My Website</span>
                <span class="mx-4 menuNavigationItem">About Me</span>
                <span class="mx-4 menuNavigationItem menuNavigationItemLast">Get In Touch</span>
            </div>
<?php endif  ?>
</div>