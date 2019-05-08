<?php
		if(isset($_POST['submit_test'])){
			?>
			<script>
				(function(){
					document.title = "Test Result";
				}())
			</script>
			<?php
            $totalCorrect = 0;
			$negative=0;
			$unans=0;
			if(isset($_POST['que_1_ans'])){
				if($_POST['que_1_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._1_qans #right').show();
								 $(".submitBtn").hide();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._1_qans #wrong').show();
							});
						</script>
					<?php
				}
			?>
				<script>
					$(document).ready(function(){   
						$('input[type="radio"]#que_1_ans-<?php echo $_POST['que_1_ans']?>').attr('checked',true);
					});
				</script>
			<?php
			}
			else{
				$unans++;
				
			}
			
			if(isset($_POST['que_2_ans'])){
				if($_POST['que_2_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._2_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._2_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_2_ans-<?php echo $_POST['que_2_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_3_ans'])){
				if($_POST['que_3_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._3_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._3_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_3_ans-<?php echo $_POST['que_3_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_4_ans'])){
				if($_POST['que_4_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._4_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._4_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_4_ans-<?php echo $_POST['que_4_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_5_ans'])){
				if($_POST['que_5_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._5_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._5_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_5_ans-<?php echo $_POST['que_5_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_6_ans'])){
				if($_POST['que_6_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._6_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._6_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_6_ans-<?php echo $_POST['que_6_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_7_ans'])){
				if($_POST['que_7_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._7_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._7_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_7_ans-<?php echo $_POST['que_7_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_8_ans'])){
				if($_POST['que_8_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._8_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._8_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_8_ans-<?php echo $_POST['que_8_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_9_ans'])){
				if($_POST['que_9_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._9_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._9_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_9_ans-<?php echo $_POST['que_9_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_10_ans'])){
				if($_POST['que_10_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._10_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._10_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_10_ans-<?php echo $_POST['que_10_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_11_ans'])){
				if($_POST['que_11_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._11_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._11_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_11_ans-<?php echo $_POST['que_11_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_12_ans'])){
				if($_POST['que_12_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._12_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._12_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_12_ans-<?php echo $_POST['que_12_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_13_ans'])){
				if($_POST['que_13_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._13_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._13_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_13_ans-<?php echo $_POST['que_13_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_14_ans'])){
				if($_POST['que_14_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._14_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._14_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_14_ans-<?php echo $_POST['que_14_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_15_ans'])){
				if($_POST['que_15_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._15_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._15_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_15_ans-<?php echo $_POST['que_15_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_16_ans'])){
				if($_POST['que_16_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._16_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._16_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_16_ans-<?php echo $_POST['que_16_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_17_ans'])){
				if($_POST['que_17_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._17_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._17_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_17_ans-<?php echo $_POST['que_17_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_18_ans'])){
				if($_POST['que_18_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._18_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._18_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_18_ans-<?php echo $_POST['que_18_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_19_ans'])){
				if($_POST['que_19_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._19_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._19_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_19_ans-<?php echo $_POST['que_19_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_20_ans'])){
				if($_POST['que_20_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._20_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._20_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_20_ans-<?php echo $_POST['que_20_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_21_ans'])){
				if($_POST['que_21_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._21_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._21_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_21_ans-<?php echo $_POST['que_21_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_22_ans'])){
				if($_POST['que_22_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._22_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._22_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_22_ans-<?php echo $_POST['que_22_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_23_ans'])){
				if($_POST['que_23_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._23_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._23_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_23_ans-<?php echo $_POST['que_23_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_24_ans'])){
				if($_POST['que_24_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._24_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._24_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_24_ans-<?php echo $_POST['que_24_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_25_ans'])){
				if($_POST['que_25_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._25_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._25_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_25_ans-<?php echo $_POST['que_25_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_26_ans'])){
				if($_POST['que_26_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._26_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._26_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_26_ans-<?php echo $_POST['que_26_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_27_ans'])){
				if($_POST['que_27_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._27_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._27_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_27_ans-<?php echo $_POST['que_27_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_28_ans'])){
				if($_POST['que_28_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._28_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._28_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_28_ans-<?php echo $_POST['que_28_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_29_ans'])){
				if($_POST['que_29_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._29_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._29_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_29_ans-<?php echo $_POST['que_29_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_30_ans'])){
				if($_POST['que_30_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
					?>
						<script>
							$(document).ready(function(){   
								$('._30_qans #right').show();
							});
						</script>
					<?php
				}
				else{
					$negative++;
					?>
						<script>
							$(document).ready(function(){   
								$('._30_qans #wrong').show();
							});
						</script>
					<?php
				}
				?>
			<script>
				$(document).ready(function(){   
					$('input[type="radio"]#que_30_ans-<?php echo $_POST['que_30_ans']?>').attr('checked',true);
				});
			</script>
	<?php
			}
			else{
				$unans++;
			}
			
            ?>
			<div class="test_result">
			
				<table class="result_tbl" cellspacing="0" cellpadding="0" border="0" width="100%" >
					<tbody>
						<tr>
							<td class="resotd"colspan="3">RESULT</td>
						</tr>
						<tr>
							<td class="td_121">Total Marks </td>
							<td class="td_122">:</td>
							<td class="td_123"><?php echo $totalCorrect-$negative?></td>
						</tr>
						<tr>
							<td class="td_121">Total Correct Answers </td>
							<td class="td_122">:</td>
							<td class="td_123"><?php echo $totalCorrect/4 ?></td>
						</tr>
						<tr>
							<td class="td_121">Total Incorrect Answers</td>
							<td class="td_122">:</td>
							<td class="td_123"><?php echo $negative?></td>
						</tr>
						<tr>
							<td class="td_121">Total Unattempted Questions</td>
							<td class="td_122">:</td>
							<td class="td_123"><?php echo $unans?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<script>
				$(document).ready(function(){   
					$('.ansview').text("‒ View Answer"); 
					$('.td-opt-ans').show();
					$(".ansexp").show();
					$('input[type="radio"]').attr("disabled",true);
				});
			</script>
	<?php
            
		}
		
		
		else{
			
			?>
			
			<script>
		
	
	
	(function () {
    var t = 3600;
    var pad = function (i) {
        var s = ('0' + Math.floor(i));
        return s.substr(s.length - 2)
    };
    var newTimerStr = function () {
		
        t = t-1;
		if (t == 0) {
			    document.getElementById('submit').click();
				return;
			
		}
        var h = Math.floor(t / 3600);
        var m = Math.floor(t / 60);
        var s = (t % 60);
		m %= 60;
		h %= 60;
        return [h, m, s].map(pad).join(':');
    };
    setInterval(function () {
        document.title = newTimerStr();
		document.getElementById("timer").style.display = "block";
		document.getElementById("timer").innerHTML = newTimerStr();
    }, 1000);
}())
	</script>

			<script>
				$(document).ready(function(){   
					$('.td-opt-ans').hide();
				});
			</script>
	<?php
		}
    ?>
	
	
	


<?php $x=1; ?>
			<div class="decpart">
				<div class="catA"><h3><u>2 - Practice Test Paper - (Chemistry)</u></h3></div>
			</div>
			<form action="jee_main_test.php?page=chemistry_test_2& result" method="post" name="xyz">
				<table class="hd-table" cellspacing="0" cellpadding="0" border="0" width="100%" >
				<tbody>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">1.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">2.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">3.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">4.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">5.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">6.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">7.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">8.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">9.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">10.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">11.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">12.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">13.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">14.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">15.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">16.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">17.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">18.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">19.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">20.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">21.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">22.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">23.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">24.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">25.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">26.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">27.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">28.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">29.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				<?php  $x++;?>
				<tr >
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">30.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-A" value="A"  onclick="check_click(<?php echo $x;?>,1)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;"></td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-B" value="B" onclick="check_click(<?php echo $x;?>,2)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" ></td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-C" value="C" onclick="check_click(<?php echo $x;?>,3)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_<?php echo $x;?>_ans" id="que_<?php echo $x;?>_ans-D" value="D" onclick="check_click(<?php echo $x;?>,4)" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_<?php echo $x;?>_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" ></td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_<?php echo $x;?>_qans').slideToggle()">+ View Answer</span></div>
											<div class="_<?php echo $x;?>_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_<?php echo $x;?>_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div class="expterm" ><span class="expvalue">Explanation :</span></div>
														<div class="explanation">
															<span></span><br/>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
								</table>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
				</tr>
				</tbody>
				</table>

				<div class="sub_otest">
				<input type="submit" class="csub" id="submit" name="submit_test" value="Submit Test" <?php if(isset($_POST['submit_test'])){ ?> disabled <?php } ?>  />
			</div>
			</form>
			
<script>

var $radios = $('tr input[type="radio"]');
$radios.click(function () {
  var $this = $(this);
  if ($this.data('checked')) {
    this.checked = false;
  }
  var $otherRadios = $radios.not($this).filter('[name="'
                                               + $this.attr('name') + '"]');
  $otherRadios.prop('checked', false).data('checked', false);
  $this.data('checked', this.checked);
});


</script>