<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
	if($_SESSION['user_type'] == 'student' and $_SESSION['user_id'] !== $student_details['user_id']){
		redirect("students");
	}


?>
<!-- <script>
	$(document).ready( function () {
		$('#list').DataTable();
	} );


</script> -->
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

		  <h1 class="m-n font-thin h3">Edit Student</h1>

		</div>
		<div class="wrapper-md">

		<div class="col-md-12">

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
			<?php }else{ ?>
			<div class="alert alert-info fade in widget-inner">
                <button type="button" class="close" data-dismiss="alert">x</button>
              Please Enter correct Information      
            </div>
			<?php } ?>
        </div>
			<form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>students/add_student/edit/<?php echo $student_details['user_id']; ?>" enctype="multipart/form-data">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading ">PERSONAL DETAILS</div>
						<div class="panel-body">

							<div class="form-group">
								<?php echo form_error('sname');?>
								<label class="col-sm-4 control-label">Surname: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('sname',$student_details['lname']); ?>" name="sname" id="surname"  required="" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('fname'); ?>
								<label class="col-sm-4 control-label">First Name: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('fname',$student_details['fname']); ?>" name="fname" id="firstName"  required="" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('mname'); ?>
								<label class="col-sm-4 control-label">Other Name: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('mname',$student_details['mname']); ?>" name="mname" id="otherName"  required="" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('phone'); ?>
								<label class="col-sm-4 control-label">Phone Number: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('phone',$student_details['phone']); ?>" name="phone" id="phoneNumber" required="" type="number">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('email'); ?>
								<label class="col-sm-4 control-label">Email Address: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('email',$student_details['email']); ?>" name="email" id="emailAddress"  required="" type="email">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('gender'); ?>
								<label class="col-sm-4 control-label">Gender: </label>
								<div class="col-sm-8">
									<select class="form-control" name="gender">
										<option selected="selected">Select</option>
										<option <?php echo set_select('gender','male',((('male') == ($student_details['gender']))?true:false)); ?> value="male">MALE</option>
										<option <?php echo set_select('gender','female',((('female') == ($student_details['gender']))?true:false)); ?> value="female">FEMALE</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('address'); ?>
								<label class="col-sm-4 control-label">Home Address: </label>
								<div class="col-sm-8">
									<input placeholder="Home Address" class="form-control" value="<?php echo set_value('address',$student_details['address']); ?>" name="address" required="" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('religion'); ?>
								<label class="col-sm-4 control-label">Religion: </label>
								<div class="col-sm-8">
									<select class="form-control" name="religion" id="religion" required="">
										<option <?php echo set_select('religion','Islam',((('Islam') == ($student_details['religion']))?true:false)); ?> value="Islam">Islam</option>
										<option <?php echo set_select('religion','',TRUE); ?> value="">---Select Religion---</option>
										<option <?php echo set_select('religion','Christianity',((('Christianity') == ($student_details['religion']))?true:false)); ?> value="Christianity">Christianity</option>
										<option <?php echo set_select('religion','Traditional',((('Traditional') == ($student_details['religion']))?true:false)); ?> value="Traditional">Traditional</option>
									</select>
								</div>
							</div>


							<div class="form-group">
								<?php echo form_error('dob'); ?>
								<label class="col-sm-4 control-label">D.O.B (DD/MM/YYYY): </label>
								<div class="col-sm-8">
									<input class="form-control date" value="<?php echo set_value('dob',$student_details['dob']); ?>" name="dob" id="dob" required="" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('nationality'); ?>
								<label class="col-sm-4 control-label">Nationality: </label>
								<div class="col-sm-8">
									<input class="form-control" name="nationality" value="<?php echo set_value('nationality',$student_details['nationality']); ?>" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('state'); ?>
								<label class="col-sm-4 control-label">State:</label>
								<div class="col-sm-8">
									<select class="form-control state" name="state" required="">
                                      <option <?php echo set_select('state',''); ?> value=" ">Select</option>
                                      <?php
                                      foreach ($states as $state) {
                                          ?>
                                          <option <?php echo set_select('state', "$state[state]",((($state['state']) == ($student_details['state_of_origin']))?true:false)); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
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
                                    <option value="<?php echo $student_details['lg']; ?>"><?php echo $student_details['lg']; ?></option>
                                  </select>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('hometown'); ?>
								<label class="col-sm-4 control-label">Hometown: </label>
								<div class="col-sm-8">
									<input class="form-control" name="hometown" value="<?php echo set_value('hometown',$student_details['hometown']); ?>" type="text">
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
									<input class="form-control" value="<?php echo set_value('admission_no',$student_details['admission_no']); ?>" name="admission_no"   required="" type="text">
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
										<option <?php echo set_select('admission_class', "$class[level_id]-$class[id]",((("$class[level_id]-$class[id]") == ($student_details['admission_class'].'-'.$student_details['admission_class_details_id']))?true:false)); ?> value="<?php echo $class['level_id']; ?>-<?php echo $class['id']; ?>"><?php echo $class['class_details']; ?>
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
									<input class="form-control" value="<?php echo set_value('admission_date',$student_details['admission_date']); ?>" name="admission_date"  required="">
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
										<option <?php echo set_select('sport_house', "$sport_house[sport_house_id]",((("$sport_house[sport_house_id]") == ($staff_details['sport_house']))?true:false)); ?> value="<?php echo $sport_house['sport_house_id']; ?>"><?php echo $sport_house['sport_house_color']; ?>
										</option>
										<?php
									}
									?>
								</select>
									
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('hostel_status'); ?>
								<label class="col-sm-4 control-label">Day/Boarding:: </label>
								<div class="col-sm-8">
								<select id="response" class="form-control" name="hostel_status" required="">
									<option <?php echo set_select('hostel_status','',TRUE); ?>  value="">Select</option>
									<option <?php echo set_select('hostel_status','Day',((("Day") == ($student_details['hostel_status']))?true:false)); ?>  value="Day">Day</option>
									<option <?php echo set_select('hostel_status','Boarding',((("Boarding") == ($student_details['hostel_status']))?true:false)); ?>  value="Boarding">Boarding</option>
								</select>
									
								</div>
							</div>


						</div>
					</div>
				</div>
<div class="col-sm-6">
	      <div class="panel panel-default">
		    <div class="panel-heading ">UPLOAD PASSPORT</div>

	        <div class="panel-body">
	          <div class="clearfix text-center m-t" style=" margin-bottom: 20px">
	            <div class="inline">
	              <div style="height: 134px; line-height: 134px; margin-bottom: 40px" class="easyPieChart">
	                <div class="thumb-xl">
	                <?php 
                if(!empty($student_details['profile_image'])){
                  $profile_image = "assets/$_SESSION[sch_id]/".$student_details['profile_image'];
                }else{
                  $profile_image = 'img/a0.jpg';
                }
                ?>
	                  <img id="preview" src="<?php echo base_url($profile_image);?>" class="img-circle" alt="..." width='128' height='128'>
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
	      
		</div><div class="clearfix"></div>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading ">MEDICAL INFO</div>
						<div class="panel-body">
							<!-- <form class="bs-example form-horizontal ng-pristine ng-valid"> -->
							<div class="form-group">
								<?php echo form_error('height'); ?>
								<label class="col-sm-4 control-label">Height: </label>
								<div class="col-sm-7 input-group">
									<input class="form-control" value="<?php echo set_value('height',$student_details['height']); ?>" name="height" aria-describedby="basic-addon1">
								<span class="input-group-addon" id="basic-addon1">cm</span>
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('weight'); ?>
								<label class="col-sm-4 control-label">Weight: </label>
								<div class="col-sm-7 input-group">
									<input class="form-control" value="<?php echo set_value('weight',$student_details['weight']); ?>" name="weight" type="text" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2">kg</span>
								</div>
							
							</div>

							<div class="form-group">
								<?php echo form_error('disability'); ?>
								<label class="col-sm-4 control-label">Disablity: </label>
								<div class="col-sm-8">
									<input class="form-control" value="<?php echo set_value('disability',$student_details['disability']); ?>" name="disability" type="text">
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('genotype'); ?>
								<label class="col-sm-4 control-label">Genotype: </label>
								<div class="col-sm-8">
								   
									<select class="form-control" name="genotype">
										<option value=""> </option>
									<option <?php echo set_select('genotype','AA',((('AA') == ($student_details['genotype']))?true:false)); ?>  value="AA">AA</option>
                                    <option <?php echo set_select('genotype','AS',((('AS') == ($student_details['genotype']))?true:false)); ?>  value="AS">AS</option>
                                    <option <?php echo set_select('genotype','AC',((('AC') == ($student_details['genotype']))?true:false)); ?>  value="AC">AC</option>
                                    <option <?php echo set_select('genotype','SS',((('SS') == ($student_details['genotype']))?true:false)); ?>  value="SS">SS</option>
										
									</select>	
								
								</div>
							</div>

							<div class="form-group">
								<?php echo form_error('bloodgroup'); ?>
								<label class="col-sm-4 control-label">Bloodgroup: </label>
								<div class="col-sm-8">
									<select class="form-control" name="bloodgroup">
						<option value=""> </option>
						<option <?php echo set_select('bloodgroup','O+',((('O+') == ($student_details['bloodgroup']))?true:false)); ?>  value="O+">O+</option>
						<option <?php echo set_select('bloodgroup','O-',((('O-') == ($student_details['bloodgroup']))?true:false)); ?>  value="O-">O-</option>
                        <option <?php echo set_select('bloodgroup','A+',((('A+') == ($student_details['bloodgroup']))?true:false)); ?>  value="A+">A+</option>
                        <option <?php echo set_select('bloodgroup','A-',((('A-') == ($student_details['bloodgroup']))?true:false)); ?>  value="A-">A-</option>
                        <option <?php echo set_select('bloodgroup','B+',((('B+') == ($student_details['bloodgroup']))?true:false)); ?>  value="B+">B+</option>
                        <option <?php echo set_select('bloodgroup','B-',((('B-') == ($student_details['bloodgroup']))?true:false)); ?>  value="B-">B-</option>
                        <option <?php echo set_select('bloodgroup','AB+',((('AB+') == ($student_details['bloodgroup']))?true:false)); ?>  value="AB+">AB+</option>
                        <option <?php echo set_select('bloodgroup','AB-',((('AB-') == ($student_details['bloodgroup']))?true:false)); ?>  value="AB-">AB-</option>
                                    
										
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
	        
	        <input <?php echo set_checkbox('role[]',$arole['id'],((($arole['user_id']) == ($student_details['user_id']))?true:false)); ?> type="checkbox" name="role[]" value="<?php echo $arole['id']; ?>">
	        <i class="fa fa-fw fa-square-o checked"></i>
	        <?php echo $arole['role_name']; ?>
	     </label>
	     <?php }?>
	</div>
	      </div>
	      
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
        </form>
        
	    	<div class="clearfix"></div>
				<div class="wrapper-md">
					<div class="row m-b doc-buttons">
	                  <div class="col-sm-8">
	                  <a class="btn btn-primary" data-toggle="modal" href='#parent-modal'>Add Parent</a>
	                  </div>
