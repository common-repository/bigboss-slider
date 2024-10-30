
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $BigbossArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $BigbossThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var Bigboss_slider1 = new $BigbossSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    Bigboss_slider1.$SetScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <div style="position: relative; width: 100%; background-color:<?php echo get_option('bbbg-color');?>; overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Bigboss Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
               top: 0px; left: 0px; width: <?php echo get_option('bliser-width');?>px; height:<?php echo get_option('bliser-height');?>px;;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                
                
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
                    
                    
                    <?php global $post;
					$sliderimage = the_post_thumbnail();
				$args = array( 'posts_per_page' => -1, 'post_type'=> 'bigboss_slider' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>


					
					
					
                    
                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: <?php echo get_option('bbtitle-font');?>px;
                                color:<?php echo get_option('bbtitle-color');?>;"><?php the_title(); ?></span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size:<?php echo get_option('bbcontent-font');?>px; color: <?php echo get_option('bbcontent-color');?>;">
                                 <?php the_content(); ?>
                            </span>
                            <br />
                            <br />
           <a style="background:#fff; text-decoration:none; border:1px solid #ccc; color:#003; padding:7px; border-radius:10px; " href="<?php the_permalink();?>">
                                Read more
                                </a>
                        </div>
                  <p style="position: absolute; top: 23px; left: 580px; width:<?php echo get_option('bliser-images');?>px; height: auto;">
                  	<?php the_post_thumbnail(); ?>
                  
                  </p>
                        <img u="thumb" <?php  the_post_thumbnail(''); ?>  
                    </div>
                    
                    

				
                    
                    
                    
                    <?php endforeach; ?>
                    
                    
                   
                    
                  
                    
                    
                    
              
                    </div>
                    
                    
                </div>
                <!-- Arrow Navigator Skin Begin -->
                <style>
                    /* Bigboss slider arrow navigator skin 07 css */
                    /*
                    .Bigbossa07l              (normal)
                    .Bigbossa07r              (normal)
                    .Bigbossa07l:hover        (normal mouseover)
                    .Bigbossa07r:hover        (normal mouseover)
                    .Bigbossa07ldn            (mousedown)
                    .Bigbossa07rdn            (mousedown)
                    */
                    .Bigbossa07l, .Bigbossa07r, .Bigbossa07ldn, .Bigbossa07rdn
                    {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        overflow: hidden;
                    }
                    .Bigbossa07l
                    {
                        background-position: -5px -35px;
                    }
                    .Bigbossa07r
                    {
                        background-position: -65px -35px;
                    }
                    .Bigbossa07l:hover
                    {
                        background-position: -125px -35px;
                    }
                    .Bigbossa07r:hover
                    {
                        background-position: -185px -35px;
                    }
                    .Bigbossa07ldn
                    {
                        background-position: -245px -35px;
                    }
                    .Bigbossa07rdn
                    {
                        background-position: -305px -35px;
                    }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="Bigbossa07l" style="width: 50px; height: 50px; top: 123px;
                    left: 8px;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="Bigbossa07r" style="width: 50px; height: 50px; top: 123px;
                    right: 8px"></span>
                <!-- Arrow Navigator Skin End -->
                <!-- ThumbnailNavigator Skin Begin -->
                <div u="thumbnavigator" class="Bigbosst04" style="position: absolute; width: 600px;
                    height: 60px; right: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <style>
                        /* Bigboss slider thumbnail navigator skin 04 css */
                        /*
                        .Bigbosst04 .p            (normal)
                        .Bigbosst04 .p:hover      (normal mouseover)
                        .Bigbosst04 .pav          (active)
                        .Bigbosst04 .pav:hover    (active mouseover)
                        .Bigbosst04 .pdn          (mousedown)
                        */
                        .Bigbosst04 .w, .Bigbosst04 .pav:hover .w
                        {
                            position: absolute;
                            width: 60px;
                            height: 30px;
                            border: #0099FF 1px solid;
                        }
                        * html .Bigbosst04 .w
                        {
                            width: /**/ 62px;
                            height: /**/ 32px;
                        }
                        .Bigbosst04 .pdn .w, .Bigbosst04 .pav .w
                        {
                            border-style: solid;
                        }
                        .Bigbosst04 .c
                        {
                            width: 62px;
                            height: 32px;
                            filter: alpha(opacity=45);
                            opacity: .45;
                            transition: opacity .6s;
                            -moz-transition: opacity .6s;
                            -webkit-transition: opacity .6s;
                            -o-transition: opacity .6s;
                        }
                        .Bigbosst04 .p:hover .c, .Bigbosst04 .pav .c
                        {
                            filter: alpha(opacity=0);
                            opacity: 0;
                        }
                        .Bigbosst04 .p:hover .c
                        {
                            transition: none;
                            -moz-transition: none;
                            -webkit-transition: none;
                            -o-transition: none;
                        }
                    </style>
                    <div u="slides" style="bottom: 25px; right: 30px;">
                        <div u="prototype" class="p" style="position: absolute; width: 62px; height: 32px; top: 0; left: 0;">
                            <div class="w">
                                <thumbnailtemplate style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0;"></thumbnailtemplate>
                            </div>
                            <div class="c" style="position: absolute; background-color: #000; top: 0; left: 0">
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- ThumbnailNavigator Skin End -->
                
            </div>
            <!-- Bigboss Slider End -->
        </div>
    </div>