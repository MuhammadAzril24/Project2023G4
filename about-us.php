<?php
session_start();
include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering System | About us</title>

    

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body itemscope>
   
<?php include_once('includes/header.php');?>
        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">About Us</h1>
                            <span>Meathos Steak Restaurant</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
                                <div class="about-feat text-center wow fadeIn" data-wow-delay="0.2s">
                                    <h2 class="title3" itemprop="headline">Who are We?</h2>
                                    <img src="assets/images/about-us.png" alt="about-us.jpg" itemprop="image">
                                </div>
                               
                             
                                <div class="title1-wrapper text-center style2">
                                    <div class="title1-inner">
                                        <h2 itemprop="headline">About us</h2>
                                        <p itemprop="description"><p>Meathos gives luxurious steakhouse new depth and elegance by reimagining the steak dining experience. Guest can expect exquisite flavours, authentic creations and luxurious charm when visiting our premier steakhouse and elegent prive, At Marble 8, guests can experience elevated steakhouse dining where premium Wagyu and Angus are cooked to perfection, along with other seafood or vegetarian culinary options. Marble's 8 Wagyu and Angus beef come from some of the largest independent suppliers of beef located at Australia. Every cut available at Marble 8 has been handpicked by Chavlierre Modesto specifically based on his requirements of the marble 8 cut, which is also halal-certified</p></p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

           <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>

    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>