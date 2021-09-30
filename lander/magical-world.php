<?php
/**
 * Template Name: LP The Magical World of Andrew Bennet
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- jQuery, plugins JS -->
    <script src="<?php bloginfo('template_url'); ?>/lander/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/plugins.js"></script>

</head>

<body <?php body_class() ?>> 
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
                    <div class="cell large-7 align-self-middle large-order-1">                        
                        <hgroup class="text-center show-for-large">
                            <h1>Dr Who<br/>
                            <span>meets</span> Harry Potter,<br/>
                            <span>Meets</span> Dr Strange</h1>
                        </hgroup>                       
                        <hgroup class="text-center hide-for-large">
                            <h1>Dr Who<br/>
                            <span>meets</span><br/>Harry<br/>Potter,<br/>
                            <span>Meets</span><br/>Dr Strange</h1>
                        </hgroup>  
                        <div class="trailer-group">
                            <?php
                                $video_1 = "https://youtu.be/MJe-QjVkTwg";
                                preg_match('#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#', $video_1, $match_1);
                                $video_1 = $match_1[0];     

                                $video_2 = "https://youtu.be/6xsdAniHmSQ";
                                preg_match('#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#', $video_2, $match_2);
                                $video_2 = $match_2[0];     

                            ?>
                            <div class="trailer-item text-center" data-video="<?php echo $video_1 ?>">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-trailer-1.png" width="266" height="150" /></figure>
                                <h6>Watch Trailer</h6>
                            </div>
                            <div class="trailer-item text-center" data-video="<?php echo $video_2 ?>">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-trailer-2.png" width="266" height="150" /></figure>
                                <h6>Watch “The Making Of”</h6>
                            </div>
                        </div>
                        <div class="cta-group text-wrap text-center">
                            <h3>AVAILABLE NOW</h3>
                            <p>Click On</p>
                            <a href="https://www.amazon.com/gp/video/detail/B09DK11QXD/ref=atv_dp_share_cu_r" target="_blank">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/logo-amazon.png" width="140" height="40" /></figure>
                            </a>
                        </div>
                    </div>  
                </div> 
            </div>    
        </section> 
        <main id="content">
            <section class="section-1">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-6 col-image">
                        </div>
                        <div class="cell large-6 col-copy">
                            <div class="text-wrap">
                                <h3>Story</h3>
                                <p>Hunter of cursed books and forbidden grimoires, Andrew Bennett comes to town following a series of violent murders the police can't solve.</p>    
                                <p>With his mysterious magical doorway and the help of the local inspector, Hobbs, Bennett chases down the hidden mastermind behind the murders.</p>    
                                <p>Dark magic rituals soon lead Bennett to discover a much more sinister and world-ending plan. Can the doorkeeper solve the mystery before it's too late?</p>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-2">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-6 large-order-2 col-image">
                        </div>
                        <div class="cell large-6 col-copy">
                            <div class="text-wrap">
                                <h3>The Making Of</h3>
                                <p><strong><em>The Magical World Of Andrew Bennett</em></strong> is first and foremost a universe created by French Youtuber, SUPERFLAME, real name Geoffrey Petit-Jean-Genat.</p>
                                <p>Created in 2017, <strong><em>The Magical World Of Andrew Bennett</em></strong> initially took the form of an audio story. However, faced with huge enthusiasm from his subscribers and their desire for more, the author, previously recognized for his talents as an imitator, decided to extend it by creating an audio series that he called The Calendar Before The End Of Times.</p>
                                <p>The series generated millions of views and tens of thousands of comments from his YouTube following with fans anxious for more.</p>
                                <p>His much anticipated return to this universe comes in the form of <strong><em>The Magical World Of Andrew Bennett</em></strong>. Directed by Kevin Payet and starring Frederic Perchet (<strong><em>LE DOCUL</em></strong>) and Eric Pfaff (<strong><em>DEHORS</em></strong>), this incredible story will be coming to screens around the world for the first time through this 10-part mini-series.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">            
            <div class="grid-container">
                <div class="footbot">
                    <div class="copyright"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website</a> created by: <strong>hawt agency</strong></span></div>
                    <div class="follow_us">
                        <span class="social_icon fb_icon">
                            <a href="#" target="_blank">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/img/icn-fb.svg" alt="" width="9" height="18" />
                                </figure>
                            </a>
                        </span>
                        <span class="social_icon ig_icon">
                            <a href="#" target="_blank">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/img/icn-ig.svg" alt="" width="14" height="18" />
                                </figure>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="reveal large" id="popup-video" data-reveal>
        <div class="responsive-embed">
            <iframe id="ytplayer" width="560" height="315" src="" frameborder="0" allowfullscreen allow=" autoplay;"></iframe>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js"></script>
</body>

</html>
