<!-- content -->
<!-- <script type="text/javascript">
function populate(s1, s2) {
var s1 = document.getElementById(s1);
var s1 = document.getElementById(s2);
s2.innerHTML = "";
if(s1.value == "Lagos States") {
var optionArray = ["bariga|Bariga", "victoria island|Victorial Island"];
}
for (var option in optionArray) {
var pair = optionArray[option].split("|");
var newOption = document.createElement("option");
newOption.value = pair[0];
newOption.innerHTML = pair[1];
s2.options.add(newOption);
}
}
</script> -->
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
             <?php  print_r($state); ?>
             <?php print_r($reg_number) ?>
             <?php  print_r($admission_class); ?>
                <!-- main header -->
                <div class="bg-light lter b-b wrapper-md">
                    <div class="row">
                       
                        <?php  print_r($pro_info); ?>
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
                    <?php echo form_open_multipart('admission/complete', $data); ?>
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" id="step4">
                                <?php //echo validation_errors(); ?>
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
                                      <?php echo form_error('surname'); ?>
                                       <label class="col-sm-4 control-label">Surname: <span>*</span></label>
                                            <div class="col-sm-8">
                                              <input class="form-control" disable="disabled" value="<?php echo set_value('surname', $pro_info['lname']); ?>" name="surname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <?php echo form_error('firstname'); ?>
                                         <label class="col-sm-4 control-label">First Name: </label>
                                            <div class="col-sm-8">
                                              <input class="form-control" value="<?php echo set_value('firstname', $pro_info['fname']); ?>" name="firstname" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('othername'); ?>
                                            <label class="col-sm-4 control-label">Other Name: </label>
                                            <div class="col-sm-8">
                                              <input class="form-control" value="<?php echo set_value('othername', $pro_info['mname']); ?>" name="othername" type="text">
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
                                                <input class="form-control" value="<?php echo set_value('email', $pro_info['email']); ?>" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('level'); ?>
                                            <label class="col-sm-4 control-label">Admission Level: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" value="<?php echo set_value('level', $admission_class);?>" name="level" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('dorb'); ?>
                                            <label class="col-sm-4 control-label">Day/Boarding: </label>
                                            <div class="col-sm-8">
                                                <select class="form-control " name="dorb" >
                                                    <option value="">Select</option>
                                                    <option <?php echo set_select('Day', 'dorb'); ?> value="Day">Day</option>
                                                    <option <?php echo set_select('Boarding', 'dorb'); ?> value="Boarding">Boarding</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('religion'); ?>
                                            <label class="col-sm-4 control-label">Religion: </label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="religion">
                                                    <option value="">Select</option>
                                                    <option <?php echo set_select('islam', 'religion'); ?> value="Islam">Islam</option>
                                                    <option <?php echo set_select('Christianity', 'religion'); ?> value="Christianity">Christianity</option>
                                                    <option <?php echo set_select('Traditional', 'religion'); ?> value="Traditional">Traditional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('gender'); ?>
                                            <label class="col-sm-4 control-label">Gender:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control " name="gender">
                                                    <option value="Male" <?php if($pro_info['gender'] == 'Male'){echo 'selected';} ?>>Male</option>
                                                    <option value="Female" <?php if($pro_info['gender'] == 'Female'){echo 'selected';} ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <?php echo  form_error('address'); ?>
                                            <label class="col-sm-4 control-label">Residential Address: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="2" value="" name="address"><?php echo set_value('address', $pro_info['address']); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('country'); ?>
                                            <label class="col-sm-4 control-label">Residential Country: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="country" value="<?php echo set_value('country',$pro_info['country']); ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php form_error('rstate'); ?>
                                            <label class="col-sm-4 control-label">Residential State:</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="rstate" value="<?php echo set_value('rstate', $state); ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php echo form_error('dob'); ?>
                                            <label class="col-sm-4 control-label">Date of Birth: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control date" value="<?php echo set_value('dob', $pro_info['dob']); ?>" name="dob" type="text">
                                                <label class="control-label">Hint: e.g DD/MM/YYYY </label>
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
                                            <label class="col-sm-4 control-label">State of Origin:</label>
                                            <div class="col-sm-8">
                                                <select class="form-control state" name="state" required="">
                                                    <option <?php echo set_select('state','',TRUE); ?> value=" ">Select</option>
                                                    <?php
                                                    foreach ($list_of_state as $state) {
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
                                            <?php echo form_error('lga'); ?>
                                            <label class="col-sm-4 control-label">Local Government Area:</label>
                                            <div class="col-sm-8">
                                                <select id="lga" class="form-control lga" name="lga">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_error('hometown'); ?>
                                            <label class="col-sm-4 control-label">Hometown: </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="hometown" value="<?php echo set_value('hometown', $pro_info['hometown']); ?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading ">PARENT/GAURDIAN INFO</div>
                                <div class="panel-body">
                                            <div class="col-sm-6 clearfix">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Full Name: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_fullname', $pro_info['p_fullname']); ?>" name="p_fullname"  placeholder=""  type="text">
                                                        <!-- <label class="control-label">Hint: Mr, Mrs, Dr, Prof</label> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Initial: <span>*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_initial', $pro_info['p_initial']); ?>" name="p_initial" placeholder="Mr, Mrs, Dr, Prof" type="text">
                                                    </div>
                                                </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 control-label">Phone Number: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_phone', $pro_info['p_phone']); ?>" name="p_phone"  type="number">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Email Address: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_email', $pro_info['p_email']); ?>" name="p_email"  type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Gender:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="p_gender" >
                                                            <option value="Male" <?php if($pro_info['p_gender'] == 'Male'){echo 'selected';} ?>>Male</option>
                                                        <option value="Female" <?php if($pro_info['p_gender'] == 'Female'){echo 'selected';} ?>>Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label class="col-sm-4 control-label">Full Address: </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" value="" rows="2" name="p_full_address"><?php echo set_value('p_full_address', $pro_info['p_full_address']); ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Relationship: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_relationship', $pro_info['p_relationship']); ?>" name="p_relationship"  type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Occupation: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo set_value('p_occupation', $pro_info['p_occupation']); ?>" name="p_occupation" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Occupation Address: </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" value="" rows="2" name="p_oc_address"><?php echo set_value('p_oc_address', $pro_info['p_oc_address']); ?></textarea>
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
                                                    <input class="form-control" value="<?php echo set_value('height', $pro_info['height']); ?>" name="height" aria-describedby="basic-addon1">
                                                    <span class="input-group-addon" id="basic-addon1">cm</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <?php echo form_error('weight'); ?>
                                                <label class="col-sm-4 control-label">Weight: </label>
                                                <div class="col-sm-7 input-group">
                                                    <input class="form-control" value="<?php echo set_value('weight', $pro_info['weight']); ?>" name="weight" type="text" aria-describedby="basic-addon2">
                                                    <span class="input-group-addon" id="basic-addon2">kg</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <?php echo form_error('genotype'); ?>
                                                <label class="col-sm-4 control-label">Genotype: </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="genotype">
                                                        <option value="Select">Select</option>
                                                        <option <?php echo set_select('genotype', $pro_info['genotype']); ?>  value="<?php echo $pro_info['genotype']; ?>">AA</option>
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
                                                        <option value="Select">Select</option>
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
                                    <a href="<?php echo base_url("admission/addparent"); ?>"><button type="submit" name="submit" class="btn btn-primary btn-addon"><i class="fa fa-save"></i>Add Parent Details</button></a>
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