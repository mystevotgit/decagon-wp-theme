<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decagon</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="top-section">
        <div class="top-section-div">
            <div class="navbar">
                <div class="nav">
                    <span class="decagon">Decag<img class="decagon-logo" src="<?php echo get_theme_file_uri( "images/decagonlogo.svg" )?>" alt="Decagon-logo">n</span>
                    <div class="nav-links">
                        <a href="#">For Developers</a>
                        <a href="#">Blog</a>
                        <a class="button" href="#">Get started</a>
                    </div>
                    <button class="hamburger">&#9776;</button>
                    <button class="cross">&#735;</button>
                </div>
                <div class="menu">
                    <ul>
                        <a href="#"><li>For Developers</li></a>
                        <a href="#"><li>Blog</li></a>
                        <a href="#"><li>Get started</li></a>
                    </ul>
                </div> 
            </div>
            <div class="top-section-body">
                <div>
                    <span class="pagetitle"><span class="build">Build faster with</span> <span class="vetted">vetted</span> remote <span class="software">software</span> engineering talent.</span>
                    <p class="pagesubtitle">Recruiting, training, HR management and work infrastructure to help you scale quickly and cost effectively.</p>
                    <a class="btn" href="#">Build My Team</a>
                </div>
            </div>
        </div>
        <div class="top-section-clients">
            <div class="clients-section">
                <p>Our Engineers have built products for</p>
                <div>
                    <img src="<?php echo get_theme_file_uri( "images/merck.svg" )?>" alt="Client-logo" class="clients">
                    <img src="<?php echo get_theme_file_uri( "images/nike.svg" )?>" alt="Client-logo" class="clients">
                    <img src="<?php echo get_theme_file_uri( "images/mastercard.svg" )?>" alt="Client-logo" class="clients">
                    <img src="<?php echo get_theme_file_uri( "images/vertex.svg" )?>" alt="Client-logo" class="clients">
                    <img src="<?php echo get_theme_file_uri( "images/budweiser.svg" )?>" alt="Client-logo" class="clients">
                    <img src="<?php echo get_theme_file_uri( "images/nokia.svg" )?>" alt="Client-logo" class="clients">
                </div>
            </div>
        </div>
    </div>