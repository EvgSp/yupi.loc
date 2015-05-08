<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?php echo Yii::app()->language; ?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?php echo Yii::app()->language; ?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?php echo Yii::app()->language; ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php echo Yii::app()->language; ?>"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="<?php echo Yii::app()->charset; ?>">
        <meta name="keywords" content="<?php echo CHtml::encode($this->keywords); ?>"/>
        <meta name="description" content="<?php echo CHtml::encode($this->description); ?>"/>        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="author" content="Ahmed Saeed">

        <!-- Mobile Specific Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
  ================================================== -->
        <?php
        $mainAssets = Yii::app()->getTheme()->getAssetsUrl();
        Yii::app()->getClientScript()->registerScript('baseUrl', "var baseUrl = '" . $mainAssets . "'", CClientScript::POS_HEAD);
        ?>    

        <link href="<?PHP echo $mainAssets; ?>/css/main.css" type="text/css" rel="stylesheet">
        <link href="<?PHP echo $mainAssets; ?>/css/home2.css" type="text/css" rel="stylesheet">
        <link href="<?PHP echo $mainAssets; ?>/css/responsive.css" type="text/css" rel="stylesheet">


        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
            <link href="<?PHP echo $mainAssets; ?>/css/ie8-and-down.css" type="text/css" rel="stylesheet"> 
        <![endif]-->

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    </head>
    <body>

        <!--start header-->
        <header>

            <?php if (Yii::app()->hasModule('menu')) { 
                $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'user-menu', 'layout' => 'topmenu']);
            } ?>


            <div id="middleHeader">
                <div class="container">
                    <div class="sixteen columns">
                        <div id="contact">
                            <ul>
                                <li>Нижний Новгород</li>
                                <li><small>(831)</small> 220-72-42 (43)</li>
                            </ul>
                        </div>

                        <form action="#" method="post" accept-charset="utf-8">
                            <label>
                                <input type="text" name="search" placeholder="Search in Product" value="">
                            </label>
                            <label>
                                <select name="search_category" class="default" tabindex="1">
                                    <option value="">Category</option>
                                    <option value="amazed">Amazed</option>
                                    <option value="bored">Bored</option>
                                    <option value="surprised">Surprised</option>
                                    <option value="amazed">Amazed</option>
                                    <option value="bored">Bored</option>
                                    <option value="surprised">Surprised</option>
                                    <option value="amazed">Amazed</option>
                                    <option value="bored">Bored</option>
                                    <option value="surprised">Surprised</option>
                                    <option value="amazed">Amazed</option>
                                </select>
                            </label>
                            <div class="submit">
                                <input type="submit" name="submit">
                            </div>
                        </form><!--end form-->

                    </div><!--end sixteen-->
                </div><!--end container-->
            </div><!--end middleHeader-->

            <?php if (Yii::app()->hasModule('menu')) {
                $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'layout' => 'mainmenu']);
            } ?>


        </header>
        <!--end header-->



        <div class="container">
            <div class="sixteen columns">

                <div id="slide_outer">
                    <div class="mainslide">

                        <div class="pagers center">
                            <a class="prev slide_prev" href="#prev">Prev</a>
                            <a class="nxt slide_nxt" href="#nxt">Next</a>
                        </div>

                        <ul class="cycle-slideshow clearfix" 
                            data-cycle-fx="scrollHorz"
                            data-cycle-timeout="2000"
                            data-cycle-slides="> li"
                            data-cycle-pause-on-hover="true"
                            data-cycle-prev="div.pagers a.slide_prev"
                            data-cycle-next="div.pagers a.slide_nxt"
                            >
                            <li class="clearfix">
                                <div class="slide_img">
                                    <img src="<?php echo $mainAssets . '/images/icons/iphone_4_icon.png' ?>" alt="">
                                </div>
                                <div class="flex-caption">
                                    <h5>Now it's available<br><span>IPhone 4 is Released</span></h5>
                                    <p>
                                        Quisque pharetra neque at odio viverra pellentesque ultrices mi sodales. Nam accumsan lacus sed ipsum tempus mollis. Nulla vitae lorem libero, at porta enim. Aenean quis justo metus.
                                    </p>
                                    <p>
                                        Nam accumsan lacus sed ipsum tempus mollis. Nulla vitae lorem libero, at porta enim. Aenean quis justo metus.
                                    </p>
                                    <a href="#"><span>View Item</span><span class="shadow">$190.00</span></a>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="slide_img">
                                    <img src="<?php echo $mainAssets . '/images/icons/iphone_4_icon2.png' ?>" alt="">
                                </div>
                                <div class="flex-caption">
                                    <h5>Now it's available<br><span>IPhone 4 is Released</span></h5>
                                    <p>
                                        Quisque pharetra neque at odio viverra pellentesque ultrices mi sodales. Nam accumsan lacus sed ipsum tempus mollis. Nulla vitae lorem libero, at porta enim. Aenean quis justo metus.
                                    </p>
                                    <p>
                                        Nam accumsan lacus sed ipsum tempus mollis. Nulla vitae lorem libero, at porta enim. Aenean quis justo metus.
                                    </p>
                                    <a href="#"><span>View Item</span><span class="shadow">$190.00</span></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="shadow_left"></div>
                    <div class="shadow_right"></div>
                </div>

            </div>
        </div><!-- container -->



        <!-- strat the main content area -->

        <div class="container">


            <div class="featured">
                <div class="box_head">
                    <h3>Featured Items</h3>
                    <div class="pagers center">
                        <a class="prev featuredPrev" href="#prev">Prev</a>
                        <a class="nxt featuredNxt" href="#nxt">Next</a>
                    </div>
                </div><!--end box_head -->


                <div class="cycle-slideshow" 
                     data-cycle-fx="scrollHorz"
                     data-cycle-timeout=0
                     data-cycle-slides="> ul"
                     data-cycle-prev="div.pagers a.featuredPrev"
                     data-cycle-next="div.pagers a.featuredNxt"
                     >
                    <ul class="product_show">
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="offer_icon"></div>
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5><span class="sale_offer">$330.00</span>&nbsp;&nbsp;&nbsp;&nbsp;$130.00</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="offer_icon"></div>
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5><span class="sale_offer">$210.00</span>&nbsp;&nbsp;&nbsp;&nbsp;$194.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                    </ul>
                    <ul class="product_show">
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="offer_icon"></div>
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5><span class="sale_offer">$330.00</span>&nbsp;&nbsp;&nbsp;&nbsp;$130.00</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="offer_icon"></div>
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5><span class="sale_offer">$210.00</span>&nbsp;&nbsp;&nbsp;&nbsp;$194.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                    </ul>
                </div>
            </div><!--end featured-->


            <div class="latest">

                <div class="box_head">
                    <h3>Latest Items</h3>
                    <div class="pagers center">
                        <a class="prev latest_prev" href="#prev">Prev</a>
                        <a class="nxt latest_nxt" href="#nxt">Next</a>
                    </div>
                </div><!--end box_head -->

                <div class="cycle-slideshow" 
                     data-cycle-fx="scrollHorz"
                     data-cycle-timeout=0
                     data-cycle-slides="> ul"
                     data-cycle-prev="div.pagers a.latest_prev"
                     data-cycle-next="div.pagers a.latest_nxt"
                     >

                    <ul class="product_show">
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$40.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$200.00</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$358.00</h5>
                        </li>
                    </ul>
                    <ul class="product_show">
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$40.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$130.90</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$200.00</h5>
                        </li>
                        <li class="column">
                            <div class="img">
                                <div class="hover_over">
                                    <a class="link" href="#">link</a>
                                    <a class="cart" href="#">cart</a>
                                </div>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/photos/four_column.jpg' ?>" alt="product">
                                </a>
                            </div>
                            <h6><a href="#">Product Name Here</a></h6>
                            <h5>$358.00</h5>
                        </li>
                    </ul>

                </div>
            </div><!--end latest-->



            <div class="sixteen columns clearfix">
                <div class="ten columns alpha">
                    <div class="welcome">
                        <div class="clearfix">
                            <h2>Welcome To Shoploop</h2>
                            <p>
                                Shooploop is your source for millions of products from the leading automotive aftermarket brands. We carry all part numbers for every product we sell - if they make it, we have it. We get the newest part numbers faster, so you can get them on your vehicle sooner, so you can get them on your vehicle sooner.
                            </p>
                            <p>
                                World-Class, US-Based Customer Service and Product Support is just a toll-free phone call away. Product Knowledge at Your Fingertips - Impartial Customer Reviews, Videos, Research Guides, Articles and More.
                            </p>
                            <h4>Our payment methods:</h4>
                            <ul>
                                <li><a class="bank" href="#">text</a></li>
                                <li><a class="card" href="#">text</a></li>
                                <li><a class="order" href="#">text</a></li>
                                <li><a class="paypal" href="#">text</a></li>
                                <li><a class="discover" href="#">text</a></li>
                            </ul>
                        </div>
                    </div><!--end welcome-->
                </div><!--end ten-->

                <div class="six columns omega">
                    <div class="home_news">
                        <h3>Now, Get Your Free Shopping</h3>
                        <div class="acc">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi malesuada, ante at feugiat tincidunt, enim massa gravida metus, commodo lacinia massa diam vel eros. Proin eget urna. Nunc fringilla neque vitae odio. Vivamus vitae ligula.</p>
                        </div>

                        <h3>Super easy to customize anything</h3>
                        <div class="acc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi malesuada, ante at feugiat tincidunt, enim massa gravida metus, commodo lacinia massa diam vel eros. Proin eget urna. Nunc fringilla neque vitae odio. Vivamus vitae ligula.
                            </p>
                        </div>

                        <h3>Now, Get Our newslatter</h3>
                        <div class="acc">
                            <p>
                                Morbi cursus urna at massa dictum ac venenatis lectus accumsan. Etiam vitae arcu ac ante elementum mollis. Nunc convallis tristique aliquet. Ut justo leo.
                            </p>
                            <form method="get" action="#" class="clearfix">
                                <label>
                                    <input type="text" name="newslatter" placeholder="Enter your E-Mail here" value="">
                                </label>
                                <label>
                                    <input class="gray_btn" type="submit" name="submit" value="Subscribe">
                                </label>
                            </form>
                        </div>

                        <h3>Signup and save your money</h3>
                        <div class="acc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi malesuada, ante at feugiat tincidunt, enim massa gravida metus, commodo lacinia massa diam vel eros. Proin eget urna. Nunc fringilla neque vitae odio. Vivamus vitae ligula.
                            </p>
                        </div>
                    </div><!--end home_news-->
                </div><!--end six-->
            </div><!--end sixteen-->


            <div class="sixteen columns">
                <div class="brands">

                    <div class="box_head">
                        <h3>brands</h3>
                        <div class="pagers center">
                            <a class="prev brand_prev" href="#prev">Prev</a>
                            <a class="nxt brand_nxt" href="#nxt">Next</a>
                        </div>
                    </div><!--end box_head -->

                    <div class="brandOuter">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_adidas-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_asics-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_conv-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_nike-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_puma-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_rbk-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_nike-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo $mainAssets . '/images/brands/logo_asics-130x130.jpg' ?>" alt="brand">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--end brands-->
            </div><!--end sixteen-->

        </div><!--end container-->
        <!-- end the main content area -->



        <!-- start the footer area-->
        <footer>
            <div class="container">
                <div class="three columns">
                    <div id="info">
                        <h3>Informations</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Informations</a></li>
                            <li><a href="#">privecy Policey</a></li>
                            <li><a href="#">Terms &amp; Condations</a></li>
                        </ul>
                    </div>
                </div><!--end three-->

                <div class="three columns">
                    <div id="customer_serices">
                        <h3>Customer Servies</h3>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Site map</a></li>
                            <li><a href="#">addation Link</a></li>
                        </ul>
                    </div>
                </div><!--end three-->

                <div class="three columns">
                    <div id="extra">
                        <h3>Extra Stuff</h3>
                        <ul>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                </div><!--end three-->

                <div class="three columns">
                    <div id="my_account">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="#">Login Area</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">newsLatter</a></li>
                        </ul>
                    </div>
                </div><!--end three-->

                <div class="four columns">
                    <div id="delivery" class="clearfix">
                        <h3>Delivery Info</h3>
                        <ul>
                            <li class="f_call">Call Us On: 555-555-555</li>
                            <li class="f_call">Call Us On: 666-666-666</li>
                            <li class="f_mail">example@example.com</li>
                            <li class="f_mail">shoploop@shoploop.com</li>
                        </ul>
                    </div>
                </div><!--end four-->

            </div><!--end container-->


            <div class="tweets">
                <div class="container">
                    <div class="sixteen columns">

                        <div class="tweet">
                            <!-- tweets will generate automaticlly here-->
                        </div><!--end tweet-->

                        <!-- <div class="pagers">
                                <button class="prev tweet_prev">Prev</button>
                                <button class="nxt  tweet_nxt">Next</button>
                        </div> -->
                    </div>
                </div>
            </div><!--end tweets-->


            <div class="container">
                <div class="sixteen">
                    <p class="copyright">
                        Copyright 2012 for <a href="#">ShoppingLoop.com</a><br>
                        Powered By: <a href="#">opencart.</a>
                    </p>
                    <ul class="socials">
                        <li><a class="twitter" href="#">twitter</a></li>
                        <li><a class="facebook" href="#">face</a></li>
                        <li><a class="googlep" href="#">google+</a></li>
                        <li><a class="vimeo" href="#">vimeo</a></li>
                        <li><a class="skype" href="#">skype</a></li>
                        <li><a class="linked" href="#">linked</a></li>
                    </ul>
                </div><!--end sixteen-->
            </div><!--end container-->

        </footer>
        <!--end the footer area -->





        <!-- Sidebar Widget
        ================================================== -->
        <div id="sideWidget">
            <div class="bgPatterns">
                <h4>Solid Colors</h4>
                <a href="#" style="background:#fff">white</a>
                <a href="#" style="background:#fafafa">light_gray</a>
                <a href="#" style="background:#f7f7f7">gray</a>
                <br><br>

                <h4>Body Patterns</h4>
                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/white_carbon.png' ?>) repeat">white_carbon</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/circles.png' ?>) repeat">circles</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/cubes.png' ?>) repeat">cubes</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/exclusive_paper.png)' ?> repeat">exclusive_paper</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/gplaypattern.png' ?>) repeat">gplaypattern</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/large_leather.png' ?>) repeat">large_leather</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/lghtmesh.png' ?>) repeat">lghtmesh</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/light_wool.png' ?>) repeat">light_wool</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/lil_fiber.png' ?>) repeat">lil_fiber</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/snow.png' ?>) repeat">snow</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/soft_wallpaper.png' ?>) repeat">soft_wallpaper</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/weave.png' ?>) repeat">weave</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/white_brick_wall.png' ?>) repeat">white_brick_wall</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/white_paperboard.png' ?>) repeat">white_paperboard</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/white_tiles.png' ?>) repeat">white_tiles</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/wall4.png' ?>) repeat">wall4</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/furley_bg.png' ?>) repeat">furley_bg</a>

                <a href="#" style="background:url(<?php echo $mainAssets . '/images/bg/extra_clean_paper.png' ?>) repeat">extra_clean_paper</a>

            </div>
            <a class="WidgetLink" href="#open">+</a>
        </div>
        <!-- End Sidebar Widget-->




        <!-- JS
        ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <!-- jQuery.dropKick plug-in -->
        <link href="<?PHP echo $mainAssets; ?>/js/dropKick/dropkick.css" type="text/css" rel="stylesheet"> 
        <script src="<?PHP echo $mainAssets; ?>/js/dropKick/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
        <!-- jQuery.nicescroll plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- jQuery.tweet plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.tweet.js" type="text/javascript"></script>
        <!-- jQuery.cycle2 plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.cycle2.min.js" type="text/javascript"></script>
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.cycle2.tile.min.js" type="text/javascript"></script>
        <!-- jQuery.jcarousellite plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jcarousellite_1.0.1.min.js" type="text/javascript"></script>
        <!-- jQuery.fancybox plug-in -->
        <link href="<?PHP echo $mainAssets; ?>/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet"> 
        <script src="<?PHP echo $mainAssets; ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
        <!-- jQuery.etalage plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.etalage.min.js" type="text/javascript"></script>
        <!-- jQuery.cookie plug-in -->
        <script src="<?PHP echo $mainAssets; ?>/js/jquery.cookie.js" type="text/javascript"></script>
        <!--my custom code-->	
        <script src="<?PHP echo $mainAssets; ?>/js/main.js" type="text/javascript"></script>

        <!-- End Document
        ================================================== -->
    </body>
</html>