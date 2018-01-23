<?php error_reporting(0);
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
    <title>Bakery | Product List</title>
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
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
                        <p></p>
                    </div>
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
        <!-- Heros-->
        <div class="ps-section--hero"><img src="images/hero/01.jpg" alt="">
            <div class="ps-section__content text-center">
                <h3 class="ps-section__title">OUR BAKERY</h3>
                <div class="ps-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Shop</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section--page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                        <div class="ps-shop-listing pt-80 pb-40">
                            <div class="ps-shop-features">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/012x.jpg" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/022x.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ps-shop-filter">
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                        
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="ps-shop">
                                
                                 <?php 
								 
							 
	$tableName="product_master";		
	$targetpage = "products.php"; 	
	$limit = 1; 
	
	$query = "SELECT COUNT(*) as num FROM $tableName  order by id desc";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$query1 = "SELECT * FROM $tableName order by id desc LIMIT $start, $limit";
	$result = mysql_query($query1);
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='paginate'>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
		}else{
			$paginate.= "<span class='disabled'>previous</span>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class='current'>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next'>next</a>";
		}else{
			$paginate.= "<span class='disabled'>next</span>";
			}
			
		$paginate.= "</div>";		
	
	
}
 // pagination
 //echo $paginate;


         	 
								 
								 
							    // $query = "select * from product_master order by id desc";
							    // $result = mysql_query($query);
								 while($row = mysql_fetch_array($result))
								   { ?>
                                <div class="ps-product--list ps-product--list-large">
                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__overlay" href="product-detail.php?viewId=<?php echo $row['id']; ?>"></a><img src="admin/img/product/<?php echo $row['photo']; ?>" alt=""></div>
                                    <div class="ps-product__content">
                                        <h4 class="ps-product__title"><a href="product-detail.php?viewId=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                                        
                                        <p class="ps-product__price">
                                            <del>£25.00</del>Rs. 15.00
                                        </p>
                                        <p><?php echo $row['description']; ?></p>
                                  <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm" href="product-detail.php?viewId=<?php echo $row['id']; ?>">View Detail<i class="fa fa-angle-right"></i></a>
                                            
                                        </footer>
                                    </div>
                                </div>
                                 <?php } ?>
                            </div>
                            
                            <?php echo "<center>". $paginate."</center>"  ; ?>
                            
                           
                           
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
                        <div class="ps-sidebar">
                            
                            <aside class="ps-widget ps-widget--sidebar ps-widget--category">
                                <div class="ps-widget__header">
                                    <h3 class="ps-widget__title">CATEGORY</h3>
                                </div>
                                <div class="ps-widget__content">
                                    <ul class="ps-list--circle">
                                     <?php 
										   	$i = 1;
										 	$query = "select * from category_master order by id desc"; 										  
											$result = mysql_query($query);
											while($row = mysql_fetch_array($result)) {  ?>
                                        <li><a href="product.php?category=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></li>
                                       <?php } ?>  
                                </div>
                            </aside>
                            
                            
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                          
                    </div>
                </div>
            </div>
        </section>
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
