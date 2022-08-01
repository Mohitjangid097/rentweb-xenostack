<?php 
   session_start();
if (!isset($_SESSION['username'])) {
   header('location:../signup.php');
   die();
}
include '../db/db.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];
$result_liked = mysqli_query($con,"SELECT * FROM `$username` WHERE liked ='Y';") or die(header('location:../signup.php'));
$row_liked = mysqli_fetch_array($result_liked);
  $total_likes=mysqli_num_rows($result_liked);
  mysqli_free_result($result_liked);

$result_cart = mysqli_query($con,"SELECT * FROM `$username` WHERE cart ='Y';") or die(header('location:../signup.php'));
$row_cart = mysqli_fetch_array($result_cart);
  $total_cart=mysqli_num_rows($result_cart);
  mysqli_free_result($result_cart);

$result = mysqli_query($con,"select * from signup where username='$username'") or die(header('location:../signup.php'));
$row = mysqli_fetch_array($result);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rentweb Product Rental Website" />
    <meta name="keywords" content="Rent, Rentweb, Mukul Saini, e-commerce, Product Rental Website, electronics rental, rent to own smartphones, rent a computer, rent to buy furniture, refrigerator rental near me, short term appliance rental, rent to own mobile" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Product Rental Website Rentweb" />
    <meta name="author" content="Mukul Saini" />
    <title>Electronics | Rentweb</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>


<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a class="logotxt" href="../home.php"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_cart; ?> </span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>₹1150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>Became a Seller</div>
                <ul>
                    <li><a href="./assets/seller/login.php">LogIn</a></li>
                    <li><a href="../signup.php">SignUp</a></li>
                </ul>
        </div>
            <div class="header__top__right__auth">
                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> SignOut</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li ><a href="../home.php">Home</a></li>
                <li ><a href="cart.php">Cart</a> </li>
                <li><a href="https://rentwebdeals.blogspot.com">Blog</a></li>
                <li><a href="aboutus.php">About Us</a></li> 
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
            <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> rentwebhost@gmail.com</li>
                <li>Free Shipping for all Order of ₹199</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> rentwebhost@gmail.com</li>
                                <li>Free Shipping for all Order of ₹199</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
                                <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Became a Seller</div>
                                    <ul>
                                        <li><a href="./seller/login.php">LogIn</a></li>
                                        <li><a href="../signup.php">SignUp</a></li>
                                    </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> SignOut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a class="logotxt" href="../home.php"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li ><a href="../home.php">Home</a></li>
                            <li ><a href="cart.php">Cart</a> </li>
                            <li ><a href="https://rentwebdeals.blogspot.com">Blog</a></li>
                            <li><a href="aboutus.php">About Us</a></li> 
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_cart; ?> </span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>₹1150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="appliances.php">HOME APPLIANCES</a></li>
                            <li class="active_page"><a href="electronics.php">ELECTRONICS</a></li>
                            <li><a href="computers.php">COMPUTERS</a></li>
                            <li><a href="furniture.php">FURNITURE</a></li>
                            <li><a href="automobiles.php">AUTOMOBILES</a></li>
                            <li><a href="fitness.php">FITNESS</a></li>
                            <li><a href="office.php">OFFICE NEEDS</a></li>
                            <li><a href="offers.php">OFFERS </a></li>
                            <li><a href="#filter"></a></li>
                            <li><a href="#filter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="tel:+91 8769506494"> <h5>CALL NOW</h5></a><
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
<!--CAROUSEL-->

        <div class="carouseldiv">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://image.freepik.com/free-photo/smart-speaker-keyboard-with-copy-space-white-space_260672-434.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.freepik.com/free-psd/floating-macbook-pro-psd-mockup_1562-303.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.freepik.com/free-photo/keyboard-controller-headphones-yellow-background-concept-game-console-flat-lay-top-view_164357-2465.jpg" alt="Third slide">
                    </div>
                    <div class="hero__text">
                            <span class="logotxt">RENTWEB</span>
                            <p>you need we provide</p>
                            <h2>ELECTRONICS</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#filter" class="primary-btn">SHOP NOW</a>
                            <a href="logout.php" class="primary-btn">SIGN OUT</a>
                        </div>
             </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

         </div>
    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    

    <!-- Featured Section Begin -->
    <section id="filter" class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ELECTRONICS</h2>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                    <!-- Portfolio Item 1-->
             <?php 
                       $results = mysqli_query($con,"SELECT * FROM productdetails WHERE product_category='electronics' ORDER BY ID DESC") or die("failed to query database".mysqli_error());
                       // $rows = mysqli_fetch_array($results);
                            if($results->num_rows > 0){
                                while($rows = $results->fetch_assoc()){
                                    $imageURL = 'seller/assets/seller/user/admin/items/'.$rows["product_image"];
                                      $pname =$rows["product_name"];
                                    $cos =$rows["day_charge"];
                                    $productid = $rows['product_id'];

                    ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Smartphones">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $imageURL;  ?>">
                             <form id="liked" class="login100-form validate-form" action="useritems.php" method="post" enctype="multipart/form-data" >
                            <ul class="featured__item__pic__hover">
                             <input type="hidden" name="productid" value="<?php echo $productid;  $_SESSION['product_id']=$productid; ?>">
                             <input type="hidden" name="cos" value="<?php echo $cos;  $_SESSION['day_charge']=$cos;  ?>">
                                <li><a><button type="submit" name="liked" style="border: none; background-color: transparent;"><i class="fa fa-heart"></i></button></a></li>
                                <li><a><button type="submit" name="view" style="border: none; background-color: transparent;"><i class="fa fa-info-circle"></i></button></a></li>
                                <li><a><button type="submit" name="cart" style="border: none; background-color: transparent;"><i class="fa fa-shopping-cart"></i></button></a></li>
                            </ul>
                        </form>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $pname;  ?></a></h6>
                            <h5>Rs. <?php echo $cos;  ?>/day</h5>
                        </div>
                    </div>
                </div>
                 <?php }
                    }else{ ?>
                        <p style="margin-top: 8%"><i class="fa fa-error"></i>No products available</p>
                    <?php } ?>
                </div>

            <!-- <div class="row featured__filter">
               
                <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Smartphones">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/appliances/1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Galaxy Note 10 (Aura Black)</a></h6>
                            <h5> 2399/mo</h5>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">
                            Galaxy S10e (Black) , Capacity/Size : 5.8" RAM: 6GB, ROM: 128GB | Android Pie 9, Exynos 9820 processor
