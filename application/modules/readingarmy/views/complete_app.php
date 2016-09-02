
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
                            <h1 class="m-n font-thin h3 text-black">Books to Read</h1>
                            <small class="text-muted">Read to Lead</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- / main header -->

                <!-- / inc_admission_sidebar -->
                <?php include 'inc_admission_sidebar.php'; ?>

                <div class="col w-content wrapper-md">
                    <?php $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                    <?php echo form_open('admission/completeapp', $data); ?>
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
                                
                                <div class="row">
                                    <div class=" text-center">

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>COOKING WITH LOVE</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>

                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book2-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>THE SON</h3>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book11-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary  btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default  btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book3-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>COOKING WITH LOVE</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>

                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book2-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>THE SON</h3>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book11-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary  btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default  btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book3-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>COOKING WITH LOVE</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>

                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book2-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>THE SON</h3>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book11-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary  btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default  btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book3-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>Feature Label</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                    <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="panel-body">

                
                                <div class="clearfix"></div>
                                <div class="panel panel-default">
                                    

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
