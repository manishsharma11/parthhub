	<meta name="theme-color" content="#012b72">
	<meta name="msapplication-navbutton-color" content="#012b72">
	<meta name="apple-mobile-web-app-status-bar-style" content="#012b72">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" >
	<script src="/jquery-3.1.0.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/mks-script.js"></script>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="shortcut icon" href="/title.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<noscript>
  <style>html{display:none;}</style>
  <meta http-equiv="refresh" content="0; url=/error.php" />
</noscript>


<!-- Google Tag Manager -->
<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7W7Q2K');</script>-->
<!-- End Google Tag Manager -->
