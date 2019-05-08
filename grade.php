

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		<div class="test_result">
				<div >Total Marks :<?php echo $totalCorrect-$negative?></div>
				<div >Total Correct Answers :<?php echo $totalCorrect/4 ?></div>
				<div >Total Incorrect Answers :<?php echo $negative?></div>
				<div >Total Unattemed Questions :<?php echo $unans?></div>
			</div>
		
        <?php
            $totalCorrect = 0;
			$negative=0;
			$unans=0;
			if(isset($_POST['que_1_ans'])){
				if($_POST['que_1_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
				}
				else{
					$negative++;
				}
			}
			else{
				$unans++;
			}
			
			if(isset($_POST['que_2_ans'])){
				if($_POST['que_2_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
				}
				else{
					$negative++;
				}
			}
			else{
				$unans++;
			}
			if(isset($_POST['que_3_ans'])){
				if($_POST['que_3_ans']=="A"){
					$totalCorrect = $totalCorrect + 4;
				}
				else{
					$negative++;
				}
			}
			else{
				$unans++;
			}
			
             ?>
			<div class="test_result">
				<div >Total Marks :<?php echo $totalCorrect-$negative?></div>
				<div >Total Correct Answers :<?php echo $totalCorrect/4 ?></div>
				<div >Total Incorrect Answers :<?php echo $negative?></div>
				<div >Total Unattemed Questions :<?php echo $unans?></div>
			</div>
			
	
	</div>
	