<?php
session_start();
if(isset($_GET['page'])){
	$pages=array("chemistry","mathematics","physics");
	if(in_array($_GET['page'],$pages))
		$_page=$_GET['page'];
	else
		$_page="physics";
}else
	$_page="physics";

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Hub</title>
	<meta charset="utf-8" >
	<meta name="description" content="Class 12th CBSE Board Solved Paper 2016">
	<meta name="keywords" content="CBSE Board, class 12th">
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
				<a href="/">Home</a> » <a href="/Class 12th/class12th.php">Class 12th</a> » Class 12th Paper 2016
			</div>
		</div>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinktop.php";
			include_once($path);
		?>
			<div class="container-fluid row">
				<div class="div-container-left col-lg-9 col-sm-12 col-xs-12">
					<div class="headcont">
						<div class="headtop">
							<h4>Class 12th Paper and Solution - 2016</h4>
							<h4 style="margin-top:15px;"> Class XII</h4>
							<h4></h4><br />
						</div>
						<div><span>Time Allowed : 3 hours</span></div>
						<div><span>Marks: 100</span></div>
					</div>
					<div style="height:50px;">
						<div style="position:relative;">
							<ul id="htab">
								<li><a id="tr" href="class-12th-paper-2016.php?page=physics" name="tab2">Physics</a></li>
								<li><a id="tr" href="class-12th-paper-2016.php?page=chemistry" name="tab3">Chemistry</a></li>
								<li><a id="tr" href="class-12th-paper-2016.php?page=mathematics" name="tab1">Mathematics</a></li>
							</ul>
						</div>
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
			<div class="container-fluid com-container row">
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