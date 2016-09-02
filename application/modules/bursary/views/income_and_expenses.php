<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="fa fa-gear"></i><?php echo(ucfirst($module));?> Settings </button>
		  </span>
		  <h1 class="m-n font-thin h3">Income and Expenses Register</h1>
		  <small> Get the all information about Examinations here. </small>
		</div>
		<div class="wrapper-md">
			<div class="col-sm-4">
        <a href="#searchrange" class="btn btn-lg btn-primary btn-addon" type="button"  data-toggle="modal"><i class="fa fa-search"></i>Search Range</a>
			</div>
			<div class="col-sm-6 text-center">
				<div class="col-sm-6">
					 <div class="panel padder-v item">
	                  <div class="h1 text-info font-thin h1">12</div>
	                  <span class="text-muted text-xs">Accounts</span>
	                </div>
				</div>
				<div class="col-sm-6">
					 <div class="panel padder-v item">
	                  <div class="h1 text-info font-thin h1">₦0</div>
	                  <span class="text-muted text-xs">Total Amount Spent</span>
	                </div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="panel panel-default">
					 <div class="wizard wizard-vertical nav nav-pills clearfix" role="tabpanel" id="wizard-2">
                      <ul class="steps nav-tabs">
                        <li data-target="#step1" role="presentation" class="active"><a href="#Ledger" aria-control="Ledger" role="tab" data-toggle="pill">Exp. Ledger</a></li>
                        <li data-target="#step2" role="presentation"><a href="#Kitchen" aria-control="Kitchen" role="tab" data-toggle="pill">Kitchen</a></li>
                        <li data-target="#step3" role="presentation"><a href="#Transport" aria-control="Transport" role="tab" data-toggle="tab">Transport</a></li>
                        <li data-target="#step4" role="presentation"><a href="#Cleaning" aria-control="Cleaning" role="tab" data-toggle="tab">Office Cleaning</a></li>
                        <li data-target="#step5" role="presentation"><a href="#Premises" aria-control="Premises" role="tab" data-toggle="tab">R&M Premises</a></li>
                        <li data-target="#step6" role="presentation"><a href="#Entertainment" aria-control="Entertainment" role="tab" data-toggle="tab">Entertainment</a></li>
                        <li data-target="#step7" role="presentation"><a href="#TextBook" aria-control="TextBook" role="tab" data-toggle="tab">Text Book</a></li>
                        <li data-target="#step8" role="presentation"><a href="#Stationery" aria-control="Stationery" role="tab" data-toggle="tab">Stationery</a></li>
                        <li data-target="#step9" role="presentation"><a href="#Uniform" aria-control="Uniform" role="tab" data-toggle="tab">Uniform</a></li>
                        <li data-target="#step10" role="presentation"><a href="#Repair" aria-control="Repair" role="tab" data-toggle="tab">AC Repair</a></li>                                            
                      </ul>
                   </div>
                   <div class="step-content tab-content">
                    <div class="col-sm-8">
		                  <div class="input-group">
		                    <input class="form-control" placeholder="Search" type="text">
		                    <span class="input-group-btn">
		                      <button class="btn btn-info" type="button">Search</button>
		                    </span>
		                  </div>
		              </div> 
		              <br/>
		              <br/>
		              <div class="clearfix"></div>
                   	 <div class="step-pane tab-pane fade-in active" role="tabpannel" id="Ledger">
                   	 	<div class="panel panel-default">
                   	 		 <div class="panel-heading clearfix">
						               <span class="pull-left h4">	Expenditure Ledger</span>
						               	<button class="pull-right btn btn-addon btn-info"><i class="fa fa-print"></i> Ledger</button>
						               </div>
                   	 		<div class="table-responsive">
				               <div class="clearfix"></div>
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                   	 	<br>
                   	 	<br>
						<div role="tabpanel panel panel-danger">
						    <!-- Nav tabs -->
						    <ul class="nav nav-tabs panel-heading" role="tablist">
						        <li role="presentation" class="active">
						            <a href="#expences" aria-controls="expences" role="tab" data-toggle="tab">POST EXPENSES (OUTFLOW)</a>
						        </li>
						        <li role="presentation">
						            <a href="#income" aria-controls="income" role="tab" data-toggle="tab">POST INCOME (INFLOW)</a>
						        </li>
						        <li role="presentation">
						            <a href="#cash" aria-controls="cash" role="tab" data-toggle="tab">POST CASH TRANSFER (INFLOW &amp; OUTFLOW)</a>
						        </li>
						    </ul>
						
						    <!-- Tab panes -->
						    <div class="tab-content">
						        <div role="tabpanel" class="tab-pane active" id="expences">
						        	<div class="panel panel-default">
						        		<div class="table-responsive">
			                   	 			<table class="table table-striped b-t b-light">
			                   	 				<thead class="panel-heading">
			                   	 					<tr>
									                   <th width="20"><input type="checkbox"></th>
									                    <th class="th-sortable" data-toggle="class">No.</th>
									                    <th>Date</th>
									                    <th>Description</th>
									                    <th>Quantity</th>
									                    <th>Unit Amount</th>
									                    <th>Comment</th>
									                    <th>Select Account</th>
									                    <th> </th>
									                 </tr>
			                   	 				</thead>
			                   	 				<tbody class="panel-body">
			                   	 					<tr>
			                   	 						<td><input name="post[]" value="2" type="checkbox"></td>
	                    								<td>1</td>
			                   	 						<td><span>
															<input size="10" id="" value="02-02-2016" 
															class="datepicker hasDatepicker" name="expdate" placeholder="Date"
															 required="" type="text" width="200px"><span class="ui-datepicker-append">
															  (dd-mm-yyyy)</span></span></td>
			                   	 						<td><input type="text" class="form-control"></td>
			                   	 						<td><input type="text" class="form-control"></td>
			                   	 						<td><input type="text" class="form-control"></td>
			                   	 						<td><input type="text" class="form-control"></td>
			                   	 						<td><select name="" id="input" class="form-control" required="required">
			                   	 							<option value=""></option>
			                   	 						</select></td>
			                   	 						<td><button class="btn btn-small btn-info">Save as outflow</button></td>
			                   	 					</tr>
			                   	 				</tbody>
			                   	 			</table>
			                   	 		</div>
			                   	 	</div>
						        </div>
						        <div role="tabpanel" class="tab-pane" id="income">
						        	<div class="panel panel-default">
						        		<div class="table-responsive">
			                   	 			<table class="table table-striped b-t b-light">
			                   	 				<thead class="panel-heading">
			                   	 					<tr>
									                   <th width="20"><input type="checkbox"></th>
									                    <th class="th-sortable" data-toggle="class">No.</th>
									                    <th>Date</th>
									                    <th>Description</th>
									                    <th>Voucher No </th>
									                    <th>Unit Amount</th>
									                    <th>Select Bank Account</th>
									                    <th> </th>
									                 </tr>
			                   	 				</thead>
			                   	 				<tbody class="panel-body">
			                   	 					<tr>
			                   	 						<td><input name="post[]" value="2" type="checkbox"></td>
	                    								<td>1</td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><select name="" id="input" class="form-control" required="required">
			                   	 							<option value=""></option>
			                   	 						</select></td>
			                   	 						<td><button class="btn btn-small btn-primary">Save as inflow</button></td>

			                   	 					</tr>
			                   	 				</tbody>
			                   	 			</table>
			                   	 		</div>
			                   	 	</div>
						        </div>
						        <div role="tabpanel" class="tab-pane" id="cash">
						        	<div class="panel panel-default">
						        		<div class="table-responsive">
			                   	 			<table class="table table-striped b-t b-light">
			                   	 				<thead class="panel-heading">
			                   	 					<tr>
									                   <th width="20"><input type="checkbox"></th>
									                    <th class="th-sortable" data-toggle="class">No.</th>
									                    <th>Date</th>
									                    <th>Description</th>
									                    <th>Voucher No </th>
									                    <th>From</th>
									                    <th>To</th>
									                    <th> </th>
									                 </tr>
			                   	 				</thead>
			                   	 				<tbody class="panel-body">
			                   	 					<tr>
			                   	 						<td><input name="post[]" value="2" type="checkbox"></td>
	                    								<td>1</td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><input type="text"></td>
			                   	 						<td><select name="" id="input" class="form-control" required="required">
			                   	 							<option value=""></option>
			                   	 						</select></td>
			                   	 						<td><select name="" id="input" class="form-control" required="required">
			                   	 							<option value=""></option>
			                   	 						</select></td>
			                   	 						<td><button class="btn btn-small btn-dark">Save as Transfer</button></td>

			                   	 					</tr>
			                   	 				</tbody>
			                   	 			</table>
			                   	 		</div>
			                   	 	</div>
						        </div>
						    </div>
						</div>

                   	 </div>
                   	  <!--- second tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Kitchen">
                    	<div class="panel panel-default">
	                    	 <div class="panel-heading clearfix">
					               <span class="pull-left h4">	Kitchen Ledger</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					               </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                      <!--- third tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Transport">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">	Transport Ledger</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                      <!--- fourth tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Cleaning">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">	Office Cleaning Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				               
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                     <!--- fifth tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Premises">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">R &amp; M Premises Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				              
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                     <!--- sixth tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Entertainment">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">Entertainment Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				              
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                    <!--- seventh tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="TextBook">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">Text Book Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				               
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                     <!--- eight tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Stationery">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">Stationery Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				               
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                     <!--- ninth tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Uniform">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">Uniform Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
				              
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
                    <!--- tenth tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Repair">
                    	<div class="panel panel-default">
                    		<div class="panel-heading clearfix">
					               <span class="pull-left h4">AC Repair Account</span>
					               		<button class="pull-right btn btn-addon btn-info"><i>#0</i> Total Amount</button>
					              </div>
				               <div class="clearfix"></div>
                   	 		<div class="table-responsive">
                   	 			<table class="table table-striped b-t b-light">
                   	 				<thead>
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Description</th>
						                    <th>Account</th>
						                    <th>Comment</th>
						                    <th>Term</th>
						                    <th>System Time</th>
						                    <th>Quantity </th>
						                    <th>Amount </th>
						                    <th>Total </th>
						                 </tr>
                   	 				</thead>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                    </div>
				</div>
			</div>
		
    </div>
  </div>
 </div>

