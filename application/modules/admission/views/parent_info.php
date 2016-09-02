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
                            <h1 class="m-n font-thin h3 text-black">Parent Information</h1>
                            <small class="text-muted">Welcome to Acadah Smart School application</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- / main header -->

                <!-- / inc_admission_sidebar -->
                <?php include 'inc_admission_sidebar.php'; ?>

                <div class="col w-content wrapper-md">
                    <?php //$data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                    <?php //echo form_open('admission/completeapp', $data); ?>
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" id="step4">

                                <?php echo validation_errors(); ?>

                                 <?php if(isset($_SESSION['success'])) { ?>
                                <div class="alert alert-info fade in widget-inner">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <?php echo $this->session->flashdata("success"); ?>
                                     
                                </div>
                                <?php } ?>
                                <div class="panel panel-default">
                                <div class="panel-heading ">PARENT/GAURDIAN INFO</div>
                                <div class="panel-body">
                            <?php  $parent_id = $parent_data['parent_id'];
                            $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                                    <?php echo form_open("admission/save_parent/$parent_id", $data); ?>

                                            <div class="col-sm-6 clearfix">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Title: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['title']; ?>" name="ptitle"  placeholder="Mr, Mrs, Dr, Prof"  type="text">
                                                        <!-- <label class="control-label">Hint: Mr, Mrs, Dr, Prof</label> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Surname: <span>*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['lname']; ?>" name="plname"  type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">First Name: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['mname']; ?>" name="pfname"  type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Initial: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['initial']; ?>" name="initial" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Phone Number: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['phone']; ?>" name="pphone"  type="number">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Email Address: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['email']; ?>" name="pemail"  type="email">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Gender:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="pgender" >
                                                            <option value="<?php echo $parent_data['gender']; ?>">Select</option>
                                                            <option value="Abia">Male</option>
                                                            <option value="Adamawa">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Full Address: </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" value="<?php echo $parent_data['address']; ?>"rows="2" name="faddress"><?php echo $parent_data['address']; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Relationship: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['relationship']; ?>" name="prelationship"  type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Occupation: </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" value="<?php echo $parent_data['occupation']; ?>" name="occupation" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Occupation Address: </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" value="<?php echo set_value('ocaddress'); ?>" rows="2" name="ocaddress"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-actions text-right">
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
