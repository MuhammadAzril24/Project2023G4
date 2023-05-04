<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="\footer.css">
</head>
<footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="index.php" title="Home" itemprop="url" style="color:#fff">Food Ordering System</a></h1></div>
                                           
                                       
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">INFORMATION</h4>
                                            <ul>
                                                <li><a href="about-us.php" title="" itemprop="url">About us</a></li>
                                                <li><a href="contact-us.php" title="" itemprop="url">Contact us</a></li>
                                                <li><a class="review-popup-btn" id="mbtn" title="" itemprop="url">Review Us</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">My Account</h4>
                                            <ul>
                                                <li><a href="my-account.php" title="My Account" itemprop="url">My Account</a></li>
                                                <li><a href="cart.php" title="My Cart" itemprop="url">My Cart</a></li>
                                                <li><a href="my-account.php" title="My Order" itemprop="url">My Orders</a></li>
                                               <li><a href="track-order.php" title="Track Order" itemprop="url">Track Order</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">Authorise</h4>
                                            <ul>
                                              <li><a href="admin/" title="" itemprop="url">Admin Login </a></li>
                                              <li><a href="staff/" title="" itemprop="url">Staff Login </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>

        </footer><!-- footer -->

            <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description">Meathos Restaurant</p>
            </div>
        </div><!-- Bottom Bar -->

                                    <div id="modalDialog" class="modal">
                                        <div class="modal-content animate-top">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Feedback Form</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">x</span>
                                                </button>
                                            </div>
                                            <form method="post" id="contactFrm">
                                            <div class="modal-body">
                                            <!-- Form submission status -->
                                                <div class="response"></div>
                
                                            <!-- Contact form -->
                                                <div class="form-group">
                                                    <label>Message:</label>
                                                    <textarea name="message" id="message" class="form-control" placeholder="Your message here" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Submit button -->
                                                <button type="submit" class="btn btn-primary" name="msubmit">Submit</button>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                        <script>
                                            var modal = $('#modalDialog');
                                            var li = $('#mbtn');
                                            var span = $('.close');

                                            $(document).ready(function(){
                                            li.on('click', function(){
                                                modal.show();
                                                });

                                            span.on('click', function(){
                                                modal.hide();
                                                });
                                            });

                                            $('body').bind('click', function(e){
                                                if($(e.target).hasClass("modal")) {
                                                modal.hide();
                                                }
                                            });
                                        </script>

<?php 
if(isset($_POST['msubmit']))
  {
    $review=$_POST['message'];

    $query=mysqli_query($con, "insert into tblreview(review) value('$review')");
    if ($query) {
     echo "<script>alert('Thank you for your feedback!');</script>";
     echo "<script>window.location.href='index.php'</script>";
  }
  else
    {
       echo "<script>alert('Something Went Wrong. Please try again.');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}

 ?>