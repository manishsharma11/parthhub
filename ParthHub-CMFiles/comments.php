	<div class="container-fluid mpzero">
		<div class="parth-comment">
			<h3><b>Comments</b></h3>
		</div>
	</div>
	<div class="container">
    <div class="row">
        
		<?php 
			include('connection.php');
		   
			$actual_link = trim($_SERVER['PHP_SELF']);
			$sql = "SELECT * FROM users_comment WHERE active = 1 AND page='$actual_link' LIMIT 10";
			$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
			while($row=mysqli_fetch_assoc($query)){
			?>
		<div class="col-sm-8" >
			
			
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
									<a href="#"><b><?php echo ucwords($row['name']);?></b></a>
									made a post.
								</div>
								<h6 class="text-muted time"><?php $date= new DateTime($row['date_time']) ; echo $date->format('M d Y');?></h6>
							</div>
						</td>
					</tr>
					</table>
                </div> 
                <div class="post-description" style="clear:both;"> 
                    <p><?php echo $row['messages'];?></p>
                    <div class="stats">
                        <button type="button" id="likes_<?php echo $row['c_id'];?>"  class="btn btn-default stat-item" onclick="incvalue(<?php echo $row['c_id'];?>)">
                            <i class="fa fa-thumbs-up icon"></i><span id="likes_count_<?php echo $row['c_id']?>"><?php echo $row['likes'];?></span>
                        </button>
                        <button type="button" id="dislikes_<?php echo $row['c_id'];?>" class="btn btn-default stat-item" onclick="decvalue(<?php echo $row['c_id'];?>)">
                            <i class="fa fa-thumbs-down icon"></i><span id="dislikes_count_<?php echo $row['c_id'];?>"><?php echo $row['dislikes'];?></span>
                        </button>
                    </div>
                </div>
            </div>
			
        </div>
			<?php
			}
			
		?>
		
       
    </div>
</div>
	<div class="container-fluid" style="margin-bottom:30px;">

        <div class="row ">

            <div class="col-lg-9">
				<div>
				<h3><b>Leave a Comment</b></h3>
			<p>Your email address and phone number will not be published. Required fields are marked *</p>
				</div>
                   
				<div class="panel-shadow well well-sm">

                    <form id="contact-form" method="" action="" role="form">

                        <div class="messages"></div>
							<div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="messages">Message *</label>
                                        <textarea id="messages" name="messages" class="form-control" placeholder="Please leave your message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name *</label>
                                        <input id="name" type="text" name="name" class="form-control" placeholder="Please enter your full name *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                               
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone *</label>
                                        <input id="phone" type="tel"  name="phone" class="form-control" placeholder="Please enter your phone *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <input type="text" id="page" name="page" value="<?php echo $actual_link;?>" hidden>
							<button type="button" class="btn btn-primary btn-send" name="insert-data" id="insert-data" onclick="insertData()">Post Comment</button>
                            <br/><br/>
                            <p id="message"></p>
                        

                    </form>

                </div>

            </div>
		</div>
    </div>
	
<script type="text/javascript">
 
 function incvalue(a){
	 var c_id=a;
	 var lkc="likes_count_".concat(a);
	 var lk="likes_".concat(a);
	 var dlk="dislikes_".concat(a);
	 var i=parseInt(document.getElementById(lkc).innerText)+1;
	 document.getElementById(lkc).innerHTML = i;
	 document.getElementById(lk).disabled = true;
	 document.getElementById(dlk).disabled = true;
	
	 
	 $.ajax({
            type: "POST",
            url: "/ParthHub-CMFiles/inc_likes.php",
            data: {c_id:c_id},
            dataType: "JSON",
            success: function(data) {
				
            },
            error: function(err) {
            
            }
        });
 }
 function decvalue(a){
	var c_id=a;
	 var dlkc="dislikes_count_".concat(a);
	 var lk="likes_".concat(a);
	 var dlk="dislikes_".concat(a);
	 var i=parseInt(document.getElementById(dlkc).innerText)+1;
	 
	
	 
	 $.ajax({
            type: "POST",
            url: "/ParthHub-CMFiles/dec_likes.php",
            data: {c_id:c_id},
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
 
  function insertData() {
	if( document.getElementById('messages').value.trim() === '' ){
      alert('Message box is empty! Please write a comment.');
	  return false;
    }
	if( document.getElementById('name').value.trim() === '' ){
      alert('Please enter your name.');
	  return false;
    }
	if( document.getElementById('email').value.trim() === '' ){
      alert('Please enter your email.');
	  return false;
    }
	if( document.getElementById('phone').value.trim() === '' ){
      alert('Please enter your phone number.');
	  return false;
    }
    var messages=$("#messages").val();
    var name=$("#name").val();
    var email=$("#email").val();
    var phone=$("#phone").val();
    var page=$("#page").val();
   
     
	document.getElementById('messages').value = "";
 
// AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "/ParthHub-CMFiles/insert-data.php",
            data: {messages:messages,name:name,email:email,phone:phone,page:page},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p#message").show();
            $("p#message").addClass("alert alert-success");
			setTimeout( function(){$('p#message').hide();} , 10000);
            },
            error: function(err) {
            alert(err);
            }
        });
 
}
 
  </script>

