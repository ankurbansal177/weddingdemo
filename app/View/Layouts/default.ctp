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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $bride_name.' &amp; '.$groom_name; ?></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/grid_24.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/slider.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<script src="/js/jquery-1.7.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/tms-0.4.1.js"></script>
<script>
$(document).ready(function(){
	$('.slider')._TMS({
		show:0,
		pauseOnHover:true,
		prevBu:'.prev',
		nextBu:'.next',
		playBu:false,
		duration:800,
		preset:'fade',
		pagination:'.pags',
		pagNums:false,
		slideshow:7000,
		numStatus:false,
		banners:false,
		waitBannerAnimation:false,
		progressBar:false
	})
});
</script>
<!--[if lt IE 9]>
<script src="/js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="/css/ie.css">
<![endif]-->
</head>
<body>
<div class="sub-pages">
    <header>
        <h1><a href="index.html"><img src="/images/logo.png" alt=""></a></h1>
        <nav>
            <ul class="menu">
                <li class="current"><a href="/home">Our Stoy</a></li>
                <li ><a href="wedding.html">wedding</a></li>
                <li><a href="album.html">Gallery</a></li>
                <li><a href="links.html">links</a></li>
                <li><a href="wishes.html">your wishes</a></li>
                <li><a href="contacts.html">contacts</a></li>
            </ul>
        </nav>
    </header>
</div>
<!--==============================content================================-->
<section id="content_section">
    <?php echo $this->fetch('content'); ?>
</section>
<!--==============================footer=================================-->
<footer>
  <p><strong>© 2012 <?php echo $bride_name.' &amp; '.$groom_name; ?></strong><br>
    Website by <a target="_blank" href="http://www.templatemonster.com/" class="link">Bansals</a></p>
  <div class="soc-icons"><a href="#"><img src="/images/icon-1.png" alt=""></a><a href="#"><img src="/images/icon-2.png" alt=""></a><a href="#"><img src="/images/icon-3.png" alt=""></a></div>
</footer>
</body>/
</html>
