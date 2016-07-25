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

		  <h1 class="m-n font-thin h3">Applicant Details</h1>

		</div>
		<div class="wrapper-md">
         
		<div class="row m-b doc-buttons">
                  <div class="col-sm-8">
                  <a href="#" class="btn btn-primary "><i class="fa fa-plus"></i> Add Students</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i> Print Paid Applicant</a>
                  <a href="#" class="btn btn-info "><i class="fa fa-print"></i> Print All Applicant Lists</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXPORT TO EXCEL</a>
                  </div>
                  <div class="col-sm-4">
                    <div class="input-group">
                     <select class="input-sm form-control input-s-sm inline v-middle">
                        <option value="0">Bulk action</option>
	                    <option value="1">All applicants</option>
	                    <option value="2">Paid Applicant</option>
	                    <option value="3">Export</option>
		             </select>
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-info" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
		<section class="panel panel-default">
		                <header class="panel-heading">
		                  Applicant Records Table
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
		                        <th>Class</th>
		                        <th>Status</th>
		                        <th>Session</th>
		                        <th>Profile</th>
		                        <th>Edit</th>
		                        <th>Print</th>
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
		                        <th>ADMITTED</th>
		                        <td>2015/2016</td>
		                        <td><a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> View profile</a></td>
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
		                        <th>NOT ADMITTED</th>
		                        <td>2015/2016</td>
		                        <td><a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> View profile</a></td>
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
		                        <th>AWAITING CONSIDERATION</th>
		                        <td>2015/2016</td>
		                        <td><a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> View profile</a></td>
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
		                        <th>ADMITTED</th>
		                        <td>2015/2016</td>
		                        <td><a href="#" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> View profile</a></td>
		                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a></td>
		                      </tr>
		                    </tbody>
		                  </table>
		                </div>
		               <!-- <footer class="panel-footer">
		                  <div class="row">
		                    <div class="col-sm-4 hidden-xs">
		                      <select class="input-sm form-control input-s-sm inline v-middle">
		                        <option value="0">Bulk action</option>
		                        <option value="1">Delete selected</option>
		                        <option value="2">Bulk edit</option>
		                        <option value="3">Export</option>
		                      </select>
		                     </div>
		                     <button class="btn btn-sm btn-default">Apply</button>
		                  </div>
		                </footer> -->
		              </section>
		</div>		
    </div>
    <!-- /content -->


