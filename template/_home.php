<div id="Content"> 
    
    <!-- Carousel implementation -->
    <ul id="out-of-the-box-demo">
        
    <?php
        foreach($products as $product)
        {
            $last_slash = strripos($product['id'], '/');
            $product_id = substr($product['id'], $last_slash+1, strlen($product['id']));
    ?>
        <li>
            <a href="<?php echo getFullUrl($product['id']) ?>">
            <img src="images/hd/carousel/home/<?php echo $product_id; ?>.png" alt="<?php echo $product['name']; ?> for more details click here...">
            </a>
        </li>
        
        
    <?php
        }
    ?>
       
    </ul>


    

    <script>
        $(document).ready(function(){
            $('#out-of-the-box-demo').slippry();
        });
        
    </script> 

    <!-- Carousel implementation ends here -->
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section flv_sections_6" id="start">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="fadeInLeftLarge">
                                    <div class="icon_box icon_position_top has_border">
                                        <a class="scroll" href="#thematic-websites">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-lightbulb-line"></i>
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4> COMPANY HISTORY</h4>
                                                <div class="desc">
                                                Highness FRP Industries an ISO certified Organization was set up in 1995 and is based in Kerala . We are one of the leading manufacturers of Fibre Reinforced Plastic (FRP) Doors and Frames.
                                                    <span class="tooltip" data-tooltip="Click to scroll down"></span>
                                                    <br> 
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="zoomIn">
                                    <div class="icon_box icon_position_top has_border">
                                        <a href="#">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-beaker-line"></i>
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>WHAT WE DO</h4>
                                                <div class="desc">
                                                The company works with the motto to provide the Best Product at Right Price with superior Quality. The company manufactures Rigid and Strong FRP Doors in various aesthetic designs, colours and measurements with variegated features.
                                                    <br>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-third column_icon_box">
                                <!-- Animated area -->
                                <div class="animate" data-anim-type="fadeInRightLarge">
                                    <div class="icon_box icon_position_top no_border">
                                        <a href="http://support.BeantownThemes.com" target="_blank">
                                            <div class="icon_wrapper">
                                                <div class="icon">
                                                    <i class="icon-comment-line"></i>
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>OUR AIM</h4>
                                                <div class="desc">
                                                The company is continuously keeping pace with the changing market scenario. Our main strengths are supreme class quality products, top of the line design and advance technology that we use to make classic range of products.
                                                    <br> 
                                                    <span class="tooltip" data-tooltip="For support please visit theme forum"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section flv_sections_4">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Page Title-->
                            <!-- One full width row-->
                            <div class="column one column_fancy_heading">
                                <div class="fancy_heading fancy_heading_icon">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="zoomInLeftLarge">
                                        <span class="icon_top">
                                            <i class="icon-map"></i>
                                        </span>
                                        <h2 class="title">Guide for shortcodes</h2>
                                        <div class="inside">
                                            <span class="big">See quick guide about some of included shortcodes and muffin builder items. We
                                                got over 200 in total.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second column_column">
                                <div class="column_attr ">
                                    <span class="big">Building websites was never so powerful and easy! Over 200 included shortcodes and items
                                        gives you possibility to build
                                        <a href="#thematic-websites" class="scroll">any kind of website</a>. Choose between manual building and Drag&amp;Drop Muffin
                                        Builder tool. You don`t need to be advanced user anymore.</span>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_column">
                                <div class="column_attr animate" data-anim-type="zoomIn">
                                    <div class="aligncenter">
                                        <img src="images/icon_muffin_options.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth column_column">
                                <div class="column_attr animate" data-anim-type="zoomIn">
                                    <div class="aligncenter">
                                        <img src="images/icon_muffin_builder.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_slider">
                                <!-- Slider Content -->
                                <div class="content_slider ">
                                    <ul class="content_slider_ul">
                                        <li class="content_slider_li_1">
                                            <a href="typography.html">
                                                <img width="890" height="470" src="images/shortcodes_slider_1.jpg" class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_1" />
                                            </a>
                                        </li>
                                        <li class="content_slider_li_2">
                                            <a href="boxes-infographics.html">
                                                <img width="890" height="470" src="images/shortcodes_slider_2.jpg" class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_2" />
                                            </a>
                                        </li>
                                        <li class="content_slider_li_3">
                                            <a href="content-blocks.html">
                                                <img width="890" height="470" src="images/shortcodes_slider_3.jpg" class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_3" />
                                            </a>
                                        </li>
                                        <li class="content_slider_li_4">
                                            <a href="content-elements.html">
                                                <img width="890" height="470" src="images/shortcodes_slider_4.jpg" class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_4" />
                                            </a>
                                        </li>
                                        <li class="content_slider_li_5">
                                            <a href="loops.html">
                                                <img width="890" height="470" src="images/shortcodes_slider_5.jpg" class="scale-with-grid wp-post-image"
                                                    alt="shortcodes_slider_5" />
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="button button_js slider_prev" href="#">
                                        <span class="button_icon">
                                            <i class="icon-left-open-big"></i>
                                        </span>
                                    </a>
                                    <a class="button button_js slider_next" href="#">
                                        <span class="button_icon">
                                            <i class="icon-right-open-big"></i>
                                        </span>
                                    </a>
                                    <div class="slider_pagination"></div>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <div class="aligncenter">
                                        <a class="button button_left button_theme button_js" href="typography.html">
                                            <span class="button_icon">
                                                <i class="icon-heart-fa"></i>
                                            </span>
                                            <span class="button_label">See all shortcodes</span>
                                        </a>
                                        <a class="button button_left button_js" href="https://www.youtube.com/watch?v=z7lRTlJVeT8"
                                            target="_blank">
                                            <span class="button_icon">
                                                <i class="icon-layout"></i>
                                            </span>
                                            <span class="button_label">How Muffin Builder works?</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Page devider -->
                            <!-- One full width row-->
                            
                </div>
               
            </div>
        </div>
    </div>
</div>