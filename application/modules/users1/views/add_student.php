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


