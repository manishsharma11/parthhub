<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="xlogo.png" type="image/png">
    <title>My Library</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="jquery-3.1.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="title.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script type="text/javascript"  src="index.js"></script>
    

<style>


</style>

 <script>
$(document).ready(function(){

	$("#myBtn").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#myBtn').fadeIn();
			} else {
				$('#myBtn').fadeOut();
			}
		});

		$('#myBtn').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script> 
</head>

<body style="background: #EEE;">
<div><button id="myBtn" title="Go to top">▲</button></div>
<?php
if(isset($_SESSION['error']))
    {  
        
      ?>
      <div class="container-fluid">
        <div class="log-hide" id="hide">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img">
					<br/><img width="140" height="140" src="error.png" />
                    <br/><br/><br/><div><h3 style="color:red;font-size: 18px;"><b><?php echo $_SESSION['error'];?></b></h3></div>
				</div>
			</div>
			
		</div>
	</div>
    </div>
      <?php
      
       unset($_SESSION['error']);   
    }
	?>
 <header class="header-top headbig" >
     <div class="container-fluid" style="">
    <div class="container-fluid row" >
	<div class="logop col-lg-5 col-sm-4 col-xs-10 mpzero" style="margin:0;padding:0;">				
            <a href="index.php">
		<img width="170" height="80" src="logo.jpg">
            </a>
	</div>
        <div class="col-lg-7 col-sm-8 col-xs-2 row mpzero" style="margin:0;padding:0;height:80px;">
            <div style="position:relative;right:0;top:15px;text-align:right;">
                 
                    <div class="col-lg-12 col-sm-12 row smxs" style="margin:0;padding:0;">
                          
                        <div class="col-lg-10 col-sm-10" style="">
                                    <div class="input-group custom-search-form">
                                        <input id="search" type="text" placeholder="Search">
                                        <button id="search-submit" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

                                    </div>
                                </div>
                        <div class="col-lg-2 col-sm-2 image dropdown" style="padding-right:0;text-align:right;">
                            <a id="navlink" style="" class="dropdown-toggle" data-toggle="dropdown" href="#"><span><img style="height:40px;width:40px;" class="img-circle avatar" src="user.png"></span> </a>
                            <ul class="dropdown-menu pt-ddul dropdown-menu-right">
								<li class="navoli"> <button class="btn_login" onclick="cambiar_login()">LOGIN</button></li>
                                <li class="navoli"> <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button></li>
				
                            </ul>
                        </div>
                          
                    </div>
                        <div class="smhide">
				
				<div class="navbar-header mpzero" style="padding-top:15px;">
				  <button type="button" class="" style="padding:0;border:none;margin:0;background: #fff;" onclick="openNav()">
					
					<span style="font-size:30px;color:#AAA;background:#fff;" class="glyphicon glyphicon-menu-hamburger"></span>
				  </button>
				</div>
				<div class="mpzero" >
					<div id="mySidenav" class="sidenav">
                                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                            <ul class="sideullist">
                                                <li class="userd"><span class="rd"><img style="height:40px;width:40px;" class="img-circle avatar" src="user.png"></span> </li>
                                                <li><button class="btn_login" onclick="cambiar_login()">LOGIN</button></li>
                                                <li><button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button></li>
                                            </ul>
                                            <hr/>
                                            <ul class="sideullist">
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Clients</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
					</div>

				</div>
			</div>
            
            </div>
        </div>
    </div>
     </div>
</header> 
            <div class="container" style="padding:0;height:150px;"></div>       

