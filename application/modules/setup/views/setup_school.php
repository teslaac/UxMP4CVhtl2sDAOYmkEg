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
                    <h1 class="m-n font-thin h3 text-black">Set Up School</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->
              <div class="wrapper-md">

                  <div class="col-md-12">
                      <?php
                      if(!empty($_SESSION['failed'])){?>
                          <div class="alert alert-danger fade in widget-inner">
                              <button type="button" class="close" data-dismiss="alert">x</button>
                              <?php echo $_SESSION['failed']; ?>
                          </div>
                      <?php }elseif(!empty($_SESSION['success'])){?>
                          <div class="alert alert-success fade in widget-inner">
                              <button type="button" class="close" data-dismiss="alert">x</button>
                              <?php echo $_SESSION['success']; ?>
                          </div>
                      <?php }
                      echo validation_errors();
                      ?>
                  <section class="panel panel-default clearfix"> 
                    <div class="wizard wizard-vertical nav nav-pills clearfix" role="tabpanel" id="wizard-2">
                      <ul class="steps nav-tabs" id="rowTab">
                        <li data-target="#step4" role="presentation" class="active"><a href="#school" aria-control="school" role="tab" data-toggle="pill"><span class="badge badge-info">1</span>School's Info</a></li>
                        <li data-target="#step5" role="presentation"><a href="#session" aria-control="session" role="tab" data-toggle="pill"><span class="badge">2</span>Setup Session</a></li>
                        <li data-target="#step6" role="presentation"><a href="#term" aria-control="term" role="tab" data-toggle="tab"><span class="badge">3</span>Setup Term</a></li>
                        <li data-target="#step6" role="presentation"><a href="#term_reg" aria-control="term_reg" role="tab" data-toggle="tab"><span class="badge">4</span>Active Term</a></li>
                        <li data-target="#step6" role="presentation"><a href="#schdivtab" aria-control="schdivtab" role="tab" data-toggle="tab"><span class="badge">5</span>School Division</a></li>
                        <li data-target="#step6" role="presentation"><a href="#class_level" aria-control="class_level" role="tab" data-toggle="tab"><span class="badge">6</span>Class Level</a></li>
                        <li data-target="#step6" role="presentation"><a href="#class_desc" aria-control="class_desc" role="tab" data-toggle="tab"><span class="badge">7</span>Class Description</a></li>
                        <li data-target="#step6" role="presentation"><a href="#class_details" aria-control="class_details" role="tab" data-toggle="tab"><span class="badge">8</span>Class Details</a></li>
                        <li data-target="#step6" role="presentation"><a href="#department" aria-control="department" role="tab" data-toggle="tab"><span class="badge">9</span>Subject Departments</a></li>
                        <li data-target="#step6" role="presentation"><a href="#subject" aria-control="subject" role="tab" data-toggle="tab"><span class="badge">10</span>Setup Subjects</a></li>
