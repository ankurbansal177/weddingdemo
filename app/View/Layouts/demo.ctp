<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $page_title; ?></title>
    <link href='/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='/css2/styles.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="/js/jquery-1.7.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/tms-0.4.1.js"></script>
    <?php if (Configure::read('debug') == 0): ?>
    <meta http-equiv="Refresh" content="<?php echo $pause; ?>;url=<?php echo $url; ?>"/>
    <?php endif; ?>
    <style><!--
    P { text-align:center; font:bold 1.1em sans-serif }
    A { color:#444; text-decoration:none }
    A:HOVER { text-decoration: underline; color:#44E }
    --></style>
</head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Showcase Your Wedding</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!--template-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EXPLORE</a>
        </div>
        <div class="collapse navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="" style="">Guest List</a>

                </li>
                <li><a href="#" class="">Events</a>

                </li>
                <li><a href="#" class="">Quiz</a>

                </li>
                <li><a href="#" class="">About</a>

                </li>
                <li><a href="#" class="" contenteditable="false">Sign in</a>

                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Showcase Your Wedding</h1>
            <p class="lead">Take Your Wedding Experience Online</p>
        </div>
        <div class="container">
            <div class="menu row">
                <div class="product col-sm-12">
                    <a href="#"><img class="img-responsive" src="/assets/example/ec_guy.jpg"><i class="btn btn-product fa fa-star"></i></a>
                    <hr>
                    <h2>Get Your wedding Published</h2>
                    <p>Get a personalised website to showcase your wedding planning and let your guets know about the latest happenings to avoid the gift repeat</p>
                    <hr>



                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#reviews">Reviews</a></li>
                        <li><a data-toggle="tab" href="#details">Details</a></li>
                        <li><a data-toggle="tab" href="#sizing">Sizing</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="reviews">

                            <h4>Buyer Reviews</h4>
                            <ul class="list-unstyled">
                                <li class="clearfix">(Mike R.) I bought this last month before a.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                                <li class="clearfix">(Karen) The size of this jacket was a little larger.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                                <li class="clearfix">(CAS) I love this jacket. I purchased this as part..  <i class="fa fa-star fa-2x yellow pull-right"></i><i class="fa fa-star fa-2x yellow pull-right"></i></li>
                                <li class="clearfix">(William D.) Great value with cool style. If you want.. <i class="fa fa-star fa-2x yellow pull-right"></i></li>
                            </ul>

                        </div>
                        <div class="tab-pane" id="details"><h4>Product Informartion</h4></div>
                        <div class="tab-pane" id="sizing"><h4>Size Chart</h4></div>
                    </div>


                </div>
                <div class="col-sm-12">
                    <div class="productsrow">
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Royal Wedding Theme</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/images/demo1.png">
                            </div> <a href="http://themeforest.net/item/florence-responsive-wedding-site-template/full_screen_preview/7755165" class="menu-item list-group-item">Live Demo<span class="badge">&#8377 9000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Contemporary</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_jeans.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Dark Blue Jeans<span class="badge">&#8377 8000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Western</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_pants.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Light Grean Chinos<span class="badge">&#8377 5000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Green Wedding</div>
                            <div class="div-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_jacket.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Denim Jacket<span class="badge">&#8377 13000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Orchard Wedding</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_socks.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Socks<span class="badge">&#8377 7000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Special Wedding</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_belt.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Brown Belt<span class="badge">&#8377 5000</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Unusual Wedding</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_sweater.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Shawl Neck<span class="badge">&#8377 6500</span></a>

                        </div>
                        <div class="product menu-category">
                            <div class="menu-category-name list-group-item active">Innovative Marriage</div>
                            <div class="product-image">
                                <img class="product-image menu-item list-group-item" src="/assets/example/ec_sweater.jpg">
                            </div> <a href="#" class="menu-item list-group-item">Shawl Neck<span class="badge">&#8377 6500</span></a>

                        </div>
                        <hr>
                        <button class="btn btn-primary btn-lg ">Read More</button>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
</div>
<!--/template-->
<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</body>
</html>
