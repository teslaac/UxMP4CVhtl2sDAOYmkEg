<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print Report | Acadah Smart School </title>
  <meta name="description" content="Print Report" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" />
  <style>
  	html,body{
  		background: #444;
  		color: #000;
  	}
  	body{
  		font-size: 14px !important;
  		font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
  	}
  	h1,h2,h3,h4,h5,h6{
  		margin-bottom: -2px;
  	}
	.cont {
		width: 950px;
		padding: 0 20px;
		background-color: #FFF;
		margin: 10px auto; 
		min-height: 960px;
		position: relative;
	}
	header{
		width: 100%;
		padding-top: 20px;
	}
	header img{
		width: 115px;
		height: 115px;
		margin-top: 10px;
	}
	table{
		border: 1px solid #31708f;
		border-collapse: none !important;
		margin-bottom: 12px !important;
	}
	td,th{
		font: 14px !important;
		padding: 1px 5px !important;
		border: 1px solid #31708f !important;
	}
	td:last-child, th:last-child{
		border-right: none;
	}
	.rotate_text
    {
        -moz-transform:rotate(-90deg); 
        -webkit-transform: rotate(-90deg);
        -webkit-transform-origin: top left;
        -o-transform: rotate(-90deg);
        -o-transform-origin:  top left;
        position:relative;
        top:0px;
        /*  padding: 2px 0; */      
    }
    .rotated_cell{
         height:120px;
         max-width: 20px !important;
         vertical-align:bottom
    }
    #avg{
        width: 30px;
        position: relative;
        left: -10px;
        top: 0px;
	}
	h2{
	  	font-weight: 700;
	  }
  </style>
