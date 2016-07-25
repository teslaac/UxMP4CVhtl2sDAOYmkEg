
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
                                    <div class="col-md-12"><h2 class="text-info font-thin m-b"> ~ Featured Books ~</h2></div>
                                        
                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12-140.jpg"); ?>" alt="" class="m-t-sm">
                                                <div class="caption">
                                                    <h4>A FOREST WITH SNAKES</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>
                                                    <a href="readingarmy/book_reading" class="btn btn-primary  btn-xs">Read Now!</a> 
                                                    <a href="readingarmy/book_details" class="btn btn-default  btn-xs">More Info</a>
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

                                    <div class=" text-center">
                                    <div class="col-md-12"><h2 class="text-info m-t-lg m-b-lg font-thin">Recent Books</h2></div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/book12-140x220.jpg"); ?>" alt="">
                                                <div class="caption">
                                                    <h4>COOKING WITH LOVE</h4>
                                                    <p><img src="<?php echo base_url("img/rarmy/rating-star.png"); ?>" alt="Rating Star"></p>

                                                        <a href="book1" class="btn btn-primary btn-xs">Read Now!</a> 
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

                                    <div class="col-md-12"><h2 class="text-info m-t-lg m-b-lg font-thin">Most Read Books</h2></div>

                                        <div class="col-md-3 col-sm-6 hero-feature">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url("img/rarmy/image08.jpg"); ?>" alt="">
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
                                                <img src="<?php echo base_url("img/rarmy/image10.jpg"); ?>" alt="">
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
                               <div class="clearfix"></div>
                              </div>

                         </div>

                    </section>
                    <footer class="panel-footer">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                          <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Most Popular</option>
                            <option value="1">Most Recent</option>
                            <option value="2">Author</option>
                          </select>
                          <button class="btn btn-sm btn-default">Apply</button>                  
                        </div>
                        <div class="col-sm-4 text-center">
                          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 Books</small>
                        </div>
                        <div class="col-sm-4 text-right text-center-xs">                
                          <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </footer>
                </div>

                <div class="clearfix"></div>
            </div>


        </div>
    </div>
</div>
<!-- /content -->

<?php include 'rarmy.php'; ?>