<!--	                  <div class="col-sm-4">-->
<!--	                    <div class="input-group">-->
<!--	                      <input class="form-control" placeholder="Search" type="text">-->
<!--	                      <span class="input-group-btn">-->
<!--	                        <button class="btn btn-info" type="button">Go!</button>-->
<!--	                      </span>-->
<!--	                    </div>-->
<!--	                  </div>-->
	                </div>
					<section class="panel panel-default">
		                <header class="panel-heading">
		                  Parents Information Table
		                </header>
		                <div class="table-responsive">
		                  <table id="list" class="table table-striped table-hover b-t b-light">
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
							<?php
							foreach($parents_details as $parent_detail) {
								if(empty($i)){
									$i = 1;
								}
								?>
								<tr>
									<td><input name="post[]" value="2" type="checkbox"></td>
									<td><?php echo $i; ?></td>
									<td><?php echo $parent_detail['user_id']; ?></td>
									<th><?php echo $parent_detail['title']; ?></th>
									<td><?php echo $parent_detail['lname']." ".$parent_detail['fname']." ".$parent_detail['mname']; ?></td>
									<td><?php echo $parent_detail['initial']; ?></td>
									<td><?php echo $parent_detail['phone']; ?></td>
									<td><?php echo $parent_detail['email']; ?></td>
									<td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a>
									</td>
									<?php if ($parent_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_users/<?php echo $parent_detail['id']; ?>/inactive/status" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_users/<?php echo $parent_detail['id']; ?>/active/status" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
                                  <?php }?>
									<td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-print"></i> Profile</a>
									</td>
								</tr>
								<?php
								$i++;
							}
							?>
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

	    
		<div class="clearfix"></div>
</form>
    </div>
    <!-- /content -->
