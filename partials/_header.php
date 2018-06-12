<div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">
                <!-- Header Top -  Info Area -->
                <div id="Action_bar">
                    <div class="container">
                        <div class="column one">
                            <!-- Header - contact info area-->
                            <ul class="contact_details">
                                <li class="slogan">
                                    Have any questions?
                                </li>
                                <li class="phone">
                                    <i class="icon-phone"></i><a href="tel:00914842655040">
                                    +91 4842655040</a>
                                </li>
                                <li class="mail">
                                    <i class="icon-mail-line"></i><a href="mailto:info@highnessindia.com">info@highnessindia.com</a>
                                </li>
                            </ul>
                            <!--Social info area-->
                            <ul class="social">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/Highness-Doors-1817969171802557/" target="_blank" title="Facebook"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/highnessdoors" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="<?php echo getFullUrl('') ?>"  title="Add Quality & Style to Your Home With HIGHNESS"><img class="scale-with-grid" alt="Higness doors logo" src="images/hd/logo.jpg" alt="BeTheme - Best Html Theme Ever" />
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu">

                                            <li <?php echo $isHome ? 'class="current-menu-item"' : '' ?>>
                                                <a href="<?php echo getFullUrl('') ?>"><span>Home</span></a>
                                            </li>
                                            <li <?php echo strpos($_SERVER['REQUEST_URI'],'/about-us') > 0 ? 'class="current-menu-item"' : '' ?>>
                                                <a href="<?php echo getFullUrl('about-us') ?>"><span>About Us</span></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="<?php echo getFullUrl('about-us/company') ?>"><span>Company</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo getFullUrl('about-us/events') ?>"><span>Events</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo getFullUrl('about-us/careers') ?>"><span>Careers</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li <?php echo $isCategory ? 'class="current-menu-item"' : '' ?>>
                                                <a href="<?php echo getFullUrl('categories') ?>"><span>Categories</span></a>
                                                <ul class="sub-menu">
                                                    <?php
                                                        foreach($categories as $category)
                                                        {
                                                    ?>
                                                        <li>
                                                            <a href="<?php echo getFullUrl($category['id']) ?>"><span><?php echo $category['name'] ?></span></a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </li>

                                            <li <?php echo $isProduct ? 'class="current-menu-item"' : '' ?>>
                                                <a href="<?php echo getFullUrl('products') ?>"><span>Products</span></a>
                                                <ul class="sub-menu">
                                                    <?php
                                                        foreach($products as $product)
                                                        {
                                                    ?>
                                                        <li>
                                                            <a href="<?php echo getFullUrl($product['id']) ?>"><span><?php echo $product['name'] ?></span></a>
                                                        </li>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </li>
                                        
                                            <li <?php echo strpos($_SERVER['REQUEST_URI'],'/contact-us') > 0 ? 'class="current-menu-item"' : '' ?>>
                                                <a href="<?php echo getFullUrl('contact-us') ?>"><span>Contact Us</span></a>
                                            
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </header>
        </div>