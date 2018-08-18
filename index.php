<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  
    
    <?php wp_head(); ?>
</head>
<body>
<nav>
        <div class="nav-wrapper grey darken-4">
            <a href="#" class="brand-logo" id="brand-logo">Vince Fiorilli</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <i class="material-icons">more_vert</i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="nav-item">
                    <a href="#header">Development</a>
                </li>
                <li class="nav-item">
                    <a href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="http://google.com" target="_blank">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="#header">Development</a>
        </li>
        <li>
            <a href="#projects">Projects</a>
        </li>
        <li>
            <a href="http://google.com" target="_blank">Blog</a>
        </li>
    </ul>


    <div class="bodyWrap">

        <div class="headerWrap">

            <div class="parallax-container">
                <h1 id="logoText">
                    <a href="http://google.com" target="_blank" class="headerButton waves-effect waves-light btn-large">See My Work</a>
                    
                    <h3 id="catchPhrase">i believe in making big dreams happen</h3>
                    
                </h1>
                <div class="parallax">
                    <img class="headerImg" src="wp-content/themes/myNewTheme/img/buildings.jpg">
                </div>
            </div>
        </div>

        <div class="designWrap">


            <h2 id="header" class="designHeader">Design</h2>

            <div class="designQualities">
                <div class="iconWrap">
                    <i class="fa fa-android"></i>
                </div>
                <h4>Awesome</h4>
                <p>My applications are better than google
                </p>
            </div>
            <div class="designQualities">
                <div class="iconWrap">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h4>Responsive</h4>
                <p>By far the most responsive apps in the world
                </p>
            </div>
            <div class="designQualities">
                <div class="iconWrap">
                    <i class="fas fa-theater-masks"></i>
                </div>
                <h4>Intuitive</h4>
                <p>I'll read your mind to you before I take it over</p>
            </div>
            <div class="designQualities">
                <div class="iconWrap">
                    <i class="fas fa-bomb"></i>
                </div>
                <h4>Bomb</h4>
                <p>I'm the bomb</p>
            </div>
        </div>
        <div class="projectWrap">
            <h2 id="projects" class="designHeader projectHeader">Projects</h2>
            <div class="row">
            <div class="hvrbox col s4">
	            <img src="wp-content/themes/myNewTheme/img/hangman.jpg" alt="Mountains" class="hvrbox-layer_bottom">
	            <div class="hvrbox-layer_top">
	            	<div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	            </div>
            </div>
            <div class="hvrbox col s4">
	            <img src="wp-content/themes/myNewTheme/img/banner1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
	            <div class="hvrbox-layer_top">
	            	<div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	            </div>
            </div>
            <div class="hvrbox col s4">
	            <img src="wp-content/themes/myNewTheme/img/mysql.png" alt="Mountains" class="hvrbox-layer_bottom">
	            <div class="hvrbox-layer_top">
	            	<div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	            </div>
            </div>
        </div>
        <div class="row">
                <div class="col s4 hvrbox">
                    <img id="profImg" class='responsive-img' src="wp-content/themes/myNewTheme/img/reactJS.png" alt="stomp">
                    <div class="hvrbox-layer_top">
		                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                </div>
                <div class="col s4 hvrbox">
                    <img id="profImg" class='responsive-img' src="wp-content/themes/myNewTheme/img/hangman.jpg" alt="stomp">
                    <div class="hvrbox-layer_top">
		                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                </div>
                <div class="col s4 hvrbox">
                    <img id="profImg" class='responsive-img' src="wp-content/themes/myNewTheme/img/hangman.jpg" alt="stomp">
                    <div class="hvrbox-layer_top">
		                <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {

            $('.parallax').parallax();

            $('.sidenav').sidenav();

            $('.content').each(function (i) {

                setTimeout(function () {
                    // console.log(i)
                    $('.content').eq(i).addClass('is-visible')
                }, 300 * i)

            })


        });

    </script>
</body>
</html>