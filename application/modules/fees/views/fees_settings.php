<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		       
				<div class="bg-light lter b-b wrapper-md">
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Fees Settings</h1>
				</div>			

				<div class="wrapper-md">

					<div class="row m-b doc-buttons ">
		                  <div class="col-sm-8 ">
								<a href="#addfee" class="btn btn-primary btn-addon"  data-toggle="modal"><i class="fa fa-plus"></i>Add New Fee</a>
								<!-- <a href="#tab5" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>New Students Bill</button></a>
								<a href="#tab6" role="tab" data-toggle="tab" aria-expanded="true"><button class="btn btn-info btn-addon" ><i class="fa fa-eye"></i>Returning Students Bill</button></a> -->
								<button class="btn btn-primary btn-addon"><i class="fa fa-eye"></i>Optional Bill</button>
		                  </div>

		                  <div class="col-sm-4">
		                  	<form action="" method="POST" class="form-inline pull-right" role="form">
	                          <div class="form-group">
	                            <label class="" for="">Select Term/Session </label>
	                            <select name="" id="input" class="form-control" required="required">
	                              <option value="">2014/2015  - 2nd Term</option>
	                              <option value="">2015/2016 - 3rd Term</option>
	                              <option value="">2016/2017 - 1st Term</option>
	                              <option value="">2016/2017 - 2nd Term</option>
	                              <option value="">2016/2017 - 3rd Term</option>
	                            </select>
	                          </div>
	                        </form>
		            	</div>
		            </div>

		            <div class="">
	                	<div role="tabpanel">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-pills" role="tablist">
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
										   				<th>SS 2</th>
										   				<th>kkhhkTableActions</th>
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
														<td>
											   				<select name="" id="input" class="form-control input-sm" required="required">
								                              <option value="">Actions</option>
								                              <option value="">Print Bill</option>
								                              <option value="">Edit</option>
								                              <option value="">Clone</option>
								                            </select>
								                        </td>
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
	                        <div role="tabpanel" class="tab-pane fade" id="tab7">
	                            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
	                        </div>
	                        <div role="tabpanel" class="tab-pane fade" id="tab8">
	                            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
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
