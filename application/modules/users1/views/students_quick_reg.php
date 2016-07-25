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

		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user"></i></i>FULL REGISTRATION</button>
		  </span>

		  <h1 class="m-n font-thin h3">Quick Students Registration</h1>

		</div>
		<div class="wrapper-md">

		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">QUICK REGISTRATION</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">No of Students: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="notoadd" required="" type="text">
						</div>
					</div>
								          
	          </form>
	        </div>
	       <div class="panel-footer text-right">
	       	    <button class="btn btn-primary btn-addon ">Process</button>
	       </div>
	      </div>
		</div>

		<div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Enter the Students Information
        </div>
        <table class="table table-striped m-b-none">
          <thead>
            <tr>
              <th>No</th>
              <th>Surname</th>
              <th>First Name</th>
              <th>Other Name</th>
              <th>Gender</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>							
              		<input class="form-control" value="" name="surname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="fname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="oname1" required="" type="text">
			  </td>
			  <td>							
				<div class="radio">
	              <label class="i-checks">
	                <input name="a1" value="male" type="radio">
	                <i></i>
	                Male 
	              </label>
	              <label class="i-checks">
	                <input name="a1" value="female" type="radio">
	                <i></i>
	                Female
	              </label>
	            </div>			  
            </td>
            </tr>
           
           <tr>
              <td>
                2
              </td>
              <td>							
              		<input class="form-control" value="" name="surname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="fname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="oname1" required="" type="text">
			  </td>
			  <td>							
				<div class="radio">
	              <label class="i-checks">
	                <input name="a2" value="male" type="radio">
	                <i></i>
	                Male 
	              </label>
	              <label class="i-checks">
	                <input name="a2" value="female" type="radio">
	                <i></i>
	                Female
	              </label>
	            </div>			  
            </td>
            </tr>
           
           <tr>
              <td>
                3
              </td>
              <td>							
              		<input class="form-control" value="" name="surname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="fname1" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value="" name="oname1" required="" type="text">
			  </td>
			  <td>							
				<div class="radio">
	              <label class="i-checks">
	                <input name="a3" value="male" type="radio">
	                <i></i>
	                Male 
	              </label>
	              <label class="i-checks">
	                <input name="a3" value="female" type="radio">
	                <i></i>
	                Female
	              </label>
	            </div>			  
            </td>
            </tr>

            </tr>
          </tbody>
        </table>
      </div>
    </div>

	    <div class="col-md-12">

	    	<div class="panel panel-default">
	    		<div class="panel-body">
		    		<div class="col-md-6">
		    			<div class="form-group">			          
				          <label class="col-sm-2 control-label" style="padding-top: 5px;">Select</label>
				          <div class="col-sm-10">
				            <select name="account" class="form-control m-b">
				              <option value="option 1">option 1</option>
				              <option value="option 2">option 2</option>
				              <option value="option 3">option 3</option>
				              <option value="option 4">option 4</option>
				            </select>
				          </div>
				       </div>
			        </div>
			        <div class="col-md-6">
			    		<div class="form-actions text-right">
			    			<button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
			            </div>
			        </div>
	            </div>
	        </div>
        </div>
		<div class="clearfix"></div>

    </div>
    <!-- /content -->


