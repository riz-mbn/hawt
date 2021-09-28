<?php
/**
 * Template Name: LP The Magical World of Andrew Bennet
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title();?></title>
    <link rel=icon href='<?php echo MBN_ASSETS_URI ?>/img/icon/favicon.jpg' />
    
    <?php wp_head(); ?>
    
    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/main.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- jQuery, plugins JS -->
    <script src="<?php bloginfo('template_url'); ?>/lander/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/plugins.js"></script>

</head>

<body> 
    <div id="wrapper"> 
        <header id="header">
            <div class="grid-container text-center">
                <a href="<?php echo get_home_url(); ?>">
                    <figure id="logo"><img src="<?php bloginfo('template_url'); ?>/lander/img/logo-landing.png" alt="" width="386" height="96"></figure>
                </a>
            </div>     
        </header>

        <section id="hero">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell large-5 large-order-2">
                        <figure class="col-image">
                            <img src="<?php bloginfo('template_url'); ?>/lander/img/hero-img.png" alt="" width="545" height="809">
                        </figure>
                    </div>  
                    <div class="cell large-6 large-offset-1 align-self-middle large-order-1">                        
                        <hgroup class="text-center">
                            <h1>Dr Who<br/>
                            <span>meets</span> Harry Potter,<br/>
                            <span>Meets</span> Dr Strange</h1>
                        </hgroup>  
                        <div class="trailer-group">
                            <div class="trailer-item text-center">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-trailer-1.png" width="266" height="150" /></figure>
                                <a href="#" class="btn_link"><h6>Watch Trailer</h6></a>
                            </div>
                            <div class="trailer-item text-center">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-trailer-2.png" width="266" height="150" /></figure>
                                <a href="#" class="btn_link"><h6>Watch “The Making Of”</h6></a>
                            </div>
                        </div>
                        <div class="cta-group text-wrap text-center">
                            <h3>AVAILABLE NOW</h3>
                            <p>Click On</p>
                            <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/logo-amazon.png" width="140" height="40" /></figure>
                        </div>
                    </div>  
                </div> 
            </div>    
        </section> 
        
        <main id="content">
            <section class="section-1">
                <div class="grid-container">
                </div>
            </section>s
        </main>

        <footer id="footer">
            <div class="grid-container">
                <div class="copyright"><a href="https://www.mybizniche.com/" target="_blank">Website</a> created by: hawt agency</span></div>  
            </div>
        </footer>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js"></script>
</body>

</html>
