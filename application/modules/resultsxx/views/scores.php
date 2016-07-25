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
					<form action="" method="post">
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
								<th>Edit Exam</th>
							</tr>
						</thead>
						<tbody class="panel-body">
							<tr>
								<td>1</td>
								<td>Civic</td>
								<td>Mrs Sule S.O</td>
								<td>22</td>
								<td><span class="label bg-danger">Unprocessed</td>
								<td><a href="scores/process" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Process Exam Scores</a></td>
								<td><button class="btn btn-xs btn-dark"><i class="fa fa-pencil"></i> Edit</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Computer</td>
								<td>Mrs Sule S.O</td>
								<td>22</td>
								<td><span class="label bg-danger">Unprocessed</td>
								<td><a href="process" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Process Exam Scores</a></td>
								<td><button class="btn btn-xs btn-dark"><i class="fa fa-pencil"></i> Edit</button></td>
							</tr>
							<tr>
								<td>3</td>
								<td>C.R.S</td>
								<td>Mrs Sule S.O</td>
								<td>22</td>
								<td><span class="label bg-danger">Unprocessed</td>
								<td><a href="process" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Process Exam Scores</a></td>
								<td><button class="btn btn-xs btn-dark"><i class="fa fa-pencil"></i> Edit</button></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Civic</td>
								<td>Mrs Sule S.O</td>
								<td>22</td>
								<td><span class="label bg-danger">Unprocessed</td>
								<td><a href="process" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Process Exam Scores</a></td>
								<td><button class="btn btn-xs btn-dark"><i class="fa fa-pencil"></i> Edit</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
 	 </div>
 </div> 

     <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />
