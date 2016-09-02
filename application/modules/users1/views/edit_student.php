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
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i></i>PARENT INFO</button>
		  </span>

		  <h1 class="m-n font-thin h3">Add Students</h1>

		</div>
		<div class="wrapper-md">

		<div class="col-md-12">
			<div class="alert alert-info fade in widget-inner">
                <button type="button" class="close" data-dismiss="alert">x</button>
              Please Enter correct Information      
            </div>
        </div>

		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">PERSONAL DETAILS</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">Surname: </label>
						<div class="col-sm-8">
							<input class="form-control" value="awonuga" name="surname" id="surname"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">First Name: </label>
						<div class="col-sm-8">
							<input class="form-control" value="SHERIF" name="firstName" id="firstName"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Other Name: </label>
						<div class="col-sm-8">
							<input class="form-control" value="OLADELE" name="otherName" id="otherName"  required="" type="text">
						</div>
					</div>					

					<div class="form-group">
						<label class="col-sm-4 control-label">Phone Number: </label>
						<div class="col-sm-8">
							<input class="form-control" value="08078422238" name="phoneNumber" id="phoneNumber" required="" type="number">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Email Address: </label>
						<div class="col-sm-8">
							<input class="form-control" value="awonuga_2003@yahoo.com" name="emailAddress" id="emailAddress"  required="" type="email">
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Gender: </label>
						<div class="col-sm-8">
							<input class="form-control" value="male" name="gender"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Home Address: </label>
						<div class="col-sm-8">
							<input placeholder="Home Address" class="form-control" value="somewhere" name="home_address" required="" type="text">
						</div>
					</div> 

					<div class="form-group">
						 <label class="col-sm-4 control-label">Religion: </label>
						<div class="col-sm-8">
							<select class="form-control" name="religion" id="religion" required="">
								<option value="Islam">Islam</option>
								<option value="">---Select Religion---</option>
								<option value="Islam">Islam</option>
								<option value="Christianity">Christianity</option>
								<option value="Traditional">Traditional</option>
							</select>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">D.O.B (DD/MM/YYYY): </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="dob" id="dob" required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Nationality: </label>
						<div class="col-sm-8">
							<input class="form-control" name="nationality" value="NIGERIA" type="text">
						</div>
					</div>

					<div class="form-group">              
						<label class="col-sm-4 control-label">State:</label>
						<div class="col-sm-8">
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
					</div>

					<div class="form-group">              
						<label class="col-sm-4 control-label">Local Government Area:</label>		
						<div class="col-sm-8">
							<select id="response" class="form-control lga" name="lga" required="">
								<option value="Ogun Waterside">Ogun Waterside</option>
								<option value="">Select</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Hometown: </label>
						<div class="col-sm-8">
							<input class="form-control" name="hometown" value="" type="text">
						</div>
					</div>
								          
	          </form>
	        </div>
	      </div>
    	</div>		
		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">ADMISSION INFO</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">Admission No: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Admission No"   required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Class: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Class" id="Class"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Admission Date: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Admission Date"  required="">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Sport House: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Sport House" id="" type="email">
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Day/Boarding:: </label>
						<div class="col-sm-8">
							<input class="form-control" name="day_or_boarding" value="" type="text">
						</div>
					</div>
								          
	          </form>
	        </div>
	      </div>
			    	</div>

		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">MEDICAL INFO</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">Height: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Height">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Weight: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Weight" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Disablity: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Disablity" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Genotype: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Genotype"  type="text">
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Bloodgroup: </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Bloodgroup" type="text">
						</div>
					</div>
					
								          
	          </form>
	        </div>
	      </div>
		</div>

	    	<div class="clearfix"></div>
				<div class="wrapper-md">
					<div class="row m-b doc-buttons">
	                  <div class="col-sm-8">
	                  <a class="btn btn-primary" data-toggle="modal" href='#parent-modal'>Add Parent</a>
	                  </div>
	                  <div class="col-sm-4">
	                    <div class="input-group">
	                      <input class="form-control" placeholder="Search" type="text">
	                      <span class="input-group-btn">
	                        <button class="btn btn-info" type="button">Go!</button>
	                      </span>
	                    </div>
	                  </div>
	                </div>
					<section class="panel panel-default">
		                <header class="panel-heading">
		                  Parents Information Table
		                </header>
		                <div class="table-responsive">
		                  <table class="table table-striped table-hover b-t b-light">
		                    <thead>
		                      <tr>
		                      <th></th>
		                        <th class="th-sortable" data-toggle="class">No.</th>
		                        <th>Parent ID</th>
		                        <th>Title</th>
		                        <th>Full Name</th>
		                        <th>Initial</th>
		                        <th>Phone</th>
		                        <th>Email</th>
		                        <th colspan="3">Action</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                      <tr>
		                        <td><input name="post[]" value="2" type="checkbox"></td>
		                        <td>1</td>
		                        <td>COOLCHI-PAR-001</td>
		                        <th>MR.</th>
		                        <td>ADUGBE Toluwani</td>
		                        <td>S.O</td>
		                        <td>08097479487</td>
		                        <td>olacrown@gmail.com</td>
		                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
		                        <td><a href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a></td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Profile</a></td>
		                      </tr>
		                      <tr>
		                        <td><input name="post[]" value="2" type="checkbox"></td>
		                       <td>1</td>
		                        <td>COOLCHI-PAR-001</td>
		                        <th>MR.</th>
		                        <td>ADUGBE Toluwani</td>
		                        <td>S.O</td>
		                        <td>08097479487</td>
		                        <td>olacrown@gmail.com</td>
		                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
		                        <td><a href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a></td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Profile</a></td>
		                      </tr>
		                      <tr>
		                        <td><input name="post[]" value="2" type="checkbox"></td>
		                        <td>1</td>
		                        <td>COOLCHI-PAR-001</td>
		                        <th>MR.</th>
		                        <td>ADUGBE Toluwani</td>
		                        <td>S.O</td>
		                        <td>08097479487</td>
		                        <td>olacrown@gmail.com</td>
		                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
		                        <td><a href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a></td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Profile</a></td>
		                      </tr>
		                      <tr>
		                        <td><input name="post[]" value="2" type="checkbox"></td>
		                        <td>1</td>
		                        <td>COOLCHI-PAR-001</td>
		                        <th>MR.</th>
		                        <td>ADUGBE Toluwani</td>
		                        <td>S.O</td>
		                        <td>08097479487</td>
		                        <td>olacrown@gmail.com</td>
		                        <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
		                        <td><a href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a></td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Profile</a></td>
		                      </tr>
		                    </tbody>
		                  </table>
		                </div>
		                <footer class="panel-footer">
		                  <div class="row">
		                    <div class="col-sm-4 hidden-xs">
		                      <select class="input-sm form-control input-s-sm inline v-middle">
		                        <option value="0">Bulk action</option>
		                        <option value="1">Delete selected</option>
		                        <option value="2">Bulk edit</option>
		                        <option value="3">Export</option>
		                      </select>
		                      <button class="btn btn-sm btn-default">Apply</button>                  
		                    </div>
		                  </div>
		                </footer>
		              </section>
		</div>

	    <div class="col-md-12">
	    	<div class="panel panel-default">
	    		<div class="panel-body">
	    		<div class="form-actions text-right">
	    			<button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
	            </div>
	            </div>
	        </div>
        </div>
		<div class="clearfix"></div>

    </div>
    <!-- /content -->
<div class="modal fade" id="parent-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i>ADD PARENT</h4>
			</div>
			<div class="modal-body">       									      	
		      	<div class="panel panel-default">
		      			<div class="panel-heading">Personal Details</div>
				        <div class="panel-body">
			        		<form class="bs-example form-horizontal ng-pristine ng-valid">
				        		<div class="row">
				        			<div class=" col-sm-4">
										<label class="control-label">Title: </label>
										<input class="form-control" value="Mr" name="title" id="title"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<label class="control-label">Initial: </label>
										<input class="form-control" value="S.O" name="initial" id="initial"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<label class="control-label">Surname: </label>
										<input class="form-control" value="awonuga" name="surname" id="surname"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<label class="control-label">First Name: </label>
										<input class="form-control" value="SHERIF" name="firstName" id="firstName"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<label class="control-label">Other Name: </label>
										<input class="form-control" value="OLADELE" name="otherName" id="otherName"  required="" type="text">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Phone Number: </label>
										<input class="form-control" value="08078422238" name="phoneNumber" id="phoneNumber" required="" type="number">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Email Address: </label>
										<input class="form-control" value="awonuga_2003@yahoo.com" name="emailAddress" id="emailAddress"  required="" type="email">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Home Address: </label> 
										<input placeholder="Home Address" class="form-control" value="somewhere" name="home_address" required="" type="text">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Religion: </label>
										<select class="form-control" name="religion" id="religion" required="">
											<option value="Islam">Islam</option>
											<option value="">---Select Religion---</option>
											<option value="Islam">Islam</option>
											<option value="Christianity">Christianity</option>
											<option value="Traditional">Traditional</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label class="control-label">D.O.B (DD/MM/YYYY): </label>
										<input class="form-control" value="" name="dob" id="dob" required="" type="text">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Nationality: </label>
										<input class="form-control" name="nationality" value="NIGERIA" type="text">
									</div>
									<div class="col-sm-4">
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
									<div class="col-sm-4">
										<label class="control-label">Local Government Area: </label>
										<select id="response" class="form-control lga" name="lga" required="">
											<option value="Ogun Waterside">Ogun Waterside</option>
											<option value="">Select</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label class="control-label">Hometown: </label>
										<input class="form-control" name="hometown" value="" type="text">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Relationship: </label>
										<input class="form-control" value="" name="Relationship"  required="" type="text">
<!-- 										<span class="help-block">Father, Mother, Brother</span>
 -->									</div>
									<div class="col-sm-4">
										<label class="control-label">Occupation: </label>
										<input class="form-control" value="" name="occupation"  type="text">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Occupation Address: </label>
										<input class="form-control" value="" name="occupation_address"  type="text">
									</div> 
								</div>
			        		</form>
			        	</div>
			    </div>
		    </div>			       		
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>


