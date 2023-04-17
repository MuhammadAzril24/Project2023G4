<form class="form-horizontal" style="margin-left:360px;" method="POST" action="contact_query.php">
<h2>
    Feed Back Form with Captcha
</h2>
    <p class="full_name">
    <label for="full_name" style="font-size:18px; font-family:georgia; margin-top:10px;">Your Name</label>
        <input type="text" name="full_name" id="full_name" placeholder="Enter your full name . . . ." autofocus="autofocus" required/>
        
    </p>
        
    <p class="email">
    <label for="email" style="font-size:18px; font-family:georgia margin-top:10px;">Your Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email . . . ." required/>
        
    </p>    
    
    <p class="message">
    <label for="message" style="font-size:18px; font-family:georgia margin-top:10px;">Your Feedback</label>
        <textarea name="message" placeholder="Enter your feedback . . . ." required></textarea>
        
    </p>
    
<div class="control-group" style="float:left; margin-left:-185px;">
    <div class="controls">
    
    <img src="generatecaptcha.php?rand=<?php echo rand(); ?>" name="captcha_img" id='image_captcha' > 
    <a href='javascript: refreshing_Captcha();'><i class="icon-refresh icon-large"></i></a> 
    <script language='JavaScript' type='text/javascript'>
        function refreshing_Captcha()
        {
            var img = document.images['image_captcha'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
    </script>
    </div>
</div>

<br />
<br />
<br />

<div class="control-group" style="margin-left:-181px;">
    <div class="controls">
        <input id="code" name="code_confirmation" type="text" placeholder="Enter the code above . . . ." required></td>
    </div>
</div>
<div class="control-group" style="margin-left:-181px;">
    <div class="controls">
        <button type="submit" name="send_message" class="btn btn-success"><i class="icon-ok icon-large"></i> Submit</button>
    </div>
</div>

</form>