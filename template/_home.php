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
                
               
            </div>
        </div>
    </div>
</div>