<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>"Express Global"</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
        
        <?php include ("include/top.php");?>

        <?php include ("include/header.php");?>

        <?php include ("include/nav.php");?>

        <?php include ("include/sticky_header.php");?>

    </header>
    <!--End Main Header -->
    
    <?php include ("include/banner.php");?>

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Us</span>
                            <h2>Express Global</h2>
                        </div>
                        <div class="message">We are ISO certified.</div>
                        <div class="text">At Express Global, we specialize in providing efficient and reliable port shipping, transport, and freight services. With a commitment to excellence, we offer end-to-end logistics solutions that connect businesses with global markets. Our vast network of shipping routes, advanced technology, and experienced team ensure that your goods are transported securely and on time, no matter where in the world you need them to go.</div>

                        <div class="link-box clearfix">
                            <a href="about_us.php" class="theme-btn btn-style-two"><span class="btn-title">More About</span></a>
                            <a href="tel:+91 9624352728" class="theme-btn call-btn"><i class="icon fa fa-phone-volume"></i> +91 96243 52728</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-layer" style="background-image: url(images/resource/about-img-1.jpg);">
                <figure class="image-box"><img src="images/resource/about-img-1.jpg" alt=""></figure>
                <span class="float-text">ABOUT US</span>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <?php include ("include/fact_section.php");?>

    <?php include ("include/services.php");?>

    <?php /*?><?php include ("include/testimonial.php");?> <?php */?>

    <?php include ("include/contac.php");?>

    <?php include ("include/clients.php");?> 

    <?php include ("include/footer.php");?> 

</div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>

</body>

</html>