</head>
	<body>
		<div class="cont">
			<header class=" text-center clearfix">
				<div class="col-sm-1 ">
					<img src="<?php echo base_url(); ?>img/cc.png" class="img-rounded" alt="">
				</div>
				<div class="col-sm-10 text-center">
					<h2><?php echo strtoupper($school_details['sch_full_name']); ?></h2>
					<h4><?php echo strtoupper($school_details['sch_motto']); ?></h4>
					<h4></h4>
					<p class="text-primary"><?php echo $school_details['sch_email_add']; ?> <?php echo $school_details['sch_web']; ?> <?php echo $school_details['sch_phone1']; ?> <?php echo $school_details['sch_phone2']; ?></p>
				</div>
				<div class="col-sm-1 ">
				</div>
			</header>
			<section>
				<div class="col-sm-12 text-center">
					<h4>STUDENTS REPORT SHEET</h4><br>
				</div>
				<div class="col-sm-12">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Session:  <?php echo $ruser_details['session_name']; ?></td>
							<td>Term:  <?php echo $ruser_details['term_name']; ?></td>
							<td>Class:  <?php echo $ruser_details['class_details']; ?></td>
							<td>No In Class:  <?php echo $ruser_details['no_in_class']; ?></td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td>Position:  ??</td>
							<td>Total:  ??</td>
							<td>Overall Position:  ??</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td class="h4"><b>Name: <?php echo "$ruser_details[lname] $ruser_details[fname] $ruser_details[mname] "; ?> </b></td>
							<td class="h4"><b> Admission No: <?php echo $ruser_details['admission_no']; ?></b></td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td>Weight: <?php echo $ruser_details['weight']; ?>kg</td>
							<td>Height: <?php echo $ruser_details['height']; ?>cm</td>
							<td>Cleanliness Rate: ??</td>
							<td>Sport House: ??</td>
						</tr>
					</tbody>
				</table>
				</div>
				<!-- <div class="col-sm-12">
					<table class="table table-hover">
						<tbody>
							<tr class="text-center">
								<td><span class="text-danger">NOTE: NO RECORD FOUND FOR THE SELECTED TERM !</span></td>
							</tr>
						</tbody>
					</table>
				</div> -->
				<div class="col-sm-12">
					<table class="table table-hover">
						<thead>
							<tr style="background:#D9EDF7">
								<th valign="bottom" width="120" >Subjects</th>
								<th valign="bottom" width=""> Max</th>
								<?php foreach($rsubjects as $rsubject){?>
								<th class="rotated_cell"><div class="rotate_text"><?php echo $rsubject['subject_name']; ?></div></th>
								<?php }?>
								<!-- <th class="rotated_cell"><div class="rotate_text">INTRO.TECH</div></th>
								<th class="rotated_cell"><div class="rotate_text">COMPUTER</div></th>
								<th class="rotated_cell"><div class="rotate_text">H.ECONS</div></th>
								<th class="rotated_cell"><div class="rotate_text">YORUBA</div></th>
								<th class="rotated_cell"><div class="rotate_text">MATHS</div></th>
								<th class="rotated_cell"><div class="rotate_text">CCA</div></th>
								<th class="rotated_cell"><div class="rotate_text">MUSIC</div></th>
								<th class="rotated_cell"><div class="rotate_text">FRENCH</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.SCI</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.TECH</div></th>
								<th class="rotated_cell"><div class="rotate_text">P.H.E</div></th>
								<th class="rotated_cell"><div class="rotate_text">AGRIC</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.STUDIES</div></th>
								<th class="rotated_cell"><div class="rotate_text">SOS</div></th>
								<th class="rotated_cell"><div class="rotate_text">LIT.IN.ENG</div></th>
								<th class="rotated_cell"><div class="rotate_text">CIVIC</div></th> -->
							</tr>
						</thead>
						<tbody>
						<?php $tt = array(); foreach($scores as $score){
							if($score['score_type'] == 'ca'){
								if(empty($i)){
									$i = 1;
								}
								$score_type = $score['score_type'].$i;
								$i++;
							}elseif($score['score_type'] == 'exam'){
								if(empty($j)){
									$j = 1;
								}
								$score_type = $score['score_type'].$j;
								$j++;
							}elseif($score['score_type'] == 'total'){
								$score_max = $score['score_max'];
								$score_type = 'total';
							}

							?>
							<tr>
								<td><?php echo strtoupper($score['score_type']);?></td>
								<td><?php echo $score['score_max']?></td>
								<?php 
								foreach($rsubjects as $rsubject){
									for ($c=1; $c <= $ruser_details['term_id']; $c++) { 
								  $ts_id = $this->Corem->ts_details('',$c,$ruser_details['session_id']);
								  //print_r($ts_id);
							      $s_score[$c][$rsubject['subject_id']] = $this->result->pull_subject_scores($rsubject['subject_id'],$ruser_details['class_details_id'],$ruser_details['student_id'],$ts_id[0]['ts_id'],$score_type);
									
								if(!isset($s_score[$c][$rsubject['subject_id']]['score'])){
									$s_score[$c][$rsubject['subject_id']]['score'] = '-';
								}else{
									$tt[$c][$rsubject['subject_id']][] = $s_score[$c][$rsubject['subject_id']]['score'];
								}
								if($score_type == 'total'){
									if(isset($tt[$c][$rsubject['subject_id']])){
										$s_score[$c][$rsubject['subject_id']]['score'] = array_sum($tt[$c][$rsubject['subject_id']]);
									$sts[$c][$rsubject['subject_id']]['total'] = array_sum($tt[$c][$rsubject['subject_id']]);
									$sts[$c][$rsubject['subject_id']]['max'] = $this->result->get_score($ts_id[0]['ts_id'],$rsubject['subject_id'],$type='max');
									$sts[$c][$rsubject['subject_id']]['min'] = $this->result->get_score($ts_id[0]['ts_id'],$rsubject['subject_id'],$type='min');
									}
									
								} } 

									?>
									<td><?php echo $s_score[$ruser_details['term_id']][$rsubject['subject_id']]['score']; ?></td>
								<?php } 
								?>
								
								
							</tr>
							<?php } //print_r(array_sum($tt[1][3])); ?>
							<!-- <tr>
								<td>Grade</td>
								<td>21</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr> -->
						</tbody>
					</table>
					<table class="table table-hover">
						<tbody>
						<?php 
						$total = array();
						
						
						
						for ($i=1; $i <= $ruser_details['term_id'] ; $i++) { 
						 	$previous_ts_id = $this->Corem->ts_details('',$i,$ruser_details['session_id']);

						 	foreach($previous_ts_id as $ptsid){?>
							<tr>
								<td width="120px"><?php echo $ptsid['term_name']; ?> Score</td>
								<td width=""><?php echo $score_max; ?></td>
								<?php foreach($rsubjects as $rsubject){ 
									  if(!isset($sts[$i][$rsubject['subject_id']]['total'])){
									  	$sts[$i][$rsubject['subject_id']]['total'] = '-';
									  }else{
									  	$total[$rsubject['subject_id']][] = $sts[$i][$rsubject['subject_id']]['total'];
									  if($ptsid['term_id'] == $ruser_details['term_id']){
									  	$ttotal[$rsubject['subject_id']][] = $sts[$i][$rsubject['subject_id']]['total'];
									  }
									  }

									?>
									<td ><?php echo $sts[$i][$rsubject['subject_id']]['total']; ?></td>
									<?php 
									$term_id = $ruser_details['term_id'];
									if($term_id == 3 or $term_id == 2){
										if($i >= 1){
									if($sts[1][$rsubject['subject_id']]['total'] === '-'){
										$term_id -= 1;
									}}
									if($i >= 2){
									if($sts[2][$rsubject['subject_id']]['total'] === '-'){
										$term_id -= 1;
									}}

								 }
								} ?>
							</tr>
						<?php 	}


						 } //print_r($total) ;
						?>
							
							<tr>
								<td>Annual Average</td>
								<td><?php echo $score_max * $term_id; ?></td>
								<?php foreach($rsubjects as $rsubject){

								 //elseif($term_id == 2){
								// 	if(!isset($sts[1][$rsubject['subject_id']]['total'])){
								// 		$term_id -= 1;
								// 	}
								// }
								 	if(isset($total[$rsubject['subject_id']])){
								 	$average = array_sum($total[$rsubject['subject_id']]);
									$average = ceil($average / $term_id);
								 	}else{
								 		$average = '-';
								 	}
									
									?>
								<td><?php echo $average; ?></td>
								<?php }?>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td width="120px">Max. Score</td>
								<td width=""><?php echo $score_max; ?></td>
								<?php foreach($rsubjects as $rsubject){ ?>
								<td><?php if(isset($sts[$ruser_details['term_id']][$rsubject['subject_id']]['max'])){ echo $sts[$ruser_details['term_id']][$rsubject['subject_id']]['max'];}else{echo '-';} ?></td>
								<?php }?>
							</tr>
							
							<tr>
								<td>Min. Score</td>
								<td><?php echo $score_max; ?></td>
								<?php foreach($rsubjects as $rsubject){ ?>
								<td><?php if(isset($sts[$ruser_details['term_id']][$rsubject['subject_id']]['min'])){ echo $sts[$ruser_details['term_id']][$rsubject['subject_id']]['min'];}else{echo '-';} ?></td>
								<?php }?>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover">
						<tr>
							<td>No of times school opened: ??</td>
							<td>No of times present: ??</td>
							<td>No of times Absent: ??</td>
						</tr>
					</table>
					<table class="table table-hover">
						<tr>
							<td>Next term begins: <b><?php echo $module_settings['result_term_begin']; ?></b></td>
							<td>Next term ends: <b><?php echo $module_settings['result_term_end']; ?></b></td>
						</tr>
					</table>
				</div>
				<div class="col-sm-10">
					<table class="table table-hover">
						<tr>
							<td>Principal's Comment: <em>??</em></td>
						</tr>
						<tr>
							<td>Class teacher's Comment: <em>??</em></td>
						</tr>
					</table>
				</div>
				<div class="col-sm-2">
					<table class="table table-hover">
						<tr>
							<td>Principal's Signature:</td>
						</tr>
						<tr>
							<td><em>??</em></td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		
	</body>
</html>