<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Hub Contact</title>
	<meta charset="utf-8" >
	<meta name="description" content="">
	<meta name="keywords" content="">
	<?php
		$rootDir = $_SERVER['DOCUMENT_ROOT'];
		$path =$rootDir."/ParthHub-CMFiles/headfile.php";
		include($path);
	?>


</head>
<body>
	<?php
		$path =$rootDir."/ParthHub-CMFiles/cmfile.php";
		include($path);
	?>
	<div class="mdiv container">
		<?php
			$path =$rootDir."/ParthHub-CMFiles/navfile.php";
			include($path);
		?>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinktop.php";
			include($path);
		?>
		<p id="success"></p>
		<div class="fmpg_hd"><h1 class="contact-title">Advertise with PathHub.com</h1><span></span></div>


            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div style="padding:0 10px;">
                        <h3 class="title-bold">Parth Hub Contact Info</h3>
                        <p>Please help us serve you better by sharing the following information.
                        </p>
                    </div>
                    <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="contact-info">
                            <p>Parth Hub Education India, <span><a href="http://www.parthhub.com" target="_blank">www.parthhub.com</a></span></p>
                        </div>
                    </div>
                     <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-phone"></i></div>
                        <div class="contact-info">
                            <p>+91-8299704087</p>
                        </div>
                    </div>
                     <div class="contact-section">
                        <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                        <div class="contact-info">
                            <p><span style="word-spacing:0.8em;">contact@parthhub.com</span></p>
                        </div>
                    </div>
                </div>
				<div>
				</div>
			</div>

<div class="well well-sm">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-caption">
                        <h1 class="contact-title">Don’t Be Shy, Talk to Us.</h1>
                        <p class="contact-text"><br>Here is a few approaches to get in touch with us. It would be ideal if you send an email, fill the contact form <strong>I'm looking forward to speaking with you.</strong>
                        </p>
                    </div>
             </div>
        </div>
    </div>
</div>
<?php
			$path =$rootDir."/ParthHub-CMFiles/connection.php";
			include($path);

			function input_data($data) {
			 $data = trim($data);
			 $data = stripslashes($data);
			 $data = htmlspecialchars($data);
			 return $data;
			}

			if(isset($_POST["sendmess"])){
				$message=nl2br(htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8'));
				$name=mysqli_real_escape_string($conn,input_data($_POST['name']));
				$subject=mysqli_real_escape_string($conn,input_data($_POST['subject']));
				$email=mysqli_real_escape_string($conn,input_data($_POST['email']));
				$phone=mysqli_real_escape_string($conn,input_data($_POST['phone']));
				$sql="INSERT INTO user_query(name,email,phone,subject,message) VALUES('$name','$email','$phone','$subject','$message')";
				if(mysqli_query($conn,$sql)){
					$to="manishsharma.nitsri@gmail.com";
					$headers = 'From:Contact@parthhub.com' . "\r\n";
					mail($to, $subject, $name." ".$email." ".$phone." ".$_POST['message'], $headers);
				?>

				<script type="text/javascript">
					$(document).ready(function(){
						$("#success").html("* Your query has been sent successfully! We'll reply you shortly.").css('color','#2eb82e');
					 });
				</script>
		<?php
				}
				else{
					?>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#success").html("* Error!!! Your query is not made. Try again.").css('color','red');;
					 });
				</script>
		<?php
				}


			}
		?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="/Contact Us/contact_us.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
						<div class="form-group">
                            <label for="phone">
                                Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="">+91</span>
                                </span>
                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Mobile Number" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="service">General Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Support</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Write Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="sendmess" class="btn btn-primary pull-right" id="btnContactUs">Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Parth Hub Education</strong><br>
                NIT Srinagar J&K, INDIA.<br>
            </address>
            <address>
				<strong>Phone:</strong> +91-8299704087<br>
                <strong>Email:</strong><a href="mailto:contact@parthhub.com"> contact@parthhub.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinkbottom.php";
			include($path);

			$path =$rootDir."/ParthHub-CMFiles/footerfile.php";
			include($path);
		?>
	</div>

</body>

</html>
