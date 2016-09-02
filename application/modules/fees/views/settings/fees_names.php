<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		       <div class="bg-light lter b-b wrapper-md">
				  <span class="pull-right form-inline" >
				  	<a href="<?php echo base_url('fees/settings'); ?>" class="btn btn-default btn-addon"><i class="fa fa-chevron-left"></i>Fee Settings</a>
				  </span>
				  <h1 class="m-n font-thin h3">Fees Settings</h1>
				  <small> Manage Fee Names. Set Compulsory and Optional Fees. </small>
				</div>
				<!-- <div class="bg-light lter b-b wrapper-md">
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Fees Settings - Fee Names</h1>
					
					<a href="../settings" class="btn btn-primary btn-addon pull-right"><i class="fa fa-chevron-left"></i>Fee Settings</a>

				</div>	 -->		

				<div class="wrapper-md">

					<div class="row m-b doc-buttons ">
		                  <div class="col-sm-8 ">
								<a href="#addfee" class="btn btn-info btn-addon"  data-toggle="modal"><i class="fa fa-plus"></i>Add New Fee</a>
								<a href="<?php echo base_url('fees/settings/fees_names'); ?>" class="btn btn-primary">All Bills </a>
								<a href="<?php echo base_url('fees/settings/fees_names/compulsory'); ?>" class="btn btn-primary">Main Bill </a>
								<a href="<?php echo base_url('fees/settings/fees_names/optional'); ?>" class="btn btn-primary">Optional Bill </a>
		                  </div>

		            </div>

		            <div class="">
	                	<section class="panel panel-default">
					        <header class="panel-heading">
					          Fee Names
					        </header>
					        <div class="table-responsive">
					          <table class="table table-striped b-t b-light">
					            <thead>
					              <tr>
					                <th>No.</th>
					                <th>Fees Names</th>
					                <th>Fees Short Names</th>
					                <th>Type</th>
					                <th>Active</th>
					                <th>Edit</th>
					                <th>Disable</th>
					              </tr>
					            </thead>
					            <tbody>
					            <?php $n = 1; foreach ($fees_names as $fee) { ?>
					            	<?php //print_r($fee); ?>
					             <tr>
					                <td><?php echo $n++; ?></td>
					                <td class="fee"><?php echo $fee['fees_name']; ?></td>
					                <td class="fee"><?php echo $fee['fees_shortname']; ?></td>
					                <td class="fee"><?php echo $fee['type']; ?></td>
					                <td class="fee"><?php echo $fee['active']; ?></td>
					                <td><a href="#feesnames-modal" data-toggle="modal" class="btn btn-xs btn-primary editsd"><i class="fa fa-pencil"></i> Edit</a></td>
					                <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
					            </tr>
					            <?php } ?>
					          </table>
					        </div>

					      </section>
	            	</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="addfee">
	  <div class="modal-dialog modal-md">
	    <div class="modal-content">
	      <div class="modal-header bg-info">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add New Fee</h4>
	      </div>
	      <div class="modal-body">
		        <div class="panel-body">
		          	<form action="" method="POST" role="form">
		          		<div class="row">
		          			<div class="col-md-6">
		          				<div class="form-group">
							   		<label for="">Fee Name: <span class="text-danger">*</span></label>
							   		<input type="text" class="form-control" id="" placeholder="Fee Name" required="" name="fee_name">
							   	</div>
		          			</div>
		          			<div class="col-md-6">
		          				<div class="form-group">
							   		<label for="">Fee Short Name: <span class="text-danger">*</span></label>
							   		<input type="text" class="form-control" id="" placeholder="Fee Short Name" required="" name="fee_short_name">
							   	</div>
		          			</div>

							<div class="col-md-6">
							   	<label> Bill type: <span class="text-danger">*</span></label>
								<div class="form-group">
								   	<div class="radio">
								   		<label class="i-checks i-checks-sm m-r-lg">
								   			<input type="radio" name="bill_type" value="mainbill" required=""><i></i>
								   			Main Bill 
								   		</label>
								   		<label class="i-checks i-checks-sm">
								   			<input type="radio" name="bill_type" value="optionalbill" required=""><i></i>
								   			Optional Bill
								   		</label>
								   	</div>
							   	</div>
							</div>

							<div class="col-md-6">
							   	<label> Status: <span class="text-danger">*</span></label>
								<div class="form-group">
								   	<div class="radio">
								   		<label class="i-checks i-checks-sm m-r-lg">
								   			<input type="radio" name="bill_type" value="enable" required=""><i></i>
								   			Enable 
								   		</label>
								   		<label class="i-checks i-checks-sm">
								   			<input type="radio" name="bill_type" value="disable" required=""><i></i>
								   			Disable
								   		</label>
								   	</div>
							   	</div>
						   	</div>
						</div>	

				   </form>
	          	</div>
	      	</div>
	      	<div class="modal-footer">
	   			<div class="pull-right">
	   				<button type="submit" class="btn btn-success">Save</button>
	   			</div>
	   		</div>	
	    </div>
	  </div>
	</div>
