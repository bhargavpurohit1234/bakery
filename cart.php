<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
	
?>	

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">
    <title>Bakery | Cart</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CPacifico%7CVarela+Round%7CPoppins" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/ps-icon/ps-icon.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body class="page-init">
    <div class="ps-searchbox">
        <div class="ps-searchbox__remove"><i class="fa fa-remove"></i></div>
        <div class="container">
            <header>
                <p>Enter your keywords:</p>
                <form method="post" action="http://nouthemes.com/product-grid.html">
                    <input class="form-control" type="text" placeholder="">
                    <button><i class="ps-icon--search"></i></button>
                </form>
            </header>
            
            <footer class="text-center"><a class="ps-searchbox__morelink" href="product-grid.html">VIEW ALL RESULT</a></footer>
        </div>
    </div>
    <div class="header--sidebar"></div>
    <?php include "includes/menu.php" ; ?>
    <header class="header header--2" data-responsive="1199">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                        <p></p>
                    </div>
                     <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
                        <div class="btn-group ps-dropdown"><a class="" href="#" aria-haspopup="true" aria-expanded="false"  style="text-transform:lowercase">abc@yahoo.com</a>
                            
                        </div>
                        <div class="btn-group ps-dropdown"><a class="" href="#" aria-haspopup="true" aria-expanded="false">+91 9876543210</a>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
        <!--section-->
        <div class="ps-section--hero"><img src="images/hero/01.jpg" alt="">
            <div class="ps-section__content text-center">
                <h3 class="ps-section__title">OUR BAKERY</h3>
                <div class="ps-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section--cart pt-100 pb-100">
            <div class="container">
                <div class="ps-cart-listing">
                    <p class="hidden-lg"><i>Slide right to view</i></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>All Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="ps-product--cart"><img src="images/cake/img-cake-12.jpg" alt=""><a href="product-detail.html">Amazin’ Glazin’</a></div>
                                    </td>
                                    <td>$150.00</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="minus"><span>-</span></button>
                                            <input class="form-control" type="text" value="1">
                                            <button class="plus"><span>+</span></button>
                                        </div>
                                    </td>
                                    <td><span class="total-row">150$</span></td>
                                    <td>
                                        <div class="ps-cart-listing__remove"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="ps-product--cart"><img src="images/cake/img-cake-3.jpg" alt=""><a href="product-detail.html">The Crusty Croissant</a></div>
                                    </td>
                                    <td>$150.00</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="minus"><span>-</span></button>
                                            <input class="form-control" type="text" value="1">
                                            <button class="plus"><span>+</span></button>
                                        </div>
                                    </td>
                                    <td><span class="total-row">150$</span></td>
                                    <td>
                                        <div class="ps-cart-listing__remove"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="ps-product--cart"><img src="images/cake/img-cake-7.jpg" alt=""><a href="product-detail.html">The Rolling Pin</a></div>
                                    </td>
                                    <td>$150.00</td>
                                    <td>
                                        <div class="form-group--number">
                                            <button class="minus"><span>-</span></button>
                                            <input class="form-control" type="text" value="1">
                                            <button class="plus"><span>+</span></button>
                                        </div>
                                    </td>
                                    <td><span class="total-row">150$</span></td>
                                    <td>
                                        <div class="ps-cart-listing__remove"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-cart__process">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                                <div class="form-group form-group--icon ps-cart__promotion">
                                    <div class="icon-wrap"><i class="fa fa-angle-right"></i>
                                        <input class="form-control" type="text" placeholder="promotion code">
                                    </div>
                                </div>
                                <div class="form-groupform-order">
                                    <button class="ps-cart__shopping">Continue Shopping</button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="ps-cart__total">
                                    <p>Total Price: <span>2599$</span></p>
                                    <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="checkout.html">Process to checkout<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--footer-->
         <footer class="ps-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="ps-widget ps-widget--footer ps-widget--Usefull Link">
                            <div class="ps-widget__header">
                                <h3 class="ps-widget__title">Usefull Link</h3>
                            </div>
                            <div class="ps-widget_title">
                            <ul class="ps-list--line">
                            
                            <li><a href="index.html">Home</a></li>
                             
                             
                           <li><a href="about.html">About</a></li>
                             
                             
                            
                            
                             
                             <li><a href="review.html">Review</a></li>
                             
                             
                             <li><a href="gallery.html">Gallery</a></li>
                             
                             <li><a href="contact.html">Contect</a></li>
                             
                             </ul>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="ps-widget ps-widget--footer ps-widget--Our Product's">
                            <div class="ps-widget__header">
                                <h3 class="ps-widget__title">Our Product's</h3>
                            </div>
                            <div class="ps-widget__Our Product's">
                               <ul class="ps-list--line">
                            
                            <li><a href="index.html">Home</a></li>
                             
                             
                           <li><a href="about.html">About</a></li>
    
                         
                            
                             
                             <li><a href="review.html">Review</a></li>
                             
                             
                             <li><a href="gallery.html">Gallery</a></li>
                             
                             <li><a href="contact.html">Contect</a></li>
                             
                             </ul>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="ps-widget ps-widget--footer ps-widget--Special Offer">
                            <div class="ps-widget__header">
                                <h3 class="ps-widget__title">Special Offer</h3>
                            </div>
                            <div class="ps-widget__Special Offer">
                                <ul class="ps-list--line">
                                    <li><a href="offer zone.html">Diwali offer</a></li>
                                    <li><a href="offer zone.html">Summer offer</a></li>
                                    <li><a href="offer zone.html">Today's offer</a></li>
                                    <li><a href="offer zone.html">50% offer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                        <div class="ps-widget ps-widget--footer ps-widget--worktime">
                            <div class="ps-widget__header">
                                <h3 class="ps-widget__title">WORK TIME</h3>
                            </div>
                            <div class="ps-widget__content">
                                <p><strong>Monday - Friday</strong> 8:00 am - 8:30 pm</p>
                                <p><strong>Satuday - Sunday</strong>10:00 am - 16:30 pm</p>
                                <div class="ps-widget ps-widget--footer ps-widget--connect" style="margin-top:30px;">
                            <div class="ps-widget__header">
                                
                                <h3 class="ps-widget__title">CONNECT US</h3>
                            </div>
                            <div class="ps-widget__content">
                                <ul class="ps-widget__social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                
                            </div>
                            </div>
                             
                       
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/overflow-text.js"></script>
    <script type="text/javascript" src="plugins/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/moment.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/skrollr.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
    <!-- Revolution - slider-->
    <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
</body>



</html>
