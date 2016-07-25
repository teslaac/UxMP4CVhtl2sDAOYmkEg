
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
                            <h1 class="m-n font-thin h3 text-black ">HALL OF FAME</h1>
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
                                    <div class="panel">
                                      <div class="panel-heading text-info h3">HALL OF FAME </div>
                                      <div class="m-t">

                                      <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="widget">
                                                <div class="panel panel-default">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="25%"><b>Name:</b></td>
                                                                    <td><b>Hassan John </b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>UserID:</td>
                                                                    <td> RA-12522 </td>
                                                                </tr>
                                                               <tr>
                                                                    <td>Book Name</td>
                                                                    <td> BURT GELLER by Adesola Adeola </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Correct Answers:</td>
                                                                    <td> 30</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Wrong Answers:</b></td>
                                                                    <td><b> 12 </b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Rank:</b></td>
                                                                    <td><b> 12th </b></td>
                                                                </tr                                       
                                                                <tr>
                                                                    <td><b>Point:<b></b></b></td>
                                                                    <td><strong class="text-success">+150</strong></td>                                     
                                                                </tr>                                       
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                </div>
                            </div>

                            <!-- <div class="widget">
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <div class="widget ">
                                                <div class="thumbnail text-center">
                                                    <div class="" style="padding: 30px; "> 
                                                          <img src="http://localhost/+edm/acadah_app2/img/sureville/a0888.jpg">                                                     
                                                    </div>
                                                </div>
                                            </div>
                             

                                            <button class="btn btn-dark btn-block btn-addon"><i class="fa fa-print"></i>Admission Letter</button>

                                        </div>
                            </div> -->
                        </div>
                                        <div>
                                            <a href="<?php echo base_url('readingarmy');?>" class="btn btn-primary mblock"><i class="fa fa-home"></i> Homepage</a> 
                                            <a href="#" class="btn btn-info mblock"><i class="fa fa-eye"></i> View Hall of Fame</a>
                                        
                                        </div>
                                    </div>
                                </div>

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
