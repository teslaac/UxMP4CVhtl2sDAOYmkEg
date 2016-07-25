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
	                    <th>discount</th>
	                    <th>Total </th>
	                    <th>Action</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td>1</td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
	                  </tr>
	                  <tr>
	                    <td>1</td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
	                  </tr>
	                   <tr>
	                    <td>1</td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
	                  </tr>
	                   <tr>
	                    <td>1</td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><input type="text" class="form-control"></td>
	                    <td><button class="btn btn-small btn-default text-danger"><span class="text-danger">X</span></button></td>
	                  </tr>
	                </tbody>
	              </table>
	            </div>
	            
	          </section>
	          <div class="panel panel-info">
		          <div class="panel-body">
		          	<button class="btn btn-large btn-info pull-right">Create Bill</button>
		          </div>
	          </div>
	         
		
			</div>
				<div class="col-sm-4">
					<div role="tabpanel panel panel-info">
						    <!-- Nav tabs -->
					    <ul class="nav nav-tabs panel-heading" role="tablist">
					        <li role="presentation" class="active">
					            <a href="#summary" aria-controls="expences" role="tab" data-toggle="tab">Summary</a>
					        </li>
					        <li role="presentation">
					            <a href="#extra" aria-controls="income" role="tab" data-toggle="tab">Extra</a>
					    </ul>
						
						    <!-- Tab panes -->

						<div class="tab-content">
					        <div role="tabpanel" class="tab-pane active" id="summary">
								<div class="panel panel-info clearfix">
									<div class="panel-heading">
										Student Profile
									</div>
									<div class="panel-body">
										<img src="<?php echo base_url();?>img/ccclear.png" width="150px" height="150px" class="pull-left">
										<p><span>Student Name :</span> Adubi Toluwani</p>
										<p><span>Student Class :</span> JSS 1</p>
										<div class="clearfix"></div>
										<button class="btn btn-info">Change User</button>
										<button class="btn btn-warning">Detach User</button>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="panel panel-info">
									<div class="panel-heading">
										<p>Payments : <span class="req"> 3</span></p>
									</div>
									<div class="panel-body">
										<h4>Total : <span class="req"> #33000</span></h4>
										</div>
									</div>
						        </div>
					        <div role="tabpanel" class="tab-pane" id="extra">
					        	<div class="panel panel-info">
					        		<div class="table-responsive">
					        			<table class="table table-striped b-t b-light">
					        				<thead class="panel-heading">
					        					<tr>
					        						<th>Payment Name</th>
					        						<th>Amount</th>
					        						<th>Add</th>
					        					</tr>
					        				</thead>
					        				<tbody>
					        					<tr>
					        						<td>SchoolFee</td>
					        						<td>#340,000</td>
					        						<td><button class="btn btn-small btn-default text-success"><span class="text-success"><i class="fa fa-plus"></i></span></button></td>
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