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
        <nav class="navigation">
            <div class="container">
                <div class="menu-toggle"><span></span></div>
                <div class="navigation__left">
                    <ul class="menu menu--left">
                        <li><a href="index.php">Home</a>
                            
                        </li>
                        <li class="current "><a href="about.php">About</a></li>
                        <li class="menu-item-has-children"><a href="products.php">Products</a>
                            <ul class="sub-menu">
                               <?php 
										   	$i = 1;
										 	$query = "select * from category_master order by id desc"; 										  
											$result = mysql_query($query);
											while($row = mysql_fetch_array($result)) {  ?>
                                        <li><a href="product.php?category=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></li>
                                       <?php } ?>  
                            </ul>
                        </li>
                        <li><a href="offer-zone.php">offer-zone</a>
                    </ul>
                </div>
                <a class="ps-logo" href="index-2.php"><img src="images/logo-2.png" alt=""></a>
          <div class="navigation__right">
                    <ul class="menu menu--right">
                       <li><a href="review.php">Review</a>
                        <li><a href="gallery.php">Gallery</a></li>                        
                        <li><a href="contact.php">Contact</a>
                            
                        </li>
                    </ul>
                    <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon--shopping-cart"></i></a>
                        <div class="ps-cart__listing">
                            <div class="ps-cart__content">
                                <div class="ps-cart-item">
                                    <a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail">
                                        <a href="product-detail.html"></a><img src="images/cake/img-cake-1.jpg" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin’ Glazin’</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                                <div class="ps-cart-item">
                                    <a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail">
                                        <a href="product-detail.html"></a><img src="images/cake/img-cake-2.jpg" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Crusty Croissant</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                                <div class="ps-cart-item">
                                    <a class="ps-cart-item__close" href="#"></a>
                                    <div class="ps-cart-item__thumbnail">
                                        <a href="product-detail.html"></a><img src="images/cake/img-cake-3.jpg" alt=""></div>
                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>
                                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__total">
                                <p>Number of items:<span>36</span></p>
                                <p>Item Total:<span>£528.00</span></p>
                            </div>
                            <div class="ps-cart__footer"><a class="ps-btn ps-btn--view-bag" href="cart.html">View bag</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>