3100mAH lithium-ion battery</a></h6>
                            <h5> 549/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">OnePlus 7 Pro (Mirror Gray) ,Capacity/Size : 6.67" | RAM: 6 GB, ROM: 128 GB
                        Android 9 Pie, Snapdragon 855</a></h6>
                            <h5> 1150/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Vivo V11 Pro ( Gold ) | RAM: 6GB, Storage: 64GB
                            Dual camera (12MP, 5MP)
                            Dual SIM</a></h6>
                            <h5> 950/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Apple iPhone XR 64GB (Black) ,RAM: 3GB, ROM: 64GB
                                Secure & reliable Face ID
                                Wireless Qi charging compatib</a></h6>
                            <h5> 1250/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/6.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Google Home ,Capacity/Size : 477 g
                            Get answers from Google
                            Voice-controlled WiFi speaker</a></h6>
                            <h5> 1350/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/7.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Amazon Fire TV Stick ,Capacity/Size : 43.3 g
                                HD (720p), Full HD(1080P/60fps)
                                HDMI output with Bluetooth 4.1+LE
                                8 GB internal storage</a></h6>
                            <h5> 1550/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/8.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Galaxy A50 (Blue) ,Capacity/Size : 6.4"
                                RAM: 4GB, ROM: 64GB
                                5MP+25MP+8MP Rear camera | 25MP front camera</a></h6>
                            <h5> 849/mo</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/electronics/9.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Samsung Galaxy Tab S4 (Black)
                 ,Capacity/Size : 6.67" | RAM: 6 GB, ROM: 128 GB
                        Android 9 Pie, Snapdragon 855</a></h6>
                            <h5> 1550/mo</h5>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </section>
    <!-- Featured Section End -->

    
    

   

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a class="logotxt"  href="#"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                        </div>
                        <ul class="foot">
                            <li>Address: Poornima Institute Of Engineering and Technology,<br>ISI-2,RIICO Institutional Area, Gonar Road, Sitapura,<br>Jaipur-302022</li>
                            <li><a class="ah" href="tel:+91 8769506494">Phone: +91 8769506494</a></li>
                            <li><a class="ah" href="mailto: rentwebhost@gmail.com"> rentwebhost@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="aboutus.php">About Founders</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Social Links</h6>
                        <p>Get regular updates about our latest shop and special offers.</p>
                        <div class="footer__widget__social">
                            <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
                            <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Rentweb Inc. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>



</body>

</html>