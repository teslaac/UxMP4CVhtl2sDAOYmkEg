<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

<?php //echo lang('sales_giftcard_number')." <small> -  ".lang('sales_giftcard_number'); ?> 
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right form-inline" >
		  	<select name="" class="form-control">
              <option value="1">1st Term - 2015/2016</option>
              <option value="1">2nd Term - 2015/2016</option>
              <option value="1">3rd Term - 2015/2016</option>
              <option value="1">All Term</option>
            </select>
		  	<button class="btn btn-default btn-addon  "><i class="fa fa-gear"></i><?php echo(ucfirst($module));?> Settings </button>
		  </span>
		  <h1 class="m-n font-thin h3"><?php echo(ucfirst($module));?> Records</h1>
		  <small> Manage Oustanding, Discount, Fees and Fees Categories. </small>
		</div>
		<div class="wrapper-md">
			
            <div class="row row-sm text-center">
              <div class="col-xs-offset-3 col-xs-2">
                <div class="panel padder-v item">
                  <div class="h1 text-info font-thin h1">1201</div>
                  <span class="text-muted text-xs">Total Students</span>
                </div>
              </div>
              <div class="col-xs-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">200</span>
                  <span class="text-muted text-xs">Paid Students</span>
                </a>
              </div>
              <div class="col-xs-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">200</span>
                  <span class="text-muted text-xs">Unpaid Students</span>
                </a>
              </div><!-- 
              <div class="col-xs-3">
                <a href class="block panel padder-v bg-primary item">
                  <span class="text-white font-thin h1 block">N1,220,663</span>
                  <span class="text-muted text-xs">Total Amount paid</span>
                </a>
              </div> -->
            </div>

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
             
            </div>
			<section class="panel panel-default">
	            <header class="panel-heading">
	              Student Payment Records Table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Surname</th>
	                    <th>Firstname</th>
	                    <th>Class</th>
	                    <th>Main Bill</th>
	                    <th>Outstanding</th>
	                    <th>Extra Bill</th>
	                    <th>Total</th>
	                    <th>Total Paid</th>
	                    <th>Balance</th>
	                    <th colspan="2">Action</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>ADUGBE</td>
	                    <td>TOLUWANIMI</td>
	                    <td>ND 2</td>
	                    <td>#160,000</td>
	                    <td>0</td>
	                    <td>#120000</td>
	                    <td>#270000</td>
	                    <td>#250000</td>
	                    <td>#23000</td>
	                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-dollar"></i> Process </a>
	                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Pay History</a></td>
	                  </tr>
	                  
	                </tbody>
	              </table>
	            </div>
	            <footer class="panel-footer">
			      <div class="row">
			        <div class="col-sm-4 hidden-xs">
			          <select class="input-sm form-control w-sm inline v-middle">
			            <option value="0">Bulk action</option>
			            <option value="1">Delete selected</option>
			            <option value="2">Bulk edit</option>
			            <option value="3">Export</option>
			          </select>
			          <button class="btn btn-sm btn-default">Apply</button>                  
			        </div>
			        <div class="col-sm-4 text-center">
			          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
			        </div>
			        <div class="col-sm-4 text-right text-center-xs">                
			          <ul class="pagination pagination-sm m-t-none m-b-none">
			            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
			            <li><a href="">1</a></li>
			            <li><a href="">2</a></li>
			            <li><a href="">3</a></li>
			            <li><a href="">4</a></li>
			            <li><a href="">5</a></li>
			            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
			          </ul>
			        </div>
			      </div>
			    </footer>
	          </section>
		
		
    </div>
  </div>
 </div>