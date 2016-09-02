<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		     
				<div class="bg-light lter b-b wrapper-md">
					<span class="pull-right form-inline" >
				  	<a href="<?php echo base_url('fees/settings/fees_names'); ?>" class="btn btn-info btn-addon"><i class="fa fa-gear"></i>Manage Fee Names </a>
				  </span>
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Fees Settings</h1>
				</div>			

				<div class="wrapper-md">

					<div class="row m-b doc-buttons ">
		                  <div class="col-sm-8 ">
								<a href="#addfee" class="btn btn-primary btn-addon"  data-toggle="modal"><i class="fa fa-plus"></i>Add New Fee</a>
								<!-- <a href="#tab5" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>New Students Bill</button></a>
								<a href="#tab6" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>Returning Students Bill</button></a> -->
								<a href="<?php echo(base_url('fees/settings/bills/'.$ts_id.'/optional')); ?>" class="btn btn-primary btn-addon"><i class="fa fa-eye"></i>Optional Bill</a>
								<a href="#fee_cats" data-toggle="modal" class="btn btn-info btn-addon"><i class="fa fa-pencil"></i>Manage Fee Categoties</a>
		                  </div>

		                  <div class="col-sm-4">
			                  	<div class="dropdown pull-right">
								  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Change Term/Session
								  <span class="caret"></span></button>
								  
								  <ul class="dropdown-menu" role="menu" aria-labelledby="tsmenu">
								  <?php  
								  foreach ($ts_details as $ts_detail) { 
								  	$ts_id = $ts_detail['ts_id'];
								  	?>
								  		
								  	<li role="presentation">
								  	<a role="menuitem" href="<?php echo(base_url("fees/settings/bills/$type/$ts_id/")); ?>">
								  			<?php echo $ts_detail['term_name'];?>
								  			<?php echo $ts_detail['session_name'];?>
								  			</a></li>
								  	<?php }?>
								  </ul>
								</div>
		                  	<!-- <form action="" method="POST" class="form-inline pull-right" role="form">
	                          <div class="form-group">
	                            <label class="" for="">Select Term/Session </label>
	                            	<select name="ts_id" class="form-control">
		                              <?php
		                              foreach ($ts_details as $ts_detail) {
		                                ?>
		                                 <option  value="<?php echo $ts_detail['ts_id'];?>">
		                                 <a href="<?php echo current_url(); ?>"><?php echo $ts_detail['term_name']." - ".$ts_detail['session_name']; ?> </a>
		                                </option>
		                                <?php
		                              }?>
		                            </select>
	                          </div>
	                        </form> -->
		            	</div>
		            </div>

		            <div class="">
	                	<div role="tabpanel">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-pills" role="tablist">
	                    	<?php foreach ($fees_cats as $cat) { ?>
	                    		<li role="presentation" class="">
	                    		<a href="<?php echo $cat['fees_cat_id']; ?>"> 
	                    		<?php echo $cat['fees_cat']; ?> Bill</a></li>
	                    	<?php }; ?>

	                        <!-- <li role="presentation" class="active"><a href="#addfee" data-toggle="modal"> Add New Student </a></li> -->
	                        <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab" aria-expanded="true"> New Students Bill</a></li>
	                        <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">Student  Bill (Category2)</a></li>
	                        <li role="presentation"><a href="#tab7" role="tab" data-toggle="tab">Student  Bill (Category3)</a></li>
	                        <li role="presentation" class=""><a href="#tab8" role="tab" data-toggle="tab" aria-expanded="false">Tab 4</a></li>
	                    </ul>
	                    <!-- Tab panes -->
	                    <div class="tab-content m-t">
	                        <div role="tabpanel" class="tab-pane fade active in" id="tab5">
	                            <div class="panel panel-default">
									<div class="panel-heading clearfix">
										<div class="pull-left">
											Payment Details Settings For <span class="text-info text-bold">  New Student</span>
										</div>
										<div class="pull-right">
											<button class="btn btn-dark btn-xs"><i class="fa fa-print"></i> Print New Students Bill</button>
										</div>

										</div>
										<div class="">
										   <div class="table-responsive">
										   	<table class="table table-hover table-striped b-t b-light">
										   		<thead>
										   			<tr>
										   				<th>No</th>
										   				<th>Level</th>
										   				<?php foreach ($headers as $name => $fee) {
										   					echo '<th>'.($name).'</th>';
										   				}?>
										   				<th>Actions</th>
										   			</tr>
										   		</thead>
										   		<tbody>
										   		<?php $count = 1; foreach ($class_values as $cls_name => $cls) { ?>										   				
										   			<tr>
										   				<td><?php echo $count++?></td>
										   				<td><?php echo $cls_name; ?></td>
										   				<?php foreach ($headers as $name => $fee) :?>
										   				<td>
										   					<?php echo isset($cls[$name])? $cls[$name]: '-' ;?>				
										   				</td>
										   				<?php endforeach;?>
														<td>
											   				<select name="" id="input" class="form-control input-sm" required="required">
								                              <option value="">Actions</option>
								                              <option value="">Print Bill</option>
								                              <option value="">Edit</option>
								                              <option value="">Clone</option>
								                            </select>
								                        </td>
										   			</tr>

										   			<?php }?>
										   		</tbody>
										   	</table>
										   </div>
										</div>
									</div>
	                        </div>
	                        <div role="tabpanel" class="tab-pane fade" id="tab6">
	                            <div class="panel panel-default">
									<div class="panel-heading clearfix">
										<div class="pull-left">
											Payment Details Settings For <span class="text-info text-bold">  Returning Student</span>
										</div>
										</div>
										<div class="panel-body">
										   <div class="table-responsive">
										   	<table class="table table-hover table-striped b-t b-light">
										   		<thead>
										   			<tr>
										   				<th>No</th>
										   				<th> Name</th>
										   				<th>KG1</th>
										   				<th>NUR1</th>
										   				<th>NUR2</th>
										   				<th>PRY1</th>
										   				<th>PRY2</th>
										   				<th>PRY3</th>
										   				<th>PRY4</th>
										   				<th>PRY5</th>
										   				<th>PRY6</th>
										   				<th>JSS 1</th>
										   				<th>JSS 2</th>
										   				<th>JSS 3</th>
										   				<th>SS 1</th>
										   				<th >SS 2</th>
										   				<th>Edit</th>
										   				<th>Clone</th>
										   				<th>Print</th>
										   			</tr>
										   		</thead>
										   		<tbody>
										   			<tr>
										   				<td>1</td>
										   				<td>TUITION</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   			</tr>
										   			<tr>
										   				<td>2</td>
										   				<td>WORKSHEET</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td >
										   					
										   				</td><td >
										   					
										   				</td>
										   			</tr>
										   			<tr>
										   				<td>3</td>
										   				<td>STATIONERY</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>67,500</td>
										   				<td>
										   					<button class="btn btn-dark btn-xs"><i class="fa fa-pencil"></i> Edit</button>
										   					<button class="btn btn-dark btn-xs"><i class="fa fa-print"></i> Print Bill</button>
										   					<button class="btn btn-dark btn-xs"><i class="fa fa-copy"></i> Clone</button>

										   				</td>


										   			</tr>
										   			<tr >
										   			
										   				<td colspan="2" class="text-right">Total</td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td><b>67,500</b></td>
										   				<td></td>
										   			
										   			</tr>
										   		</tbody>
										   	</table>
										   </div>
										</div>
									</div>
	                        </div>
	                       
	                    </div>
	                </div>
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
	        <div class=" panel-default">
	        <div class="panel-body">
	          <form action="" method="POST" role="form">

						   	<div class="form-group">
						   		<label for="">Payment Name: <span class="text-danger">*</span></label>
						   		<input type="text" class="form-control" id="" placeholder="Payment Name" required="">
						   	</div>


						   	<label> Bill type: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="mainbill" required=""><i></i>
							   			Main Bill 
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="optionalbill" required=""><i></i>
							   			Optional Bill
							   		</label>
							   	</div>
						   	</div>

						   	<label>Student Category: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="student_category" value="0" required=""><i></i>
							   			All Students
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="student_category" value="1" required=""><i></i>
							   			New Student
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="student_category" value="2" required=""><i></i>
							   			Student Category2
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="student_category" value="3" required=""><i></i>
							   			Student Category3
							   		</label>
							   	</div>
						   	</div>

						   	<div class="row">
							   	<div class="col-xs-12">
								   	<div class="table-responsive">
								   		<table class="table-hover table-striped b-t b-x col-xs-12">
								   			<thead>
								   				<tr>
								   					<th>Class</th>
								   					<th class="text-center">Amount</th>
								   				</tr>
								   			</thead>
								   			<tbody>
								   				<tr>
									   				<td>KG1</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>NURSERY1</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>NURSERY2</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary 1</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary2</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary3</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary4</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary5</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>Primary6</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>JSS1</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>JSS 2</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>JSS 3</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>SS 1</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   				<tr>
									   				<td>SS 2</td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount">
								   						</div>
								   					</td>
								   				</tr>
								   			</tbody>
								   		</table>
								   	</div>
							   	</div>
						   	</div>
					   		<div class="form-group">
					   			<div class="pull-right">
					   				<button type="submit" class="btn btn-success">Save</button>
					   			</div>
					   		</div>	
					   </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="fee_cats">
	  <div class="modal-dialog modal-md">
	    <div class="modal-content">
	      <div class="modal-header bg-info">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Manage Fee Categories</h4>
	      </div>
	      <div class="modal-body">
		        <div class=" panel-default">
		        	<form class="form-inline" action="" role="form" method="post">
		          		<div class="form-group m-b">
		      		         <input type="text" name="cat_name" class="form-control" required="" placeholder="Fee Cat Name">
		      		          <input type="hidden" name="role_id">
			                  <button class="btn btn-info" type="submit">Save Cat</button>
			            </div>
			         </form>
			            <div class="clearfix"></div>
		            	<div class="table-responsive m-t">
		                  <div class="panel panel-default">			    
		                    <table class="table table-striped b-t b-light">
		                      <thead class="panel-heading">
		                        <tr>
		                          <th>Fee Categories</th>
		                          <th>Actions</th>
		                        </tr>
		                      </thead>
		                      <tbody class="panel-body">
		                        <tr>
		                          <td class="role_name">New Students Bill</td>
		                          <td>
		                          <a href=""><button class="btn btn-danger btn-xs">Disable</button></a>
		                          <input type="hidden" class="role_id" value="1">
		                           <a href="#" class="btn btn-warning btn-xs editrn">Edit</a> 
		                          </td>
		                        </tr>
		                        </tbody>
		                    </table>
		                  </div>
		                </div>
		               <div class="clearfix"></div>
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
