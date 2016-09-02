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

<!-- 		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i></i>PARENT INFO</button>
		  </span> -->

		  <h1 class="m-n font-thin h3">Add Staff</h1>

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
						<label class="col-sm-4 control-label">Title:<span class="req">*</span></label>
						<div class="col-sm-8">
							<select name="title" class="form-control">
								<option selected="selected">Select</option>
								<option value="MR.">MR.</option>
	                            <option value="MRS.">MRS.</option>
	                            <option value="MISS.">MISS.</option>
	                            <option value="DR.">DR.</option>
	                            <option value="PROF.">PROF.</option>
						     </select>
						</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Surname:<span class="req">*</span> </label>
							<div class="col-sm-8">
								<input class="form-control" value="" name="surname" id="surname"  required="" type="text">
							</div>
						</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">First Name:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="firstName" id="firstName"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Other Name:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="otherName" id="otherName"  required="" type="text">
							<span class="formNote">E.g Adeleye, Solanke, Omoyele </span>
						</div>
					</div>		
					<div class="form-group">
                        <label class="col-sm-4 control-label">Initial:<span class="req">*</span></label>
                        <div class="col-sm-8">
                        	<input class="form-control" name="initial"  type="text">
							<span class="formNote">E.g A.S, O.O, O.S </span>
						</div>
                    </div>			

					<div class="form-group">
						<label class="col-sm-4 control-label">Phone Number:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="phoneNumber" id="phoneNumber" required="" type="number">
							<span class="formNote">E.g +2348081828384 </span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Email Address:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="emailAddress" id="emailAddress"  required="" type="email">
						<span class="formNote">E.g testing@example.com </span>
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Gender:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="gender">
								<option selected="selected">Select</option>
								<option value="male">MALE</option>
								<option value="female">FEMALE</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Home Address:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="2" name="home_address"></textarea>
						</div>
					</div> 

					<div class="form-group">
						 <label class="col-sm-4 control-label">Religion:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="religion" id="religion" required="">
								<option value="">---Select Religion---</option>
								<option value="Islam">Islam</option>
								<option value="Christianity">Christianity</option>
								<option value="Traditional">Traditional</option>
							</select>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">D.O.B (DD/MM/YYYY):<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="dob" id="dob" required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Nationality:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="nationality" value="NIGERIA" type="text">
						</div>
					</div>

					<div class="form-group">              
						<label class="col-sm-4 control-label">State:<span class="req">*</span></label>
						<div class="col-sm-8">
							<select class="form-control state" name="state" required="">
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
						<label class="col-sm-4 control-label">Hometown:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="hometown" value="" type="text">
							<span class="formNote">E.g Ijebu-Ode </span>
						</div>
					</div>
								          
	          </form>
	        </div>
	      </div>
    	</div>

    	<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">STAFF INFO</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">File No:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="file_no"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Year Of Employment:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="year_of_employment"  required="" type="text">
							<span class="formNote">E.g 02-02-2002 </span>			
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Sport House:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="sporthouse" >
								<option value="">BLUE</option>
								<option value="">Select</option>
							</select>						
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Staff Position:<span class="req">*</span> </label>
						<div class="col-sm-8">		
							<select class="form-control" name="staff_position">
                                    <option value=""> </option>    
									<option value="Teacher">Teacher</option>
									<option value="Head Teacher">Head Teacher</option>
									<option value="Deputy Head Teacher">Deputy Head Teacher</option>
									<option value="H.O.D">H.O.D</option>
                                    <option value="Coordinator">Coordinator</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Vice Principal">Vice Principal</option>
                                    <option value="Principal">Principal</option>
									<option value="none">None</option>
									
								</select>				
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Staff Type:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="staff_type">
                                    <option value=""> </option>    
									<option value="Teaching"> Teaching </option>
                                    <option value="Non-Teaching"> Non-Teaching </option>
								</select>						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Staff Function:<span class="req">*</span> </label>
						<div class="col-sm-8">
								<select class="form-control" name="staff_function">
                                    <option value=""> </option>    
									<option value="Teacher">Teacher</option>
                                    <option value="Burser">Burser</option>
                                    <option value="Cleaner">Cleaner</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Admin">Sheff</option>
                                    <option value="Receptionist">Receptionist</option>
                                    <option value="Driver">Driver</option>
                                    <option value="Security">Security</option>
                                    <option value="Computer">Computer</option>
									<option value="none">None</option>									
								</select>					
						</div>
					</div> 
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Highest Qualification:<span class="req">*</span> </label>
						<div class="col-sm-8"> 
							<input class="form-control" value="" name="qualification" type="number">
							<span class="help-block">E.g B.Sc B.Ed NCE PHD</span>							
						</div>
					</div>
				

					<div class="form-group">
						<label class="col-sm-4 control-label">Course Studied:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="course_studied" value="" type="text">
							<span  class="help-block">E.g Computer Science</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Institution:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="institution" value="" type="text">
							<span  class="help-block">E.g Tai Solarin University of Education</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Years of Experience:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="years_of_experience" value="" type="text">
						</div>
					</div>		
						
					<div class="form-group">
						<label class="col-sm-4 control-label">Staff Level:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="staff_level" value="" type="text">
						</div>
					</div>

											          
	          </form>
	        </div>
	      </div>
			    	</div>
    	
    	<div class="clearfix"></div>
		
		<div class="col-sm-6">
	      <div class="panel panel-default">
		    <div class="panel-heading ">UPLOAD PASSPORT</div>

	        <div class="panel-body">
	          <div class="clearfix text-center m-t" style=" margin-bottom: 20px">
	            <div class="inline">
	              <div style="height: 134px; line-height: 134px; margin-bottom: 40px" class="easyPieChart">
	                <div class="thumb-xl">
	                  <img src="<?php echo base_url();?>img/a8.jpg" class="img-circle" alt="...">
	                </div>
	              <canvas width="134" height="134"></canvas>
	              </div>
				<div class="bootstrap-filestyle input-group"><input class="form-control " disabled="" type="text"> <span tabindex="0" class="group-span-filestyle input-group-btn"><label for="filestyle-0" class="btn btn-default "><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>            </div>                      
	          </div>
	        </div>
	      </div>
	      
		</div>

		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">MEDICAL INFO</div>
	        <div class="panel-body">
	          <form class="bs-example form-horizontal ng-pristine ng-valid">															
					<div class="form-group">
						<label class="col-sm-4 control-label">Height:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Height">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Weight:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Weight" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Disablity:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Disablity" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Genotype:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="" name="Genotype"  type="text">
						</div>
					</div>					
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Bloodgroup:<span class="req">*</span> </label>
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


