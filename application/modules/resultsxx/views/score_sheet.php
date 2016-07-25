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
		  <h1 class="m-n font-thin h3">View Exams Scores</h1>
		  <small> View the Tests and Exams score for all the student.</small>
		</div>
		<div class="wrapper-md">
			<div class="panel panel-default">
				<div class="table-responsive">
					<form action="" method="post">
					 <table class="table table-striped b-t b-light">
		                    <thead class="panel-heading">
								<tr>
									<th>Select Class</th>
									<th>Select Subject</th>
									<th></th>
								</tr>
		            		</thead>
		            		<tbody class="panel-body">
		            			<tr>
		            				<td>
		            					<select name="" id="input" class="form-control" required="required">
		            						<option value="">Select</option>
		            					</select>
		            				</td>
		            				<td>
		            					<select name="" id="input" class="form-control" required="required">
		            						<option value="">Select</option>
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
					 Score Sheet for <span class="req "> GRADE 1 - CIVIC</span> 
				</div>
				<div class="table-responsive">
					<table class="table table- b-t b-light">
						<thead class="panel-heading">
							<tr>
								<th>No</th>
								<th>Surname</th>
								<th>First Name</th>
								<th>Other Names</th>
								<th>1st Test  <span class="badge">  15</span></th>
								<th>2nd Test  <span class="badge">  15</span></th>
								<th>Exam  <span class="badge">  70</span></th>
								<th>Total <span class="badge">  100</span></th>
							</tr>
						</thead>
						<tbody class="panel-body">
							<tr>
								<td>1</td>
								<td>Are</td>
								<td>Solomon</td>
								<td>Abiodun</td>
								<td class="text-center">  08</td>
								<td class="text-center">  10</td>
								<td class="text-center">  40</td>
								<td class="text-center">  58</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Are</td>
								<td>Solomon</td>
								<td>Abiodun</td>
								<td class="text-center">  08</td>
								<td class="text-center">  10</td>
								<td class="text-center">  40</td>
								<td class="text-center">  58</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Are</td>
								<td>Solomon</td>
								<td>Abiodun</td>
								<td class="text-center">  08</td>
								<td class="text-center">  10</td>
								<td class="text-center">  40</td>
								<td class="text-center">  58</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body text-right">
					<a href="score_sheet/print_score_sheet" class="btn btn-info btn-lg"><i class="fa fa-print"></i> PRINT SCORE SHEET</a>
				</div>
			</div>
		</div>
 	 </div>
 </div> 

     <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />
