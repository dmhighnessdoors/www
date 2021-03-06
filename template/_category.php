<!--Subheader area - only for certain pages -->
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title"><?php echo $categoryPage['name'] ?></h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="<?php echo getFullUrl('') ?>">Home</a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="<?php echo getFullUrl('categories') ?>">Categories</a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="<?php echo getFullUrl($categoryPage['id']) ?>"><?php echo $categoryPage['name'] ?></a>
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
                                    <h5>Description</h5> <?php echo $categoryPage['description']; ?>
                                </div>
                            </div>

                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <h5>Products</h5> 
                                    <?php 
                                    foreach($categoryPage['products'] as $productIndex)
                                    {
                                        $categoryProduct = $products[$productIndex];
                                        ?>

                                            <a class="button button_left button_green button_js kill_the_icon" href="<?php echo getFullUrl($categoryProduct['id'])?>">
                                                <span class="button_icon">
                                                    <i class="icon-heart-fa"></i>
                                                </span>
                                                <span class="button_label"><?php echo $categoryProduct['name']; ?></span>
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