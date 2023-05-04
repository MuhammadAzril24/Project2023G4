  <?php 
if(isset($_POST['submit']))
  {
    $review=$_POST['review'];

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
    <div id="modalDialog" class="modal">
        <div class="modal-content animate-top">
            <div class="modal-header">
                    <h4 class="modal-title">Feedback Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                    </button>
                </div>
             
                <span class="popup-seprator text-center"><i class="brd-rd50">Your Feedback</i></span>
                <form class="sign-form" name="review" onsubmit="return checkpass();" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <input class="brd-rd3" type="text" id="review" name="review" required="true" placeholder="Review">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>