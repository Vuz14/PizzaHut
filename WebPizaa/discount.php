
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Larana Pizza </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <link rel="stylesheet" href="assets/fonts/icofont/icofont.min.css" />
    <link rel="stylesheet" href="assets/cs/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/main copy.css">
    <link rel="stylesheet" href="assets/css/home-responsive.css">
    <link rel="stylesheet" href="assets/css/toast-message.css">
    <link rel="stylesheet" href="assets/css/discount.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">


    <style>
        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 0;
        }

        /* Modal Background */
        /* Modal Background */

        .modal-background {
            display: none;
            /* Ẩn modal khi không cần thiết */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Nền mờ */
            z-index: 1000;
            /* Đặt lên trên các phần tử khác */
        }

        /* Modal Content */

        .modal-content {
            position: absolute;
            /* Thay đổi từ relative thành absolute */
            top: 50%;
            /* Canh giữa theo chiều dọc */
            left: 50%;
            /* Canh giữa theo chiều ngang */
            transform: translate(-50%, -50%);
            /* Di chuyển modal lên trên và sang trái 50% chiều rộng và chiều cao của modal để canh giữa chính xác */
            padding: 20px;
            width: 90%;
            /* Chiều rộng của modal (đã tăng thêm) */
            max-width: 800px;
            /* Chiều rộng tối đa (đã tăng thêm) */
            background: #fff;
            /* Nền trắng cho modal */
            border-radius: 8px;
            /* Bo tròn góc của modal */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Thêm bóng cho modal */
        }

        /* Close Button */

        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <header class="main-header main-header--four sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logos/logo2.png" alt="Logo" title="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li><a href="index2.html">Home</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="http://localhost/WebPizaa/WebPizaa/discount.php"> Discount</a></li>
                            <li class="dropdown"><a href="#">Contact</a>
                                <ul>
                                    <li><a href="contact.html">Contact with us</a></li>
                                    <li><a href="history.html">Job portal</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                        </ul>
                    </nav>
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- /.mobile-nav__toggler -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a>
                        <!-- /.search-toggler -->
                        <a href="donate1.html" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>

                            <span class="sr-only">Cart</span>
                        </a>

                        <div class="menu-btns">
                            <a style="margin-left: 30px;" href="contact.html" class="theme-btn style-two"><span></i> Book Now <i class="far fa-arrow-alt-right"></i></span></a>
                            <div class="menu-sidebar" style="margin-left: 30px; margin-right: 30px; ">
                                <button class="bg-transparent"></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="form-back-drop"></div>

        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h4>Get Appointment</h4>
                </div>
                <div class="appointment-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" name="text" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn style-two">Submit now</button>
                        </div>
                    </form>
                </div>

                <!--Social Icons-->
                <div class="social-style-one">
                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>

        <!-- Background banner -->

        <div class="hero-area-two bgs-cover pt-200 rpt-150 pb-100 rel z-1">
            <div class="container container-1520">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-two-left mb-90 rmb-60">
                            <div class="hero-content-two text-white" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <span class="price"> HOT AND SPICY </span>
                            </div>
                            <span class="hero-title1 mb-40" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50"> Pizza </span>
                            <div class="hero-content-two1 text-white" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <p>Welcome to our special promotion page, where every bite comes with a delightful discount and every dish is a celebration of flavor!</p>
                                <span class="price"> COUPON LIST </span>
                                <a href="shop.html" class="theme-btn1">order now <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 align-self-end">
                        <div class="hero-two-right">
                            <span class="hero-title text-end" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">pizza</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="hero-shapes">
                <div class="shape one">
                    <img src="assets/images/shapes/hero-two2.png" alt="Hero Shape">
                </div>
                <div class="shape two">
                    <img src="assets/images/shapes/hero-shape2.png" alt="Hero Shape">
                </div>
                <div class="shape three">
                    <img src="assets/images/shapes/hero-shape3.png" alt="Hero Shape">
                </div>
                <div class="shape six">
                    <img src="assets/images/shapes/hero-two1.png" alt="Hero Shape">
                </div>
                <div class="letter-shape-one">
                    <img src="assets/images/hero/letter-shape.png" alt="Leter Shape">
                </div>
                <div class="letter-shape-one1">
                    <span> FREE <br> SHIPPING </span>
                </div>
                <div class="letter-shape-one2">
                    <img src="assets/images/shapes/muiten1.png" alt="Leter Shape">
                </div>
                <div class="letter-shape-one3">
                    <img src="assets/images/shapes/hero-two.png" alt="Leter Shape">
                </div>
                <div class="pizza">
                    <img src="assets/images/hero/pizaa.png" alt="Pizza" style="width: 1000px;">
                </div>
                <div class="letter-shape-two">
                    <img src="assets/images/hero/letter-shape-two.png" alt="Leter Shape">
                </div>
                <div class="price-badge" style="background-image: url(assets/images/shapes/vetsonn.png);">
                    <span style="margin-top: 20px;"> 30%</span>
                    <b> OFF </b>
                </div>
            </div>
        </div>
        <!-- Coupon List -->
        <section class="about-us-area pt-130 rpt-100 pb-150 rpb-60 rel z-1">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">Exclusive Discounts</span>
                            <h2>Grab amazing deals and save big on your favorite meals!</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class='bx bx-diamond'></i>
                            </div>
                            <div class="content">
                                <h4>Exclusive Vouchers</h4>
                                <p>Enjoy special discounts with our exclusive voucher offers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class='bx bxs-discount'></i>
                            </div>
                            <div class="content">
                                <h4>Easy to Redeem</h4>
                                <p>Apply vouchers effortlessly at checkout for instant savings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="featured-item">
                            <div class="icon">
                                <i class="flaticon-cashback"></i>
                            </div>
                            <div class="content">
                                <h4>Cashback Rewards</h4>
                                <p>Earn cashback on selected vouchers for even more value</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-2" style="align-items: center; justify-content: flex-start;">
                        <div class="text-lg1">
                            <div class="coupon-list"><i class='bx bxs-bookmarks' style="color:rgb(255, 69, 0);"></i> Coupon </div>
                            <div class="text-lg border-b-2 border-dashed pb-1 mb-8 pt-3">
                                <b style="color:darkorange"> Discout Level </b>
                            </div>
                            <!-- Lọc theo mức giảm giá -->
                            <div class="overflow-y-scroll max-h-40 customScroll mt-5">
                                <div>
                                    <div class="flex justify-between cursor-pointer text-sm mb-1 mt-5">
                                        <div class="flex1 items-center mb-3 xl:mb-3"><img src="assets/images/logos/logo2.png" class="image-voucher">
                                            <div class="leading-1" role="button">
                                                5%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between cursor-pointer text-sm mb-1 mt-5">
                                        <div class="flex1 items-center mb-3 xl:mb-3"><img src="assets/images/logos/logo2.png" class="image-voucher">
                                            <div class="leading-1">
                                                10%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between cursor-pointer text-sm mb-1 mt-5">
                                        <div class="flex1 items-center mb-3 xl:mb-3"><img src="assets/images/logos/logo2.png" class="image-voucher">
                                            <div class="leading-1">
                                                20%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between cursor-pointer text-sm mb-1 mt-5">
                                        <div class="flex1 items-center mb-3 xl:mb-3"><img src="assets/images/logos/logo2.png" class="image-voucher">
                                            <div class="leading-1">
                                                25%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between cursor-pointer text-sm mb-1 mt-5">
                                        <div class="flex1 items-center mb-3 xl:mb-3"><img src="assets/images/logos/logo2.png" class="image-voucher">
                                            <div class="leading-1">
                                                30%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lưu voucher  -->
                    <?php
                    if (isset($_POST['voucher_id'])) {
                        $voucher_id = $_POST['voucher_id'];

                        $conn = new mysqli('localhost', 'username', 'password', 'database_name');

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Lưu voucher vào bảng user_vouchers
                        $sql = "INSERT INTO user_vouchers (user_id, voucher_id) VALUES (?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ii", $user_id, $voucher_id); // user_id cần được xác định từ phiên đăng nhập
                        $stmt->execute();

                        if ($stmt->affected_rows > 0) {
                            echo "Voucher saved successfully!";
                        } else {
                            echo "Failed to save voucher.";
                        }

                        $stmt->close();
                        $conn->close();
                    }
                    ?>
                    <!-- Mã khuyến mãi -->
                    <div class="col-lg-5">
                        <div class="promo-wrapper  mt-3" id="voucher-container">
                            <?php
                            // Kết nối với cơ sở dữ liệu
                            $conn = new mysqli('localhost', 'root', '', 'pizzahut');

                            // Kiểm tra kết nối
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Truy vấn để lấy các voucher đang hoạt động
                            $sql = "SELECT * FROM vouchers WHERE status = 'active' AND valid_from <= NOW() AND valid_to >= NOW()";
                            $result = $conn->query($sql);

                            // Kiểm tra nếu có dữ liệu
                            if ($result->num_rows > 0) {                          
                                // Lặp qua từng voucher và hiển thị thông tin
                                while ($row = $result->fetch_assoc()) {
                                    $valid_to = date("F j, Y, g:i a", strtotime($row['valid_to']));
                                    $discount = intval($row['discount']);                                
                                    echo "
                                    <div class='flex maKm promoKM mt-3 '>
                                            <div class='promo-detail'> PIZZA COUPON
                                            <div class='promo-detail1'> ENJOY THE BEST PIZZA AT LOWER PRICES </div>
                                            <div class='flex promo-detail2'>
                                                <div class='left'> SPECIAL </div>
                                                <div class='right'>" .  $discount . "% OFF </div>
                                            </div>
                                            <div class='promo-detail3'> VALID DATE UNTIL: <span>" . $valid_to . "</span> 
                                            <button class='copy-btn' data-code='" . $row['code'] . "'>Copy</button></div>                                          
                                        <hr style='max-width: 100%; color: #FF6600; height: 2px; opacity: 1'>
                                        </div>
                                        <img src='assets/images/gallery/gallery-three5.jpg' alt='Voucher Image' style='float: right;'>
                                    </div>";                                   
                                }
                            } else {
                                echo "<p>No active vouchers available.</p>";
                            }

                            // Đóng kết nối
                            $conn->close();
                            ?>
                        </div>                  
                    </div>
                    <div class="col-lg-5">
                        <div class="promo-wrapper  mt-3" id="voucher-container1" >
                            <?php
                            // Kết nối với cơ sở dữ liệu
                            $conn = new mysqli('localhost', 'root', '', 'pizzahut');

                            // Kiểm tra kết nối
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Truy vấn để lấy các voucher đang hoạt động
                            $sql = "SELECT * FROM vouchers1 WHERE status = 'active' AND valid_from <= NOW() AND valid_to >= NOW()";
                            $result = $conn->query($sql);

                            // Kiểm tra nếu có dữ liệu
                            if ($result->num_rows > 0) {
                                // Lặp qua từng voucher và hiển thị thông tin
                                while ($row = $result->fetch_assoc()) {
                                    $valid_to = date("F j, Y, g:i a", strtotime($row['valid_to']));
                                    $discount = intval($row['discount']);
                                    echo "<div class='flex maKm  mt-3'>
                                            <div class='promo-detail'> PIZZA COUPON
                                            <div class='promo-detail1'> ENJOY THE BEST PIZZA AT LOWER PRICES </div>
                                            <div class='flex promo-detail2'>
                                                <div class='left'> SPECIAL </div>
                                                <div class='right'>" .  $discount . "% OFF </div>
                                            </div>
                                            <div class='promo-detail3'> VALID DATE UNTIL: <span>" . $valid_to . "</span> 
                                            <button class='copy-btn' data-code='" . $row['code'] . "'>Copy</button></div>                                          
                                        <hr style='max-width: 100%; color: #FF6600; height: 2px; opacity: 1'>
                                        </div>
                                        <img src='assets/images/gallery/gallery-three5.jpg' alt='Voucher Image' style='float: right;'>
                                    </div>";
                                }
                            } else {
                                echo "<p>No active vouchers available.</p>";
                            }

                            // Đóng kết nối
                            $conn->close();
                            ?>
                        </div>
                    </div>
                    <button id="load-more-btn"> <i class='bx bx-expand-vertical'></i></button>   
                    <!-- Lọc voucher -->
                    
                </div>
            </div>
        </section>


        <!-- End Coupon List -->
        <!-- Newsletter Area start --> 
        <section class="newsletter-area py-65 mb-5 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title rmb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">join our newsletter</span>
                            <h2>subscribe follow newsletter to get more updates</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-form-wrap" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <h6>Hurry up to join us to get more offer, JOIN FOR HOT OFFERS</h6>
                            <form class="newsletter-form style-two mt-15" action="#">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button class="theme-btn style-two" type="submit">Subscribe <i class="far fa-arrow-alt-right"></i></button>
                            </form>
                            <div class="check-field mt-15">
                                <input id="update-news" type="checkbox">
                                <label for="update-news">Get 15 days update news & latest offer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter-shapes">
                <div class="shape">
                    <img src="assets/images/shapes/newsletter-pizza-shape.png" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Newsletter Area end -->
        <!-- footer area start -->
        <footer class="main-footer bgc-black pt-130 rpt-100 rel z-1" style="background-image: url(assets/images/background/footer-bg.png);">
            <div class="widget-area pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget footer-text" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="assets/images/logos/logo2.png" alt="Logo"></a>
                                </div>
                                <p>Welcome to our pizza shop, where every slice is crafted fresh with high-quality ingredients and a passion for great flavor!</p>
                                <div class="social-style-one mt-15">
                                    <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                    <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                    <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="contact.html"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-6">
                            <div class="footer-widget footer-links" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>popular food</h5>
                                </div>
                                <ul class="two-column">
                                    <li><a href="product-details.html">Margherita Pizza</a></li>
                                    <li><a href="product-details.html">Pepperoni Pizza</a></li>
                                    <li><a href="product-details.html">Hawaiian Pizza</a></li>
                                    <li><a href="product-details.html">BBQ Chicken Pizza</a></li>
                                    <li><a href="product-details.html">Veggie Supreme Pizza</a></li>
                                    <li><a href="product-details.html">Four Cheese Pizza</a></li>
                                    <li><a href="product-details.html">Meat Lover’s Pizza</a></li>
                                    <li><a href="product-details.html">Seafood Pizza</a></li>
                                    <li><a href="product-details.html">Spicy Italian Pizza</a></li>
                                    <li><a href="product-details.html">Truffle Pizza</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-5 col-sm-6">
                                    <div class="footer-widget footer-contact" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                                        <div class="footer-title">
                                            <h5>contact us</h5>
                                        </div>
                                        <ul>
                                            <li>100 Phuoc Tuong 5, Hoa Phat, Cam Le, Da Nang</li>
                                            <li><a href="mailto:wellfood@gmail.com"><u>laranapizza@gmail.com</u></a></li>
                                            <li><a href="callto:+(1)0987654321">+(84) 123456789</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-6">
                                    <div class="footer-widget opening-hour" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                                        <div class="footer-title">
                                            <h5>opening hour</h5>
                                        </div>
                                        <ul>
                                            <li>Monday – Friday: <span>8am – 4pm</span></li>
                                            <li>Saturday: <span>8am – 12pm</span></li>
                                        </ul>
                                        <div class="any-question mt-20">
                                            <h5>Have any questions?</h5>
                                            <a href="#" class="theme-btn style-two">let’s talk us <i class="far fa-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-15">
                <div class="container">
                    <div class="row">
                    </div>
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="fas fa-arrow-alt-up"></i></button>
                </div>
            </div>
        </footer>

    </div>
    <script> document.getElementById('load-more-btn').addEventListener('click', function() {
            var voucherContainer = document.getElementById('voucher-container');
            
            // Thay đổi chiều cao của container để hiển thị tất cả các voucher
            voucherContainer.style.maxHeight = 'none';  // Loại bỏ giới hạn chiều cao
        
            // Ẩn nút "Xem thêm" sau khi nhấn
            this.style.display = 'none';
        });
        document.getElementById('load-more-btn').addEventListener('click', function() {
            var voucherContainer = document.getElementById('voucher-container1');
            
            // Thay đổi chiều cao của container để hiển thị tất cả các voucher
            voucherContainer.style.maxHeight = 'none';  // Loại bỏ giới hạn chiều cao     
        });
              </script>
    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/circle-progress.min.js"></script>
    <!-- Skillbar -->
    <script src="assets/js/skill.bars.jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  AOS Animation -->
    <script src="assets/js/aos.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>
</body>

</html>