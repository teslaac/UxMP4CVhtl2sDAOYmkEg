<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">

		  


		</div>

		<div class="wrapper-md">
			<div class="row m-b doc-buttons">
 				<div class="col-sm-4">
	                <a href="#searchrange" class="btn btn-lg btn-primary btn-addon" type="button"  data-toggle="modal"><i class="fa fa-search"></i>Search Range</a>
	            </div>              
              <div class="col-sm-8 ">
              	<div class="btn-group pull-right">
                  <a href="#" class="btn btn-primary "><i class="fa fa-plus"></i> Add Students</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i> Print All Students List</a>
                  <a href="#" class="btn btn-info "><i class="fa fa-print"></i> Print All Class Lists</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXCEL</a>
                </div>
              </div>
             
            </div>
			<section class="panel panel-default">
	            <header class="panel-heading">
	              Student Records Table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Surname</th>
	                    <th>Firstname</th>
	                    <th>Gender</th>
	                    <th>Balance</th>
	                    <th>Fund</th>
	                    <th>History</th>
	                  </tr>
	                </thead>
	                <tbody>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>ADUGBE</td>
	                    <td>TOLUWANIMI</td>
	                    <td>M</td>
	                    <td>ND 2</td>
	                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
	                    <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a></td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>ADUGBE</td>
	                    <td>TOLUWANIMI</td>
	                    <td>M</td>
	                    <td>ND 2</td>
	                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
	                    <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a></td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>ADUGBE</td>
	                    <td>TOLUWANIMI</td>
	                    <td>M</td>
	                    <td>ND 2</td>
	                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
	                    <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a></td>
	                  </tr>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td>1</td>
	                    <td>ADUGBE</td>
	                    <td>TOLUWANIMI</td>
	                    <td>M</td>
	                    <td>ND 2</td>
	                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
	                    <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a></td>
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


    <!-- /content -->

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
