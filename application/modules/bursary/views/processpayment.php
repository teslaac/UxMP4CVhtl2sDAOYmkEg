<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  </span>
		  <small> Get the all information about Examinations here. </small>
		</div>
		<div class="wrapper-md">
			
           
<!-- 
            			<div class="row m-b doc-buttons">
 				<div class="col-md-7 col-sm-6 col-xs-5">
	                <div class="input-group">
	                  <input class="form-control" placeholder="Search" type="text">
	                  <span class="input-group-btn">
	                    <button class="btn btn-info" type="button">Go!</button>
	                  </span>
	                </div>
	            </div>              
              <div class="col-md-5 col-sm-6 col-xs-7 ">
              	<div class="btn-group pull-right">
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i>  PART</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i>  PAID</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i>  DEBTORS</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i>  ALL RECORD</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXCEL</a>
                </div>
              </div>
             
            </div> -->
	<div class="row">
		<div class="col-sm-8">
			<section class="panel panel-info">
	            <header class="panel-heading">
	              Student Payment Table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light">
	                <thead>
	                  <tr>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Payment Name</th>
	                    <th>Amount</th>
	                    <th>Quantity</th>
	                    <th>Total </th>
	                    <th></th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td>1</td>
	                    <td>School Fe</td>
	                    <td>#10,000</td>
	                    <td>1</td>
	                    <td>#250000</td>
	                     <td><label class="checkbox i-checks m-l-md m-b-md">
                    			<input type="checkbox" class="form-control"><i></i>
                    		</label>
                    	</td>
	                  </tr>
	                 <tr>
	                    <td>1</td>
	                    <td>School Fe</td>
	                    <td>#10,000</td>
	                    <td>1</td>
	                    <td>#250000</td>
	                     <td><label class="checkbox i-checks m-l-md m-b-md">
                    			<input type="checkbox" class="form-control"><i></i>
                    		</label>
                    	</td>
	                  </tr>
	                  <tr>
	                    <td>1</td>
	                    <td>School Fe</td>
	                    <td>#10,000</td>
	                    <td>1</td>
	                    <td>#250000</td>
	                     <td><label class="checkbox i-checks m-l-md m-b-md">
                    			<input type="checkbox" class="form-control"><i></i>
                    		</label>
                    	</td>
	                  </tr>
	                </tbody>
	                <tfoot class="bg-info">
	                	<tr>
	                		<td colspan="4" class="text-right"><span class="h3">Total</span></td>
	                		<td colspan="2"><span class="h3">#123456</span></td>
	                	</tr>
	                </tfoot>
	              </table>
	            </div>
	            
	          </section>
	          <div class="panel panel-info">
		          <div class="panel-body">
		          	<button class="btn btn-large btn-info pull-left">Sell Scratch Card</button>
		          </div>
	          </div>
	          <div class="panel panel-info">
	          	<div class="panel-heading">
	          		<h3>Recent Payments</h3>
	          	</div>
	          	<div class="panel-body">
	          		<div class="table-responsive">
	          			<table class="table table-striped b-t b-light">
	          				<thead>
	          					<tr>
	          						<th>Date</th>
	          						<th>Payment Name</th>
	          						<th>Amount</th>
	          						<th>Qty</th>
	          						<th>total</th>
	          					</tr>
	          				</thead>
	          				<tbody>
	          					<tr>
	          						<td>23-feb,2016</td>
	          						<td>School fee</td>
	          						<td>#340,000</td>
	          						<td>1</td>
	          						<td>#340,000</td>
	          					</tr>
	          					<tr>
	          						<td>23-feb,2016</td>
	          						<td>Uniform fee</td>
	          						<td>#34,000</td>
	          						<td>3</td>
	          						<td>#102,000</td>
	          					</tr>
	          				</tbody>
	          				<tfoot class="bg-info">
	          					<tr> 
	          						<td colspan="4" class="text-right ">Total Amount</td>
	          						<td>#430,000</td>
	          					</tr>
	          				</tfoot>
	          			</table>
	          		</div>
	          	</div>
	          </div>
		
			</div>
				<div class="col-sm-4">
					<div class="panel panel-info clearfix">
						<div class="panel-heading">
							Student Profile
						</div>
						<div class="panel-body">
						<img src="<?php echo base_url();?>img/ccclear.png" width="150px" height="150px" class="pull-left">
							<p><span>Student Name :</span> Adubi Toluwani</p>
							<p><span>Student Class :</span> JSS 1</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="panel panel-info">
					<div class="panel-heading">
						<p>Payments : <span class="req"> 3</span></p>
					</div>
						<div class="panel-body">
							<p>Subtotal : <span class="req"> #33000</span></p>
						</div>
						<div class="panel-footer bg-info">
							<h4>Total : <span class="req"> #33000</span></h4>
						</div>
					</div>
					<div class="panel panel-info">
						<div class="table-responsive">
							<table class="table table-striped b-t b-light">
								<thead class="panel-heading">
									<tr>
										<th>Payment Type</th>
										<th>Amount</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="panel-body">
									<tr>
										<td>Cash</td>
										<td>#20000</td>
										<td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
									</tr>
									<tr>
										<td>Check</td>
										<td>#2000</td>
										<td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-body">
							<form action="" method="POST" class="form-inline" role="form">
                                <div class="form-group">
                                    <label class="" for="">Add Payments :    </label>
                                        <select name="" id="input" class="form-control" required="required">
                                          <option value="">Cash</option>
                                          <option value="">Check</option>
                                          <option value="">Scratch Card</option>
                                          <option value="">Teller</option>
                                        </select>
                                </div><br/><br/>
                                <div class="form-group">
                                	<input type="number" class="form-control" placeholder="Enter Amount">
                                	<button class="btn btn-small btn-dark" type="submit">Add payment</button>
                                </div><br/><br/>
                                <div class="form-group">
                                	<textarea class="form-control" placeholder="Comments"></textarea>
                                </div><br/><br/>
                                <div class="form-group">
                                	<label class="checkbox i-checks m-l-md m-b-md">
                                		<input type="checkbox" class="form-control"><i></i> Show comments on receipt
                                	</label>
                                </div>
                            </form>
                            <button class="btn btn-large btn-success col-sm-12">Pay Now</button>
							
						</div>
					</div>
				</div>
			</div>
		
    </div>
  </div>
 </div>