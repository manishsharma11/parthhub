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
				}
			});
			});
		</script>
	
	
	<div>
		<div class="scrolltext"><marquee><img src="new.gif" alt="Tutorials" border="0"> Website is Under Contruction !!! Thankyou for visiting.</marquee></div>
		<div class="content">
			<div class="navleft">
				<div class="nlcont">
				<!--<marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up">-->
										<!--</marquee>-->
					<div >
						<ul class="nlists">
							<li class="nlthead"><a href="class_12th.php">Physics</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
						</ul>
					</div>
					
					<div style="margin-top:20px;">
						<ul class="nlists">
							<li class="nlthead"><a href="#">Chemistry</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
						</ul>
					</div>
					
					<div style="margin-top:20px;">
						<ul class="nlists">
							<li class="nlthead"><a href="#">Mathematics</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
							<li class="nlist"><a href="#">Topic-1</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			<div class="contpart">
				<div class="">
					<div><h2>Class 12th Preparation</h2></div>
				</div>
				
				

				<div style="height:50px;">
					<div style="position:relative;">
						<ul id="htab">
							<li><a id="tr" href="#" name="tab1">Mathematics</a></li>
							<li><a id="tr" href="#" name="tab2">Physics</a></li>
							<li><a id="tr" href="#" name="tab3">Chemistry</a></li>
							  
						</ul>
					</div>
				</div>
			<div id="top3"> 
				<div class="bdiv" id="tab1" style="">
					<h3 style="">Maths Part I</h3>
						<ul>
							<li><a href="">Chapter 1 – Relations and Functions</a></li>
							<li><a href="">Chapter 2 – Inverse Trigonometric Functions</a></li>
							<li><a href="">Chapter 3 – Matrices</a></li>
							<li><a href="">Chapter 4 – Determinants</a></li>
							<li><a href="">Chapter 5 – Continuity and Differentiability</a></li>
							<li><a href="">Chapter 6 – Application of Derivatives</a></li>
						</ul>
					<h3 style="color:#000">Maths Part II</h3>
						<ul>
							<li><a href="">Chapter 7 – Integrals</a></li>
							<li><a href="">Chapter 8 – Application of Integrals</a></li>
							<li><a href="">Chapter 9 – Differential Equations</a></li>
							<li><a href="">Chapter 10 – Vector Algebra</a></li>
							<li><a href="">Chapter 11 – Three Dimensional Geometry</a></li>
							<li><a href="">Chapter 12 – Linear Programming</a></li>
							<li><a href="">Chapter 13 – Probability</a></li>
						</ul>
				</div>
				
				
				<div class="bdiv" id="tab2" style="">
					<h3 style="">I	Electrostatics</h3>
						<ul>
							<li><a href="">Chapter-1: Electric Charges and Fields</a></li>
							<li><a href="">Chapter-2: Electrostatic Potential and Capacitance</a></li>
						</ul>
					<h3 style="">II	Current Electricity</h3>
						<ul>
							<li><a href="">Chapter-3: Current Electricity</a></li>
						</ul>
					<h3 style="">III	Magnetic Effect of Current & Magnetism	</h3>
						<ul>
							<li><a href="">Chapter-4: Moving Charges and Magnetism</a></li>
							<li><a href="">Chapter-5: Magnetism and Matter</a></li>
						</ul>
					<h3 style="">IV	Electromagnetic Induction & Alternating Current</h3>
						<ul>
							<li><a href="">Chapter-6: Electromagnetic Induction</a></li>
							<li><a href="">Chapter-7: Alternating Current</a></li>
						</ul>
					<h3 style="">V	Electromagnetic Waves	</h3>
						<ul>
							<li><a href="">Chapter-8: Electromagnetic Waves</a></li>
						</ul>
					<h3 style="">VI	Optics</h3>
						<ul>
							<li><a href="">Chapter-9: Ray Optics and Optical Instruments</a></li>
							<li><a href="">Chapter-10: Wave Optics</a></li>
						</ul>
					<h3 style="">VII	Dual Nature of Matter</h3>
						<ul>
							<li><a href="">Chapter-11: Dual Nature of Radiation and Matter</a></li>
						</ul>
					<h3 style="">VIII	Atoms & Nuclei</h3>
						<ul>
							<li><a href="">Chapter-12: Atoms</a></li>
							<li><a href="">Chapter-13: Nuclei</a></li>
						</ul>
					<h3 style="">IX	Electronic Devices</h3>
						<ul>
							<li><a href="">Chapter-14:  Semiconductor  Electronics</a></li>
						</ul>
					<h3 style="">X	Communication Systems</h3>
						<ul>
							<li><a href="">Chapter-15: Communication Systems</a></li>
							
						</ul>
					
				</div>
				
				<div class="bdiv" id="tab3" style="">
					<h3 style="">Chemistry</h3>
						<ul>
							<li><a href="">Chapter 1 – The Solid State</a></li>
							<li><a href="">Chapter 2 – Solutions</a></li>
							<li><a href="">Chapter 3 – Electrochemistry </a></li>
							<li><a href="">Chapter 4 – Chemical Kinetics</a></li>
							<li><a href="">Chapter 5 – Surface Chemistry</a></li>
							<li><a href="">Chapter 6 – General Principles and Processes of Isolation of Elements</a></li>
							<li><a href="">Chapter 7 – The p Block Elements</a></li>
							<li><a href="">Chapter 8 – The d and f Block Elements</a></li>
							<li><a href="">Chapter 9 – Coordination Compounds</a></li>
							<li><a href="">Chapter 10 – Haloalkanes and Haloarenes</a></li>
							<li><a href="">Chapter 11 – Alcohols Phenols and Ethers</a></li>
							<li><a href="">Chapter 12 – Aldehydes Ketones and Carboxylic Acids</a></li>
							<li><a href="">Chapter 13 – Amines</a></li>
							<li><a href="">Chapter 14 – Biomolecules</a></li>
							<li><a href="">Chapter 15 – Polymers</a></li>
							<li><a href="">Chapter 16 – Chemistry in Everyday Life</a></li>
							
						</ul>

				</div>
			</div>
				
				
			</div>
			<div class="navright">
				<div class="nrcont"></div>
			</div>
		</div>
	</div>