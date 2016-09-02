<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<!-- content -->
<div class="app-content">
	<div ui-butterbar></div>
	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	<div class="app-content-body fade-in-up">
		<!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">
		  
		  <h1 class="m-n font-thin h3">Exam Score Setup Information</h1>
		  <small> Get the all information about Examinations here. </small>
		</div>
		
		<div class="wrapper-md">
			<div class="controlB text-center m-b-lg">
		      	<ul>
		          	<li><a href="results/scores" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/pen.png"  alt="..."><span>Enter Scores</span></a></li>
		              <li><a href="results/reportsheet" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/attibutes.png"  alt="..."><span>Report sheets</span></a></li>
		              <li><a href="results/scoresheet" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/billing.png"  alt="..."><span>Score Sheets</span></a></li>
		              <li><a href="" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/advertising.png"  alt="..."><span>Broad Sheet</span></a></li>
		              <li><a href="" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/sign-up.png"  alt="..."><span>Annual Promotion</span></a></li>
		          </ul>
		      </div>
			
			<section class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Exams and Scores</h2>
				</div>
				<div class="table-responsive">
					<table class="table table-striped b-t b-light">
						<thead>
							<tr>
								<th>Exam Id</th>
								<th>Exam Name</th>
								<th>Exam Score</th>
								<th>Exam Pass</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Test</td>
								<td>C.A Test</td>
								<td>30</td>
								<td>15</td>
							</tr>
							<tr>
								<td>Test</td>
								<td>C.A Test</td>
								<td>30</td>
								<td>15</td>
							</tr>
							<tr>
								<td>Test</td>
								<td>C.A Test</td>
								<td>30</td>
								<td>15</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="panel-footer clearfix">
					<div class="pull-right m-r-xxl">
						<a class="btn m-b-xs btn-sm btn-info btn-addon" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>Add Scores</a>
					</div>
				</div>
			</section>
			
		</div>
	</div>
</div>
<!-- /content -->

    <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />





<div class="modal fade" id="modal-id">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><i class="fa fa-plus"></i> Add New Score</h3>
			</div>
			<form action="" method="POST" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label for="input" class="col-sm-5 control-label">Exam Name:</label>
						<select name="" id="input" class="form-control" required="required">
							<option value="">Test</option>
							<option value="">Exam</option>
							<option value="">Total Score</option>
						</select>
					</div>
					<duv class="form-group">
						<label>Exam Score</label>
						<input type="number" name="" class="form-control">
					</duv>	
					<duv class="form-group">
						<label>Exam Pass</label>
						<input type="number" name="" class="form-control">
					</duv>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

