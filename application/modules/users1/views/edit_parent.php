<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="app-content">
	<div class="butter-bar"></div>
	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	<div class="app-content-body fade-in-up">
		<div class="bg-light lter b-b wrapper-md">
			<!-- <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i></i>PARENT INFO</button>
		  </span> -->
		  <h1 class="m-n font-thin h3">Edit Parent</h1>
		</div>
		<div class="wrapper-md">
			<div class="col-md-12">
				<div class="alert alert-info fade in widget-inner">
                	<button type="button" class="close" data-dismiss="alert">x</button>
             	 Please Enter correct Information      
            	</div>
        	</div>
	        <div class="col-md-12">
	        	<div class="panel panel-default">
		      			<div class="panel-heading">Personal Details</div>
				        <div class="panel-body">
			        		<form class="bs-example form-horizontal ng-pristine ng-valid">
				        		<div class="row">
				        			<div class=" col-sm-6">
										<label class="control-label">Title: </label>
										<input class="form-control" value="Mr" name="title" id="title"  required="" type="text">
									</div>
									<div class=" col-sm-6">
										<label class="control-label">Initial: </label>
										<input class="form-control" value="S.O" name="initial" id="initial"  required="" type="text">
									</div>
									<div class=" col-sm-6">
										<label class="control-label">Surname: </label>
										<input class="form-control" value="awonuga" name="surname" id="surname"  required="" type="text">
									</div>
									<div class=" col-sm-6">
										<label class="control-label">First Name: </label>
										<input class="form-control" value="SHERIF" name="firstName" id="firstName"  required="" type="text">
									</div>
									<div class=" col-sm-6">
										<label class="control-label">Other Name: </label>
										<input class="form-control" value="OLADELE" name="otherName" id="otherName"  required="" type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Phone Number: </label>
										<input class="form-control" value="08078422238" name="phoneNumber" id="phoneNumber" required="" type="number">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Email Address: </label>
										<input class="form-control" value="awonuga_2003@yahoo.com" name="emailAddress" id="emailAddress"  required="" type="email">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Home Address: </label> 
										<input placeholder="Home Address" class="form-control" value="somewhere" name="home_address" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Religion: </label>
										<select class="form-control" name="religion" id="religion" required="">
											<option value="Islam">Islam</option>
											<option value="">---Select Religion---</option>
											<option value="Islam">Islam</option>
											<option value="Christianity">Christianity</option>
											<option value="Traditional">Traditional</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label class="control-label">D.O.B (DD/MM/YYYY): </label>
										<input class="form-control" value="" name="dob" id="dob" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Nationality: </label>
										<input class="form-control" name="nationality" value="NIGERIA" type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">State: </label>
										<select class="form-control state" name="state" required="">
											<option value="Ogun">Ogun</option>
											<option value=" ">Select</option>
											<option value="Abia">Abia States</option>
											<option value="Adamawa">Adamawa States</option>
											<option value="Akwa Ibom">Akwa Ibom States</option>
											<option value="Anambra">Anambra States</option>
											<option value="Bauchi">Bauchi States</option>
											<option value="Bayelsa">Bayelsa States</option>
											<option value="Benue">Benue States</option>
											<option value="Borno">Borno States</option>
											<option value="Cross River">Cross River States</option>
											<option value="Delta">Delta States</option>
											<option value="Ebonyi">Ebonyi States</option>
											<option value="Edo">Edo States</option>
											<option value="Ekiti">Ekiti States</option>
											<option value="Enugu">Enugu States</option>
											<option value="FCT-Abuja">FCT-Abuja</option>
											<option value="Gombe">Gombe States</option>
											<option value="Imo">Imo States</option>
											<option value="Jigawa">Jigawa States</option>
											<option value="Kaduna">Kaduna States</option>
											<option value="Kano">Kano States</option>
											<option value="Katsina">Katsina States</option>
											<option value="Kebbi">Kebbi States</option>
											<option value="Kogi">Kogi States</option>
											<option value="Kwara">Kwara States</option>
											<option value="Lagos">Lagos States</option>
											<option value="Nasarawa">Nasarawa States</option>
											<option value="Niger">Niger States</option>
											<option value="Ogun">Ogun States</option>
											<option value="Ondo">Ondo States</option>
											<option value="Osun">Osun States</option>
											<option value="Oyo">Oyo States</option>
											<option value="Plateau">Plateau States</option>
											<option value="Rivers">Rivers States</option>
											<option value="Sokoto">Sokoto States</option>
											<option value="Taraba">Taraba States</option>
											<option value="Yobe">Yobe States</option>
											<option value="Zamfara">Zamfara States</option>
											<option value="Non-Nigerian">Non-Nigerian</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label class="control-label">Local Government Area: </label>
										<select id="response" class="form-control lga" name="lga" required="">
											<option value="Ogun Waterside">Ogun Waterside</option>
											<option value="">Select</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label class="control-label">Hometown: </label>
										<input class="form-control" name="hometown" value="" type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Relationship: </label>
										<input class="form-control" value="" name="Relationship"  required="" type="text">
										<span class="help-block">Father, Mother, Brother</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label">Occupation: </label>
										<input class="form-control" value="" name="occupation"  type="text">
									</div>
									<div class="col-sm-6">
										<label class="control-label">Occupation Address: </label>
										<textarea class="form-control" rows="1" name="occupation_address" ></textarea>
									</div> 
								</div>
			        		</form>
			        	</div>
			    </div>
			   
			      </div>
			       <div class="clearfix"></div>

				<div class="col-md-12">
			    	<div class="panel panel-default">
			    		<div class="panel-body">
			    		<div class="form-action	text-right">
			    			<button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
			            </div>
			            </div>
			        </div>
		        </div>
		         <div class="clearfix"></div>
		
		<div class="panel panel-default">
            <header class="panel-heading">
              Ward(s) : <span class="badge bg-primary">  3</span>  
            </header>
            <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                    <th class="th-sortable" data-toggle="class">No.</th>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ADUGBE</td>
                    <td>TOLUWANIMI</td>
                    <td>M</td>
                    <td>ND 2</td>
                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-search"></i> Profile</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>ADUGBE</td>
                    <td>TOLUWANIMI</td>
                    <td>M</td>
                    <td>ND 2</td>
                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-search"></i> Profile</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>ADUGBE</td>
                    <td>TOLUWANIMI</td>
                    <td>M</td>
                    <td>ND 2</td>
                    <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-search"></i> Profile</a></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>ADUGBE</td>
                    <td>TOLUWANIMI</td>
                    <td>M</td>
                    <td>ND 2</td>
                    <td><a href="#" class="btn btn-xs btn-primary text-info" tooltip="hello world"><i class="fa fa-search"></i> Profile</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <footer class="panel-footer">
              <div class="row">
                <div class="col-sm-6 hidden-xs">
                <div class="input-group">
                  <select class="input-sm form-control input-s-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                  </select>
                 <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Apply</button>
                      </span>                  
                </div>
              </div>
              </div>
            </footer>
          </div>
          </div>
	</div>
</div>