<div class="container xyzcss" style="padding:0;height:500px;margin-bottom:80px;">
	<div class="signup__container xyzcss row col-lg-12 mpzero" style="padding:0;margin:0;">
		<div class="col-lg-5 col-sm-12 col-xs-12 mpzero" style="padding:0;margin:0;">
			<div class="container__child signup__thumbnail ">
			  <div class="thumbnail__content text-center">
				  <!--<h1 class="heading--primary text" style="color:#555;font-size:70px;">Welcome to Cloud.</h1>-->
				<br/><br/><br/><br/><br/><h3 class="heading--secondary text" style="color:#555;">Welcome to Library</h3><br/><br/><br/>
				<h3 style="color:#555;" class="text">A safe place for all your recodes.<br></h3>
			  </div>
			  
			</div>
		</div>
        
        <div class="row col-lg-7 col-sm-12 col-xs-12" style="position:relative;top:0;margin:0;padding:0;min-height:100%;">
            <div class="col-lg-11 col-sm-11 col-xs-12 automar" style="padding:0;">
                
                    
                        <div class="cont_info_log_sign_up col-lg-12 col-sm-12 col-xs-12 row" style="margin:0;padding-bottom:65px;">
                            <div class="col_md_login col-lg-6 col-sm-6 col-xs-12" style="">
                                <div class="cont_ba_opcitiy">
                                    <h3 style="color:#fff;">ADMIN LOGIN</h3>  
                                    <p></p> 
                                    <button class="btn_login" onclick="cambiar_login()">LOG IN</button>
                                </div>
                            </div>
                            <div class="col_md_sign_up col-lg-6 col-sm-6 col-xs-12" style="">
                                <div class="cont_ba_opcitiy">
                                    <h3 style="color:#fff;">STUDENT LOGIN</h3>
                                    <p></p>
                                    <button class="btn_sign_up" onclick="cambiar_sign_up()">LOG IN</button>
                                </div>
                            </div>
                        </div>
					
                        
                        
                        
                        <div class="cont_forms col-lg-12 col-sm-12 col-xs-12 mpzero" style="padding:0;margin:0;">
                           <form action="login.php" method="post">
                            <div class="cont_form_login col-lg-6 col-sm-12 col-xs-12" style="">
                                <a href="javascript:void(0)" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                                <h2 style="font-size:20px;">ADMIN LOGIN</h2>
                                <input type="text" name="username" placeholder="Username / College ID" required/>
                                <input type="password" name="pass" placeholder="Password" required/>
                                <button style="margin-top:30px;" name="submit_log" class="btn_login" onclick="cambiar_login()">LOGIN</button>
                            </div>
                           </form>
                            <form action="register.php" method="post">
                            <div class="cont_form_sign_up col-lg-6 col-sm-12 col-xs-12" style="">
                                    <a href="javascript:void(0)" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                                    <h2 style="font-size:20px;">STUDENT LOGIN</h2>
                                    <input type="text" name="username" placeholder="Username / Enrollment / Email" required/>
									<input type="password" name="pass" placeholder="Password" required/>
                                    <button style="margin-top:30px;" name="submit" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                            </div>
                            </form>
                        </div>
                    
					
            </div>
        </div>
    
	</div>
</div>
            
            





      
        <div class="container-fluid" style="margin-bottom:80px;padding:0px;background: #fff;text-align:left;">
    <div class="container" style="padding:100px 0;">
        
        
        <div class="bg-white col-lg-12" >
            <div class="" style="margin-bottom:30px;"><img class=""  src="title.jpg" alt="Drive file types icons"></div>
            <h2 style="color:#888;">Get started with your library</h2>
            <button class="btn_login" onclick="cambiar_login()" style="font-weight:bold;">Go To Library</button>
        </div>
	
    </div>

</div>



<div class="container-fluid footpad mpzero" style="padding-top:20px;background: #fff;color:#888;">
    
    <div class="container" style="margin-bottom:50px;">
        
	
    </div>
    <footer>
			<div class="">
				<!--<div class="followdiv">
				
				</div>-->
				<div class="slmedia">
                                    <p>
					Copyright © 2017-2018 Library. All Rights Reserved.
				</p>
				<p>
					<!--<a href="/Contact Us/contact_us.php"><span style="color:#AAA;">Contact us:</span></a> <a href="mailto:contact@parthhub.com"><span style="color:rgb(170, 204, 0);">contact@parthhub.com<span></a>-->
				</p><br/>
					<div style="margin:5px 0;">
						<a href="https://www.facebook.com/parthhub" class="slm fa fa-facebook" target="_blank" title="Facebook"></a>
						<a href="https://plus.google.com/u/2/116020788461623463937" class="slm fa fa-google" target="_blank" title="Google+"></a>
						<a href="https://www.youtube.com/channel/UCtthsQVJZmLw2-Bhx6NGF8g" class="slm fa fa-youtube" target="_blank" title="Youtube"></a>
						<a href="https://twitter.com/ParthHub" class="slm fa fa-twitter" target="_blank" title="Twitter"></a>
						<a href="https://www.instagram.com/parth_hub/" class="slm fa fa-instagram" target="_blank" title="Instagram"></a>
						<a href="https://in.pinterest.com/parthhub/" class="slm fa fa-pinterest" target="_blank" title="Pinterest"></a>
					</div>
				</div>
			</div>
		</footer>
    </div>
      <!-- <%}
else{

        response.sendRedirect("uprofile.jsp");
        return;

}
%>-->
</body>
</html>
