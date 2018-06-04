<!--Subheader area - only for certain pages -->
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title"><?php echo $productPage['name'] ?></h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="<?php echo getFullUrl('') ?>">Home</a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="<?php echo getFullUrl('products') ?>">Products</a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="<?php echo getFullUrl($productPage['id']) ?>"><?php echo $productPage['name'] ?></a>
                </li>
            </ul>
        </div>
    </div>

</div>


<!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                
                    <div class="section" id="columns flv_sections_16">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                            <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr ">
                                    <h5 class="flv_style_4"></h5>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <div class="aligncenter">
                                        <div class="google_font flv_style_60">
                                            <?php echo $productPage['slogan']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h5>Description</h5> <?php echo $productPage['description']; ?>
                                </div>
                            </div>

                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h5>Size variations</h5> <?php echo $productPage['size']; ?>
                                </div>
                            </div>

                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h5>Suitable for</h5> 
                                    <?php 
                                    foreach($productPage['categories'] as $categoryIndex)
                                    {
                                        $productCategory = $categories[$categoryIndex];
                                        ?>

                                            <a class="button button_left button_green button_js kill_the_icon" href="#">
                                                <span class="button_icon">
                                                    <i class="icon-heart-fa"></i>
                                                </span>
                                                <span class="button_label"><?php echo $productCategory['label']; ?></span>
                                            </a>

                                        <?php
                                        
                                        
                                    }; 
                                    
                                    ?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>