<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bridgevalley Doggie Daycare & Cattery</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo get_bloginfo('template_directory');?>/css/mdb.min.css" rel="stylesheet">
    <link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.5.14.min.css?ver=4.5.14' type='text/css' media='all' />
    <!-- Your custom styles (optional) -->
    <link href="<?php echo get_bloginfo('template_directory');?>/css/style.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <!-- leaflet Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="crossorigin=""/>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" target="_blank">
                    <img src="<?php echo get_bloginfo('template_directory');?>/img/dog-left.jpg" alt="">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->

                <?php 
            //output the main nav
                $args = array(
                    'theme-location'=>'main-menu',
                    'container'=>'ul',
                    'menu_class'=>'navbar-nav mr-auto',
                );
                wp_nav_menu($args);
                ?>
                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/Bridgevalley-Doggie-daycare-cattery-457025884367754/" class="nav-link waves-effect" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>

                </ul>

            </div>
            <!-- Brand -->
            <a class="navbar-brand waves-effect" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/cat-right.jpg" alt="">
            </a>

        </div>
    </nav>
    <!-- Navbar -->

</header>
    <!--Main Navigation-->

        <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">