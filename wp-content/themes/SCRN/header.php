<?php global $scrn; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html style="margin-top: 0 !important" class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html style="margin-top: 0 !important" class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html style="margin-top: 0 !important" class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <!--<![endif]-->
<html style="margin-top: 0 !important" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title('-');?></title>
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE]>
        <link href="<?php echo get_template_directory_uri() . '/css/ie.css';?>" rel='stylesheet' type='text/css'>
    <![endif]-->

      <link rel="stylesheet" href="responsiveslides.css">
      <link rel="stylesheet" href="demo.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="responsiveslides.min.js"></script>

      <script>
        // You can also use "$(window).load(function() {"
        $(function () {

          // Slideshow 1
          $("#slider1").responsiveSlides({
            maxwidth: 800,
            speed: 800
          });

          // Slideshow 2
          $("#slider2").responsiveSlides({
            auto: false,
            pager: true,
            speed: 300,
            maxwidth: 540
          });

          // Slideshow 3
          $("#slider3").responsiveSlides({
            manualControls: '#slider3-pager',
            maxwidth: 540
          });

          // Slideshow 4
          $("#slider4").responsiveSlides({
            auto: false,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });

        });
      </script>
      
    <script type="text/javascript">
    var templateDir = "<?php echo get_template_directory_uri(); ?>";
    </script>

    <?php global $scrn;  
    if(isset($scrn['integration_header'])) echo $scrn['integration_header'] . PHP_EOL;
    wp_head(); ?>

</head>

<body <?php body_class();?>>

<!-- Primary Page Layout
    ================================================== -->

    <div id="intro">
        
         <div id="wrapper">
            <!-- Slideshow 4 -->
            <div class="callbacks_container">
              <ul class="rslides" id="slider4">
                <li>
                  <img src="images/1.jpg" alt="">
                  <!-- <p class="caption">This is a caption</p> -->
                </li>
                <li>
                  <img src="images/2.jpg" alt="">
                  <!-- <p class="caption">This is another caption</p> -->
                </li>
                <li>
                  <img src="images/3.jpg" alt="">
                  <!-- <p class="caption">The third caption</p> -->
                </li>
                <li>
                  <img src="images/4.jpg" alt="">
                  <!-- <p class="caption">The third caption</p> -->
                </li>
                <li>
                  <img src="images/5.jpg" alt="">
                  <!-- <p class="caption">The third caption</p> -->
                </li>
              </ul>
            </div>

          </div>
        
        <div class="title">
            
            <div class="social-intro">
                <ul>
                    <?php if(isset($scrn['twitter_username']) && $scrn['twitter_username'] != '') { ?><li><a target="_blank" href="http://twitter.com/<?php echo $scrn['twitter_username'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-twitter-intro.png" alt="Twitter icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['facebook_url']) && $scrn['facebook_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['facebook_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-facebook-intro.png" alt="Facebook icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['gplus_url']) && $scrn['gplus_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['gplus_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-gplus-intro.png" alt="Google+ icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['linkedin_url']) && $scrn['linkedin_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['linkedin_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-linkedin-intro.png" alt="LinkedIn icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['feedburner_url']) && $scrn['feedburner_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['feedburner_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-feedburner-intro.png" alt="Feedburner icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['dribble_url']) && $scrn['dribble_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['dribble_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-dribbble-intro.png" alt="Dribbble icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['vimeo_url']) && $scrn['vimeo_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['vimeo_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-vimeo-intro.png" alt="Vimeo icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['pinterest_url']) && $scrn['pinterest_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['pinterest_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-pinterest-intro.png" alt="Pinterest icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['youtube_url']) && $scrn['youtube_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['youtube_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-youtube-intro.png" alt="Youtube icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['instagram_url']) && $scrn['instagram_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['instagram_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-instagram-intro.png" alt="Instagram icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['tumblr_url']) && $scrn['tumblr_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['tumblr_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-tumblr-intro.png" alt="Tumblr icon" /></a></li><?php } ?>
                    <?php if(isset($scrn['flickr_url']) && $scrn['flickr_url'] != '') { ?><li><a target="_blank" href="<?php echo $scrn['flickr_url'];?>"><img src="<?php echo get_template_directory_uri();?>/images/icn-flickr-intro.png" alt="Flickr icon" /></a></li><?php } ?>
                </ul>
            </div>
        </div> <!-- end title -->
    </div> <!-- end intro -->

    <nav>
        <?php wp_nav_menu(array(
                                'theme_location' => 'top-menu',
                                'container' => '',
                                'fallback_cb' => 'show_top_menu',
                                'menu_id' => 'menu-top-menu',
                                'echo' => true,
                                'walker' => new description_walker(),
                                'depth' => 0 ) );
            ?>
    </nav>