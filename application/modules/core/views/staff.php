<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

<?php //echo lang('sales_giftcard_number')." <small> -  ".lang('sales_giftcard_number'); ?> 
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
        <div class="bg-light lter b-b wrapper-md">
          <span class="pull-right form-inline" >
            <button class="btn btn-info btn-addon"><i class="fa fa-gear"></i>Subject Settings </button>
          </span>
          <h1 class="m-n font-thin h3">Assign Multiple Subject</h1>
          <small>Lorem ipsum dolor sit amet.. </small>
        </div>
        <div class="wrapper-md">

          <!-- <div class="row row-sm text-center">
              <div class="col-xs-offset-3 col-xs-3">
                <div class="panel padder-v item">
                  <div class="h1 text-info font-thin h1">1201</div>
                  <span class="text-muted text-xs">Total Students</span>
                </div>
              </div>
              <div class="col-xs-3">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block">104</span>
                  <span class="text-muted text-xs">Days</span>
                </a>
              </div>
              
          </div> -->

          <?php
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
      echo validation_errors();
      ?>

          <form action="<?php echo base_url(); ?>core/assign_courses" method="Post">
          <div class="row row-sm">
            <div class="table-responsive">
              <table class="table panel panel-info">
                <thead class="panel-heading">
                  <tr>
                    <th>Staff ID</th>
                    <th>Subject</th>
                    <th>Term/Session</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="panel-body">
                  <tr>
                
                      <td>
                        <div class="form-group">
                          <select id="" class="form-control" required="" name="staff_id" >
                                  <option value="">Select</option>
                                  <?php
                            foreach ($staffs as $staff) {?>
                             <option <?php echo set_select('staff_id', "$staff[staff_id]"); ?> value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['title'].' '.$staff['initial'].' '.$staff['lname']; ?> 
                           <?php  }?>
                                </select>                                               
                            </div>
                            
                        
                      </td>
                      <td>
                        <div class="form-group">
                          <select id="" class="form-control" name="subject_id" required="">
                          <option value="">Select</option>
                          <?php
                          foreach ($subject_details as $subject_detail) {
                              ?>
                              <option <?php echo set_select('subject_id', "$subject_detail[subject_id]"); ?> value="<?php echo $subject_detail['subject_id']; ?>"><?php echo $subject_detail['subject_full_name']; ?>
                              </option>
                              <?php
                          }
                          ?>
                      </select>
                        </div>
                      </td>
                      <td>
                        <select name="session_id" id="session_id" class="form-control" required="required">
                            
                             <option <?php echo set_select('session_id','',TRUE); ?> value="">Select</option>
                  <?php
                  foreach ($ts_details as $ts_detail) {
                    ?>
                    <option <?php echo set_select('session_id', "ts_detail[session_id]"); ?> value="<?php echo $ts_detail['session_id'];?>"><?php echo $ts_detail['session_name']; ?>
                    </option>
                    <?php
                  }
                  ?>
                            </select>
                      </td>
                      <!-- <td>
                        <button type="submit" class="btn btn-sm btn-info">Go</button>
                      </td> -->
                    
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

            
          <section class="panel panel-info clearfix ">
            <div class="panel-heading">
              <h2 class="panel-title">Staff/Subject Registration</h2>
            </div>
            <div class="panel-body">
             <!--  <form action="" method="POST" role="form"> -->
             <?php
             foreach($app_levels_school as $app_level){
              $classd_details = $this->Corem->classd_details($app_level['level_id']);
              ?>
                <div class="col-sm-4">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h2 class="panel-title"><?php echo $app_level['class_name']; ?><input type="checkbox" class="selectallclass"></h2>
                    </div>
                    <div class="">
                      <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                         <!--  <thead>
                            <tr>
                              <th><input type="checkbox"></th>
                              <th>Class Details</th>
                            </tr>
                          </thead> -->
                          <tbody>
                          <?php foreach($classd_details as $class_detail){ ?>
                            <tr>
                              <td> <input class='classes' name='classd[]' value='<?php echo $class_detail['id']; ?>' type="checkbox"></td>
                              <td><?php echo $class_detail['class_details']; ?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }?>
                
              </form>  
            </div>
            <div class="panel-footer clearfix">
              <div class="pull-right">
                <button type="submit" class="btn btn-info">Save Records</button>
              </div>
            </div>         
          </section>
          
    </div>
  </div>
 </div>




<script type="text/javascript">
  $(document).ready(function(){
    $('.selectallclass').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.classes').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.classes').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });

    
    $('.selectallclass').click();
    
    
  });
  </script> 