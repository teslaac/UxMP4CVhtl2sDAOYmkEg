<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
 <!-- content -->
 <div class="app-content">
 	<div ui-butterbar></div>
 	 <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
 	 <div class="app-content-body fade-in-up">
 	 	 <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user"></i>200</button>
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i>200</button>
		  </span>
		  <h1 class="m-n font-thin h3">Enter Exams Scores</h1>
		  <small>  Enter the Tests and Exams score for all the student. . </small>
		</div>
		<?php
			if(!empty($_SESSION['failed'])){?>
				<div class="alert alert-danger fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['failed']; ?>
				</div>
			<?php }elseif(!empty($_SESSION['success'])){?>
				<div class="alert alert-success fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['success'];?>
				</div>
			<?php }
			?>
		<div class="wrapper-md">
<!--			<div class="panel panel-default">-->
<!--				<div class="table-responsive">-->
<!--					<form action="" method="post">-->
<!--					 <table class="table table-striped b-t b-light">-->
<!--		                    <thead class="panel-heading">-->
<!--								<tr>-->
<!--									<th>Select Class</th>-->
<!--									<th></th>-->
<!--								</tr>-->
<!--		            		</thead>-->
<!--		            		<tbody class="panel-body">-->
<!--		            			<tr>-->
<!--		            				<td>-->
<!--		            					<select name="" id="input" class="form-control" required="required">-->
<!--		            						<option value="">Select</option>-->
<!--		            					</select>-->
<!--		            				</td>-->
<!--		            				<td class="text-center">-->
<!--		            					<input type="submit" class="btn btn-info" name="" value="Get Class List">-->
<!--		            				</td>-->
<!--		            			</tr>-->
<!--		            		</tbody>-->
<!---->
<!--		            </table>-->
<!--		            </form>-->
<!--				</div>-->
<!--			</div>-->
			<?php foreach($class_details as $class_detail){

			} ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					 Exam Scores Process Table for <span class="req "> <?php echo $class_detail['class_details']; ?> - <?php echo $class_detail['subject_full_name']; ?></span>
				</div>
				<div class="table-responsive">
				<form action="<?php echo base_url(); ?>results/process/<?php echo $class_detail['subject_id']; ?>/<?php echo $class_detail['id'];?>" method="post">
					<table class="table table-striped table-hover b-t b-light">
						<thead class="panel-heading">
							<tr>
								<th>No</th>
								<th>ID</th>
								<th>Surname</th>
								<th>First Name</th>
								<th>Other Names</th>
								<?php 
								foreach($scores as $score){
								echo "<th>".strtoupper($score['score_type'])." <span class='badge'>$score[score_max]</span> </th>";
								}?>
							</tr>
						</thead>
						<tbody class="panel-body">
						<?php
						//print_r($class_details);
						foreach($class_details as $class_detail ){
							 // print_r($class_detail['score']);die();
							if(empty($i)){
								$i = 1;
							}
							$j = 0;
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $class_detail['student_id']; ?></td>
								<td><?php echo $class_detail['lname']; ?></td>
								<td><?php echo $class_detail['fname']; ?></td>
								<td><?php echo $class_detail['mname']; ?></td>
								<?php 
								foreach($scores as $score){
									if(empty($j)){
								$j = 0;
							}
							if(isset($class_detail['score'][0]['score'])){
							if($score['score_type'] == 'total'){
								$h = $j -1;
								$c_score = 0;
								for ($c=0; $c <= $h ; $c++) { 
									$c_score += $class_detail['score'][$c]['score'];
								}
							}else{
								$c_score = $class_detail['score'][$j]['score'];
							}
						}else{
							$c_score = '';
						}
									?>
								<td><input type="text" <?php if($score['score_type'] == 'total'){ echo "disabled=''";}?> name="<?php echo $score['score_type'].$class_detail['student_id']; ?>[]" id="input" class="form-control" value="<?php echo $c_score; ?>"></td> 
								<?php $j++; }
								?>
								
								<input type="hidden" name="user_id[<?php echo $i; ?>]" value="<?php echo $class_detail['student_id']; ?>">
							</tr> 
							<?php
							$i++;
						} ?>
						<input type="hidden" name="ts_id" value="<?php echo $class_detail['ts_id']; ?>">
						<input type="hidden" name="max" value="<?php echo $i - 1;  ?>">
						<input type="hidden" name="subject_id" value="<?php echo $class_detail['subject_id']; ?>">
						</tbody>
						<tfoot>
							<tr>
								<td colspan="7" class="text-right">
									<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Exam Records</button>
								</td>
							</tr>
						</tfoot>
					</table>
					</form>
				</div>
			</div>
		</div>
 	 </div>
 </div> 

     <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />
