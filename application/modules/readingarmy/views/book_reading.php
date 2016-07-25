
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
                <!-- / main header -->

                <!-- / inc_admission_sidebar -->
                <?php //include 'inc_admission_sidebar.php'; ?>

                <div class="col w-content wrapper-md">
                    <?php $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                    <?php echo form_open('admission/completeapp', $data); ?>
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" id="step4">
                                
                                <div class="row">
                                
                                <div class="col-md-12">    
                                    <div class="panel">
                                      <div class="panel-heading text-bold h3">A FOREST WITH SNAKES <span class="font-thin"> by Adesola Adeola ~ School Life ~ <img src="<?php echo base_url("img/rarmy/rating-img.png"); ?>"> </span></div>
                                      <div class="">
                                            <div id="pdf">
                                              <object width="100%" height="600" type="application/pdf" data="<?php echo base_url("assets/pdf/A_FOREST_WITH_SNAKES.pdf"); ?>?#zoom=100&scrollbar=0&toolbar=0&navpanes=0" id="pdf_content">
                                                <p>Insert your error message here, if the PDF cannot be displayed.</p>
                                              </object>
                                            </div>
                                        <div>
                                              <a href="book1" class="btn btn-primary mblock"><i class="fa fa-download"></i> Download!</a> 
                                            <a href="#" class="btn btn-warning mblock"> <i class="fa icon-star"></i> Add to favourite</a>
                                            <a href="take_test" class="btn btn-info mblock"><i class="fa icon-pencil"></i> Take a Test</a>
                                        
                                        </div>
                                    </div>
                                </div>

                                <h2 class="text-info m-t-xxl"><span class="font-thin"> Related</span>Books</h2>
                                    <div class=" text-center m-b-xxl">
                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/image05.jpg"); ?>" alt="" class="m-t-sm">
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
                                                <img src="<?php echo base_url("img/rarmy/image06.jpg"); ?>" alt="">
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
                                                <img src="<?php echo base_url("img/rarmy/image07.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>COOKING WITH LOVE</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>

                                                        <a href="/book1" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/image09.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>THE SON</h3>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                        <a href="#" class="btn btn-primary btn-xs">Read Now!</a> 
                                                        <a href="#" class="btn btn-default btn-xs">More Info</a>
                                                </div>
                                            </div>
                                        </div>
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

<?php include 'rarmy.php'; ?>
