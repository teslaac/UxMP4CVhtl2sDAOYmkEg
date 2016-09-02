<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- content -->
    <div class="app-content"  ng-app="angularTable">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">

		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user"></i></i>200</button>
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i></i>200</button>
		  </span>

		  <h1 class="m-n font-thin h3"><?php echo(ucfirst($page));?></h1>

		</div>


		<div class="wrapper-md">
			<div class="row m-b doc-buttons">
 				<div class="col-sm-4">
	                <div class="input-group">
	                  <input class="form-control" placeholder="Search"  ng-model="search" type="text">
	                  <span class="input-group-btn">
	                    <button class="btn btn-info" type="button">Go!</button>
	                  </span>
	                </div>
	            </div>              
              <div class="col-sm-8 ">
              	<div class="btn-group pull-right">
                  <a href="<?php echo base_url('students/add'); ?>" class="btn btn-primary" ><i class="fa fa-plus"></i> Add Students</a>
                  <a href="<?php echo base_url('students/record/print'); ?>" class="btn btn-dark "  target="_blank"><i class="fa fa-print" ></i> Print All Students List</a>
                  <a href="#" class="btn btn-info "><i class="fa fa-print"></i> Print All Class Lists</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXCEL</a>
                </div>
              </div>
             
            </div>
			<section class="panel panel-default" ng-controller="listdata">
	            <header class="panel-heading">
	              Student Records Table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light" id="list">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class" ng-click="sort('user_id')">No.
						<span class="fa fa-caret-down sort-icon" ng-show="sortKey=='user_id'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></span></th>
	                    <th ng-click="sort('lname')">Surname
	                    <span class="fa sort-icon" ng-show="sortKey=='lname'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
	                    <th ng-click="sort('fname')">Firstname
	                    <span class="fa sort-icon" ng-show="sortKey=='fname'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
	                    <th ng-click="sort('gender')">Gender
	                    <span class="fa sort-icon" ng-show="sortKey=='gender'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
	                    <th ng-click="sort('class')">Class
	                    <span class="fa sort-icon" ng-show="sortKey=='class'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
	                    <th>Edit</th>
	                    <th>Print</th>
	                  </tr>
	                </thead>
	                <tbody>
					<tr dir-paginate="user in users|orderBy:sortKey:reverse|filter:search|itemsPerPage:7">
							<td><input type="checkbox"></th></td>
							<td>{{user.user_id}}</td>
							<td>{{user.lname}}</td>
							<td>{{user.fname}}</td>
							<td>{{user.gender}}</td>
							<td>{{user.class_details}}</td>
							<td><a href="<?php echo base_url(); ?>students/edit/{{user.user_id}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
							<td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Print Profile</a>
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
			        <dir-pagination-controls
						max-size="5"
						direction-links="true"
						boundary-links="true"  class="pagination pagination-sm m-t-none m-b-none">
					</dir-pagination-controls>
			        </div>
			      </div>
			    </footer>
	          </section>
		
		</div>


    </div>


    <!-- /content -->


