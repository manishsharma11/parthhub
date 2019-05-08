<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Hub</title>
	<meta charset="utf-8" >
	<meta name="description" content="Learn and solve bank po, gate, scc, jee main papers, jee advanced papers and class 12th, class 11th, class 10th, class 9th board papers with its solutions, includes online test series.">
	<meta name="keywords" content="previous year papers, bank PO, SCC, banking, IBPS, SBI PO, online test, JEE Main, jee advanced, cbse board, icse board, online test, JEE Main paper and solution, jee main online test, JEE advanced paper and solution, jee advanced online test, cbse board papers, cbse board paper online test, class 12th board papers, GATE, GATE papers, computer science, informaton technology, civil, electrical, electronics, mechanical, chamical, metallury, engineering, GATE online test">
	<?php include("./ParthHub-CMFiles/headfile.php");?>

</head>
<body>
	<?php include("./ParthHub-CMFiles/cmfile.php");?>
	<div class="container w1oo zsp" style="">
		<header class="notranslate pldiv shfr" style="">
			<div class="head row">
				<div class="head-item-type col-xs-12 col-sm-4 col-lg-4">
					<div><a style="display:block;" href="/"><img src="/logo.png" alt="Path Hub" width="235px" height="70px" alt="Parth Hub"></a></div>
				</div>
				<div class="head-rgt-cont col-xs-12 col-sm-8 col-lg-8 row">
					<div class="col-xs-12 col-sm-8 col-lg-8" style="padding:0;">
						<!--<div class="sldiv" >
							<script>
							  (function() {
								var cx = '014630803468685765957:zggkoffafjc';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:searchbox-only></gcse:searchbox-only>
						</div>-->
						<div class="mst col-lg-10" style="padding:0;">
							<i style="top:5px;font-size:20px; color:#CCC;" class="glyphicon glyphicon-search"></i><input id="search" style="" type="text" placeholder="Search for Cources, Topics, study materials">
							<button id="search-submit" style="display:none;"class="btn btn-default" type="submit"></button>
						</div>
					</div>
						<div class="col-xs-12 col-sm-4 col-lg-4 mpzero nanohd">
							<ul class="pt-ddul">
								<li class="pt-li"><a class="lrg" href="#"><span><img style="height:40px;width:40px;" class="img-circle avatar" src="/user.png"></span> Login</a></li>
								<li class="pt-li"><a class="rlg" href="#">Register</a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="head-nav">
				<nav>
					<ul class="navoul">
						<li class="navoli nvlisp"><a id="navlink" href="/index.php">HOME</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="/Online Test/onlinetest.php">ONLINE TEST</a></li>
						<li class="navoli nvlisp"><a id="navlink" href="/OLYMPIAD/olympiad.php">OLYMPIAD</a></li>
						<li class="navoli nvlisp dropdown nanohd">
						  <a id="navlink" class="dropdown-toggle" data-toggle="dropdown" href="#">CLASSES <span class="caret"></span></a>
						  <ul class="dropdown-menu pt-ddul">
							<li class="navoli"><a id="navlink" href="/Class 9th/class9th.php">CLASS 9TH</a></li>
							<li class="navoli"><a id="navlink" href="/Class 10th/class10th.php">CLASS 10TH</a></li>
							<li class="navoli"><a id="navlink" href="/Class 11th/class11th.php">CLASS 11TH</a></li>
							<li class="navoli"><a id="navlink" href="/Class 12th/class12th.php">CLASS 12TH</a></li>
						  </ul>
						</li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Class 10th/class10th.php">CLASS 10TH</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Class 12th/class12th.php">CLASS 12TH</a></li>
						<li class="navoli nvlisp dropdown nanohd">
						  <a id="navlink" class="dropdown-toggle" data-toggle="dropdown" href="#">JEE <span class="caret"></span></a>
						  <ul class="dropdown-menu pt-ddul" style="">
							<li class="navoli"><a id="navlink" href="/JEE Main/jeemain.php">JEE MAIN</a></li>
							<li class="navoli"><a id="navlink" href="/JEE Advanced/jeeadvanced.php">JEE ADVANCED</a></li>
						  </ul>
						</li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/JEE Main/jeemain.php">JEE MAIN</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/JEE Advanced/jeeadvanced.php">JEE ADVANCED</a></li>
						<li class="navoli nvlisp dropdown nanohd">
						  <a id="navlink" class="dropdown-toggle" data-toggle="dropdown" href="#">MEDICAL <span class="caret"></span></a>
						  <ul class="dropdown-menu pt-ddul" style="">
							<li class="navoli"><a id="navlink" href="/NEET/neet.php">NEET − UG</a></li>
							<li class="navoli"><a id="navlink" href="/AIIMS/aiims.php">AIIMS</a></li>
						  </ul>
						</li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/NEET/neet.php">NEET − UG</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/AIIMS/aiims.php">AIIMS</a></li>
						<li class="navoli nvlisp tbhd tbdvs"><a id="navlink" href="/GATE/gate.php">GATE</a></li>
						<li class="navoli nvlisp tbhd tbdvs"><a id="navlink" href="/Bank PO/bankPO.php">BANK PO </a></li>
						<li class="navoli nvlisp tbhd tbdvs"><a id="navlink" href="/SSC/ssc.php">SSC</a></li>
						<li class="navoli nvlisp tbhd tbdvs"><a id="navlink" href="/Common Aptitude Test/cat.php">CAT</a></li>
						<li class="navoli nvlisp dropdown ugpgex nanohd">
						  <a id="navlink" class="dropdown-toggle" data-toggle="dropdown" href="#">UG EXAMS <span class="caret"></span></a>
						  <ul class="dropdown-menu pt-ddul">
							<li class="navoli"><a id="navlink" href="/GATE/gate.php">GATE</a></li>
							<li class="navoli"><a id="navlink" href="/Bank PO/bankPO.php">BANK PO </a></li>
							<li class="navoli"><a id="navlink" href="/SSC/ssc.php">SSC</a></li>
							<li class="navoli"><a id="navlink" href="/Common Aptitude Test/cat.php">CAT</a></li>
						  </ul>
						</li>
						<li class="navoli nvlisp tbhd"><a id="navlink" href="/Placement/placement.php">PLACEMENT</a></li>
						<li class="navoli nvlisp tbhd"><a id="navlink" href="/Aptitude/">APTITUDE</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Verbal/">VERBAL</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Data Interpretation/">DATA Interpretation</a></li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Reasoning/">REASONING</a></li>
						<li class="navoli nvlisp tbhd tbdvs"><a id="navlink" href="/Verbal/">VERBAL</a></li>
						<li class="navoli nanohd dropdown nanohd">
						  <a id="navlink" class="dropdown-toggle" data-toggle="dropdown" href="#">MORE <span class="caret"></span></a>
						  <ul class="dropdown-menu pt-ddul mumgrt">
							<li class="navoli"><a id="navlink" href="/Placement/placement.php">PLACEMENT</a></li>
							<li class="navoli"><a id="navlink" href="/Aptitude/">APTITUDE</a></li>
							<li class="navoli"><a id="navlink" href="/Data Interpretation/">DATA INTERPRETATION</a></li>
							<li class="navoli"><a id="navlink" href="/Verbal/">VERBAL</a></li>
							<li class="navoli"><a id="navlink" href="/Reasoning/">REASONING</a></li>
							<li class="navoli"><a id="navlink" href="/General Knowledge/">GK</a></li>
							<li class="navoli"><a id="navlink" href="/Formula Book/formulabook.php">FORMULA BOOK</a></li>
						  </ul>
						</li>
						<li class="navoli nvlisp smdvs"><a id="navlink" href="/Formula Book/formulabook.php">FORMULA BOOK</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="pdiv">
			<?php require("home.php");?>
			<?php include("./ParthHub-CMFiles/adslinkbottom.php");?>
		</div>
		<div class="pldiv">
			<?php include("./ParthHub-CMFiles/footerfile.php");?>
		</div>
	</div>

</body>

</html>
