<?php
session_start();
if(isset($_GET['page'])){
	$pages=array("chemistry_test_1","mathematics_test_1","physics_test_1","chemistry_test_2","mathematics_test_2","physics_test_2","chemistry_test_3","mathematics_test_3","physics_test_3");
	if(in_array($_GET['page'],$pages))
		$_page=$_GET['page'];
	else
		$_page="";
}else
	$_page="";

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Hub</title>
	<meta charset="utf-8" >
	<meta name="description" content="Learn and practice Aptitude questions and answers with explanation for interview, competitive examination and entrance test.">
	<meta name="keywords" content="aptitude, questions, answers, interview, placement, papers, engineering, electronics, civil, mechanical, networking, hr, c, 2015, 2016, reasoning, program, verbal, gk, knowledge, language, explanation, solution, problem, online, test, exam, quiz">
	<meta name="theme-color" content="#012b72">
	<meta name="msapplication-navbutton-color" content="#012b72">
	<meta name="apple-mobile-web-app-status-bar-style" content="#012b72">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" >
	<script src="../../jquery-3.1.0.js"></script>
	<script src="../../manish-script.js"></script>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<link rel="shortcut icon" href="../../title.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut("slow");
		});
	</script>
	<style>
		#myBtn {
			right:0;
			
			cursor: pointer;
			padding: 15px;
			border-radius: 10px;
		}
		#myBtn,#timer{
			display: none;
			bottom: 0;
			color: #fff;
			position: fixed;
			z-index: 99;
			background-color:#012b72;
			outline: none;
			border: none;
		}
		#myBtn:hover {
			box-shadow:0 2px 3px 2px #DDD;
		}
		#timer{
			
			min-width:0;
			min-height:0;
			padding:10px;
			font-weight:bold;
			font-size:15px;
			left:0;
		}
	</style>
	
	<script>
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0; // For Chrome, Safari and Opera 
			document.documentElement.scrollTop = 0; // For IE and Firefox
		}
	</script>



</head>
<body>
	<div><button id="timer" title="Timer"></button></div>
	<div><button onclick="topFunction()" id="myBtn" title="Go to top">▲</button></div>
	<div class="mdiv container">
		<header>
			<div class="head row">
				<div class="head-item-type col-xs-7 col-sm-8 col-lg-9">
					<div><img src="../../logo3.png" alt="Path Hub" width="250px" height="90px" alt="Parth Hub"></div>
					
					<!--
					<div class="sldiv">
						<ul class="toplists">
							<li class="toplist"><a href="index.php?page=login">Log In</a></li>
							<li class="toplist"><a href="#">Sign Up</a></li>
						</ul>
					</div>
					-->
				</div>
				<div class="head-rgt-cont col-xs-5 col-sm-4 col-lg-3">
				</div>
			</div>
			<div class="head-nav">
				<nav>
				
					<ul class="navoul">
						<li class="navoli nvlisp" ><a id="navlink" href="../../index.php">HOME</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Online Test/online_test.php">ONLINE TEST</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../jee_main.php">JEE MAIN</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../JEE Advanced/jee_advanced.php">JEE ADVANCED</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Class 12th/class_12th.php">CLASS 12TH</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Class 11th/class_11th.php">CLASS 11TH</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Class 10th/class_10th.php">CLASS 10TH</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Class 9th/class_9th.php">CLASS  9TH</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="../../Computer Science/cmputer_science.php">COMPUTER SCIENCE</a></li>
						<li class="navoli"><a id="navlink" href="../../Formula Book/formula_book.php">FORMULA BOOK</a></li>
					</ul>
					
				</nav>
			</div>
		</header>
			<div class="container-fluid row">
				<div class="div-container-left col-lg-8 col-sm-12 col-xs-12">
					<div class="headcont">
						<div class="headtop">
							<h4>JEE Main Test Paper - 2018</h4>
							<h4 style="margin-top:15px;">Practice Test Paper</h4>
							<h4></h4><br />
						</div>
						<div><span>Time Allowed : 1 hours</span></div>
						<div><span>Marks: 120</span></div>
					</div>
					
				</div>
				<div class="col-lg-4 col-sm-4 col-xs-12">
				</div>
			</div>
			<div class="container-fluid com-container row">
				<div class="div-container-left col-lg-8 col-sm-12 col-xs-12">
					
					<div >
						<?php include($_page.".php");?>
					</div>
				
				</div>
				
				<div class="div-container-right col-lg-4 col-sm-4 col-xs-12">
					<div class="nlcont">
						<ul class="nlists">
							<li class="nlthead"><a href="../../Contact Us/contact_us.php">Advertisement Here</a></li>
							<li class="nlist"><a href="../../Contact Us/contact_us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
				
			</div>

		<div class="horizon-ad">
			<div class="hr-ads">
				<div class="nlcont">
						<ul class="nlists">
							<li class="nlthead"><a href="../../Contact Us/contact_us.php">Advertisement Here</a></li>
							<li class="nlist"><a href="../../Contact Us/contact_us.php">Contact Us</a></li>
						</ul>
				</div>
			</div>
		</div>
		<footer>
			<div class="footpad">
				<div class="fs">
				<p>
					Copyright © 2017-2018 Parth Hub for Physics, Chemistry, Mathematics and Computer Science Education, Parth Hub. All Right Reserved.
				</p>
				<p>
					Contact us:<span style="color:rgb(170, 204, 0);"> info@parthhub.com</span>
				</p>
				</div>
				<div class="slmedia">
					<div class="followdiv"> FOLLOW US</div>
					<div style="margin:5px 0;">
						<a href="#" class="fa fa-facebook" target="_blank" title="Facebook"></a>
						<a href="https://www.youtube.com/channel/UCtthsQVJZmLw2-Bhx6NGF8g" class="fa fa-youtube" target="_blank" title="Youtube"></a>
						<a href="https://twitter.com/ParthHub" class="fa fa-twitter" target="_blank" title="Twitter"></a>
						<a href="#" class="fa fa-instagram" target="_blank" title="Instagram"></a>
						<a href="https://plus.google.com/u/2/116020788461623463937" class="fa fa-google" target="_blank" title="Google+"></a>
						<a href="https://in.pinterest.com/parthhub/" class="fa fa-pinterest" target="_blank" title="Pinterest"></a>
						
					</div>
				</div>
			</div>
		</footer>

	</div>
	
</body>

</html>