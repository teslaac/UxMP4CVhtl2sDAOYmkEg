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
			<?php // echo validation_errors(); ?>
			<div class="alert alert-info fade in widget-inner">
                <button type="button" class="close" data-dismiss="alert">x</button>
              Please Enter correct Information      
            </div>
			<?php
			if(!empty($_SESSION['failed'])){?>
				<div class="alert alert-danger fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['failed']; ?>
				</div>
			<?php }elseif(!empty($_SESSION['success'])){?>
				<div class="alert alert-success fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['success'];?>
				</div>
			<?php }
			?>
        </div>
			<form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>staff/add_staff" enctype="multipart/form-data">
		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">PERSONAL DETAILS</div>
	        <div class="panel-body">

					<div class="form-group">
						<?php echo form_error('title'); ?>
						<label class="col-sm-4 control-label">Title:<span class="req">*</span></label>
						<div class="col-sm-8">
							<select name="title" class="form-control">
								<option selected="selected">Select</option>
								<option <?php echo set_select('title','MR.'); ?> value="MR.">MR.</option>
	                            <option <?php echo set_select('title','MRS.'); ?> value="MRS.">MRS.</option>
	                            <option <?php echo set_select('title','MISS.'); ?> value="MISS.">MISS.</option>
	                            <option <?php echo set_select('title','DR.'); ?> value="DR.">DR.</option>
	                            <option <?php echo set_select('title','PROF.'); ?> value="PROF.">PROF.</option>
						     </select>
						</div>
						</div>
				<div class="form-group">
					<?php echo form_error('sname'); ?>
					<label class="col-sm-4 control-label">Surname:<span class="req">*</span> </label>
					<div class="col-sm-8">
						<input class="form-control" value="<?php echo set_value('sname'); ?>" name="sname" id="surname"  required="" type="text">
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('fname'); ?>
					<label class="col-sm-4 control-label">First Name:<span class="req">*</span> </label>
					<div class="col-sm-8">
						<input class="form-control" value="<?php echo set_value('fname'); ?>" name="fname" id="firstName"  required="" type="text">
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('mname'); ?>
					<label class="col-sm-4 control-label">Other Name:<span class="req">*</span> </label>
					<div class="col-sm-8">
						<input class="form-control" value="<?php echo set_value('mname'); ?>" name="mname" id="otherName"  required="" type="text">
					</div>
				</div>
					<div class="form-group">
						<?php echo form_error('initial'); ?>
                        <label class="col-sm-4 control-label">Initial:<span class="req">*</span></label>
                        <div class="col-sm-8">
                        	<input class="form-control" name="initial" value="<?php echo set_value('initial'); ?>"  type="text">
							<span class="formNote">E.g A.S, O.O, O.S </span>
						</div>
                    </div>

				<div class="form-group">
					<?php echo form_error('phone'); ?>
					<label class="col-sm-4 control-label">Phone Number: </label>
					<div class="col-sm-8">
						<input class="form-control" value="<?php echo set_value('phone'); ?>" name="phone" id="phoneNumber" required="" type="number">
						<span class="formNote">E.g 08081828384 </span>
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('email'); ?>
					<label class="col-sm-4 control-label">Email Address: </label>
					<div class="col-sm-8">
						<input class="form-control" value="<?php echo set_value('email'); ?>" name="email" id="emailAddress"  required="" type="email">
						<span class="formNote">E.g testing@example.com </span>
					</div>
				</div>

					<div class="form-group">
						<?php echo form_error('gender'); ?>
						<label class="col-sm-4 control-label">Gender:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="gender">
								<option selected="selected">Select</option>
								<option <?php echo set_select('gender','male'); ?> value="male">MALE</option>
								<option <?php echo set_select('gender','female'); ?> value="female">FEMALE</option>
							</select>
						</div>
					</div>

				<div class="form-group">
					<?php echo form_error('address'); ?>
					<label class="col-sm-4 control-label">Home Address: </label>
					<div class="col-sm-8">
						<input placeholder="Home Address" class="form-control" value="<?php echo set_value('address'); ?>" name="address" required="" type="text">
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('religion'); ?>
					<label class="col-sm-4 control-label">Religion: </label>
					<div class="col-sm-8">
						<select class="form-control" name="religion" id="religion" required="">
							<option <?php echo set_select('religion','',TRUE); ?> value="">Select Religion</option>
							<option <?php echo set_select('religion','Islam'); ?> value="Islam">Islam</option>
							<option <?php echo set_select('religion','Christianity'); ?> value="Christianity">Christianity</option>
							<option <?php echo set_select('religion','Traditional'); ?> value="Traditional">Traditional</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<?php echo form_error('dob'); ?>
					<label class="col-sm-4 control-label">D.O.B (DD/MM/YYYY): </label>
					<div class="col-sm-8">
						<input class="form-control date" value="<?php echo set_value('dob'); ?>" name="dob" id="dob" required="" type="text">
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('nationality'); ?>
					<label class="col-sm-4 control-label">Nationality: </label>
					<div class="col-sm-8">
						<select class="form-control" name="nationality">
							<option selected="selected">Select</option>
							<option <?php echo set_select('nationality','Nigerian'); ?> value="Nigerian">Nigerian</option>
							<option <?php echo set_select('nationality','Non-Nigerian'); ?> value="Non-Nigerian">Non-Nigerian</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<?php echo form_error('state'); ?>
					<label class="col-sm-4 control-label">State:</label>
					<div class="col-sm-8">
						<select class="form-control state" name="state" required="">
							<option <?php echo set_select('state','',TRUE); ?> value=" ">Select</option>
							<?php
							foreach ($states as $state) {
								?>
								<option <?php echo set_select('state', "$state[state]"); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
								</option>
								<?php
							}
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('lg'); ?>
					<label class="col-sm-4 control-label">Local Government Area:</label>
					<div class="col-sm-8">
						<select id="lga" class="form-control lga" name="lga" required="">
                                        <option value="">Select</option>
                                    </select>
					</div>
				</div>

				<div class="form-group">
					<?php echo form_error('hometown'); ?>
					<label class="col-sm-4 control-label">Hometown: </label>
					<div class="col-sm-8">
						<input class="form-control" name="hometown" value="<?php echo set_value('hometown'); ?>" type="text">
						<span class="formNote">E.g Ijebu-Ode </span>
					</div>
				</div>

	        </div>
	      </div>
    	</div>

    	<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">STAFF INFO</div>
	        <div class="panel-body">

					<div class="form-group">
						<?php echo form_error('file_no'); ?>
						<label class="col-sm-4 control-label">File No:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="<?php echo set_value('file_no'); ?>" name="file_no"  required="" type="text">
						</div>
					</div>
					
					<div class="form-group">
						<?php echo form_error('year_of_employment'); ?>
						<label class="col-sm-4 control-label">Year Of Employment:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" value="<?php echo set_value('year_of_employment'); ?>" name="year_of_employment"  required="" type="text">
							<span class="formNote">E.g 2002 </span>
						</div>
					</div>
					
					<div class="form-group">
						<?php echo form_error('sport_house'); ?>
						<label class="col-sm-4 control-label">Sport House:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="sport_house" >
								<option value="">Select</option>
								<?php
								foreach ($sport_house as $sport_house) {
									?>
									<option <?php echo set_select('sport_house', "$sport_house[sport_house_id]"); ?> value="<?php echo $sport_house['sport_house_id']; ?>"><?php echo $sport_house['sport_house_color']; ?>
									</option>
									<?php
								}
								?>
							</select>						
						</div>
					</div>

				<div class="form-group">
					<?php echo form_error('marital_status'); ?>
					<label class="col-sm-4 control-label">Marital Status:<span class="req">*</span> </label>
					<div class="col-sm-8">
						<select class="form-control" name="marital_status" >
							<option value="">Select</option>
							<option <?php echo set_select('marital_status','Single'); ?> value="Single">Single</option>
							<option <?php echo set_select('marital_status','Married'); ?> value="Married">Married</option>
							<option <?php echo set_select('marital_status','Divorced'); ?> value="Divorced">Divorced</option>
							<option <?php echo set_select('marital_status','Widow'); ?> value="Widow">Widow</option>
						</select>
					</div>
				</div>

					<div class="form-group">
						<?php echo form_error('staff_position'); ?>
						<label class="col-sm-4 control-label">Staff Position:<span class="req">*</span> </label>
						<div class="col-sm-8">		
							<select class="form-control" name="staff_position">
                                    <option value=""> </option>    
									<option <?php echo set_select('staff_position','Teacher'); ?> value="Teacher">Teacher</option>
									<option <?php echo set_select('staff_position','Head Teacher'); ?> value="Head Teacher">Head Teacher</option>
									<option <?php echo set_select('staff_position','Deputy Head Teacher'); ?> value="Deputy Head Teacher">Deputy Head Teacher</option>
									<option <?php echo set_select('staff_position','H.O.D'); ?> value="H.O.D">H.O.D</option>
                                    <option <?php echo set_select('staff_position','Coordinator'); ?> value="Coordinator">Coordinator</option>
                                    <option <?php echo set_select('staff_position','Supervisor'); ?> value="Supervisor">Supervisor</option>
                                    <option <?php echo set_select('staff_position','Vice Principal'); ?> value="Vice Principal">Vice Principal</option>
                                    <option <?php echo set_select('staff_position','Principal'); ?> value="Principal">Principal</option>
									<option <?php echo set_select('staff_position','none'); ?> value="none">None</option>
									
								</select>				
						</div>
					</div>					
					
					<div class="form-group">
						<?php echo form_error('staff_type'); ?>
						<label class="col-sm-4 control-label">Staff Type:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<select class="form-control" name="staff_type">
                                    <option value=""> </option>    
									<option <?php echo set_select('staff_type','Teaching'); ?> value="Teaching"> Teaching </option>
                                    <option <?php echo set_select('staff_type','Non-Teaching'); ?>  value="Non-Teaching"> Non-Teaching </option>
								</select>						</div>
					</div>
					
					<div class="form-group">
						<?php echo form_error('staff_function'); ?>
						<label class="col-sm-4 control-label">Staff Function:<span class="req">*</span> </label>
						<div class="col-sm-8">
								<select class="form-control" name="staff_function">
                                    <option value=""> </option>    
									<option <?php echo set_select('staff_function','Teacher'); ?>  value="Teacher">Teacher</option>
                                    <option <?php echo set_select('staff_function','Burser'); ?> value="Burser">Burser</option>
                                    <option <?php echo set_select('staff_function','Cleaner'); ?> value="Cleaner">Cleaner</option>
                                    <option <?php echo set_select('staff_function','Admin'); ?> value="Admin">Admin</option>
                                    <option <?php echo set_select('staff_function','Cheff'); ?> value="Cheff">Cheff</option>
                                    <option <?php echo set_select('staff_function','Receptionist'); ?> value="Receptionist">Receptionist</option>
                                    <option <?php echo set_select('staff_function','Driver'); ?> value="Driver">Driver</option>
                                    <option <?php echo set_select('staff_function','Security'); ?> value="Security">Security</option>
                                    <option <?php echo set_select('staff_function','Computer'); ?> value="Computer">Computer</option>
									<option <?php echo set_select('staff_function','none'); ?> value="none">None</option>
								</select>					
						</div>
					</div> 
					
					<div class="form-group">
						<?php echo form_error('qualification'); ?>
						<label class="col-sm-4 control-label">Highest Qualification:<span class="req">*</span> </label>
						<div class="col-sm-8"> 
							<input class="form-control" value="<?php echo set_value('qualification'); ?>" name="qualification" type="text">
							<span class="help-block">E.g B.Sc B.Ed NCE PHD</span>							
						</div>
					</div>
				

					<div class="form-group">
						<?php echo form_error('course_studied'); ?>
						<label class="col-sm-4 control-label">Course Studied:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="course_studied" value="<?php echo set_value('course_studied'); ?>" type="text">
							<span  class="help-block">E.g Computer Science</span>
						</div>
					</div>

					<div class="form-group">
						<?php echo form_error('institution'); ?>
						<label class="col-sm-4 control-label">Institution:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="institution" value="<?php echo set_value('institution'); ?>" type="text">
							<span  class="help-block">E.g Tai Solarin University of Education</span>
						</div>
					</div>

					<div class="form-group">
						<?php echo form_error('years_of_exp'); ?>
						<label class="col-sm-4 control-label">Years of Experience:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="years_of_exp" value="<?php echo set_value('years_of_exp'); ?>" type="text">
						</div>
					</div>		
					
					<div class="form-group">
						<?php echo form_error('staff_level'); ?>
						<label class="col-sm-4 control-label">Staff Level:<span class="req">*</span> </label>
						<div class="col-sm-8">
							<input class="form-control" name="staff_level" value="<?php echo set_value('staff_level'); ?>" type="text">
						</div>
					</div>	
					

											          

	        </div>
	      </div>
	      
	      <div class="panel panel-default">
		    <div class="panel-heading ">STAFF ROLE</div>	
		    	  <div class="clearfix  m-t" >
		    	<div class="form-group">
						<?php echo form_error('staff_role'); ?>
						<label class="col-sm-4 control-label">Staff Role:<span class="req">*</span> </label>
						<div class="col-sm-7">
							<select class="form-control" name="staff_role">
                                    <option value=""> </option>    
									<option <?php echo set_select('staff_role','staff'); ?> value="staff"> Staff </option>
                                    <option <?php echo set_select('staff_role','admin'); ?>  value="admin"> School Site Admin </option>
								</select>	
						</div>
					</div>
					</div>
	        <div class="panel-body">
	          
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
	                  <img id="preview" src="<?php echo base_url();?>img/a8.jpg" class="img-circle" alt="...">
	                </div>
	              <canvas width="134" height="134"></canvas>
	              </div>
	              <div style="height:0px;overflow:hidden">
   					<input type="file" id="passport" name="passport" onchange="readURL(this);" />
					</div>

				<div class="bootstrap-filestyle input-group"><input class="form-control pupload"  type="button"> <span tabindex="0" class="group-span-filestyle input-group-btn"><label for="filestyle-0" class="btn btn-default pupload"><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>            </div>                      
	          </div>
	        </div>
	      </div>
	      
		</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading ">MEDICAL INFO</div>
						<div class="panel-body">
							<!-- <form class="bs-example form-horizontal ng-pristine ng-valid"> -->
							<div class="form-group">
								<?php echo form_error('height'); ?>
								<label class="col-sm-4 control-label">Height: </label>
								<div class="col-sm-7 input-group">
									<input class="form-control" value="<?php echo set_value('height'); ?>" name="height" aria-describedby="basic-addon1">
								<span class="input-group-addon" id="basic-addon1">cm</span>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('weight'); ?>
								<label class="col-sm-4 control-label">Weight: </label>
								<div class="col-sm-7 input-group">
									<input class="form-control" value="<?php echo set_value('weight'); ?>" name="weight" type="text" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2">kg</span>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('disability'); ?>
								<label class="col-sm-4 control-label">Disablity: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('disability'); ?>" name="disability" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('genotype'); ?>
								<label class="col-sm-4 control-label">Genotype: </label>
								<div class="col-sm-8">
									<select class="form-control" name="genotype">
                                    <option value=""> </option>    
									<option <?php echo set_select('genotype','AA'); ?>  value="AA">AA</option>
                                    <option <?php echo set_select('genotype','AS'); ?>  value="AS">AS</option>
                                    <option <?php echo set_select('genotype','AC'); ?>  value="AC">AC</option>
                                    <option <?php echo set_select('genotype','SS'); ?>  value="SS">SS</option>
								</select>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('bloodgroup'); ?>
								<label class="col-sm-4 control-label">Bloodgroup: </label>
								<div class="col-sm-8">
									<select class="form-control" name="bloodgroup">
                        <option value=""> </option>    
						<option <?php echo set_select('bloodgroup','O+'); ?>  value="O+">O+</option>
                        <option <?php echo set_select('bloodgroup','O-'); ?>  value="O-">O-</option>
                        <option <?php echo set_select('bloodgroup','A+'); ?>  value="A+">A+</option>
                        <option <?php echo set_select('bloodgroup','A-'); ?>  value="A-">A-</option>
                        <option <?php echo set_select('bloodgroup','B+'); ?>  value="B+">B+</option>
                        <option <?php echo set_select('bloodgroup','B-'); ?>  value="B-">B-</option>
                        <option <?php echo set_select('bloodgroup','AB+'); ?>  value="AB+">AB+</option>
                        <option <?php echo set_select('bloodgroup','AB-'); ?>  value="AB-">AB-</option>
								</select>
								</div>
							</div>
						</div>
					</div>
				</div>


<div class="col-sm-6 offset">
	      <div class="panel panel-default">
		    <div class="panel-heading ">Assign Role</div>

	        <div class="panel-body">
	        <?php foreach($aroles as $arole){?>
	         	<label class="i-checks i-checks-sm block">
	        
	        <input <?php echo set_checkbox('role[]',$arole['id']); ?> type="checkbox" name="role[]" value="<?php echo $arole['id']; ?>">
	        <i class="fa fa-fw fa-square-o checked"></i>
	        <?php echo $arole['role_name']; ?>
	     </label>
	     <?php }?>
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
		</form>
    </div>
    <!-- /content -->

 <script type="text/javascript">
  $(document).ready(function(){
    $("select.state").change(function(){
      var selectedState = $(".state option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>assets/listState.php",
        data: { state : selectedState } 
      }).done(function(data){
        console.log(data);
        $("#lga").html(data);
      });
    });
    
    $( ".pupload" ).click(function() {
		  $( "#passport" ).click();
		});

    
  });
  </script> 

  <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result).width(128)
                        .height(128);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>