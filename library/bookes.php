
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="${pageContext.request.contextPath}/xlogo.png" type="image/png">
    <title>My Drive Login & Sign Up</title>
    <link rel="stylesheet" href="${pageContext.request.contextPath}/style.css" />
    <link rel="stylesheet" href="${pageContext.request.contextPath}/bootstrap/css/bootstrap.min.css" >
    <script src="${pageContext.request.contextPath}/jquery-3.1.0.js"></script>
    <script src="${pageContext.request.contextPath}/bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="${pageContext.request.contextPath}/title.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script type="text/javascript"  src="${pageContext.request.contextPath}/index.js"></script>
   
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
<%
    
    if(session.getAttribute("error") != null)
    {  
        session.removeAttribute("error");
      %>
      <div class="container-fluid">
        <div class="log-hide" id="hide">
		<div id="b-page" class="close-log">	</div>	
		<div class="log-page">
			<div class="log-head"></div>
			<div class="left">
				<div class="log-img" title="To download this file you need to enter your security key.">
					<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />
                                        <br/><br/><br/><div style="color:red;font-size: 15px;"><p><b>Security Key is incorrect.</b></p></div>
				</div>
			</div>
			
		</div>
	</div>
    </div>
      <%
      
          
    }
    if(request.getParameter("logout") != null )
    {  
      session.invalidate();
      response.sendRedirect("index.jsp");
      return;
    }
    if (session.getAttribute("name") == null || session.getAttribute("name").equals("")) {
        response.sendRedirect("index.jsp");
        return;
}
    else {
        
        String name =session.getAttribute("name").toString();
        String uname =session.getAttribute("uname").toString();
       

 %>
 <header class="header-top" >
     <div class="container-fluid" style="">
    <div class="container-fluid row" >
	<div class="logop col-lg-5 col-sm-4 col-xs-10 mpzero" style="margin:0;padding:0;">				
            <a href="/">
		<img src="${pageContext.request.contextPath}/logo.png">
            </a>
	</div>
        <div class="col-lg-7 col-sm-8 col-xs-2 row mpzero" style="margin:0;padding:0;height:80px;">
            <div style="position:relative;right:0;top:15px;text-align:right;">
                 
                    <div class="col-lg-12 col-sm-12 row smxs" style="margin:0;padding:0;">
                          
                        <div class="col-lg-10 col-sm-10" style="">
                        <h3 class="department-news-header">
                            <span class="archive-link pull-right header-search-span">
                                    <span class="header-search">
                                    <input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
                                    <a href="#link" role="button" class="btn-srch"><i class="fa fa-search"></i></a>
                                </span>
                            </span>
                        </h3>
                        </div>
                        <div class="col-lg-2 col-sm-2 image dropdown" style="padding-right:0;text-align:right;z-index:100;">
                            <a id="navlink" style="" class="dropdown-toggle" data-toggle="dropdown" href="#"><span><img style="height:40px;width:40px;" class="img-circle avatar" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></span> </a>
                            <ul class="dropdown-menu pt-ddul dropdown-menu-right">
                                <li class="navoli"> <%out.print("<br>Welcome, "+name);%></li> 
                                <li class="navoli"> <a class="btn_login" href="uprofile.jsp?logout=lgout" >LOGOUT</a></li>
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
                                                <li class="userd"><span class="rd"><img style="height:40px;width:40px;" class="img-circle avatar" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></span> </li>
                                                <li class="navoli"> <%out.print("<br>Welcome, "+name);%></li>
                                                <li class="navoli"> <a class="btn_login" href="uprofile.jsp?logout=lgout" >LOGOUT</a></li>
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
					<img width="220" height="180" src="${pageContext.request.contextPath}/key.jpg" />
					<form id="actiondwn" action="" method="post">
					
                                            <br/><input id="key" class="name-pass" type="password" name="key" value="" placeholder="Enter Your Secret Private Key" required /><br />
						<button type="submit"  class="btn_login" onclick="abort();">SUBMIT</button>
                                        </form>
				</div>
			</div>
			
		</div>
	</div>
    </div>
<div class="container-fluid row " style="padding:0;top: 90px;position:relative;">
    <div class="col-lg-3 col-md-4 col-sm-5 smxs " style="">
        <div class="usideit" style="padding:0; margin:0;">
            <ul class="sideullist" style="position:relative;top:70px;">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>    
                    <div style="position:relative;top:130px;">
                        <button class="upf_btn" onClick="getFilePath()">
                             <img  style="cursor:pointer;height:30%;width:30%;" src="${pageContext.request.contextPath}/upload-file.png" alt="Upload File">
                             <br/><input class="finp" type="text" id="filePath" name="filePath" value="Select file to upload" disabled="disabled" /><br/>
                        </button>
                        
                        <form action="FileUploadServlet" method="post" enctype="multipart/form-data">
                            <input type="file" id="fileBrowser" name="fileBrowser" style="visibility:hidden; display:none;" required="required" />
                            <button class="btn_login" type="submit" name="upsub" style=""><b>Upload File</b></button>
                        </form>
                    </div>
                
            
        </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 row xm" style="min-height:700px;padding-top:20px;margin:0;overflow:auto;">
        <div class="topcon"><h3>Uploaded Files</h3></div>
       <%@ page import="java.io.*" %>
        <% 
    
String file = application.getRealPath("/"+uname);
File f = new File(file);
String [] fileNames = f.list();
File [] fileObjects= f.listFiles();
for (int i = 0; i < fileObjects.length; i++) {
if(!fileObjects[i].isDirectory()){
    String fname;
    String[] a= {"7z", "csv", "doc","gif","jpg","pdf","ppt","rar","txt","xls","xml","zip"};
    if(Arrays.asList(a).contains(fileNames[i].substring(fileNames[i].lastIndexOf(".") + 1, fileNames[i].length()))){
        fname=fileNames[i].substring(fileNames[i].lastIndexOf(".") + 1, fileNames[i].length());
    }
    else{
        fname="else";
    }
%>	

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" style="padding:15px; height:280px;">
            <div class="pr-file" style="background:white;padding:0px;height:100%;width:100%;margin:0;">
                <div style="height:80%;padding:0px;">
                    <img style="height:100%;width:100%;border-radius:5px;" src="${pageContext.request.contextPath}/images/<%out.println(fname);%>.jpg">
                </div>
                <div class="flinfo" style="width:100%;height:20%;border-top:1px dotted #DDD;z-index:2;">
                    <div class="truncate" style="width:75%;height:100%;float:left;" title="<% out.print(fileNames[i]); %>">
                        
                        <% out.print(fileNames[i]); %>
                        
                    </div>
                    <div style="width:25%;float:left;">
                        <a href="javascript:void(0)"  onclick="myFunction('download.jsp?filename=<% out.print(fileNames[i]); %>')" class="btn dwn-btn btn-lg show-log">
                            <span class="glyphicon glyphicon-circle-arrow-down"></span>
                          </a>
                    </div>
                </div>
            </div>
        </div>
   <%      }
}
}
%>
    </div>
            
</div>
         
            <div class="container-fluid footpad mpzero fixme" style="z-index:1;clear:both;overflow: auto;position:relative;top:100px;background: #fff;color:#888;padding:0;">
                <div class="container" style="background: #EEE; height:10px; width:100%;margin:0;padding:0;"></div>
    <div class="container" style="margin-bottom:50px;">

	
    </div>
    <footer>
			<div class="">
				<!--<div class="followdiv">
				
				</div>-->
				<div class="slmedia">
                                    <p>
					Copyright © 2017-2018 Cloud Technology . All Rights Reserved.
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
</body>
</html>