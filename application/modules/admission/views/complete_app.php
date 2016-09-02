
<div class="app-content m-n ">
    <div ui-butterbar></div>
    <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
    <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
        <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
            app.settings.asideFolded = false;
            app.settings.asideDock = false;
            ">
            <!-- main -->
            <div class="col">
                <!-- main header -->
                <div class="bg-light lter b-b wrapper-md">
                    <div class="row">
                       
                        <?php  //print_r($pro_info); ?>
                        <div class="col-xs-12 text-center">
                            <h1 class="m-n font-thin h3 text-black">Complete Application</h1>
                            <small class="text-muted">Welcome to Acadah Smart School application</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- / main header -->
                <!-- / inc_admission_sidebar -->
                <?php include 'inc_admission_sidebar.php'; ?>
                <div class="col w-content wrapper-md">
                    <?php $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                    <?php echo form_open_multipart("admission/complete/$id", $data); ?>
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" id="step4">
                                <?php echo validation_errors(); ?>
                                <?php if(isset($_SESSION['success'])) { ?>
                                <div class="alert alert-info fade in widget-inner">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                                    <?php  echo $this->session->flashdata("success"); ?>
                                </div>
                                
                                <?php  } ?>
                                <div class="panel-heading ">STUDENT'S PERSONAL DETAILS</div>
                                <div class="panel-body">
                                    <div class="col-sm-6 clearfix">
                                    
                                      <div class="form-group">
                                      <?php echo form_error('sname'); ?>
                                       <label class="col-sm-4 control-label">Surname: <span>*</span></label>
                                            <div class="col-sm-8">
                                              <input class="form-control" required="" value="<?php echo set_value('sname', $pro_info['lname']); ?>" name="sname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <?php echo form_error('fname'); ?>
                                         <label class="col-sm-4 control-label">First Name: </label>
                                            <div class="col-sm-8">
                                              <input class="form-control" required="" value="<?php echo set_value('fname', $pro_info['fname']); ?>" name="fname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('mname'); ?>
                                            <label class="col-sm-4 control-label">Other Name: </label>
                                            <div class="col-sm-8">
                                              <input class="form-control" required="" value="<?php echo set_value('mname', $pro_info['mname']); ?>" name="mname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <?php echo form_error('phone'); ?>
                                            <label class="col-sm-4 control-label">Phone Number: </label>
                                            <div class="col-sm-8">
                                              <input class="form-control" value="<?php echo set_value('phone', $pro_info['phone']); ?>" name="phone" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('email'); ?>
                                            <label class="col-sm-4 control-label">Email Address: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" required="" value="<?php echo set_value('email', $pro_info['email']); ?>" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('level'); ?>
                                            <label class="col-sm-4 control-label">Admission Level: </label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="level" required="">
                                                     <option <?php echo set_select('level',''); ?> value="">Select</option>
                                                    <?php foreach ($class_level as $classes){ ?>
                                                    
                                                     <option <?php echo set_select('level',$classes['level_id'],((($pro_info['admission_class']) == ($classes['level_id']))?true:false)); ?> value="<?php echo $classes['level_id']; ?>"><?php echo $classes['class_name']; ?></option>


                                                          <?php }//foreach ($class_level as $class): ?>
                                                         <!-- <option value="<?php //echo $class['class_id']; ?>"<?php //echo  //set_select($class['class_name'], $class['class_name'], FALSE); ?>><?php //echo $class['class_name']; ?>
                                                          </option> -->
                                                         <?php //endforeach; ?>
                                                    </select>

                                                <!-- <input class="form-control" value="<?php echo set_value('level', $admission_class);?>" name="level" type="text"> -->
                                            </div>
                                        </div>
                                        <?php 
                                                    if($_SESSION['user_type'] !== 'prospective'){?>
                                                         <div class="form-group">
                                        <?php echo form_error('class_details_id'); ?>
                                            <label class="col-sm-4 control-label">Class Details: </label>
                                            <div class="col-sm-8">
                                                        <select class="form-control" name="class_details_id" required="">
                                                    <option <?php echo set_select('class_details_id','',TRUE); ?> value=" ">Select</option>
                                                    <?php
                                                    foreach ($classd_details as $class) {
                                                        ?>
                                                        <option <?php echo set_select('class_details_id', "$class[id]",((("$class[id]") == ($pro_info['admission_class_details_id']))?true:false)); ?> value="<?php echo $class['id']; ?>"><?php echo $class['class_details']; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                                </div>
                                                    <?php }
                                                    ?>
                                        <div class="form-group">
                                        <?php echo form_error('hostel_status'); ?>
                                            <label class="col-sm-4 control-label">Day/Boarding: </label>
                                            <div class="col-sm-8">
                                                <select class="form-control" required="" name="hostel_status" >
                                                    <option value="">Select</option>
                                                    <option <?php echo set_select('hostel_status','Day',((("Day") == ($pro_info['hostel_status']))?true:false)); ?>  value="Day">Day</option>
                                    <option <?php echo set_select('hostel_status','Boarding',((("Boarding") == ($pro_info['hostel_status']))?true:false)); ?>  value="Boarding">Boarding</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('religion'); ?>
                                            <label class="col-sm-4 control-label">Religion: </label>
                                            <div class="col-sm-8">
                                        <select class="form-control" name="religion" id="religion" required="">
                                        <option <?php echo set_select('religion','',TRUE); ?> value="">---Select Religion---</option>
                                        <option <?php echo set_select('religion','Islam',((('Islam') == ($pro_info['religion']))?true:false)); ?> value="Islam">Islam</option>
                                        <option <?php echo set_select('religion','Christianity',((('Christianity') == ($pro_info['religion']))?true:false)); ?> value="Christianity">Christianity</option>
                                        <option <?php echo set_select('religion','Traditional',((('Traditional') == ($pro_info['religion']))?true:false)); ?> value="Traditional">Traditional</option>
                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('gender'); ?>
                                            <label class="col-sm-4 control-label">Gender:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" required="" name="gender">
                                        <option selected="selected">Select</option>
                                        <option <?php echo set_select('gender','male',((('male') == ($pro_info['gender']))?true:false)); ?> value="male">MALE</option>
                                        <option <?php echo set_select('gender','female',((('female') == ($pro_info['gender']))?true:false)); ?> value="female">FEMALE</option>
                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <?php echo  form_error('address'); ?>
                                            <label class="col-sm-4 control-label">Residential Address: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" required="" rows="2" name="address"><?php echo set_value('address', $pro_info['address']); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('dob'); ?>
                                            <label class="col-sm-4 control-label">Date of Birth: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control date" required="" value="<?php echo set_value('dob', $pro_info['dob']); ?>" name="dob" type="text">
                                                <label class="control-label">Hint: e.g DD/MM/YYYY </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('nationality'); ?>
                                            <label class="col-sm-4 control-label">Nationality: </label>
                                            <div class="col-sm-8">
                                                <select class="form-control" required="" name="nationality">
                                                    <option selected="selected">Select</option>
                                                    <option <?php echo set_select('nationality','Nigerian',((("Nigerian") == ($pro_info['nationality']))?true:false)); ?> value="Nigerian">Nigerian</option>
                                                    <option <?php echo set_select('nationality','Non-Nigerian',((("Non-Nigerian") == ($pro_info['nationality']))?true:false)); ?> value="Non-Nigerian">Non-Nigerian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('state'); ?>
                                            <label class="col-sm-4 control-label">State Of Origin:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control state" name="state" required="">
                                      <option <?php echo set_select('state',''); ?> value=" ">Select</option>
                                      <?php
                                      foreach ($states as $state) {
                                          ?>
                                          <option <?php echo set_select('state', "$state[state]",((($state['state']) == ($pro_info['state_of_origin']))?true:false)); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
                                          </option>
                                          <?php
                                      }
                                      ?>
                                         </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_error('lga'); ?>
                                            <label class="col-sm-4 control-label">Local Government Area:</label>
                                            <div class="col-sm-8">
                                                <select id="lga" class="form-control lga" required="" name="lga">
                                                    <option value="<?php echo $pro_info['lg']; ?>"><?php echo $pro_info['lg']; ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_error('hometown'); ?>
                                            <label class="col-sm-4 control-label">Hometown: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="hometown" required="" value="<?php echo set_value('hometown', $pro_info['hometown']); ?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading ">PARENT/GAURDIAN INFO</div>
                                <div class="panel-body">
                                            <div class="col-sm-6 clearfix">
                                                <div class="form-group">
                                                    <?php echo form_error('p_fullname'); ?>
                                                    <label class="col-sm-4 control-label">Full Name: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" required="" value="<?php echo set_value('p_fullname', $pro_info['p_fullname']); ?>" name="p_fullname"  placeholder=""  type="text">
                                                        <!-- <label class="control-label">Hint: Mr, Mrs, Dr, Prof</label> -->
                                                    </div>
                                                </div>
                                              <div class="form-group">
                                              <?php echo form_error('p_phone'); ?>
                                                    <label class="col-sm-4 control-label">Phone Number: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" required="" value="<?php echo set_value('p_phone', $pro_info['p_phone']); ?>" name="p_phone"  type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                            <?php echo form_error('p_full_address'); ?>
                                                    <label class="col-sm-4 control-label">Full Address: </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" required="" value="" rows="2" name="p_full_address"><?php echo set_value('p_full_address', $pro_info['p_full_address']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">MEDICAL INFO</div>
                                    <div class="panel-body">
                                            <div class="form-group bs-example form-horizontal ng-pristine ng-valid">
                                                <?php echo form_error('height'); ?>
                                                <label class="col-sm-4 control-label">Height: </label>
                                                <div class="col-sm-7 input-group">
                                                    <input class="form-control" required="" value="<?php echo set_value('height', $pro_info['height']); ?>" name="height" aria-describedby="basic-addon1">
                                                    <span class="input-group-addon" id="basic-addon1">cm</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo form_error('weight'); ?>
                                                <label class="col-sm-4 control-label">Weight: </label>
                                                <div class="col-sm-7 input-group">
                                                    <input class="form-control" required="" value="<?php echo set_value('weight', $pro_info['weight']); ?>" name="weight" type="text" aria-describedby="basic-addon2">
                                                    <span class="input-group-addon" id="basic-addon2">kg</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                <?php echo form_error('disability'); ?>
                                <label class="col-sm-4 control-label">Disablity: </label>
                                <div class="col-sm-8">
                                    <input class="form-control" value="<?php echo set_value('disability',$pro_info['disability']); ?>" name="disability" type="text">
                                </div>
                            </div>

                                            <div class="form-group">
                                            <?php echo form_error('genotype'); ?>
                                                <label class="col-sm-4 control-label">Genotype: </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" required="" name="genotype">
                                                        <option value="">Select</option>
                                                        <option <?php echo set_select('genotype','AA',((('AA') == ($pro_info['genotype']))?true:false)); ?>  value="AA">AA</option>
                                    <option <?php echo set_select('genotype','AS',((('AS') == ($pro_info['genotype']))?true:false)); ?>  value="AS">AS</option>
                                    <option <?php echo set_select('genotype','AC',((('AC') == ($pro_info['genotype']))?true:false)); ?>  value="AC">AC</option>
                                    <option <?php echo set_select('genotype','SS',((('SS') == ($pro_info['genotype']))?true:false)); ?>  value="SS">SS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <?php echo form_error('bloodgroup'); ?>
                                                <label class="col-sm-4 control-label">Bloodgroup: </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" required="" name="bloodgroup">
                                                        <option value="">Select</option>
                        <option <?php echo set_select('bloodgroup','O+',((('O+') == ($pro_info['bloodgroup']))?true:false)); ?>  value="O+">O+</option>
                        <option <?php echo set_select('bloodgroup','O-',((('O-') == ($pro_info['bloodgroup']))?true:false)); ?>  value="O-">O-</option>
                        <option <?php echo set_select('bloodgroup','A+',((('A+') == ($pro_info['bloodgroup']))?true:false)); ?>  value="A+">A+</option>
                        <option <?php echo set_select('bloodgroup','A-',((('A-') == ($pro_info['bloodgroup']))?true:false)); ?>  value="A-">A-</option>
                        <option <?php echo set_select('bloodgroup','B+',((('B+') == ($pro_info['bloodgroup']))?true:false)); ?>  value="B+">B+</option>
                        <option <?php echo set_select('bloodgroup','B-',((('B-') == ($pro_info['bloodgroup']))?true:false)); ?>  value="B-">B-</option>
                        <option <?php echo set_select('bloodgroup','AB+',((('AB+') == ($pro_info['bloodgroup']))?true:false)); ?>  value="AB+">AB+</option>
                        <option <?php echo set_select('bloodgroup','AB-',((('AB-') == ($pro_info['bloodgroup']))?true:false)); ?>  value="AB-">AB-</option>
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
                                                        if(!empty($pro_info['profile_image'])){
                                                        $profile_image = "assets/$_SESSION[sch_id]/".$pro_info['profile_image'];
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
                                                <div class="bootstrap-filestyle input-group"><input class="form-control pupload"  type="button"> <span tabindex="0" class="group-span-filestyle input-group-btn"><label for="filestyle-0" class="btn btn-default pupload"><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-actions text-right">
                                    <!-- <a href="<?php echo base_url("admission/addparent"); ?>"><button type="submit" name="submit" class="btn btn-primary btn-addon"><i class="fa fa-save"></i>Add Parent Details</button></a> -->
                                    <input type="hidden" name="ts_id" value="<?php echo $pro_info['ts_id']; ?>">
                                    <?php 
                                    if($_SESSION['user_type'] !== 'prospective'){
                                if($pro_info['admission_status'] == 'admitted'){
                                    ?>
                                <button type='submit' name='status' class="btn btn-bg btn-danger" value='pending'><i class="fa fa-times"></i> Disapprove</button>
                                <?php }else{?>
                                    <button type='submit' name='status' value='admitted' class="btn btn-bg btn-success"><i class="fa fa-check"></i> Approve</a></button>
                                <?php } }?>
                                    <button type="submit" name="submit" class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save Application</button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
</div>
<!-- /content -->
<style type="text/css">
.app-footer.wrapper.footer2 {
margin-left: 0px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$("select.state").change(function(){
var selectedState = $(".state option:selected").val();
// alert(selectedState);
$.ajax({
type: "POST",
url: "<?php echo base_url();?>assets/listState.php",
data: { state : selectedState }
}).done(function(data){
console.log(data);
$("#lga").html(data);
});
});
<?php 
    if($pro_info['status'] == 'completed' and $_SESSION['user_type'] == 'prospective'){?> 
    $(".form-control").prop('disabled', true);
        <?php }

?>
});
</script>
<script type="text/javascript">
$( ".pupload" ).click(function() {
$( "#passport" ).click();
});
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