<!--                         <li data-target="#step6" role="presentation"><a href="#guide" aria-control="guide" role="tab" data-toggle="tab"><span class="badge">11</span>Setup Guide</a></li>
 -->                      </ul>
                    </div>

                    <div class="step-content tab-content">
                      <div class="step-pane tab-pane fade-in active" role="tabpannel" id="school">
        
                  <div class="progress progress-xs">                  
                      <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="10%" style="width: 10%"></div>
                   </div>
                      <div class="panel panel-default">
                        <div class="panel-heading ">SCHOOL'S INFO</div>
                        <div class="panel-body">

                            <form class="bs-example form-horizontal ng-pristine ng-valid" method="POST" action="<?php echo base_url(); ?>setup/save_school/edit">

                            <div class="col-sm-6 clearfix">
                              <div class="m-b">
                                  <?php echo form_error('sch_full_name'); ?>
                                <label>School Full Name: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_full_name',$sdetails['sch_full_name']); ?>" name="sch_full_name"  required="" type="text">
                              </div>
                              
                              <div class="m-b">
                                  <?php echo form_error('sch_short_name'); ?>
                                <label>Acronymous: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_short_name',$sdetails['sch_short_name']); ?>" disabled  required="" type="text">
                              </div>
                              
                              <div class="m-b">
                                  <?php echo form_error('sch_motto'); ?>
                                <label>Motto: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_motto',$sdetails['sch_motto']); ?>" name="sch_motto" required="" type="text">
                              </div>          

                              <div class="m-b">
                                  <?php echo form_error('gad'); ?>
                                <label>Gov Approved Date: </label>
                                  <input class="form-control date" name="gad" value="<?php echo set_value('gad',$sdetails['gad']); ?>" type="text">
                              </div> 
                             
                              <div class="m-b">
                                  <?php echo form_error('sch_phone1'); ?>
                                <label>Phone: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_phone1',$sdetails['sch_phone1']); ?>" name="sch_phone1"  required="" type="number">
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('sch_email_add'); ?>
                                <label>Email: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_email_add',$sdetails['sch_email_add']); ?>" name="sch_email_add" required="" type="email">
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('sch_web'); ?>
                                <label>Website: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_web',$sdetails['sch_web']); ?>" name="sch_web" id="website" required="" type="text">
                              </div>
                                                             
                              <div class="m-b">
                                  <?php echo form_error('sch_addr'); ?>
                                <label>Address: </label>
                                <input class="form-control" value="<?php echo set_value('sch_addr',$sdetails['sch_addr']); ?>" name="sch_addr" id="sch_addr" required="" type="text">
                                 
                              </div> 


                               <div class="m-b">
                                  <?php echo form_error('state'); ?>
                                <label>State:</label>
                                  <select class="form-control state" name="sstate" required="">
                                      <option <?php echo set_select('sstate',''); ?> value=" ">Select</option>
                                      <?php
                                      foreach ($states as $state) {
                                          ?>
                                          <option <?php echo set_select('sstate', "$state[state]",((($state['state']) == ($sdetails['sstate']))?true:false)); ?> value="<?php echo $state['state']; ?>"><?php echo $state['state']; ?> State
                                          </option>
                                          <?php
                                      }
                                      ?>
                                  </select>
                              </div>

                              <div class="m-b">              
                                <label>L.G.A:</label>    
                                  <select id="lga" class="form-control lga" name="lga" required="">
                                    <option value="<?php echo $sdetails['lga']; ?>"><?php echo $sdetails['lga']; ?></option>
                                  </select>
                              </div>
                              

                             

                                                         

                              
                        </div>

                        <div class="col-sm-6">                                        
                              

                              <div class="m-b">
                                  <?php echo form_error('year_est'); ?>
                                <label>Year Est: </label>
                                  <input class="form-control date" value="<?php echo set_value('year_est',$sdetails['year_est']); ?>" name="year_est" id="year_est" required="" type="text">
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('exam_taken'); ?>
                                <label>Exams Taken: </label>
                                  <input class="form-control" value="<?php echo set_value('exam_taken',$sdetails['exam_taken']); ?>" name="exam_taken" id="exam_taken" required="" type="text">
                              </div>

