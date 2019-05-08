<?php

if(isset($_GET['sortBy'])){
	$pages=array("name","college","company","date");
	if(in_array($_GET['sortBy'],$pages))
		$_page=$_GET['sortBy'];
	else
		$_page="date";
}else
	$_page="date";

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Placement Experience</title>
	<meta charset="utf-8" >
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<?php 
		$rootDir = $_SERVER['DOCUMENT_ROOT'];
		$path =$rootDir."/ParthHub-CMFiles/headfile.php";
		include_once($path);
	?>
	<script>
	function goto(){
		$('html, body').animate({scrollTop: $("#exp").offset().top}, 500);
	}
	</script>
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
				<a href="/">Home</a> » Placement
			</div>
		</div>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinktop.php";
			include_once($path);
			$path =$rootDir."/ParthHub-CMFiles/connection.php";
			include($path);
		?>
		<?php 
			function input_data($data) {
			 $data = trim($data);
			 $data = stripslashes($data);
			 $data = htmlspecialchars($data);
			 return $data;
			}
			
			if(isset($_POST["share"])){
				$message=nl2br(htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8'));
				$name=mysqli_real_escape_string($conn,input_data($_POST['name']));
				$college=mysqli_real_escape_string($conn,input_data($_POST['clg-name']));
				$company=mysqli_real_escape_string($conn,input_data($_POST['com-name']));
				$email=mysqli_real_escape_string($conn,input_data($_POST['email']));
				$phone=mysqli_real_escape_string($conn,input_data($_POST['phone']));
				$sql="INSERT INTO experience(name,email,phone,college,company,message) VALUES('$name','$email','$phone','$college','$company','$message')";
				if(mysqli_query($conn,$sql)){
				?>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#success").html("* Thank you for your interview experiece! Your experiece will be displayed only after manual approval.").css('color','#2eb82e');
					 });
				</script>
		<?php
				}
				else{
					?>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#success").html("* Error!!! Your post is not made. Try again.").css('color','red');;
					 });
				</script>
		<?php
				}
			}
		?>
		<p id="success"></p>
		<div class="topcon col-lg-9 mpzero"><h3>Interview Experience of Students</h3></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 mpzero">
				<div class="col-md-12">
				<div style="min-height:70px;padding:10px 0;margin-bottom:20px;border-bottom:1px solid #DDD;">
					<ul class="hzlk">
					<li style="float:left;"><a  class="bd-toggle-lk" href="#" onclick="goto()"> Write Experience</a></li>
					<li style="float:right;" class="dropdown">
							  <a  class="dropdown-toggle bd-toggle-lk" data-toggle="dropdown" href="#"><?php echo ucwords($_page);?> <span style="position:relative;float:right;top:9px;" class="caret"></span></a>
							  <ul class="dropdown-menu" style="">
								<li class=""><a  href="/Placement/placement.php?sortBy=date">Date</a></li>
								<li class=""><a  href="/Placement/placement.php?sortBy=name">Name</a></li>
								<li class=""><a  href="/Placement/placement.php?sortBy=college">College</a></li>
								<li class=""><a  href="/Placement/placement.php?sortBy=company">Company</a></li>
							  </ul>
					</li>
					<li style="float:right; padding:10px 5px 10px 0px;">Sort By</li>
					</ul>
				</div>
		<?php 		   
			$sql = "SELECT * FROM experience WHERE active = 1 ORDER BY ".$_page." desc";
			$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while($row=mysqli_fetch_assoc($query)){
			?>
		<div class="col-sm-12 mpzero" style="clear:both;">
			
			
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
					<table>
					<tr>
						<td valign="top">
						<div class="pull-left image">
							<img class="img-circle avatar" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
						</div>
						</td>
						<td>
						<div class="pull-left meta">
							<div class="title h5">
								<a href="#" style="margin-right:3px;"><b><?php echo ucwords($row['name']);?></b></a>
								<?php echo ucwords($row['college']).".";?>
							</div>
							<h6 class="text-muted time"><?php $date= new DateTime($row['date']) ; echo '<span style="font-size:13px;margin-right:5px;"><b>'.ucwords($row['company'])."</b></span> ". $date->format('M d Y');?></h6>
						</div>
						</td>
					</tr>
					</table>
                </div> 
                <div class="post-description" style="clear:both;"> 
                    <p><?php echo $row['message'];?></p>
                    <div class="stats">
                        <button type="button" id="likes_<?php echo $row['exid'];?>"  class="btn btn-default stat-item" onclick="incvalue(<?php echo $row['exid'];?>)">
                            <i class="fa fa-thumbs-up icon"></i><span id="likes_count_<?php echo $row['exid']?>"><?php echo $row['likes'];?></span>
                        </button>
                        <button type="button" id="dislikes_<?php echo $row['exid'];?>" class="btn btn-default stat-item" onclick="decvalue(<?php echo $row['exid'];?>)">
                            <i class="fa fa-thumbs-down icon"></i><span id="dislikes_count_<?php echo $row['exid'];?>"><?php echo $row['dislikes'];?></span>
                        </button>
                    </div>
                </div>
            </div>
			
        </div>
			<?php
			}
			
		?>		</div>
				<div class="topcon col-lg-12 mpzero" id="exp"><h3>Write Your Interview Experience</h3></div>
				<div class="col-sm-12" >
					<div class="well well-sm">
						<form action="/Placement/placement.php?success" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Interview Experience *</label>
									<textarea name="message" id="message" class="form-control" rows="15" cols="25" required="required" placeholder="Write Experience"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Name *</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
								</div>
								<div class="form-group">
									<label for="clg-name">
										College Name *</label>
									<input type="text" class="form-control" name="clg-name" id="clg-name" placeholder="Enter college name" required="required" />
								</div>
								<div class="form-group">
									<label for="com-name">
										Company Name *</label>
									<input type="text" class="form-control" name="com-name" id="com-name" placeholder="Enter company name" required="required" />
								</div>
								<div class="form-group">
									<label for="email">
										Email *</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
								</div>
								<div class="form-group">
									<label for="phone">
										Mobile Number *</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="">+91</span>
										</span>
										<input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter Mobile Number" required="required" /></div>
								</div>
								
							</div>
							
							<div class="col-md-12">
								<button type="submit" name="share" class="btn btn-primary pull-right" id="btnContactUs">Post Experience</button>
							</div>
						</div>
						</form>
					</div>
				</div>
				</div>
				<?php
						$path =$rootDir."/ParthHub-CMFiles/adslinkright.php";
						include_once($path);
					?>
			</div>
		</div>
		
       
    
	
		
		<?php
			$path =$rootDir."/ParthHub-CMFiles/adslinkbottom.php";
			include_once($path);
		?>
		<?php
			$path =$rootDir."/ParthHub-CMFiles/footerfile.php";
			include_once($path);
		?>

	</div>
	
	<script type="text/javascript">
 document.getElementById('message').value = "";
 function incvalue(a){
	 var exid=a;
	 var lkc="likes_count_".concat(a);
	 var lk="likes_".concat(a);
	 var dlk="dislikes_".concat(a);
	 var i=parseInt(document.getElementById(lkc).innerText)+1;
	 document.getElementById(lkc).innerHTML = i;
	 document.getElementById(lk).disabled = true;
	 document.getElementById(dlk).disabled = true;
	
	 
	 $.ajax({
            type: "POST",
            url: "/ParthHub-CMFiles/exinc_likes.php",
            data: {exid:exid},
            dataType: "JSON",
            success: function(data) {
				
            },
            error: function(err) {
            
            }
        });
 }
 function decvalue(a){
	var exid=a;
	 var dlkc="dislikes_count_".concat(a);
	 var lk="likes_".concat(a);
	 var dlk="dislikes_".concat(a);
	 var i=parseInt(document.getElementById(dlkc).innerText)+1;
	 
	
	 
	 $.ajax({
            type: "POST",
            url: "/ParthHub-CMFiles/exdec_likes.php",
            data: {exid:exid},
            dataType: "JSON",
            success: function(data) {
				document.getElementById(dlkc).innerHTML = i;
				document.getElementById(lk).disabled = true;
				document.getElementById(dlk).disabled = true;
            },
            error: function(err) {
            alert("error");
            }
        });
 }
</script>
	
</body>

</html>