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
                    <h1 class="m-n font-thin h3 text-black">Sign Up School</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->
              <div class="wrapper-md">

                  <div class="col-md-12">
<!--                    <div class="alert alert-success fade in widget-inner text-center">-->
<!--                        <button type="button" class="close" data-dismiss="alert">x</button>-->
<!--                        Congratulations! you have successfully activated your account     -->
<!--                    </div>-->
                      <?php

                      if(!empty($_SESSION['failed'])){?>
                          <div class="alert alert-danger fade in widget-inner">
                              <button type="button" class="close" data-dismiss="alert">x</button>
                              <?php echo $_SESSION['failed']; ?>

                          </div>
                      <?php }elseif(!empty($_SESSION['success'])){?>
                          <div class="alert alert-success fade in widget-inner">
                              <button type="button" class="close" data-dismiss="alert">x</button>
                              <?php echo $_SESSION['success'];$_SESSION['activated_status'] = 1;?>
                              <script>
                  setTimeout(function () { window.location.replace("<?php echo base_url() ?>/setup");   }, 1500);
                              </script>
                          </div>
                      <?php }
                      ?>
                  
                      
                      <div class="panel panel-default" >
                        <div class="panel-heading ">ACTIVATE SCHOOL</div>
                        <div class="panel-body text-center">
                            <?php echo form_error('activation_code'); ?>
                          <form class="form-inline ng-pristine ng-valid" role="form" method="POST" action="<?php echo base_url(); ?>setup/validate_license">
                            <div class="form-group">
                              <label class="sr-only" for="Activation">Activation Code</label>
                              <input class="form-control" id="Activation" name="activation_code" placeholder="Activation Code" style="width: 350px;">

                            </div>
                            <span class="ng-scope" ng-controller="ModalDemoCtrl">
                               <button class="btn btn-info btn-addon"><i class="fa fa-check"></i>Activate</button>
                            </span>
                            <span id="helpBlock" class="help-block">Please Enter the activation code from your mail to continue.</span>
                          </form>

                        </div>
                      </div>

                    </div>
                  
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