<div class="modal fade" id="parent-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="fa fa-plus"></i>ADD PARENT</h4>
			</div>
			<form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>students/add_parent/<?php echo $student_details['user_id']; ?>">
			<div class="modal-body">
			<div class="form-group">
								<?php echo form_error('peparent'); ?>
								<label class="col-sm-4 control-label">Select Existing Parent: </label>
								<div class="col-sm-8">
									<select class="form-control peparent" name="peparent">
									<option <?php echo set_select('peparent','',TRUE); ?> value=" ">Select Parent</option>
									<?php
									foreach ($parents as $parent) {
										?>
										<option <?php echo set_select('peparent', "$parent[parent_id]"); ?> value="<?php echo $parent['parent_id']; ?>"><?php echo $parent['title'].' '.$parent['lname'].' '.$parent['fname']; ?>
										</option>
										<?php
									}
									?>
								</select>
								</div>
							</div>
		      	<div class="panel panel-default">
		      			<div class="panel-heading">Personal Details</div>
				        <div class="panel-body">
							<?php  echo validation_errors(); ?>
				        		<div class="row">
				        			<div class=" col-sm-4">
										<?php //echo form_error('ptitle'); ?>
										<label class="control-label">Title: </label>
										<input class="form-control" value="<?php echo set_value('ptitle',$parent_details['title']); ?>" name="ptitle" id="title"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<?php //echo form_error('pinitial'); ?>
										<label class="control-label">Initial: </label>
										<input class="form-control" value="<?php echo set_value('pinitial',$parent_details['initial']); ?>" name="pinitial" id="initial"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<?php //echo form_error('psurname'); ?>
										<label class="control-label">Surname: </label>
										<input class="form-control" value="<?php echo set_value('psurname',$parent_details['surname']); ?>" name="psurname" id="surname"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<?php //echo form_error('pfirstname'); ?>
										<label class="control-label">First Name: </label>
										<input class="form-control" value="<?php echo set_value('pfirstname',$parent_details['firstname']); ?>" name="pfirstname" id="firstname"  required="" type="text">
									</div>
									<div class=" col-sm-4">
										<?php //echo form_error('pothername'); ?>
										<label class="control-label">Other Name: </label>
										<input class="form-control" value="<?php echo set_value('pothername',$parent_details['othername']); ?>" name="pothername" id="othername"  required="" type="text">
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('pphonenumber'); ?>
										<label class="control-label">Phone Number: </label>
										<input class="form-control" value="<?php echo set_value('pphonenumber',$parent_details['phonenumber']); ?>" name="pphonenumber" id="phonenumber" required="" type="number">
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('pemailaddress'); ?>
										<label class="control-label">Email Address: </label>
										<input class="form-control" value="<?php echo set_value('pemailaddress',$parent_details['emailaddress']); ?>" name="pemailaddress" id="emailAddress"  required="" type="email">
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('phome_address'); ?>
										<label class="control-label">Home Address: </label> 
										<input placeholder="Home Address" class="form-control" value="<?php echo set_value('phome_address',$parent_details['phome_address']); ?>" name="phome_address" required="" type="text">
									</div>
									<div class="col-sm-4 preligion">
										<?php //echo form_error('preligion'); ?>
										<label class="control-label">Religion: </label>
										<select class="form-control" name="preligion" id="religion" required="">
											<option value="">---Select Religion---</option>
											<option <?php echo set_select('preligion','Islam'); ?> value="Islam">Islam</option>
											<option <?php echo set_select('preligion','Christianity'); ?> value="Christianity">Christianity</option>
											<option <?php echo set_select('preligion','Traditional'); ?> value="Traditional">Traditional</option>
										</select>
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('pdob'); ?>
										<label class="control-label">D.O.B (DD/MM/YYYY): </label>
										<input class="form-control date" value="<?php echo set_value('pdob',$parent_details['dob']); ?>" name="pdob" id="dob" required="" type="text">
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('pnationality'); ?>
										<label class="control-label">Nationality: </label>
										<input class="form-control" name="pnationality" value="<?php echo set_value('pnationality',$parent_details['nationality']); ?>" type="text">
									</div>
									<div class="col-sm-4 pstate">
										<?php //echo form_error('pstate'); ?>
										<label class="control-label">State: </label>
										<select class="form-control pstate" name="pstate" required="">
											<option <?php echo set_select('pstate',''); ?> value=" ">Select</option>
                                      <?php
                                      foreach ($states as $state) {
                                          ?>
                                          <option <?php echo set_select('pstate', "$state[state]",((($state['state']) == ($student_details['state_of_origin']))?true:false)); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
                                          </option>
                                          <?php
                                      }
                                      ?>
										</select>
									</div>
									<div class="col-sm-4 plga">
										<?php //echo form_error('plga'); ?>
										<label class="control-label">Local Government Area: </label>
										<select id="plga" class="form-control plga" name="plga" required="">
											<option value="<?php echo $student_details['lg']; ?>"><?php echo $student_details['lg']; ?></option>
										</select>
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('phometown'); ?>
										<label class="control-label">Hometown: </label>
										<input class="form-control" name="phometown" value="<?php echo set_value('phometown',$parent_details['hometown']); ?>" type="text">
									</div>
									<div class="col-sm-4">
									<input type="hidden" name="parent_id">
										<?php //echo form_error('prelationship'); ?>
										<label class="control-label">Relationship: </label>
										<input class="form-control" value="<?php echo set_value('prelationship',$parent_details['relationship']); ?>" name="prelationship"  required="" type="text">
