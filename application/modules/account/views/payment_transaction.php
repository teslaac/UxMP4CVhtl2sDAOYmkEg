<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right form-inline">
	        <select name="" class="form-control">
	          <option value="1">1st Term - 2015/2016</option>
	          <option value="1">2nd Term - 2015/2016</option>
	          <option value="1">3rd Term - 2015/2016</option>
	          <option value="1">All Term</option>
	        </select>
	      </span>
		  <h1 class="m-n font-thin h3">Payment Transcations</h1>
		</div>
		<div class="wrapper-md">
			
            <div class="row row-sm text-center">
              <div class="col-lg-offset-3 col-md-2">
                <div class="panel padder-v item">
                  <div class="h1 text-info font-thin h1">1201</div>
                  <span class="text-muted text-xs">Total Students</span>
                </div>
              </div>
              <div class="col-md-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">200</span>
                  <span class="text-muted text-xs">Paid Students</span>
                </a>
              </div>
              <div class="col-md-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">200</span>
                  <span class="text-muted text-xs">Unpaid Students</span>
                </a>
              </div><!-- 
              <div class="col-md-3">
                <a href class="block panel padder-v bg-primary item">
                  <span class="text-white font-thin h1 block">N1,220,663</span>
                  <span class="text-muted text-md">Total Amount paid</span>
                </a>
              </div> -->
            </div>
<!-- 
            			<div class="row m-b doc-buttons">
 				<div class="col-md-7 col-sm-6 col-md-5">
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
	
			<section class="panel panel-info">
	            <header class="panel-heading">
	              Student Payment Transaction table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Paid For</th>
	                    <th>Paid BY</th>
	                    <th>Payment</th>
	                    <th>Type</th>
	                    <th>Amount</th>
	                    <th>Action</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>Adubi Toluwani</td>
	                    <td>Dr. Adubi M.O</td>
	                    <td>School Fee</td>
	                    <td>Cash</td>
	                    <td>#250000</td>
	                    <td>
	                    	<a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</a>
	                    	<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Delete</a>
	                    	<a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print</a>
			            </td>
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