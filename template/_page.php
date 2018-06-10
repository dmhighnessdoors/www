<!--Subheader area - only for certain pages -->
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title"><?php echo $page['title'] ?></h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="<?php echo getFullUrl('') ?>">Home</a>
                    <span>
                        <i class="icon-right-open"></i>
                    </span>
                </li>
                <li>
                    <a href="<?php echo getFullUrl($page['id']) ?>"><?php echo $page['title'] ?></a>
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
                                    <?php echo $page['body']; ?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>