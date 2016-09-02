    <?php //$user_info = $this->user_model->get_user($_SESSION['user_id'],'acadah_users_prospective','student_id'); ?>
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
                    <h1 class="m-n font-thin h3 text-black">Admission Status</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->
                <!-- / inc_admission_sidebar -->
                <?php include 'inc_admission_sidebar.php'; ?>

                <div class="col w-content wrapper-md">
                <section class="panel panel-default clearfix "> 
                    <div class="step-content">
                      <div class="step-pane active" id="step4">

                      <!--- new page content -->

                      <div class="row">
      		                <div class="col-lg-9 col-md-9 col-sm-12">
      		                    <div class="widget">
                								<div class="panel panel-default">
                									<div class="panel-heading"><h6 class="panel-title"><b> Basic Admission Information</b></h6></div>
                									<div class="table-responsive">
                										<table class="table table-striped table-bordered">
                											<tbody>
                												<tr>
                													<td width="25%"><b>Name:</b></td>
                													<td><b><?php echo($userdata['lname']).' '.($userdata['fname']); ?> </b></td>
                												</tr>
                												<tr>
                													<td>Admission No:</td>
                													<td> <?php echo $pro_info['admission_no']; ?> </td>
                												</tr>
                                          <tr>
                                          <td>Admission Session:</td>
                                          <td> <?php echo $pro_info['session_name']; ?> </td>
                                        </tr>
                												<tr>
                													<td>Admission Date:</td>
                													<td><?php echo $pro_info['date']; ?></td>
                												</tr>

                												<tr>
                													<td>Class Applied:</td>
                													<td><?php echo $pro_info['class_name'];?></td>
                												</tr>
                												<tr>
                													<td><b>Class Admitted:</b></td>
                													<td><b> <?php echo $pro_info['class_details'];?> </b></td>
                												</tr>										
                												<tr>
                													<td><b>Admission Status:<b></b></b></td>
                                          <?php 
                                            if($pro_info['admission_status'] == 'admitted') {

                                               echo "<td><strong class='text-success'>Admitted</strong></td>";
                                            }else {
                                               echo "<td><strong class='text-danger'>Pending Admission</strong></td>";
                                            }

                                           ?>
                                        </tr>										

                											</tbody>
                										</table>
                									</div>
                								</div>
      		                    </div>
      		                </div>

      		                <div class="widget">
              							<div class="col-lg-3 col-md-3 col-sm-6">
              								<div class="widget ">
              									<div class="thumbnail text-center">
              										<div class="" style="padding: 30px; "> 
                                  <?php
                                    if(!empty($pro_info['profile_image'])){
                                    $profile_image = "assets/$_SESSION[sch_id]/".$pro_info['profile_image'];
                                    }else{
                                    $profile_image = 'img/a0.jpg';
                                    }
                                    ?>
                                   <img id="preview" src="<?php echo base_url($profile_image);?>" class="img-circle" alt="..." width='128' height='128'>
                                  </div>
              									</div>
              								</div>
                             
                              <?php 
                                            if($pro_info['admission_status'] == 'admitted') {?>
              								<a href="<?php echo base_url("admission/print_admission_letter"); ?>" <button class="btn btn-dark btn-block btn-addon"><i class="fa fa-print"></i>Admission Letter</button></a>
                              <?php }?>
              							</div>
      		                </div>
      		            </div>
            			<!-- page content end -->
                    </div>
                  </section>
                </div>
            <div class="clearfix"></div>
          </div>
                  
        </div>
      </div>
    </div>
    <!-- /content -->