<!-- 										<span class="help-block">Father, Mother, Brother</span>
 -->									</div>
									<div class="col-sm-4">
										<?php //echo form_error('poccupation'); ?>
										<label class="control-label">Occupation: </label>
										<input class="form-control" value="<?php echo set_value('poccupation',$parent_details['occupation']); ?>" name="poccupation"  type="text">
									</div>
									<div class="col-sm-4">
										<?php //echo form_error('poccupation_address'); ?>
										<label class="control-label">Occupation Address: </label>
										<input class="form-control" value="<?php echo set_value('poccupation_address',$parent_details['occupation_address']); ?>" name="poccupation_address"  type="text">
									</div>
								</div>

			        	</div>
			    </div>
		    </div>			       		
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
				</form>
		</div>

	</div>
</div>


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


    $("select.pstate").change(function(){
      var selectedState = $(".pstate option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>assets/listState.php",
        data: { state : selectedState } 
      }).done(function(data){
        console.log(data);
        $("#plga").html(data);
      });
    });
    
    $( ".pupload" ).click(function() {
		  $( "#passport" ).click();
		});

    $("select.peparent").change(function(){
      var selectedParent = $(".peparent option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>students/parent_api",
        data: { parent_id : selectedParent } 
      }).done(function(data){
      	var data = JSON.parse(data);
        console.log(data);
        if(data != null){
        $("input[name='ptitle']").val(data.title).prop('disabled', true);
        $("input[name='pinitial']").val(data.initial).prop('disabled', true);
        $("input[name='psurname']").val(data.lname).prop('disabled', true);
        $("input[name='pfirstname']").val(data.fname).prop('disabled', true);
        $("input[name='pothername']").val(data.mname).prop('disabled', true);
        $("input[name='pphonenumber']").val(data.phone).prop('disabled', true);
        $("input[name='pemailaddress']").val(data.email).prop('disabled', true);
        $("input[name='phome_address']").val(data.address).prop('disabled', true);
        $("input[name='pdob']").val(data.dob).prop('disabled', true);
        $("input[name='pnationality']").val(data.nationality).prop('disabled', true);
        $("input[name='phometown']").val(data.hometown).prop('disabled', true);
        $("input[name='prelationship']").val(data.relationship).prop('disabled', true);
        $("input[name='poccupation']").val(data.occupation).prop('disabled', true);
        $("input[name='poccupation_address']").val(data.occupation_address).prop('disabled', true);
        $("div.preligion select").val(data.religion).prop('disabled', true);
        $("div.pstate select").val(data.state_of_origin).prop('disabled', true);
        $("div.plga select").val(data.lg).prop('disabled', true);
        $("input[name='parent_id']").val(data.parent_id);

    }else{
    	$("input[name='ptitle']").val('').prop('disabled', false);
        $("input[name='pinitial']").val('').prop('disabled', false);
        $("input[name='psurname']").val('').prop('disabled', false);
        $("input[name='pfirstname']").val('').prop('disabled', false);
        $("input[name='pothername']").val('').prop('disabled', false);
        $("input[name='pphonenumber']").val('').prop('disabled', false);
        $("input[name='pemailaddress']").val('').prop('disabled', false);
        $("input[name='phome_address']").val('').prop('disabled', false);
        $("input[name='pdob']").val('').prop('disabled', false);
        $("input[name='pnationality']").val('').prop('disabled', false);
        $("input[name='phometown']").val('').prop('disabled', false);
        $("input[name='prelationship']").val('').prop('disabled', false);
        $("input[name='poccupation']").val('').prop('disabled', false);
        $("input[name='poccupation_address']").val('').prop('disabled', false);
        $("div.preligion select").val('').prop('disabled', false);
        $("div.pstate select").val('').prop('disabled', false);
        $("div.plga select").val('').prop('disabled', false);
        $("input[name='parent_id']").val('');
    }

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