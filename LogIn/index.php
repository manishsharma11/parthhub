<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Parth Profile</title>
	<meta charset="utf-8" >
	<meta name="description" content="Learn and practice Aptitude questions and answers with explanation for interview, competitive examination and entrance test.">
	<meta name="keywords" content="aptitude, questions, answers, interview, placement, papers, engineering, electronics, civil, mechanical, networking, hr, c, 2015, 2016, reasoning, program, verbal, gk, knowledge, language, explanation, solution, problem, online, test, exam, quiz">
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
			//$path =$rootDir."/ParthHub-CMFiles/navfile.php";
			//include_once($path);
		?>
		<div class="container w1oo zsp" style="">
			<header class="notranslate pldiv shfr" style="">
				<div class="head row">
					<div class="head-item-type col-xs-12 col-sm-4 col-lg-4">
						<div><a style="display:block;" href="/"><img src="/logo.png" alt="Path Hub" width="235px" height="70px" alt="Parth Hub"></a></div>
					</div>
				</div>
			</header>
		</div>
		<div class="pdiv">
		<div style="padding-top:15px;clear:both;">
			<div class="movement">
				<a href="/">Home</a> » Login
			</div>
		</div>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinktop.php";
			include_once($path);
		?>
			<div class="container-fluid row mpzero">
				<div class="div-container-left col-lg-8 col-sm-12 col-xs-12">

				</div>
				<div class="col-lg-4 col-sm-4 col-xs-12">
				</div>
			</div>
			<div class="container-fluid com-container row">
				<div class="div-container-left col-lg-8 col-sm-12 col-xs-12">

					<div >
						<?php //include("chemistry.php");
						 $_SESSSION["parth"]="Manish";
						?>
					</div>

				</div>

				<?php
					//$path =$rootDir."/ParthHub-CMFiles/adslinkright.php";
					//include_once($path);
				?>

			</div>

		<?php
			//$path =$rootDir."/ParthHub-CMFiles/adslinkbottom.php";
			//include_once($path);
		?>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/footerfile.php";
			include_once($path);
		?>
	</div>

</body>

</html>