<!--                              <div class="m-b">-->
<!--                                <label>School Divions: </label>-->
<!--                                  <input class="form-control" value="" name="schdiv" id="schdiv" required="" type="text">-->
<!--                              </div>-->

                              <div class="m-b">
                                  <?php echo form_error('name'); ?>
                                <label>Proprietor's name: </label>
                                  <input class="form-control" value="<?php echo set_value('name',$sdetails['lname']); ?>" name="name" id="name" required="" type="text">
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('phone'); ?>
                                <label>Proprietor's phone: </label>
                                  <input class="form-control" value="<?php echo set_value('phone',$sdetails['phone']); ?>" name="phone" id="phone" required="" type="text">
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('about_sch'); ?>
                                <label>About School : </label>
                                  <textarea class="form-control" rows="4" name="about_sch"><?php echo set_value('about_sch',$sdetails['about_sch']); ?></textarea>
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('pop_range'); ?>
                                <label>Population Range : </label>
                                  <select id="pop_range" class="form-control" name="pop_range" required="">
                                      <option value="">Select</option>
                                      <option <?php echo set_select('pop_range','100-500',((('100-500') == ($sdetails['pop_range']))?true:false)); ?> value="100-500">100 - 500</option>
                                  </select>                              
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('sch_religion'); ?>
                                <label>School Religion: </label>
                                  <select id="sch_religion" class="form-control" name="sch_religion" required="">
                                    <option <?php echo set_select('sch_religion','Secular',((('Secular') == ($sdetails['sch_religion']))?true:false)); ?> value="Secular">Secular</option>
                                    <option <?php echo set_select('sch_religion','Christian',((('Christian') == ($sdetails['sch_religion']))?true:false)); ?> value="Christian">Christian</option>
                                    <option <?php echo set_select('sch_religion','Muslim',((('Muslim') == ($sdetails['sch_religion']))?true:false)); ?> value="Muslim">Muslim</option>
                                    <option <?php echo set_select('sch_religion','Multi-Faith',((('Multi-Faith') == ($sdetails['sch_religion']))?true:false)); ?> value="Multi-Faith">Multi-Faith</option>
                                  </select>
                              </div>

                              <div class="m-b">
                                  <?php echo form_error('sch_hostel'); ?>
                                <label>School Hostel: </label>
                                  <select id="sch_hostel" class="form-control" name="sch_hostel" required="">
                                    <option value=""></option>
                                    <option <?php echo set_select('sch_hostel','Day',((('Day') == ($sdetails['sch_hostel']))?true:false)); ?> value="Day">Day</option>
                                    <option <?php echo set_select('sch_hostel','Boarding',((('Boarding') == ($sdetails['sch_hostel']))?true:false)); ?> value="Boarding">Boarding</option>
                                    <option <?php echo set_select('sch_hostel','Day&Boarding',((('Day&Boarding') == ($sdetails['sch_hostel']))?true:false)); ?> value="Day&Boarding">Day & Boarding</option>
                                  </select>
                              </div> 

                              <div class="m-b">
                                  <?php echo form_error('sch_facilities'); ?>
                                <label>Facilities: </label>
                                  <input class="form-control" value="<?php echo set_value('sch_facilities',$sdetails['sch_facilities']); ?>" name="sch_facilities" id="sch_facilities" required="" type="text">
                              </div>  
                             
                             <div class="m-b">
                                  <?php echo form_error('country'); ?>
                                <label>Country: </label>
                                  <input class="form-control" name="country" value="<?php echo set_value('country',$sdetails['country']); ?>" type="text">
                              </div>  
                              
                          </div>
                        
                          <div class="form-actions text-right">
                              <button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
                          </div>
                                </form>
                        </div>
                        <nav>
                      </div>
                      <!--  <ul class="pager">
                            <li class="disabled"><a href="#">Previous</a></li>
                            <li ><a href="#session" aria-control="session" role="tab" data-toggle="tab">Next</a></li>
                          </ul>
                        </nav> -->
                    </div>
                      <!--- second tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="session">
                          <?php 
                            include ('setup_session.php');
                           ?>
                      </div>


                      <!--- third tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="term">
                          <?php 
                            include ('setup_term.php');
                           ?>
                      </div>

                      <!--- fourth tab   -->

                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="term_reg">
                          <?php 
                            include ('setup_term_reg.php');
                           ?>
                      </div>
                      <!--- fifth tab   -->
                       <div class="step-pane tab-pane fade-in" role="tabpannel" id="schdivtab">
                          <?php 
                            include ('setup_schdiv.php');
                           ?>
                      </div>
                      <!--- sixth tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="class_level">
                          <?php 
                            include ('setup_class_level.php');
                           ?>
                        </div>
                      <!--- seventh tab   -->
                       <div class="step-pane tab-pane fade-in" role="tabpannel" id="class_desc">
                          <?php 
                            include ('setup_class_desc.php');
                           ?>
                        </div>
                      <!--- eight tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="class_details">
                          <?php 
                            include ('setup_class_details.php');
                           ?>
                        </div>
                      <!--- ninth tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="department">
                          <?php 
                            include ('setup_department.php');
                           ?>
                        </div>
                      <!--- tenth tab   -->
                      <div class="step-pane tab-pane fade-in" role="tabpannel" id="subject">
                          <?php 
                            include ('setup_subject.php');
                           ?>
                        </div>
                      <div class="form-actions text-right">
                      <a href="<?php echo base_url(); ?>setup/complete_setup"><button class="btn btn-success btn-addon"><i class="fa  icon-check"></i>Complete Setup</button></a>
                          
                      </div>
                    </div>
                  </section>
                    </div>
                  
                  </div>

                  <!-- <div class="wrapper-md">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="form-actions text-right">
                          <button class="btn btn-info btn-addon"><i class="fa fa-arrow-circle-up"></i>Sign Up</button>
                            </div>
                            </div>
                        </div>
                      </div>
                  </div> -->
                    
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

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      //window.location.hash = id;
      localStorage.setItem('selectedTab', id)
    });

    var hash = window.location.hash;

    var selectedTab = localStorage.getItem('selectedTab');
    if(hash){
      selectedTab = hash;
      $('#rowTab a[href="' + selectedTab + '"]').tab('show');
    }else{
      $('#rowTab a[href="#' + selectedTab + '"]').tab('show');
    }

    
    
  });
  </script> 



