<div class="com-container">
	<div class="div-container-left">
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
    var t = 3;
    var pad = function (i) {
        var s = ('0' + Math.floor(i));
        return s.substr(s.length - 2)
    };
    var newTimerStr = function () {
		
        t = t-1;
		if (t == -1) {
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
	

			<div class="decpart">
				<div class="catA"><h3><u>Part A - Physics</u></h3></div>
			</div>
			
			<form action="index.php" method="post" name="xyz">
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
									A student measures the time period of 100 oscillations of a simple pendulum four times.  The data set is 90 s, 91 s, 95 s and 92 s.  If the minimum division in the measuring clock is 1 s, then the reported mean time should be :
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
												<input type="radio" name="que_1_ans" id="que_1_ans-A" value="A" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_1_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:94%;">(92 ± 2.0) s </td>
									</tr>
									
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_1_ans" id="que_1_ans-B" value="B" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_1_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" >B.</td>
										<td class="td-opt" >(92 ± 5.0) s</td>

									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_1_ans" id="que_1_ans-C" value="C" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_1_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" >C.</td>
										<td class="td-opt" >(92 ± 1.8) s</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_1_ans" id="que_1_ans-D" value="D" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_1_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" >D.</td>
										<td class="td-opt" >(92 ± 3.0) s</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_1_qans').slideToggle()">+ View Answer</span></div>
											<div class="_1_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_1_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>T<sub>AV</sub> = 92s (|∆T|)<sub>mean</sub> = 1.5 s since uncertainity is 1.5 s so digit 2 in 92 is uncertain. so reported mean time should be (92 ± 2.0) s .</span><br/>
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
				
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">2.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A particle of mass m is moving along the side of a square of side ‘a’, with a uniform speed v in the x-y plane as shown in the figure :<br/>
									 <span><img src="images/phy_2016_1.gif" alt="phy_2016_1"></span><br/>
									 Which of the following statements is false for the angular momentum L about the origin ?

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
												<input type="radio" name="que_2_ans" id="que_2_ans-A" value="A" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_2_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt"style="width:94%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">L = </td>
													<td class="td-divident">−mv</td>
													<td class="td-lrud" rowspan="2">R k </td>
													<td class="td-lrud" rowspan="2"> when the particle is moving from A to B.</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor"><big>√2</big></td>
												</tr>
																					
											</tbody>
										</table>

										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_2_ans" id="que_2_ans-B" value="B" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_2_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">B.</td>
										<td class="td-opt" style="width:94%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">L = mv<span><img src="images/square_left_brace.gif" alt="["></span></td>
													<td class="td-divident">R</td>
													<td class="td-lrud" rowspan="2">- a <span><img src="images/square_right_brace.gif" alt="]"></span>k</td>
													<td class="td-lrud" rowspan="2"> when the particle is moving from C to D.</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor"><big>√2</big></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_2_ans" id="que_2_ans-C" value="C" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_2_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">C.</td>
										<td class="td-opt" style="width:94%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">L = mv<span><img src="images/square_left_brace.gif" alt="["></span></td>
													<td class="td-divident">R</td>
													<td class="td-lrud" rowspan="2">+ a <span><img src="images/square_right_brace.gif" alt="]"></span>k</td>
													<td class="td-lrud" rowspan="2"> when the particle is moving from B to C.</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor"><big>√2</big></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_2_ans" id="que_2_ans-D" value="D" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_2_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">D.</td>
										<td class="td-opt" style="width:94%;">
										
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">L = </td>
													<td class="td-divident">mv</td>
													<td class="td-lrud" rowspan="2">R k </td>
													<td class="td-lrud" rowspan="2"> when the particle is moving from D to A.</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor"><big>√2</big></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_2_qans').slideToggle()">+ View Answer</span></div>
											<div class="_2_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_2_qans">
													<div><span class="ansvalue">Answer :</span><span> B or D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span> L = r×P  ⇒ </span><span>L = |r||P| sinθ n<sup id="cap">^</sup></span><br/>
															<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
																<tbody>
																	<tr class="tr-divident" align="center">
																		<td class="td-lrud" rowspan="2"><span>Along CD, ⊥ distance from line of motion = <img src="images/square_left_brace.gif" alt="["></span></td>
																		<td class="td-divident">R</td>
																		<td class="td-lrud" rowspan="2">- a <span><img src="images/square_right_brace.gif" alt="]"></span>k</td>
																	</tr>
																	<tr class="tr-divisor" align="center">
																		<td class="td-divisor"><big>√2</big></td>
																	</tr>
																	<tr class="tr-divident" align="left">
																		<td class="td-lrud" rowspan="2">∴ Magnitude of angular momentum L = mv <span><img src="images/square_left_brace.gif" alt="["></span></td>
																		<td class="td-divident">R</td>
																		<td class="td-lrud" rowspan="2">- a <span><img src="images/square_right_brace.gif" alt="]"></span>k</td>
																		
																	</tr>
																	<tr class="tr-divisor" align="center">
																		<td class="td-divisor"><big>√2</big></td>
																	</tr>
																	<tr class="tr-divisor" align="left">
																		<td class="td-lrud" colspan="3">Hence (B) is incorrect. </td>
																	</tr>
																	<tr class="tr-divisor" align="left">
																		<td class="td-lrud" colspan="3">And In option (D) the direction of L is incorrect.  </td>
																	</tr>
																</tbody>
															</table>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">3.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									A point particle of mass m, moves along the uniformly rough track PQR as shown in the figure.  The coefficient of friction, between the particle and the rough track equals µ.  The particle is released, from rest, from the point P and it comes to rest at a point R.  The energies, lost by the ball, over the parts, PQ and QR, of the track, are equal to each other, and no energy is lost when particle changes direction from PQ to QR.<br/><br/>
									The values of the coefficient of friction µ and the distance x(=QR), are, respectively close to:
									<br/><span><img src="images/phy_2016_2.gif" alt="phy_2016_2"></span><br/>
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
												<input type="radio" name="que_3_ans" id="que_3_ans-A" value="A" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_3_ans-A"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">A.</td>
										<td class="td-opt" style="width:96%;">0.2 and 6.5 m</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_3_ans" id="que_3_ans-B" value="B" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_3_ans-B"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">B.</td>
										<td class="td-opt" style="width:96%;">0.2 and 3.5 m</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_3_ans" id="que_3_ans-C" value="C" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_3_ans-C"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">C.</td>
										<td class="td-opt" style="width:96%;">0.29 and 3.5 m</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt-radio" style="width:2%;">
											<div class="styled-input-single">
												<input type="radio" name="que_3_ans" id="que_3_ans-D" value="D" class="opt_rd_butt" id="radio_opt"/>
												<label for="que_3_ans-D"></label>
											</div>
										</td>
										<td class="td-opt" style="width:2%;">D.</td>
										<td class="td-opt" style="width:96%;">0.29 and 6.5 m</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=3>
											<div style="float:left;"><span class="ansview" onclick="$('#_3_qans').slideToggle()">+ View Answer</span></div>
											<div class="_3_qans"><span class="rw-span" id="wrong">Wrong</span><span class="rw-span" id="right">Correct</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_3_qans">
													<div><span class="ansvalue">Answer :</span><span> C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span><img src="images/phy_sol_2016_2.gif" alt="phy_sol_2016_2"></span><br/><br/>
															<span>Energy lost over path PQ is = µmg cosθ × 4 <br/>
																  Energy lost over path QR is = µmgx <br/>
																  µmgx = µmg cosθ × 4 <br/>
																  x = cosθ × 4 ⇒ x =2<big>√</big>3 = 3.45m</span><br/>
															<span>From Q to R energy loss is half of the total energy loss.<span>
															<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
															<tbody>
																<tr class="tr-divident" align="center">
																	<td class="td-lrud" rowspan="2"><span>µmgx = </span></td>
																	<td class="td-divident">1</td>
																	<td class="td-lrud" rowspan="2"><span> × mgh</span></td>
																	<td class="td-lrud" rowspan="2"><span> ⇒ µ = 0.29.</span></td>
																</tr>
																<tr class="tr-divisor" align="center">
																	<td class="td-divisor">2</td>
																</tr>
															</tbody>
														</table>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">4.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A person trying to lose weight by burning fat lifts a mass of 10 kg upto a height of 1 m 1000 times.  Assume that the potential energy lost each time he lowers the mass is dissipated.  How much fat will he use up considering the work done only when the weight is lifted up ?  Fat supplies 3.8×10<sup>7</sup> J of energy per kg which is converted to mechanical energy with a 20% efficiency rate.  Take g=9.8 ms<sup>−2</sup> : 
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">2.45×10<sup>−3</sup> kg </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">6.45×10<sup>−3</sup> kg </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">9.89×10<sup>−3</sup> kg </td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">12.89×10<sup>−3</sup> kg </td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_4_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_4_qans">
													<div><span class="ansvalue">Answer :</span><span> D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>Work done against the gravity = (mgh) 1000 in lifting 1000 times<br/>
															= 10 × 9.8 × 10<sup>3</sup> <br/>
															= 9.8 × 10<sup>4</sup> <br/>
															Joule 20% efficiency is to converts fat into energy.<br/> 
															[20% of 3.8 × 10<sup>7</sup> J] × (m) = 9.8 × 10<sup>4</sup>  (Where m is mass) <br/>
															m = 12.89 × 10<sup>–3</sup> kg
															</span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">5.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A roller is made by joining together two cones at their vertices O.  It is kept on two rails AB and CD which are placed asymmetrically (see figure), with its axis perpendicular to CD and its centre O at the centre of line joining AB and CD (see figure).  It is given a light push so that it starts rolling with its centre O moving parallel to CD in the direction shown.  As it moves, the roller will tend to :<br/>
									 <span><img src="images/phy_2016_3.gif" alt="phy_2016_3"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;"> turn left. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;"> turn right. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;"> go straight. </td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"> turn left and right alternately.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_5_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_5_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>If we take ‘r’ as the distance of IAOR from the axis of rotation, then ‘r’ decreases on left side as the object moves forward.<br/>
															So, for left v = ωr > ωr' (for right point)<br/>
															So, the roller will turn to the left as it moves forward. </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">6.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A satellite is revolving in a circular orbit at a height ‘h’ from the earth’s surface (radius of earth R ; R>>h).  The minimum increase in its orbital velocity required, so that the satellite could escape from the earth’s gravitational field, is close to :  (Neglect the effect of atmosphere).
								</p>

							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;"><big>√</big>(2gR) </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;"><big>√</big>(gR)</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;"><big>√</big>(gR/2)</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">(<big>√</big>2 -1)<big>√</big>(gR)</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_6_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_6_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>V<sub>o</sub> = <big><big>√</big></big>(GM)/R or <big><big>√</big></big>(gR)</span><br/>
															<span>V<sub>e</sub> = <big><big>√</big></big>(2GM)/R or <big><big>√</big></big>(2gR)</span><br/>
															<span>∴ Increase in velocity = (<big>√</big>2 - 1)<big><big>√</big></big>(gR)</span>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">7.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
								A pendulum clock loses 12 s a day if the temperature is 40˚C and gains 4 s a day if the temperature is 20˚C.  The temperature at which the clock will show correct time, and  the co-efficient of linear expansion (α) of the metal of the pendulum shaft are respectively :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">25˚C; α=1.85×10−5/˚C</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">60˚C; α=1.85×10−4/˚C </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">30˚C; α=1.85×10−3/˚C</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">30˚C; α=1.85×10−3/˚C</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_7_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_7_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">8.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									An ideal gas undergoes a quasi static, reversible process in which its molar heat capacity C remains constant.  If during  this process the relation of pressure P and volume V is given by PV<sup>n</sup>=constant,  then n is given by (Here C<sub>P</sub> and C<sub>V</sub> are molar specific heat at constant pressure and constant volume, respectively) :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">n = </td>
													<td class="td-divident">C<sub>P</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">C<sub>V</sub></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">n = </td>
													<td class="td-divident">C - C<sub>P</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">C - C<sub>V</sub></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">n = </td>
													<td class="td-divident">C<sub>P - C</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">C - C<sub>V</sub></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2">n = </td>
													<td class="td-divident">C - C<sub>V</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">C - C<sub>P</sub></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_8_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_8_qans">
													<div><span class="ansvalue">Answer :</span><span> B</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">9.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 ‘n’ moles of an ideal gas undergoes a process A→B as shown in the figure.  The maximum temperature of the gas during the process will be :<br/>
									<span><img src="images/phy_2016_4.gif" alt="phy_2016_4"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">9 P<sub>0</sub>V<sub>0</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">4nR</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">3 P<sub>0</sub>V<sub>0</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">2nR</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">9 P<sub>0</sub>V<sub>0</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">2nR</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">9 P<sub>0</sub>V<sub>0</sub></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">nR</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_9_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_9_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">10.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A particle performs simple harmonic motion with amplitude A.  Its speed is trebled at the instant that it is at a distance 2A/3 from equilibrium position.  The new amplitude of the motion is :

								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">A</td>
													<td class="td-lrud" rowspan="2"><big>√</big>41</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">3</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">3A</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">A<big>√</big>3</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">7A</td>
													
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">3</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_10_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_10_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">11.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									  A uniform string of length 20 m is suspended from a rigid support.  A short wave pulse is introduced at its lowest end. It starts moving up the string.  The time taken to reach the support is : (take g = 10 ms<sup>−2</sup>)
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">2π <big>√</big>2 s </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">2 s</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">2<big>√</big>2 s</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"><big>√</big>2 s</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_11_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_11_qans">
													<div><span class="ansvalue">Answer :</span><span>C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">12.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								The region between two concentric spheres of radii ‘a’ and ‘b’, respectively (see figure), has volume charge density  ρ = A/r , where A is a constant and r is the distance from the centre.  At the centre of the spheres is a point charge Q.  The value of A such that the electric field in the region between the spheres will be constant, is :
								<br/><span><img src="images/phy_2016_5.gif" alt="phy_2016_5"></span>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">Q</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">2π a<sup>2</sup></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">Q</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">2π(b<sup>2</sup> - a<sup>2</sup>)</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">2Q</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">π(a<sup>2</sup> - b<sup>2</sup>)</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">2Q</td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">πa<sup>2</sup></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_12_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_12_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">13.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									A combination of capacitors is set up as shown in the figure.  The magnitude of the electric field, due to a point charge Q (having a charge equal to the sum of the charges on the 4 µF and 9 µF capacitors), at a point distant 30 m from it, would equal :<br/>
									<span><img src="images/phy_2016_6.gif" alt="phy_2016_6"></span>
								</p>
								

							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">240 N/C</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">360 N/C</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">420 N/C</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">480 N/C</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_13_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_13_qans">
													<div><span class="ansvalue">Answer :</span><span>C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">14.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									The temperature dependence of resistances of Cu and undoped Si in the temperature range 300-400 K, is best described by :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">Linear increase for Cu, linear increase for Si.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">Linear increase for Cu, exponential increase for Si.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">Linear increase for Cu, exponential decrease for Si.</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">Linear decrease for Cu, linear decrease for Si.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_14_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_14_qans">
													<div><span class="ansvalue">Answer :</span><span>C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">15.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									  Two identical wires A and B, each of length ‘l’, carry the same current I.  Wire A is bent into a circle of radius R and wire B is bent to form a square of side ‘a’.  If B<sub>A</sub> and B<sub>B</sub> are the values of magnetic field at the centres of the circle and square respectively, then the ratio B<sub>A</sub>/B<sub>B</sub> is :

								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">π<sup>2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">8</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">π<sup>2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">16<big>√</big>2</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">π<sup>2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">16</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">π<sup>2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">8<big>√</big>2</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_15_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_15_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">16.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									Hysteresis loops for two magnetic materials A and B are given below :<br/>
									<span><img src="images/phy_2016_7.gif" alt="phy_2016_7"></span><br/>
									These materials are used to make magnets for electric generators, transformer core and electromagnet core.  Then it is proper to use : 
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;"> A for electric generators and transformers. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;"> A for electromagnets and B for electric generators. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;"> A for transformers and B for electric generators.</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"> B for electromagnets and transformers.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_16_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_16_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">17.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									An arc lamp requires a direct current of 10 A at 80 V to function.  If it is connected to a 220 V (rms), 50 Hz AC supply, the series inductor needed for it to work is close to :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">80 H</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">0.08 H</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">0.044 H</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"> 0.065 H</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_17_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_17_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">18.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 Arrange the following electromagnetic radiations per quantum in the order of increasing energy :
								</p>
								<table class="" cellspacing="0" cellpadding="5" border="0" width="40%">
									<tr>
										<td>A : Blue light </td>
										<td>B : Yellow light</td>
									</tr>
									<tr>
										<td>C : X-ray</td>
										<td>D : Radiowave.</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">D, B, A, C</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">A, B, D, C</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">C, A, B, D</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">B, A, D, C</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_18_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_18_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" rowspan="2" valign="top" align="left" style="width:5%;">19.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									An observer looks at a distant tree of height 10 m with a telescope of magnifying power of 20.  To the observer the tree appears :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">10 times taller.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">10 times nearer.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">20 times taller.</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"> 20 times nearer.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_19_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_19_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">20.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									The box of a pin hole camera, of length L, has a hole of radius a.  It is assumed that when the hole is illuminated by a parallel beam of light of wavelength λ the spread of the spot (obtained on the opposite wall of the camera) is the sum of its geometrical spread and the spread due to diffraction. The spot would then have its minimum size (say b<sub>min</sub>) when :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
												<tbody>
													<tr class="tr-divident" align="center">
														<td class="td-lrud" rowspan="2"><span>a =</span></td>
														<td class="td-divident">λ<sup>2</sup></td>
														<td class="td-lrud" rowspan="2"><span> and b<sub>min</sub> = </span></td>
														<td class="td-lrud" rowspan="2"><span><span><img src="images/left-brace.gif" alt="("></span></span></td>
														<td class="td-divident">2λ<sup>2</sup></td>
														<td class="td-lrud" rowspan="2"><span><span><img src="images/right-brace.gif" alt=")"></span></span></td>
													</tr>
													<tr class="tr-divisor" align="center">
														<td class="td-divisor">L</td>
														<td class="td-divisor">L</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
												<tbody>
													<tr class="tr-divident" align="center">
														<td class="td-lrud" rowspan="2"><span>a = <big>√</big>λL</span></td>
														<td class="td-lrud" rowspan="2"><span> and b<sub>min</sub> = </span></td>
														<td class="td-lrud" rowspan="2"><span><span><img src="images/left-brace.gif" alt="("></span></span></td>
														<td class="td-divident">2λ<sup>2</sup></td>
														<td class="td-lrud" rowspan="2"><span><span><img src="images/right-brace.gif" alt=")"></span></span></td>
													</tr>
													<tr class="tr-divisor" align="center">
														<td class="td-divisor">L</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;"><span>a = <big>√</big>λL</span> <span> and b<sub>min</sub> = <big>√</big>4λL</span></td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
											<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
												<tbody>
													<tr class="tr-divident" align="center">
														<td class="td-lrud" rowspan="2"><span>a =</span></td>
														<td class="td-divident">λ<sup>2</sup></td>
														<td class="td-lrud" rowspan="2"><span> and b<sub>min</sub> = <big>√</big>4λL</span></td>
													</tr>
													<tr class="tr-divisor" align="center">
														<td class="td-divisor">L</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_20_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_20_qans">
													<div><span class="ansvalue">Answer :</span><span> C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">21.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 Radiation of wavelength λ, is incident on a photocell.  The fastest emitted electron has speed v. If the wavelength is changed to 3λ/4, the speed of the fastest emitted electron will be :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2"> > v <span><img src="images/left-brace.gif" alt="("></span></td>
													<td class="td-divident">4</td>
													<td class="td-lrud" rowspan="2"><span><img src="images/right-brace.gif" alt=")"></span><sup style="vertical-align:top;">1/2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">3</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2"> < v <span><img src="images/left-brace.gif" alt="("></span></td>
													<td class="td-divident">4</td>
													<td class="td-lrud" rowspan="2"><span><img src="images/right-brace.gif" alt=")"></span><sup style="vertical-align:top;">1/2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">3</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2"> = v <span><img src="images/left-brace.gif" alt="("></span></td>
													<td class="td-divident">4</td>
													<td class="td-lrud" rowspan="2"><span><img src="images/right-brace.gif" alt=")"></span><sup style="vertical-align:top;">1/2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">3</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-lrud" rowspan="2"> = v <span><img src="images/left-brace.gif" alt="("></span></td>
													<td class="td-divident">3</td>
													<td class="td-lrud" rowspan="2"><span><img src="images/right-brace.gif" alt=")"></span><sup style="vertical-align:top;">1/2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">4</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_21_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_21_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">22.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 Half-lives of two radioactive elements A and B are 20 minutes and 40 minutes, respectively.  Initially, the samples have equal number of nuclei.  After 80 minutes, the ratio of decayed numbers of A and B nuclei will be :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">1 : 16</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">4 : 1</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">1 : 4</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">5 : 4</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_22_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_22_qans">
													<div><span class="ansvalue">Answer :</span><span> D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">23.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 If a, b, c, d are inputs to a gate and x is its output, then, as per the following time graph, the gate is :<br/>
									 <span><img src="images/phy_2016_8.gif" alt="phy_2016_8"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">NOT</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">AND</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">OR</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">NAND</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_23_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_23_qans">
													<div><span class="ansvalue">Answer :</span><span>C</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">24.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 Choose the correct statement : 
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;"> In amplitude modulation the amplitude of the high frequency carrier wave is made to vary in proportion to the amplitude of the audio signal. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">In amplitude modulation the frequency of the high frequency carrier wave is made to vary in proportion to the amplitude of the audio signal. </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;"> In frequency modulation the amplitude of the high frequency carrier wave is made to vary in proportion to the amplitude of the audio signal.</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;"> In frequency modulation the amplitude of the high frequency carrier wave is made to vary in proportion to the frequency of the audio signal.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_24_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_24_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">25.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									A screw gauge with a pitch of 0.5 mm and a circular scale with 50 divisions is used to measure the thickness of a thin sheet of Aluminium. Before starting the measurement, it is found that when the two jaws of the screw gauge are brought in contact, the 45th division coincides with the main scale line and that the zero of the main scale is barely visible.  What is the thickness of the sheet if the main scale reading is 0.5 mm and the 25th division coincides with  the main scale line ?
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">0.75 mm </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">0.80 mm </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">0.70 mm </td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">0.50 mm</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_25_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_25_qans">
													<div><span class="ansvalue">Answer :</span><span>B</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">26.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A pipe open at both ends has a fundamental frequency f in air.  The pipe is dipped vertically in water so that half of it is in water.  The fundamental frequency of the air column is now :

								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">f/2</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">3f/4</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">2f</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">f</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_26_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_26_qans">
													<div><span class="ansvalue">Answer :</span><span>D</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">27.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 A galvanometer having a coil resistance of 100 Ω gives a full scale deflection, when a current of 1 mA is passed through it. The value of the resistance, which can convert this galvanometer into ammeter giving a full scale deflection for a current of 10 A, is : 
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">0.01 Ω </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">2 Ω </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">0.1 Ω </td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">3 Ω</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_27_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_27_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">28.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 In an experiment for determination of refractive index of glass of a prism by i− δ, plot, it was found that a ray incident at angle 35˚, suffers a deviation of 40˚ and that it emerges at angle 79˚.  Ιn that case which of the following is closest to the maximum possible value of the refractive index ? 
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">1.5 </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">1.6 </td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">1.7 </td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">1.8</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_28_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_28_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				<tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">29.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									Identify the semiconductor devices  whose characteristics are given below, in the order (a), (b), (c), (d) :<br/>
									<span><img src="images/phy_2016_9.gif" alt="phy_2016_9"></span>
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;"> Simple diode, Zener diode, Solar cell, Light dependent resistance.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;"> Zener diode, Simple diode, Light dependent resistance, Solar cell.</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">Solar cell, Light dependent resistance, Zener diode, Simple diode.</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">Zener diode, Solar cell, Simple diode, Light dependent resistance.</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_29_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_29_qans">
													<div><span class="ansvalue">Answer :</span><span> A</span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
				</tr><tr>
				<td style="padding:5px;">
					<table class="tbl-container" cellspacing="0" cellpadding="0" border="0" width="100%">
					<tbody>
						<tr>
							<td class="td-qno" id="sppad_1" rowspan="2" valign="top" align="left" style="width:5%;">30.&nbsp;</td>
							<td class="td-qtxt" valign="top">
								<p>
									 For a common emitter configuration, if α and β have their usual meanings, the incorrect relationship between α and β is :
								</p>
							</td>
						</tr>
						<tr>
							<td class="td-qopt" valign="top" style="">
								<table class="tbl-opt" id="tblOption_434" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">A.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													<td class="td-divident">1</td>
													<td class="td-lrud" rowspan="2"> = </td>
													<td class="td-divident">1</td>
													<td class="td-lrud" rowspan="2"> + 1 </td>
												</tr>
												<tr class="tr-divisor" align="center">
													<td class="td-divisor">α</td>
													<td class="td-divisor">β</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">B.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													
													<td class="td-lrud" rowspan="2">α = </td>
													<td class="td-divident">β</td>
												</tr>
												<tr class="tr-divisor" align="center">
													
													<td class="td-divisor">1 - β</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt">
										<td class="td-opt" style="width:3%;">C.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													
													<td class="td-lrud" rowspan="2">α = </td>
													<td class="td-divident">β</td>
												</tr>
												<tr class="tr-divisor" align="center">
													
													<td class="td-divisor">1 + β</td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr  class="tr-opt"> 
										<td class="td-opt" style="width:3%;">D.</td>
										<td class="td-opt" style="width:97%;">
										<table class="tbl-divident-divisor" cellpadding="0" cellspacing="0" >
											<tbody>
												<tr class="tr-divident" align="center">
													
													<td class="td-lrud" rowspan="2">α = </td>
													<td class="td-divident">β<sup>2</sup></td>
												</tr>
												<tr class="tr-divisor" align="center">
													
													<td class="td-divisor">1 + β<sup>2</sup></td>
												</tr>
																					
											</tbody>
										</table>
										</td>
									</tr>
									<tr class="tr-opt">
										<td class="td-opt-ans" colspan=2>
											<div><span class="ansview" onclick="$('#_30_qans').slideToggle()">+ View Answer</span></div>
											<div class="td-ans">
												<div class="ansexp" id="_30_qans">
													<div><span class="ansvalue">Answer :</span><span> </span></div>
													<div style="margin-top:20px;">
														<div style="width:17%;float:left;"><span class="expvalue">Explanation :</span></div>
														<div style="width:83%;float:left;">
															<span>manish </span><br/>
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
			<input type="submit" id="submit" name="submit_test" value="Submit Quiz" <?php if(isset($_POST['submit_test'])){ ?> disabled <?php } ?>  />
			</form>
			</div>
				<div class="div-container-right">
					
				</div>
				
</div>
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