<div class="modal fade" id="searchrange">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-search"></i>    Search Range</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
        <div class="panel-body">
          <form action="" role="form" method="POST" class="clearfix">
            <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="" checked="checked">
                <i></i>
                </label>
            </div>
                <div class="form-group col-sm-11 pull-left">
                  <select name="" class="form-control">
                  <option value="1">Today</option>
                  <option value="1">Yesterday</option>
                  <option value="1">This week</option>
                  <option value="1">Last Week</option>
                  <option value="1">This Month</option>
                  <option value="1">Last Month</option>
                  <option value="1">This Year</option>
                  <option value="1">Last Year</option>
                </select>
                </div>
              <div class="clearfix"></div>
              <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="">
                <i></i>
                </label>
            </div>
            <div class="form-group col-sm-11 pull-left">
                <div class="table-responsive">
                  <div class="panel panel-default">
                    <table class="table table-striped b-t b-light">
                      <thead class="panel-heading">
                        <tr>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="panel-body">
                        <tr>
                          <td>
                            <input type="text" class="form-control">
                          </td>
                          <td>
                            <input type="text" class="form-control">
                          </td>
                          <td><button class="btn btn-info">Go</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <div class="clearfix"></div>
             <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="" checked="checked">
                <i></i>
                </label>
            </div>
               <div class="form-group pull-left col-sm-11">
               <div class="row">
                 <div class="col-sm-6">
                    <select name="" class="form-control col-sm-6">
                      <option value="1">All Term</option>
                      <option value="1">1st Term</option>
                      <option value="1">2nd Term</option>
                      <option value="1">3rd Term</option>
                    </select>
                 </div>
                 <div class="col-sm-6">
                    <select name="" class="form-control col-sm-6">
                      <option value="1">2012/2013</option>
                      <option value="1">2013/2014</option>
                      <option value="1">2014/2015</option>
                      <option value="1">2015.2016</option>
                    </select>
                 </div>
               </div>
               </div>
               <div class="clearfix"></div>
               <button class="btn btn-info btn-large pull-right" type="submit" role="button">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<style type="text/css">
  .step-content {
    min-height: 400px !important;
}
</style>