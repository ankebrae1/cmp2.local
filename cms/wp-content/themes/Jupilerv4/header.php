<!DOCTYPE html>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
       
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
   
    <!-- HOOK VOOR CSS -->
    <!-- NET VOOR DE HEAD-CLOSING TAG -->
    <?php wp_head(); ?>

</head> 

<body data-spy="scroll">
<div class="wrapper">
    <!-- ******HEADER****** --> 
<header class="header">
    <div class="container">
        <div class="row">    
            <nav class="navbar navbar-default navbar-fixed-top">        
                
                <h1 class="logo pull-left col-md-12 col-sm-12 col-xs-12">
                    <a class="scrollto" href="<?php home_url( $path, $scheme ); ?>">
                        <div id="containerLogo">
                            <span class="logo">  <?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();} ?> </span>  
                        </div>  
                    </a>
                        <div style="display:inline" class="pull-right" id="tagline"><?php echo get_bloginfo( 'description', 'display' )  ?></div> 
                </h1><!--//logo-->
                
            <div class="col-xs-12 nav-zwart">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> <!--navbar-header-->

                <div class="navbar-collapse collapse navbar-left" id="navbar-collapse">
                        <?php  wp_nav_menu( array( 
                        'theme_location' => 'primary-menu', 
                        'menu_class' => 'nav navbar-nav', ) ); ?>
                </div><!--//navabar-collapse-->

                <ul class="nav navbar-nav navbar-right">
                    <?php if ( is_user_logged_in() ) { ?>
                    <li><a href="<?php echo wp_logout_url(); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo wp_login_url( get_permalink() ); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                </ul>
            </div><!--//col-xs-12-->

            </nav> <!—//main-nav-->
        </div><!--row-->
    </div> <!--container-->   
</header><!--//header-->
