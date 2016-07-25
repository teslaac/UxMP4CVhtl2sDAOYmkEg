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
			<form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>students/add_student" enctype="multipart/form-data">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading ">PERSONAL DETAILS</div>
					<div class="panel-body">

						<div class="form-group">
							<?php echo form_error('sname'); ?>
							<label class="col-sm-4 control-label">Surname: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('sname'); ?>" name="sname" id="surname"  required="" type="text">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('fname'); ?>
							<label class="col-sm-4 control-label">First Name: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('fname'); ?>" name="fname" id="firstName"  required="" type="text">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('mname'); ?>
							<label class="col-sm-4 control-label">Other Name: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('mname'); ?>" name="mname" id="otherName"  required="" type="text">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('phone'); ?>
							<label class="col-sm-4 control-label">Phone Number: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('phone'); ?>" name="phone" id="phoneNumber" required="" type="number">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('email'); ?>
							<label class="col-sm-4 control-label">Email Address: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('email'); ?>" name="email" id="emailAddress"  required="" type="email">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('gender'); ?>
							<label class="col-sm-4 control-label">Gender: </label>
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
							</div>
						</div>


					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading ">ADMISSION INFO</div>
					<div class="panel-body">
						<!--  <form class="bs-example form-horizontal ng-pristine ng-valid">		 -->
						<div class="form-group">
							<?php echo form_error('admission_no'); ?>
							<label class="col-sm-4 control-label">Admission No: </label>
							<div class="col-sm-8">
								<input class="form-control" value="<?php echo set_value('admission_no'); ?>" name="admission_no"   required="" type="text">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('admission_class'); ?>
							<label class="col-sm-4 control-label">Class: </label>
							<div class="col-sm-8">
								<select class="form-control state" name="admission_class" required="">
									<option <?php echo set_select('admission_class','',TRUE); ?> value=" ">Select</option>
									<?php
									foreach ($classes as $class) {
										?>
										<option <?php echo set_select('admission_class', "$class[level_id]-$class[id]"); ?> value="<?php echo $class['level_id']; ?>-<?php echo $class['id']; ?>"><?php echo $class['class_details']; ?>
										</option>
										<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('admission_date'); ?>
							<label class="col-sm-4 control-label">Admission Date: </label>
							<div class="col-sm-8">
								<input class="form-control date" value="<?php echo set_value('admission_date'); ?>" name="admission_date"  required="">
							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('sport_house'); ?>
							<label class="col-sm-4 control-label">Sport House: </label>
							<div class="col-sm-8">
								<select class="form-control state" name="sport_house">
									<option <?php echo set_select('sport_house','',TRUE); ?> value=" ">Select</option>
									<?php
									foreach ($sport_house as $sport_house) {
										?>
										<option <?php echo set_select('sport_house', "$sport_house[sport_house_id]"); ?> value="<?php echo $sport_house['sport_house_id']; ?>"><?php echo $sport_house['sport_house_color']; ?>
										</option>
										<?php
									}
									?>
								</select>							</div>
						</div>

						<div class="form-group">
							<?php echo form_error('hostel_status'); ?>
							<label class="col-sm-4 control-label">Day/Boarding:: </label>
							<div class="col-sm-8">
								<select id="response" class="form-control" name="hostel_status" required="">
									<option <?php echo set_select('hostel_status','',TRUE); ?>  value="">Select</option>
									<option <?php echo set_select('hostel_status','Day'); ?>  value="Day">Day</option>
									<option <?php echo set_select('hostel_status','Boarding'); ?>  value="Boarding">Boarding</option>
								</select>
							</div>
						</div>


					</div>
				</div>
				
<div class="col-sm-12">
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
			<div class="clearfix"></div>	
<div class="col-sm-12">
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
			</form>
		<div class="clearfix"></div>

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

