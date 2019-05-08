<?php
	session_start();
	require("connection.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/xlogo.png" type="image/png">
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
    <script>
			$(document).ready(function() {
			$("#top3").find("[id^='tab']").hide();
			$("#htab li:first").attr("id","current"); // Activate the first tab
			$("#top3 #tab1").fadeIn(); // Show first tab's content

			$('#htab a').click(function(e) {
				e.preventDefault();
				if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
				 return;       
				}
				else{             
				  $("#top3").find("[id^='tab']").hide(); // Hide all content
				  $("#htab li").attr("id",""); //Reset id's
				  $(this).parent().attr("id","current"); // Activate this
				  $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
                                  $('body,html').animate({
                                        scrollTop: 0
                                }, 500);
                                return false;
				}
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
	if(isset($_SESSION['success']))
    {  
        
      ?>
      <div class="container-fluid">
        <div class="log-hide" id="hide">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img">
					<br/><img width="140" height="140" src="success.png" />
                    <br/><br/><br/><div><h3 style="color:green;font-size: 18px;"><b><?php echo $_SESSION['success'];?></b></h3></div>
				</div>
			</div>
			
		</div>
	</div>
    </div>
      <?php
      
       unset($_SESSION['success']);   
    }
    if(isset($_GET['logout']))
    {  
      unset($_SESSION['name']);
	  header("location:index.php");
      return;
    }
    if (!isset($_SESSION['name'])) {
        
        return;
}
    else {
        
       
       
		
 
	
	?>
     <header class="header-top" >
        <div class="container-fluid" style="">
            <div class="container-fluid row" >
                <div class="logop col-lg-5 col-sm-4 col-xs-10 mpzero" style="margin:0;padding:0;">				
                    <a style="display: block;float:left;" href="profile.php">
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
                                <div class="col-lg-2 col-sm-2 image dropdown" style="padding-right:0;text-align:right;z-index:100;">
                                    <a id="navlink" style="" class="dropdown-toggle" data-toggle="dropdown" href="#"><span><img style="height:40px;width:40px;" class="img-circle avatar" src="user.png"></span> </a>
                                    <ul class="dropdown-menu pt-ddul dropdown-menu-right">
                                        <li class="navoli" style="padding:20px 0;">Welcome, <b><?php echo $_SESSION['name']; ?></b></li>
                                        <!--<li class="navoli"> <a class="btn_login show-log" href="#" onclick="myFunction('keysetting.jsp')" >SET KEY</a></li>
                                        <li class="navoli"> <a class="btn_login" href="keyresetting.jsp" >RESET KEY</a></li>
                                        <li class="navoli"> <a class="btn_login" href="recoverkey.jsp" ></a></li>-->
                                        <li class="navoli"> <a class="btn_login" href="profile.php?logout=logout" >LOGOUT</a></li>
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
                                                <div id="mySidenav" class="sidenav" >
                                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                    <ul class="sideullist">
                                                        <li class="userd"><span class="rd"><img style="height:40px;width:40px;" class="img-circle avatar" src="${pageContext.request.contextPath}/img/user.png"></span> </li>
                                                        <li class="navoli"></li>
                                                        <li class="navoli"> <a class="btn_login" href="uprofile.jsp?logout=lgout" ></a></li>
                                                    </ul>
                                                    <hr/>
                                                    <ul>
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
    <div class="container-fluid">
        <div class="log-hide" id="hidden">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img" title="To download this file you need to enter your security key.">
					<!--<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />-->
					<br/><h2 style="color:green;font-weight:bold;">ISSUE BOOK</h2><br/><br/>
					<form id="actiondwn" action="" method="post">
					
                                            <br/><input id="key" class="name-pass" type="text" name="enroll" value="" placeholder="Enter Student Enroll (e.g. IT/678/14)" required /><br />
											
						<br/><button type="submit" name="issue_sbmt"  class="btn_login" onclick="abort();">SUBMIT</button>
                                        </form>
				</div>
			</div>
			
		</div>
	</div>
    </div>
	<div class="container-fluid">
        <div class="log-hide4" id="hidden">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img" title="To download this file you need to enter your security key.">
					<!--<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />-->
					<br/><h2 style="color:green;font-weight:bold;">RETURN BOOK</h2><br/><br/>
					<form id="actiondwn2" action="" method="post">
					
                                            <br/><input id="key" class="name-pass" type="text" name="enroll" value="" placeholder="Enter Student Enroll (e.g. IT/678/14)" required /><br />
											
						<br/><button type="submit" name="return_sbmt"  class="btn_login" onclick="abort();">SUBMIT</button>
                                        </form>
				</div>
			</div>
			
		</div>
	</div>
    </div>
	
	<div class="container-fluid">
        <div class="log-hide2" id="hidden">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img" title="To download this file you need to enter your security key.">
					<!--<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />-->
					<br/><h2 style="color:green;font-weight:bold;">ISSUE BOOK</h2><br/><br/>
					<form id="actiondwn" action="issue_book.php" method="post">
					
						<input id="key" class="name-pass" type="text" name="id" value="" placeholder="Enter Book ID" required /><br />
						<input id="key" class="name-pass" type="text" name="enroll" value="" placeholder="Enter Student Enroll (e.g. IT/678/14)" required /><br />					
						<br/><button type="submit" name="issue_sbmt"  class="btn_login" onclick="abort();">SUBMIT</button>
                    </form>
				</div>
			</div>
			
		</div>
	</div>
    </div>
	
	<div class="container-fluid">
        <div class="log-hide3" id="hidden">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img" title="To download this file you need to enter your security key.">
					<!--<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />-->
					<br/><h2 style="color:green;font-weight:bold;">RETURN BOOK</h2><br/><br/>
					<form id="actiondwn" action="return_book.php" method="post">
					
						<input id="key" class="name-pass" type="text" name="id" value="" placeholder="Enter Book ID" required /><br />
						<input id="key" class="name-pass" type="text" name="enroll" value="" placeholder="Enter Student Enroll (e.g. IT/678/14)" required /><br />					
						<br/><button type="submit" name="return_sbmt"  class="btn_login" onclick="abort();">SUBMIT</button>
                    </form>
				</div>
			</div>
			
		</div>
	</div>
    </div>
                                            
    <div class="container-fluid row " style="padding:0;top: 90px;position:relative;">
        <div class="col-lg-3 col-md-4 col-sm-5 smxs " style="">
            <div class="usideit" style="padding:0; margin:0;">
                <ul id="htab" class="sideullist" style="position:relative;top:70px;">
                    <li>
                        <a id="tr" href="#" name="tab1">
                            <svg class="indt" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" focusable="false"><polygon points="8,5 13,10 8,15"></polygon></svg>
                            <span class="glyphicon glyphicon-duplicate" style="font-size:22px;"></span> 
                            <span class="txtadj">Available Books</span>
                        </a>
                    </li>
                    <li>
                        <a id="tr" href="#" name="tab5">
                            <svg class="indt" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" focusable="false"><polygon points="8,5 13,10 8,15"></polygon></svg>
                            <span class="glyphicon glyphicon-user" style="font-size:22px;"></span>
                            <span class="txtadj">Students Information</span>
                        </a>
                    </li>
					<li>
                        <a id="tr" href="#" name="tab2">
                            <svg class="indt" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" focusable="false"><polygon points="8,5 13,10 8,15"></polygon></svg>
                            <span class="glyphicon glyphicon-book" style="font-size:22px;"></span>
                            <span class="txtadj">Add Book Details</span>
                        </a>
                    </li>
                    
                    <li>
                        <a id="tr" href="#" name="tab4">
                            <svg class="indt" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" focusable="false"><polygon points="8,5 13,10 8,15"></polygon></svg>
                            <span class="glyphicon glyphicon-envelope" style="font-size:22px;"></span>
                            <span class="txtadj">Add Student Info</span>
                        </a>
                    </li>
                </ul>    
                        <div style="position:relative;top:130px;">
                            
                            <button class="btn_login show-log2" type="submit" name="upsub" style=""><b>Issue Book</b></button><br/><br/>
							<button class="btn_login show-log3" type="submit" name="upsub" style=""><b>Return Book</b></button>
                            
                        </div>


            </div>
        </div>
        <div id="top3">
        <div class="bdiv" id="tab1" style="display:none;">
        <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
            
            <div class="topcon"><h3>Available Books</h3></div>
			<div style="min-height:450px;background: #fff;">
                   <?php 
						$sql = "SELECT * FROM books";
						$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
						$result=mysqli_num_rows($query);
                        if($result!=0){
							
                    ?> 
                            <table class="act-tbl" cellpadding="0">
                                <tr>
                                    <th><div>Book ID</div></th>
                                    <th><div>Book Name</div></th>
                                    <th>Author Name</th>
                                    <th>Publication</th>
                                    
                                    <th>Price</th>
									<th>Total Qty.</th>
									<th>Available Qty.</th>
									<th>Option</th>
                                </tr>
                    <?php       
                            
                            while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
						<td class="br-td"><?php echo $row['book_id']?></td>
                        <td class="br-td">
						
							<div class="pr-file" style="background:white;padding:0px;height:100%;width:130px;margin:0;"title="<?php echo $row['book_name']?>">
                                <div style="height:80%;padding:0px;">
                                    <img style="height:100%;width:60%;border-radius:5px;" src="Book-Blank-Book-icon.png">
                                </div>
                                <div class="flinfo" style="width:100%;height:20%;z-index:2;">
                                    <div class="truncate" style="width:100%;height:100%;float:left;">

                                        <?php echo $row['book_name']?>

                                    </div>
                                </div>
                            </div>
						</td>
						
                        <td class="br-td"><?php echo $row['book_author_name']?></td>
                        <td class="br-td"><?php echo $row['book_publication_name']?></td>
                        <td class="br-td">₹ <?php echo $row['book_price']?></td>
                        <td class="br-td"><div><?php echo $row['book_qty']?></div></td>
						<td class="br-td"><div><?php echo $row['book_available_qty']?></div></td>
                        <td><a  class="bd-toggle-lk show-log" href="#" onclick="myFunction('issue_book.php?id=<?php echo $row['book_id']?>')">Issue Book</a></td>
                    </tr>
                 
					<?php }?>
                </table>
				<?php
							}
				else{?>
							

                    <div class="">
                        <div class="" style="padding: 100px 0 20px 0;">
                            <div class="ab-S-c a-i-ab-S-El"></div>
                        </div>
                        <div class="">
                            <div class="">No recent activity.</div>
                            <div class="">Find everything in <strong>SCloud</strong> you've recently done.</div>
                        </div>
                            
                    </div>
                    
                           <div class="">
                               <div class="" style="padding: 100px 0 20px 0;">
                                   <div class="ab-S-c a-i-ab-S-El"></div>
                               </div>
                               <div class="">
                                   <div class="">No recent activity.</div>
                                   <div class="">Find everything in <strong>SCloud</strong> you've recently done.</div>
                               </div>

                           </div>
                   
				<?php }?>
            </div>
					
					
					<!--

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" style="padding:15px; height:280px;">
                            
                            <div class="pr-file" style="background:white;padding:0px;height:100%;width:100%;margin:0;">
                                <div style="height:80%;padding:0px;">
                                    <img style="height:100%;width:100%;border-radius:5px;" src="${pageContext.request.contextPath}/images/<%out.println(fname);%>.jpg">
                                </div>
                                <div class="flinfo" style="width:100%;height:20%;border-top:1px dotted #DDD;z-index:2;">
                                    <div class="truncate" style="width:65%;height:100%;float:left;" title="<% out.print(fileNames[i]); %>">

                                        <% out.print(fileNames[i]); %>

                                    </div>
                                    <div style="width:18%;float:left;">
                                        <a href="javascript:void(0)"  onclick="myFunction('download.jsp?filename=<% out.print(fileNames[i]); %>')" class="btn dwn-btn btn-lg show-log" title="Download">
                                            <span class="glyphicon glyphicon-circle-arrow-down"></span>
                                        </a>
                                    </div>
                                     <div style="width:17%;float:left;padding:0;margin: 0;">
                                        <a href="javascript:void(0)" id="close-btn"  onclick="myFunction('delete.jsp?filename=<% out.print(fileNames[i]); %>')" class="btn btn-lg show-log" title="Delete">
                                            <span class=" glyphicon glyphicon-plus-sign"></span>
                                        </a>
                                        
                                     </div>
                                </div>
                            </div>
                        </div>-->
            
            
        </div>
        </div>
        
        <div class="bdiv" id="tab5" style="display:none;">
            
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
                <div class="topcon"><h3>Students Information</h3></div>
                <div style="min-height:450px;background: #fff;">
                    <?php 
						$sql = "SELECT * FROM users order by enrollment";
						$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
						$result=mysqli_num_rows($query);
                        if($result!=0){
							
                    ?> 
                            <table class="act-tbl" cellpadding="0">
                                <tr>
                                    <th>Enroll</th>
                                    <th>Student Name</th>
									<th>Maximum Books Issued</th>
                                    <th>Total Books Issued </th>
                                    <th>Issued Books Details</th>
								</tr>
					 <?php       
                            $x=1;
                            while($row=mysqli_fetch_array($query)){
								
                    ?>		
                    <tr>
                        <td class="br-td"><?php echo $row['enrollment']?></td>
                        <td class="br-td"><?php echo $row['name']?></td>
						<td class="br-td"><div>6</div></td>
                        <td class="br-td"><div><?php echo $row['total_issued_books']?></div></td>
                        <td><button onclick="$('#ck<?php echo $x;?>').slideToggle(100)" class="btn_login" style="box-shadow:none;width:150px;"><b>Issued Books</b> <i class="fa fa-chevron-down" style="padding-left:10px;"></i></button></td>
                    </tr>
					<?php if($row['issued_books']!=null){
						$books = explode(",",$row['issued_books']);
						$dates = explode(",",$row['book_issued_dates']);
						
						$i=0;
						?>
					<tr class="hbd_bks" id="ck<?php echo $x;?>">
						<td class="br-td"></td>
						<td colspan="4" style="padding:0;border:none;">
						
						<table width="100%"  style=""  cellpadding="0">	
								<tr>
									
									<th>Book ID</th>
									<th>Book Name</th>
									<th>Issued Date</th>
									<th>Option</th>
								</tr>
							<?php
							foreach($books as $book){
							?>
						
								
								
								<tr>
									<?php 
										$sql2 = "SELECT * FROM books where book_id='$book'";
										$query2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
										$row2=mysqli_fetch_assoc($query2);
									?>
									<td><?php echo $book;?></td>
									<td><?php echo $row2['book_name'];?></td>
									<td><?php echo $dates[$i];?></td>
									<td><a  class="bd-toggle-lk show-log4" href="#" onclick="myFunction2('return_book.php?id=<?php echo $row2['book_id']?>')">Return</a></td>
								</tr>
							
						<?php $i++;
						
						}
						?>
						
						</table>
						</td>
					</tr>
					<?php
					}
					
					
					$x++;
					
					} ?>
					
                    </table>

						<?php }
							else{
						?>
                    <div class="">
                        <div class="" style="padding: 100px 0 20px 0;">
                            <div class="ab-S-c a-i-ab-S-El"></div>
                        </div>
                        <div class="">
                            <div class="">No Information Available.</div>
                            
                        </div>
                            
                    </div>
                    
							<?php }?>   
                    
            
                </div>
            </div>
        </div>
		<div class="bdiv" id="tab2" style="display:none;">
            
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
                <div class="topcon"><h3>Add Book Details</h3></div>
                <div style="min-height:450px;background: #fff;overflow:auto;">
                    <div class="col-lg-4 col-sm-6 col-xs-12 col-lg-offset-4">
                               <form action="add_book.php" method="post" autocomplete="off">
                                <div class="rcb" style="">
                                    <input type="text" name="id" placeholder="Book ID" />
									<input type="text" name="book_name" placeholder="Book Name" /><br/>
									<input type="text" name="author_name" placeholder="Author Name" />
                                    <input type="text" name="pub_name" placeholder="Publication Name" />
                                    <input type="number" name="price" placeholder="Price" /><br/>
                                    <input type="number" name="qty" placeholder="Total Quantity" /><br/>
                                    <button style="margin-top:30px;" name="bk_submit" class="btn_sign_up" onclick="cambiar_sign_up()">ADD BOOK</button>
                                </div>
                               </form>
                        
                    </div>
            
                </div>
            </div>
        </div>
        <!--<div class="bdiv" id="tab3" style="display:none;">
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
                <div class="topcon"><h3>Trash Files</h3></div>
              
            
            </div>
        </div>-->
        <div class="bdiv" id="tab4" style="display:none;">
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
                <div class="topcon"><h3>Add Student Information</h3></div>
                <div style="min-height:450px;background: #fff;overflow:auto;">
                    <div class="col-lg-4 col-sm-6 col-xs-12 col-lg-offset-4">
                               <form action="add_student.php" method="post" autocomplete="off">
                                <div class="rcb" style="">
                                    <br/><br/><input type="text" name="name" placeholder="Full Name" />
									<input type="text" name="clgID" placeholder="Enrollment / College ID" /><br/>
									<input type="email" name="email" placeholder="Email" />
                                    <button style="margin-top:30px;" name="submit" class="btn_sign_up" onclick="cambiar_sign_up()">ADD STUDENT</button>
                                </div>
                               </form>
                        
                    </div>
            
                </div>
                
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid footpad mpzero fixme" style="z-index:1;clear:both;overflow: auto;position:relative;top:100px;background: #fff;color:#888;padding:0;">
        <div class="container" style="background: #EEE; height:10px; width:100%;margin:0;padding:0;"></div>
                <footer>
                <div class="">
                    <!--<div class="followdiv"></div>-->
                    <div class="slmedia">
                        <p>Copyright © 2017-2018 Cloud Technology . All Rights Reserved.</p>
                        <p><!--<a href="/Contact Us/contact_us.php"><span style="color:#AAA;">Contact us:</span></a> <a href="mailto:contact@parthhub.com"><span style="color:rgb(170, 204, 0);">contact@parthhub.com<span></a>--></p><br/>
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
    <script>
        var fixmeTop = $('.usideit').offset().top;       // get initial position of the element
        var fixme = $('.fixme').offset().top; 
        var xm = $('.xm').offset().top; 
        $(window).scroll(function() {                  // assign scroll event listener

            var currentScroll = $(window).scrollTop(); // get current position

            if (currentScroll > fixme-600) {           // apply position: fixed if you
                $('.usideit').css({                      // scroll to that element or below it
                    position: 'static',
                    top:  ,
                    left: 0


                });
            } else {                                   // apply position: static
                $('.usideit').css({                      // if you scroll above it
                    position: 'fixed',
                    top:'85px'

                });
            }

        });
    </script>

    <script>
        function myFunction(y) {
            document.getElementById("actiondwn").action = y;
            document.getElementById("hidden").style.display = "block";


        }
		function myFunction2(y) {
            document.getElementById("actiondwn2").action = y;
            document.getElementById("hidden").style.display = "block";


        }
        function abort() {

            document.getElementById("hidden").style.display = "none";
            document.getElementById("hide").style.display = "none";

        }
        function getFilePath() {
            document.getElementById('fileBrowser').click();

        }
        document.getElementById('fileBrowser').onchange = function () {
         document.getElementById('filePath').value = document.getElementById('fileBrowser').value;
        };
    </script> 
    
        <?php
            }
?>
</body>
</html>