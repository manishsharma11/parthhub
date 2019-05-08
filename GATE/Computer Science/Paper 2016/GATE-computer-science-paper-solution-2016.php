<?php
session_start();
if(isset($_GET['page'])){
	$pages=array("aptitude","computer-science");
	if(in_array($_GET['page'],$pages))
		$_page=$_GET['page'];
	else
		$_page="aptitude";
}else
	$_page="aptitude";

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>GATE Computer Science Paper 2016</title>
	<meta charset="utf-8" >
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<?php 
		$rootDir = $_SERVER['DOCUMENT_ROOT'];
		$path =$rootDir."/ParthHub-CMFiles/headfile.php";
		include_once($path);
	?>


</head>
<body>
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
				<a href="/">Home</a> » <a href="/GATE/gate.php">GATE</a> » <a href="/GATE/Computer Science/Paper 2016/GATE-computer-science-paper-solution-2016.php">GATE 2016</a> » Paper and Solution
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
							<h4>JEE ADVANCED PAPER-1 AND SOLUTION - 2016</h4>
							<h4 style="margin-top:15px;">Physics, Chemistry & Mathematics</h4>
							<h4></h4><br />
						</div>
						<div><span>Time Allowed : 3 hours</span></div>
						<div><span>Marks: 186</span></div>
					</div>
					<div style="height:50px;">
						<div style="position:relative;">
							<ul id="htab">
								<li><a id="tr" href="paper.php?page=physics" name="tab2">Physics</a></li>
								<li><a id="tr" href="paper.php?page=chemistry" name="tab3">Chemistry</a></li>
								<li><a id="tr" href="paper.php?page=mathematics" name="tab1">Mathematics</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 col-xs-12">
				</div>
			</div>
			<div class="container-fluid com-container row mpzero">
				<div class="div-container-left col-lg-9 col-sm-12 col-xs-12">
					
					<div style="">
						<?php require($_page.".php");?>
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