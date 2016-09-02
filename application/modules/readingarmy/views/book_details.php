
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
                        <div class="col-xs-12 text-center ">
                            <h1 class="m-n font-thin h3 text-black">Books Details</h1>
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
                                
                                <div class="col-md-12">    
                                    <div class="panel panel-default">
                                      <div class="panel-heading text-bold h3">A FOREST WITH SNAKES <span class="font-thin"> by Adesola Adeola</span></div>
                                      <div class="panel-body">
                                        <div class="col-md-5 col-sm-6 ">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12.jpg"); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <span class="h2">A FOREST WITH SNAKES</span>
                                            <p><img src="<?php echo base_url("img/rarmy/rating-img.png"); ?>" alt="Rating Star"></p>
                                            <div class="span6">
                                                <strong class="title">Quick Overview</strong>
                                                <p>Vestibulum a velit at erat adipiscing volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget neque velit, suscipit volutpat ligula.</p>
                                                <p>Quisque diam arcu, dignissim nec molestie sed, pellentesque a augue. Nunc sed felis libero, vitae imperdiet risus in feugiat lectus vitae elit euismod rhoncus. Suspendisse potenti. </p>
                                                <p>Quisque diam arcu, dignissim nec molestie sed, pellentesque a augue. Nunc sed felis libero, vitae imperdiet risus in feugiat lectus vitae elit euismod rhoncus. Suspendisse potenti. </p>
                                                <strong class="title">Author: Adesola Adeola</strong>
                                                <h5 class="title">Publisher: GenHub Publication</h5>
                                                <p>Category: School Life </p>
                                                <p>Keywords: Schools, Student, Justice, Games. </p>
                                                <p>
                                                   <a href="#" class="btn btn btn-default btn-xs mblock">No of Views: 12567</a>
                                                   <a href="#" class="btn btn btn-default btn-xs mblock">No of Readers: 8567</a>
                                                   <a href="#" class="btn btn btn-default btn-xs mblock">Test Attempt: 6567</a>
                                                </p>
                                                <p></p>
                                                <p></p>
                                            </div>
                                            <a href="book_reading" class="btn btn-primary mblock"><i class="fa icon-book-open"></i> Read Now!</a> 
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
                                
                                 <h2 class="text-info m-t-xl"><span class="font-thin"> Other </span> Books by Adesola Adeola </h2>
                                    <div class=" text-center">
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
