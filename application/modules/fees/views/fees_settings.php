<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
isset($fees_settings_id) ? $fees_shortname = $fees_settings_id[0]['fees_shortname']: $fees_shortname = null; ?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		     
				<div class="bg-light lter b-b wrapper-md">
					<span class="pull-right" >
				  	   <a href="<?php echo(base_url($page));?>" class="btn btn-primary btn-addon  "><i class="fa fa-home"></i> <?php echo $page;?> Home </a>
				    </span>
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Fees Settings</h1>
				</div>			

				<div class="wrapper-md">

					<div class="row m-b doc-buttons ">
		                  <div class="col-sm-8 ">
								
								<a href="#addfee" class="btn btn-info btn-addon"  data-toggle="modal"><i class="fa fa-plus"></i>Add New Fee</a>

								<a href="#fee_cats" data-toggle="modal" class="btn btn-info btn-addon"><i class="fa fa-pencil"></i>Manage Fee Categoties</a>

								<a href="<?php echo base_url('fees/settings/fees_names'); ?>" class="btn btn-info btn-addon"><i class="fa fa-gear"></i>Manage Fee Names </a>

								<!-- <a href="#tab5" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>New Students Bill</button></a>
								<a href="#tab6" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>Returning Students Bill</button></a> -->
		                  </div>

		                  <div class="col-sm-4">

			                  	<div class="dropdown pull-right">
			                  	Change Term/Session 
								  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
								  <?php echo($page_ts_details['term_name']).' '.$page_ts_details['session_name'];  ?>
								  <span class="caret"></span></button>
								  
								  <ul class="dropdown-menu" role="menu" aria-labelledby="tsmenu">
								  <?php  
								  foreach ($ts_details as $ts_detail) { 
								  	$ts_id2 = $ts_detail['ts_id']; ?>
								  		
								  	<li role="presentation">
								  	<a role="menuitem" href="<?php echo(base_url("fees/settings/bills/$type/$ts_id2/")); ?>">
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
			      <!-- SETTING FILTER FORM-->
	                    <div class="row">
	                    <form action="<?php echo base_url('fees/settings/filter'); ?>" method="POST">
							<div class="form-group col-sm-12">
				                <div class="table-responsive">
				                  <div class="panel panel-default">
				                    <table class="table table-striped b-t b-light">
				                      <thead class="panel-heading">
				                        <tr>
				                          <th>Bill Type</th>
				                          <th>Student Fee Category</th>
				                          <th>Term - Session</th>
				                          <th></th>
				                        </tr>
				                      </thead>
				                      <tbody class="panel-body">
				                        <tr>
				                          <td class="form-inline">
				                           <select class="form-control" name="bill_type">
				                              <option value="">Select</option>
				                              <option <?php echo ($type == 'main')? 'selected': '' ;?> value="main"> Main Bill</option>
				                              <option  <?php echo ($type == 'optional')? 'selected': '' ;?> value="optional">Optional Bill</option>
				                            </select>
				                          </td>
				                          <td class="form-inline">	                           
				                            <select class="form-control" name="stu_cat">
				                              <option value="">Select</option>
				                              
				                              <?php foreach ($fees_cats as $cat) { 
					                    		$fees_cat_id = $cat['fees_cat_id'];
					                    		?>

					                    		<option  <?php echo ($fees_cat_id == $stu_cat)? 'selected': '' ;?> value="<?php echo ($fees_cat_id);?>"> 
					                    		<?php echo $cat['fees_cat']; ?> Bill</option>
					                    	<?php }; ?>
				                            </select>
				                          </td>
				                          <td class="form-inline ">
				                            
				                            <select name="ts_id" class="form-control">
					                              <?php
					                              foreach ($ts_details as $ts_detail) {
					                                ?>
					                                 <option <?php echo ($ts_detail['ts_id'] == $ts_id)? 'selected': '' ;?>  
					                                 value="<?php echo $ts_detail['ts_id'];?>">
					                                 <a href="<?php echo current_url(); ?>"><?php echo $ts_detail['term_name']." - ".$ts_detail['session_name']; ?> </a>
					                                </option>
					                                <?php
					                              }?>
					                            </select>
				                          </td>
				                          <td><button type="submit" name="filter" class="btn btn-info">Go</button></td>
				                        </tr>
				                      </tbody>
				                    </table>
				                  </div>
				                </div>
				      		</div>
				      	</form>
					    </div>

		     		<div class="">
	                	<div role="tabpanel">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-pills" role="tablist">
	                    	

	                    	<?php foreach ($fees_cats as $cat) { 
	                    		$fees_cat_id = $cat['fees_cat_id'];
	                    		//print_r($fees_cat_row['fees_cat_id'].$fees_cat_id); 
	                    		$active = ($fees_cat_id == $fees_cat_row['fees_cat_id'])?'active' : '';?>

	                    		<li role="presentation" class="<?php echo $active;?>"><a href="<?php echo(base_url("fees/settings/bills/$type/$ts_id/$fees_cat_id")); ?>"> 
	                    		<?php echo $cat['fees_cat']; ?> Bill</a></li>
	                    	<?php }; ?>

	                        <!-- <li role="presentation" class="active"><a href="#addfee" data-toggle="modal"> Add New Student </a></li> 
	                        <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab" aria-expanded="true"> New Students Bill</a></li>
	                        <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab">Student  Bill (Category2)</a></li>
	                        <li role="presentation"><a href="#tab7" role="tab" data-toggle="tab">Student  Bill (Category3)</a></li>
	                        <li role="presentation" class=""><a href="#tab8" role="tab" data-toggle="tab" aria-expanded="false">Tab 4</a></li> -->
	                    </ul>


	                    <!-- Tab panes -->
	                    <div class="tab-content m-t">
	                        <div role="tabpanel" class="tab-pane fade active in" id="tab5">
	                            <div class="panel panel-default">
									<div class="panel-heading clearfix">
										<div class="pull-left">
											Payment Details Settings For 
											
											<span class="text-info text-bold">  <?php print_r($fees_cat_row['fees_cat']); ?></span>
										</div>
										<div class="pull-right">
											<button class="btn btn-dark btn-xs"><i class="fa fa-print"></i> Print <?php print_r($fees_cat_row['fees_cat']); ?> Bill</button>
										</div>

										</div>
										<div class="">
										   <div class="table-responsive">
										   	<table class="table table-hover  b-t m-b-n b-light">
										   	  <colgroup></colgroup>
										   	  <colgroup></colgroup>
										   	  <?php foreach ($headers as $name => $fee) {
										   			echo '<colgroup></colgroup>'; }?>
										   	  <colgroup></colgroup>
										   	  <colgroup></colgroup>
										   		<thead>
										   			<tr>
										   				<th>No</th>
										   				<th>Level</th>
										   				<?php foreach ($headers as $name => $fee) {
										   					echo '<th>'.($name).'</th>';
										   				}?>
										   				<th>Total</th>
										   				<th>Actions</th>
										   			</tr>
										   		</thead>
										   		<tbody>
										   		<?php 
										   		$count = 1; foreach ($class_values as $cls_name => $cls) { 
										   			$sum_amount = 0;
										   			?>										   				
										   			<tr>
										   				<td><?php echo $count++?></td>
										   				<td><?php echo $cls_name; ?></td>
										   				<?php foreach ($headers as $name => $fee) :?>
										   				<td>
										   					<?php echo isset($cls[$name])? $cls[$name]: '-' ;?>
										   					<?php  isset($cls[$name])?$sum_amount = $sum_amount + $cls[$name]: 0; ?>				
										   				</td>
										   				<?php endforeach;?>
										   				<td> <?php echo number_format($sum_amount); ?> </td>
														<td>
											   				<div class="dropdown">
															  <button class="btn btn-xs btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Actions
															  <span class="caret"></span></button>
															  
															  <ul class="dropdown-menu" role="menu" aria-labelledby="actionmenu">
															  		
															  	<li role="presentation">
															  	<a role="menuitem" href="">Edit</a></li>
															  	<li role="presentation"><a role="menuitem" href="">Disable</a></li>
															  	<li role="presentation"><a role="menuitem" href="">Delete</a></li>
															  </ul>
															</div>
								                        </td>
										   			</tr>
										   			<?php }?>
										   			<tr>
										   				<td></td>
										   				<td></td>
										   				<?php foreach ($headers as $name => $fee) :?>
										   				<td>
										   				<form action="" method="post">
										   					<button name="editfee" type='submit' class="btn btn-warning btn-xs " value="<?php echo $fee; ?>">Edit </button>	
										   				</form>
										   					<!-- <a href="<?php echo base_url("fees/settings/get_levels_fees/$fee"); ?>" class="btn btn-warning btn-xs editfee" data-value="<?php echo $fee; ?>">Edit </a> -->				
										   				</td>
										   				<?php endforeach;?>
										   				<td>  </td>
														<td>
								                        </td>
										   			</tr>
										   		</tbody>
										   	</table>
										   </div>
										</div>
									</div>
	                        </div>
	                        <!-- <div role="tabpanel" class="tab-pane fade" id="tab6">
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
	                        </div> -->
	                       
	                    </div>
	                </div>
	            </div>

				
			</div>
		</div>
	</div>

	<!-- ADD FEE MODAL -->
	<div class="modal fade" id="addfee">
	  <div class="modal-dialog modal-md">
	    <div class="modal-content">
	      	<div class="modal-header bg-info">
	        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h4 class="modal-title"><i class="fa fa-plus"></i> Add New Fee</h4>
	      	</div>
	      	<form action="<?php echo base_url('fees/settings/save_fees'); ?>" method="POST" role="form">
			    <div class="modal-body">
			        <div class=" panel-default">
				        <div class="panel-body">		          	
						   	<div class="form-group">
						   		<label for="">Payment Name: <span class="text-danger">*</span></label>
						   		
						   		<select id="payment_type" name="fees_id" class="form-control" required="">
									<option value="">Select Payment Name</option>

									<?php $n = 1; foreach ($fees_names as $fee) { ?>
										<option value="<?php echo $fee['fees_id']; ?>"><?php echo $fee['fees_name']; ?></option>
									<?php } ?>

								</select>
						   	</div>

						   <label> Bill type: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="main" <?php echo  ($type == 'main')? 'checked': '' ; ?> required=""><i></i>
							   			Main Bill 
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="optional" required="" <?php echo  ($type == 'optional')? 'checked': '' ; ?> 
							   			><i></i>
							   			Optional Bill
							   		</label>
							   	</div>
						   	</div>

						   	<label>Student Category: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">

								   	<?php foreach ($fees_cats as $cat) { ?>
			                    		
			                    		<label class="i-checks i-checks-sm">
								   			<input type="radio" name="stu_cat" value="<?php echo($cat['fees_cat_id']); ?>" <?php echo  ($cat['fees_cat_id']== $stu_cat )? 'checked': '' ; ?> required=""><i></i>
								   			<?php echo $cat['fees_cat']; ?> 
								   		</label>
			                    	<?php }; ?>
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
								   			<?php if($type == 'optional'){ ?>
								   			<tr>
									   			<td>ALL Levels</td>
									   			<td>
							   						<div class="form-group">
							   							<input type="text" class="form-control" id="" placeholder="Enter Amount" value="4000" name="amount[]">
							   							<input type="hidden"  name="level[]" value="all">
							   							<input type="hidden"  name="fsid[]" value="">
							   						</div>
								   				</td>
								   			</tr>
								   			<?php }else{ ?>
								   			<?php foreach ($app_levels_school as $level) { ?>
								   				<tr>
									   				<td><?php echo $level['class_name']; ?> </td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="" placeholder="Enter Amount" value="2000" name="amount[]">
								   							<input type="hidden"  name="level[]" value="<?php echo $level['level_id']; ?>">
								   							<input type="hidden"  name="fsid[]" value="">
								   						</div>
								   					</td>
								   				</tr>
								   			<?php } ?>
								   			<?php } ?>
								   			</tbody>
								   		</table>
								   	</div>
							   	</div>
						   	</div>
		          		</div>
		        	</div>
			    </div>
			    <div class="modal-footer">
		   			<div class="pull-right">
		   				<input type="hidden"  name="ts_id" value="<?php echo $ts_id; ?>">
		   				<button type="submit" name="save_fees" class="btn btn-success">Save</button>
		   			</div>
		   		</div>
   			</form>
   		</div>
	  </div>
	</div>


	<!-- EDIT FEE MODAL -->
	<div class="modal fade" id="editfee">
	  <div class="modal-dialog modal-md">
	    <div class="modal-content">
	      	<div class="modal-header bg-info">
	        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h4 class="modal-title"><i class="fa fa-pencil"></i> Edit <?php echo($fees_shortname) ; ?> Fee</h4>
	      	</div>
	      	<form id="editf" action="<?php echo base_url('fees/settings/save_fees'); ?>" method="POST" role="form">
			    <div class="modal-body">
			        <div class=" panel-default">
				        <div class="panel-body">		          	
						   <label for="">Payment Name: <span class="text-danger">*</span></label>	
						   <div class="form-group">
						   		
						   		<input type="text" id="efee" value="<?php echo($fees_shortname) ; ?>" disabled="" name="fees_id" class="form-control" required="">
									
						   	</div>

						   	<label> Bill type: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="main" <?php echo  ($type == 'main')? 'checked': '' ; ?> required=""><i></i>
							   			Main Bill 
							   		</label>
							   		<label class="i-checks i-checks-sm">
							   			<input type="radio" name="bill_type" value="optional" required="" <?php echo  ($type == 'optional')? 'checked': '' ; ?> 
							   			><i></i>
							   			Optional Bill
							   		</label>
							   	</div>
						   	</div>

						   	<label>Student Category: <span class="text-danger">*</span></label>
							<div class="form-group">
							   	<div class="radio">

								   	<?php foreach ($fees_cats as $cat) { ?>
			                    		
			                    		<label class="i-checks i-checks-sm">
								   			<input type="radio" name="stu_cat" value="<?php echo($cat['fees_cat_id']); ?>" <?php echo  ($cat['fees_cat_id']== $stu_cat )? 'checked': '' ; ?> required=""><i></i>
								   			<?php echo $cat['fees_cat']; ?> 
								   		</label>
			                    	<?php }; ?>
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
								   			<?php foreach ($fees_settings_id as $level) { 
								   				//$level = $feelevel['level_id']; 
								   				//print_r($level['class_name']);
								   				?>
								   				<tr>
									   				<td><b><?php echo strtoupper($level['class_name']); ?> </b></td>
									   				<td>
								   						<div class="form-group">
								   							<input type="text" class="form-control" id="bill" placeholder="Enter Amount" value="<?php echo $level['amount']; ?>" name="amount[]">
								   							<input type="hidden"  name="level[]" value="<?php echo $level['level']; ?>">
								   							<input type="hidden"  name="fsid[]" value="<?php echo $level['id']; ?>">
								   						</div>
								   					</td>
								   				</tr>
								   			<?php } ?>
								   			</tbody>
								   		</table>
								   	</div>
							   	</div>
						   	</div>
		          		</div>
		        	</div>
			    </div>
			    <div class="modal-footer">
		   			<div class="pull-right">
		   				<input type="hidden"  name="fees_id" value="<?php echo $editfee; ?>">
		   				<input type="hidden"  name="ts_id" value="<?php echo $ts_id; ?>">
		   				<button type="submit" name="save_fees" class="btn btn-success">Save</button>
		   			</div>
		   		</div>
   			</form>
   		</div>
	  </div>
	</div>

	<!-- FEE CATS  -->
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

	<style type="text/css">
		.dropdown-menu{min-width: 50px;}
		.dropdown-menu > li > a {padding: 3px 10px;}
		.modal-dialog{overflow-y: initial !important}
		.modal-body{height: 450px; overflow-y: auto;}	
		.table {margin-bottom: 5px;}
		.hover { background-color: #eee; }
	</style>

	<?php if($editfee){ ?>
	<script>
            $('#editfee').modal('show');
    </script>
    <?php } ?>

	<script>

	/// Function to Highlight Column
	$(function() {
			    $("table").delegate('td','mouseover mouseleave', function(e) {
			        if (e.type == 'mouseover') {
			          $(this).parent().addClass("hover");
			          $("colgroup").eq($(this).index()).addClass("hover");
			        } else {
			          $(this).parent().removeClass("hover");
			          $("colgroup").eq($(this).index()).removeClass("hover");
			        }
			    });

			});


     $(".editfeexx").click(function(){ /// TO BE CONTINUED....
            	var fee = $(this).closest(".editfee").data('value');
            	var no = 0;
            	var data2;

            	searchThis = 'This text will be search';
			    $.ajax({
			      type: "POST",
			      url: "<?php echo site_url();?>/fees/settings/get_levels_fees/10",
			      dataType: "html",
			      success:function(data){
			      	  var dataObject = JSON.parse(data);
					  //console.log(dataObject);      

					  //alert(dataObject[0]["fsettings_id"]); 

			      	for(var i = 0; i < dataObject.length; i++) {
					    var obj = dataObject[i];

					    var fee = obj["fee"];
					    var bill_type = obj["type"];
					    $("#efee").val(obj["fee"]);

					    //var stu_cat = obj[stu_cat'];

					    console.log(obj["fee"]);
					}
			      },

			    });

            $('#editfee').modal('show');
                
            })

            

        </script>

