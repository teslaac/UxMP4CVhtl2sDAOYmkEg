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
                      <?php
                      if(empty($_SESSION['failed']) and empty($_SESSION['success'])){
                          ?>
                          <div class="alert alert-info fade in widget-inner">
                              <button type="button" class="close" data-dismiss="alert">x</button>
                              Please Enter correct Information
                          </div>
                          <?php
                      }
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
                      <?php }
                      ?>
                  
                      <div class="panel panel-default">
                        <div class="panel-heading ">SCHOOL'S INFO</div>
                        <div class="panel-body">
                          
                          <form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>setup/save_school">

                           <div class="col-sm-6 clearfix">
                              <div class="form-group">
                                  <?php echo form_error('sch_full_name'); ?>
                                <label class="col-sm-4 control-label">School Full Name: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="<?php echo set_value('sch_full_name'); ?>" name="sch_full_name"  required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                  <?php echo form_error('sch_short_name'); ?>
                                <label class="col-sm-4 control-label">Acronym: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="<?php echo set_value('sch_short_name'); ?>" name="sch_short_name"  required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                  <?php echo form_error('sch_motto'); ?>
                                <label class="col-sm-4 control-label">Motto: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="<?php echo set_value('sch_motto'); ?>" name="sch_motto" required="" type="text">
                                </div>
                              </div>          

                              <div class="form-group">
                                  <?php echo form_error('sch_phone1'); ?>
                                <label class="col-sm-4 control-label">Phone Number: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="<?php echo set_value('sch_phone1'); ?>" name="sch_phone1"  required="" type="number">
                                </div>
                              </div>

                              <div class="form-group">
                                  <?php echo form_error('sch_email_add'); ?>
                                <label class="col-sm-4 control-label">Email Address: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="<?php echo set_value('sch_email_add'); ?>" name="sch_email_add" required="" type="email">
                                </div>
                              </div>          
                              
                              <div class="form-group">
                                  <?php echo form_error('sch_addr'); ?>
                                <label class="col-sm-4 control-label">Address: </label>
                                <div class="col-sm-8">
                                  <textarea class="form-control" rows="2" name="sch_addr"><?php echo set_value('sch_addr'); ?></textarea>
                                </div>
                              </div> 
                        </div>

                        <div class="col-sm-6">                                        

                              <div class="form-group">
                                  <?php echo form_error('sstate'); ?>
                                <label class="col-sm-4 control-label">State:</label>
                                <div class="col-sm-8">
                                    <select class="form-control state" name="sstate" required="">
                                        <option value=" ">Select</option>
                                        <?php
                                        foreach ($states as $state) {
                                            ?>
                                            <option <?php echo set_select('sstate', "$state[state]"); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                  </div>
                              </div>

                            <div class="form-group">
                                <?php echo form_error('lga'); ?>
                                <label class="col-sm-4 control-label">L.G.A:</label>
                                <div class="col-sm-8">
                                    <select id="lga" class="form-control lga" name="lga" required="">
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>

                              <div class="form-group">
                                  <?php echo form_error('country'); ?>
                                <label class="col-sm-4 control-label">Country: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" name="country" value="<?php echo set_value('country','Nigeria'); ?>" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                  <?php echo form_error('year_est'); ?>
                                <label class="col-sm-4 control-label">Year Est: </label>
                                <div class="col-sm-8">
                                  <input class="form-control date" value="<?php echo set_value('year_est'); ?>" name="year_est" id="year_est" required="" type="text">
                                </div>
                              </div>

<!--                              <div class="form-group">-->
<!--                                <label class="col-sm-4 control-label">Admin Username: </label>-->
<!--                                <div class="col-sm-8">-->
<!--                                  <input class="form-control" name="username" value="" type="text">-->
<!--                                </div>-->
<!--                              </div>-->
<!---->
                            <div class="form-group">
                                <?php echo form_error('aemail'); ?>
                                <label class="col-sm-4 control-label">Admin Email: </label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="aemail" value="<?php echo set_value('aemail'); ?>" type="email">
                                </div>
                            </div>
                              <div class="form-group">
                                  <?php echo form_error('password'); ?>
                                <label class="col-sm-4 control-label">Admin Password: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" name="password" value="" type="password">
                                </div>
                              </div>


                          </div>


                        </div>
                      </div>
                    </div>
                  
                  </div>

                  <div class="wrapper-md">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="form-actions text-right">
                          <button class="btn btn-info btn-addon"><i class="fa fa-arrow-circle-up"></i>Sign Up</button>
                            </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </form>
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
   


