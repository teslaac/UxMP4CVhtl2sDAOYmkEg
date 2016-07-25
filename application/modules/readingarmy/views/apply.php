<!-- content -->
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
                        <div class="col-xs-12 text-center">
                            <h1 class="m-n font-thin h3 text-black">Create an Account Below</h1>
                            <small class="text-muted">Welcome to Acadah Smart School application</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- / main header -->

                <div class="col w-md wrapper bg-light dk hf">
                    <ul class="nav nav-pills nav-stacked nav-sm aside">
                            <!-- <li  class="active"><a href="#"><i class="fa fa-fw fa-edit"></i> Apply Now</a></li>
                            <li  class=""><a href="#"><i class="fa fa-fw  fa-info-circle"></i> Application Instructions</a></li> -->
                        <li data-target="#step4" role="presentation" class="active"><a href="#apply" aria-control="apply" role="tab" data-toggle="pill"><span class="badge badge-info">1</span> Apply</a></li>
                        <li data-target="#step5" role="presentation"><a href="#app_instruct" aria-control="app_instruct" role="tab" data-toggle="pill"><span class="badge">2</span> Application Instruction's</a></li>
<!--                     <li  class=""><a href="#"><i class="fa fa-fw fa-money"></i> Payment Info</a></li>
                        <li  class=""><a href="#"><i class="fa fa-fw fa-file"></i> Complete Application</a></li>
                        <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Terms And Conditions</a></li>
                        <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Form</a></li>
                        <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Admission Letter</a></li>
                        <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Reciept</a></li> -->

                    </ul>
                </div>
                <div class="col w-content wrapper-md">
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" role="tabpannel" id="apply">

                                <?php echo validation_errors(); ?>

                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-info fade in widget-inner text-center">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        Account Created Successfully. <br/>
                                        Please login with the following info. 
                                        Username: <b><?php echo $this->session->flashdata('username'); ?></b>
                                        Pasword: <b><?php echo $this->session->flashdata('pass'); ?></b>

                                        <a href="<?php echo base_url('login'); ?>" class="text-info" ><b> Click here to Login </b></a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="alert alert-info fade in widget-inner">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        Please Enter correct Information
                                    </div>
                                <?php }?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">Enter your details: (Required fields are marked with *)</div>
                                    <div class="panel-body">

                                        <?php $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                                        <?php echo form_open('admission/apply/create', $data); ?>

                                        <div class="col-sm-6 clearfix">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Surname: <span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('surname'); ?>" name="surname" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">First Name: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('firstname'); ?>" name="firstname" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Other Name: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('othername'); ?>" name="othername"  type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Phone Number: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('phonenumber'); ?>" name="phonenumber" type="number">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Email Address: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('email'); ?>" name="email" type="email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Application Level : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control state" name="level" >
                                                        <option value="<?php echo set_value('level'); ?>">Select</option>
                                                        <option value="1">JSS1</option>
                                                        <option value="2">JSS2</option>
                                                    </select>                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Gender:</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control state" name="gender" >
                                                        <option value="<?php echo set_value('gender'); ?>">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Address: </label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" value="<?php echo set_value('address'); ?>" rows="2" name="address"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Country: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('country'); ?>" name="country" type="text">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">State:</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control state" name="state">
                                                        <option value="<?php echo set_value('state'); ?>">Select</option>
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
                                                <label class="col-sm-4 control-label">Date of Birth: </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php echo set_value('dob'); ?>" name="dob" id="dob" type="text">
                                                    <label class="control-label">Hint: e.g DD/MM/YYYY </label>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    <button class="btn btn-default btn-addon"><i class="fa  icon-refresh"></i>Cancel</button>

                                    <button type="submit" name="submit" class="btn btn-info btn-addon"><i class="fa fa-save"></i>Create Account</button>

                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="step-pane" role="tabpannel" id="app_instruct">

                                <?php
                                include ('app_instruction.php');
                                ?>
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
