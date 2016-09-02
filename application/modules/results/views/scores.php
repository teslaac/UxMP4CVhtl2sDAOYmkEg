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
		<div class="wrapper-md">
			<div class="panel panel-default">
				<div class="table-responsive">
					<form action="<?php echo base_url(); ?>results/scores" method="get">
					 <table class="table table-striped b-t b-light">
		                    <thead class="panel-heading">
								<tr>
									<th>Select Class</th>
									<th></th>
								</tr>
		            		</thead>
		            		<tbody class="panel-body">
		            			<tr>
		            				<td>
		            					<select name="classes" id="input" class="form-control" required="required">
											<option value="">Select</option>
											<?php
												foreach($classes as $class){?>
													<option value="<?php echo $class['id']; ?>"><?php echo $class['class_details']; ?></option>
											<?php }?>
		            					</select>
		            				</td>
		            				<td class="text-center">
		            					<input type="submit" class="btn btn-info" name="" value="Get Class List">
		            				</td>
		            			</tr>
		            		</tbody>

		            </table>
		            </form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					 Exam Scores Process Table for <span class="req "> GRADE 1</span> 
				</div>
				<div class="table-responsive">
					<table class="table table- b-t b-light">
						<thead class="panel-heading">
							<tr>
								<th>No</th>
								<th>Subject</th>
								<th>Subject Teacher</th>
								<th>No. OF Students</th>
								<th>Process Status</th>
								<th>Process Exam</th>
								<!-- <th>Edit Exam</th> -->
							</tr>
						</thead>
						<tbody class="panel-body">
						<?php
						if(isset($class_students)){
							foreach($class_students as $class_student) {
								if (empty($i)) {
									$i = 1;
								}
								$status[$i] = $this->result->no_processed_result(array('subject_id'=>$class_student['subject_id'],'class_details_id'=>$class_student['class_details_id']));
								$cs = 'info';
								if($status[$i] == 0){
									$cs = 'danger';
								}elseif($status[$i] < $class_student['count']){
									$cs = 'info';
								}elseif($status[$i] == $class_student['count']){
									$cs = 'success';
								}
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $class_student['subject_full_name']; ?></td>
									<td><?php echo $class_student['lname'] . " ".$class_student['fname']. " ".$class_student['mname'] ; ?></td>
									<td><?php echo $class_student['count']; ?></td>
									<td><span class="label bg-<?php echo $cs; ?>"><?php echo "$status[$i] out of $class_student[count]"; ?></span></td>
									<td><a href="scores/process/<?php echo $class_student['subject_id']; ?>/<?php echo $class_student['class_details_id']; ?>" class="btn btn-xs btn-info"><i
												class="fa fa-pencil"></i> Process Exam Scores</a></td>
									
								</tr>
								<?php
									$i++;
								}}else{
							echo "<center>No Record Available</center>";
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
 	 </div>
 </div> 

     <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />
