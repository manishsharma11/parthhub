<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Hub</title>
	<meta charset="utf-8" >
	<meta name="description" content="JEE Advanced Online Test Paper 2016 Set 1 Chemistry Paper 2016">
	<meta name="keywords" content="online test, jee advanced paper, jee advanced 2016, jee advanced paper 2016, jee advanced paper online test, chemistry">
	<?php 
		$rootDir = $_SERVER['DOCUMENT_ROOT'];
		$path =$rootDir."/ParthHub-CMFiles/headfile.php";
		include_once($path);
		$path =$rootDir."/ParthHub-CMFiles/pagesys.php";
		include_once($path);
	?>
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
		.td-opt-ans{
			display:none;
		}
	</style>
	
	



</head>
<body>
	<div><button id="timer" title="Timer"></button></div>
	<?php
		$path =$rootDir."/ParthHub-CMFiles/cmfile.php";
		include_once($path);
	?>
	<div class="mdiv container">
		<?php
			$path =$rootDir."/ParthHub-CMFiles/navfile.php";
			include_once($path);
		?>
		<div style="padding-top:15px;clear:both;">
			<div class="movement">
				<a href="/">Home</a> » <a href="/JEE Advanced/jeeadvanced.php">JEE Advanced</a> » <a href="/Online Test/onlinetest.php">Online Test</a> » <a href="/JEE Advanced/JEE Online Test/Test Paper 2/"> Test Paper 2</a> » <a href="/JEE Advanced/JEE Online Test/Test Paper 2/">Set 1</a> » Chemistry
			</div>
		</div>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinktop.php";
			include_once($path);
		?>
			<div class="container-fluid row mpzero">
				<div class="div-container-left col-lg-9 col-sm-12 col-xs-12">
					<div class="headcont">
						<div class="headtop">
							<h4>JEE Advanced Practice Test Paper - 2 </h4>
							<h4 style="margin-top:15px;">Set 1 - Chemistry</h4>
							<h4></h4><br />
						</div>
						<div><span>Time Allowed : 1 hours</span></div>
						<div><span>Marks: 62</span></div>
					</div>
					
				</div>
				<div class="col-lg-3 col-sm-3 col-xs-12">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Hr Ad -->
					<ins class="adsbygoogle"
						style="display:inline-block;width:100%;max-height:100px;" 
						data-ad-client="ca-pub-3930864034326368" 
						data-ad-slot="1675037774"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
			<div class="container-fluid com-container row mpzero">
				<div class="div-container-left col-lg-9 col-sm-12 col-xs-12">
					
					<div >
						<?php include("chemistry.php");?>
					</div>
				
				</div>
				
				<?php
					$path =$rootDir."/ParthHub-CMFiles/adslinkright.php";
					include_once($path);
				?>
				
			</div>

		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinkbottom.php";
			include_once($path);
		
			$path =$rootDir."/ParthHub-CMFiles/comments.php";
			include_once($path);
		
			$path =$rootDir."/ParthHub-CMFiles/footerfile.php";
			include_once($path);
		?>
	</div>
	
</body>

</html>