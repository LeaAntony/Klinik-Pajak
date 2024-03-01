<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- bootstrap v4 css -->
    <script src="js/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['./css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>
    <link rel="stylesheet" type="text/css" href="css/dashboard/bootstrap.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/dashboard/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard/atlantis.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="css/dashboard/demo.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/owl.carousel.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/rsmenu-main.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/magnific-popup.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/style.css">
    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/dashboard/responsive.css">
</head>
<style>
    #rs-header .menu-sticky {
        background-color: #ffff;
        position: fixed;
        z-index: 999;
        margin: 0 auto;
        padding: 0;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    }

    /* Custom CSS untuk mengatur tinggi kartu */
    .single-about {
        height: 300px;
    }

    .single-about>p {
        color: black;
    }

</style>
<header id="rs-header" class="">
    <!-- Header Menu Start -->
    <div class="menu-area menu-sticky sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="#"><img src="images/logo.png" style="width: 140px; right: 20px;" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 mobile-menu-area">
                    <div class="rs-menu-area display-flex-center">
                        <div class="main-menu">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav style="margin-left: 90px;" class="rs-menu">
                                <ul class="nav-menu">
                                    <li class="menu-item-has-children">
                                        <a href="index.php">Beranda</a>
                                    </li>
                                    <li><a href="layanan.php">Layanan</a></li>
                                    <li><a href="kalkulator.php">Kalkulator</a></li>
                                    <li class="menu-item-has-children"><a href="https://taxcenter-polibatam.id">Aplikasi
                                            Pajak</a>
                                    </li>
                                    <li class="rs-mega-menu mega-rs menu-item-has-children">
                                        <a href="#">Peraturan</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="pajak_daerah.php">Peraturan Pajak Pusat</a>
                                                            </li>
                                                            <li><a href="pajak_daerahbatam.php">Peraturan Pajak Daerah
                                                                    Kota Batam</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="" href="konsultasi/login2.php">Login</a>
                                    </li>
                                    <li>
                                        <a class="" href="./konsultasi/user/account.php">Profil</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body>

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Kategori Perbidang Usaha</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="#"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Kategori Perbidang Usaha</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Privacy Policy Start -->
    <div class="neuron-about gray-bg pt-90 pb-100 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-45">
                <h2 class="title extra-none title-color mb-0">Layanan Kami</h2>
            </div>
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="#">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Konsultasi</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Layanan konseling perpajakan yang dilaksanakan oleh expert
                                    perpajakan yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang
                                    dibantu.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="#">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Pelatihan atau Sertifikasi</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan
                                    pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang
                                    perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="#">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Berita</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan informasi terkait peristiwa-peristiwa yang berkaitan
                                    dengan perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 md-mb-40">
                    <a href="#">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Kategori Perbidang Usaha</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Memberikan layanan edukasi perpajakan yang terkait bidang-bidang
                                    usaha tertentu secara spesifik untuk masing-masing bidang usaha.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 md-mb-40">
                    <a href="#">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Forum Pajak</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Tempat untuk bertanya dan berbagi ilmu di bidang perpajakan.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                    <div class="about-widget pr-20">
                        <div class="footer-logo">
                            <img style="width:175px; margin-right:300px; margin-top:-30px;" src="images/logo.png" alt="Footer Logo">
                        </div>
                        <div class="footer-info">
                            <p style="text-align: justify;" class="footer-desc">Sudut Pajak merupakan layanan pajak berbasis website dapat memberikan layanan perpajakan online secara gratis baik konsultasi maupun secara teori </p>
                        </div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column">
                    <h4 class="footer-title">Work Hours</h4>
                    <p>10.00 AM - 6.00 PM , Senin - Sabtu</p>
                    <p>Tim Dukungan dan Konsultasi kami tersedia 24 / 7 untuk menjawab pertanyaan Anda</p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                    <div class="footer-menu">
                        <h4 class="footer-title">Navigate</h4>
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <ul>
                                    <li><a href="">Profil</a></li>
                                    <li><a href="kalkulator.php">Kalkulator</a></li>
                                    <li><a href="">Aplikasi Pajak</a></li>
                                    <li><a href="">Peraturan</a></li>
                                    <li><a href="">Konsultasi</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="">Pelatihan atau Sertifikasi</a></li>
                                    <li><a href="">Berita</a></li>
                                    <li><a href="">Kategori Perbidang Usaha</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 single-footer-column">
                    <div class="footer-menu">
                        <h4 class="footer-title">Privacy & Tos</h4>
                        <ul>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright text-center">
                <p>© Copyrights 2023 <a href="#">Polibatam</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!-- modernizr js -->
<script src="js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="js/jquery.min.js"></script>
<!-- counter top js -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- rsmenu js -->
<script src="js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- Contact js -->
<script src="js/contact.form.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>
