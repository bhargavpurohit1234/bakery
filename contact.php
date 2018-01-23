<?php 
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
$success = '';	
?>	

<?php if(isset($_POST['cmdsubmit']))
{
	$name = trim($_POST['fullname']);
	$email = trim($_POST['email']);
	$telephone = trim($_POST['telephone']);
	$msg = trim($_POST['msg']);


	//Mail Start
		require 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;
		
		$mail->isSMTP();                                   // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                            // Enable SMTP authentication
		
		
		$mail->Username = 'bancpatel123@gmail.com';   	 // SMTP username - Insert Email Address
		$mail->Password = 'bansi123'; 					// SMTP password - Insert Email Account Password
		
		
		
		// $mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
		// $mail->Port = 465; 
		
		$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                 // TCP port to connect to  587 / 465
		
		
		// $mail->SMTPDebug = 3;
		$mail->setFrom('bancpatel123@gmail.com', 'bansi');
		$mail->addReplyTo('bancpatel123@gmail.com', 'bansi');
		
	
		
		$mail->addAddress('bancpatel123@gmail.com');   			// Add a recipient
	//	$mail->addAddress($email);   							// Add a recipient
		
		
		//$mail->addCC('viraj@yahoo.co.in');
		//$mail->addBCC('bcc@example.com');
		
		$mail->isHTML(true);  // Set email format to HTML
		
		$bodyContent = '<h1>Contact Us Form</h1>';
		$bodyContent .= '<table border="1" cellpadding="0" cellspacing="0" align="center" width="50%">
							<tr>
    							<td>Name</td>
        						<td>'.$name.'</td>
   							 </tr>
							 <tr>
    							<td>Email</td>
        						<td>'.$email.'</td>
   							 </tr>
							  <tr>
    							<td>Phone</td>
        						<td>'.$telephone.'</td>
   							 </tr>
							  <tr>
    							<td>Message</td>
        						<td>'.$msg.'</td>
   							 </tr>
						</table>';
		
		$mail->Subject = 'Contact Inquiry';
		$mail->Body    = $bodyContent;
		
		if(!$mail->send()) {
		$success =  'Message could not be sent. ';
		$success.= 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		$success =  'Message has been sent';
		}
	//Mail End
	
}
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
    <title>Bakery | Contact</title>
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
                        <li class="active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section pt-80 pb-80">
            <div class="container">
                <div class="ps-contact">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                            <div class="ps-contact__info">
                                <div class="mb-60" id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
                                <div class="ps-contact__block">
                                    
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                           
                           <?php
						   if($success!='')
						   {
						   	echo $success;
						   }
						   ?>
                           <form name="form" method="post">
                           
                            <div class="ps-contact__form">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="fullname" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="telephone" placeholder="Telephone" required>
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" name="msg" placeholder="Text your message here..." required></textarea>
                                </div>
                                <div class="form-group mt-30">
                                    <button name="cmdsubmit" class="ps-btn ps-btn--sm ps-contact__submit">Submit</button>
                                </div>
                                
                            </div>
                            </form>
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
