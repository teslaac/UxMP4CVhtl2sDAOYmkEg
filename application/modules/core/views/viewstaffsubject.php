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
          <h1 class="m-n font-thin h3">View Staff Subject</h1>
          <small>Lorem ipsum dolor sit amet.. </small>
        </div>
        <div class="wrapper-md">
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
          
          
          <div class="panel panel-default">
            <div class="panel-body">
                  <div class="col-sm-4">
                    <label>Staff ID</label>
                     <select id="staff_id" class="form-control staff_id" required="" name="staff_id" >
                                  <option value="">Select</option>
                                  <?php
                            foreach ($staffs as $staff) {?>
                             <option <?php echo set_select('staff_id', "$staff[staff_id]"); ?> value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['title'].' '.$staff['initial'].' '.$staff['lname']; ?> 
                           <?php  }?>
                                </select> 
                  </div>
                  
                  <div class="col-sm-4">
                    <label>Term/Session</label>
                    <select name="session_id" id="session_id" class="form-control session_id" required="required">
                            
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
                  </div>
                  <div class="col-sm-3 text-right" style="padding-top:18px;">
                    <button id="go" type="button" class="btn btn-primary" >GO</button><span id="msg"></span>
                  </div>
            </div>
          </div>
     
            
        <section class="panel panel-info clearfix ">
          <div class="panel-heading clearfix">
             <div class="pull-left">
               <h2 class="panel-title"><i class="fa fa-plus"></i> Staff Subject Table</h2>
             </div>
             <div class="pull-right">
               <button type="button" class="btn btn-black btn-xs"><i class="fa fa-print"></i>  staff Subject List</button>
             </div>
          </div>
          <form action="<?php echo base_url(); ?>core/unregister_subject/staff" method="Post">
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped b-t b-light panel panel-info">
                <thead class="panel-heading">
                  <tr>
                    <th>S/N</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody id="asubjects">
                </tbody>
              </table>
            </div>
           </div>
           <div class="panel-footer clearfix">
            <div class="col-sm-4 pull-right text-right">
              <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div> 
              <form action="<?php echo base_url(); ?>core/assign_courses" method="Post">
              <div class="col-sm-8 clearfix">
                <div class="pull-left col-sm-6" style="padding-left:0 !important; padding-right:0 !important">
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
                  <select id="" class="form-control" name="classd[]" required="">
                          <option value="">Select</option>
                            <?php
                            foreach ($cd as $cd) {
                                ?>
                                <option <?php echo set_select('classd[]', "$cd[id]"); ?> value="<?php echo $cd['id']; ?>"><?php echo $cd['class_details']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select> 
                        <input type="hidden" name="ts_id">
                        <input type="hidden" name="staff_id">

                </div>
                <button type="submit" class="btn btn-info ">Add subject</button> 
              </div>  
               </form>                                          
            </div>
                    
        </section>
    </div>
  </div>
 </div>




<script type="text/javascript">
  $(document).ready(function(){
    $("#go").click(function(){
      var SelectedId = $(".staff_id option:selected").val();
      var selectedTs = $(".session_id option:selected").val();
      $("input[name='session_id']").val(selectedTs);
      $("input[name='staff_id']").val(SelectedId);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>core/get_registered_subject/staff",
        data: { staff_id : SelectedId, session_id : selectedTs} 
      }).done(function(data){
        if(data != ''){
          $('#msg').html('<div id="alertFadeOut" style="color: green">Data Loaded!</div>'); // Diplay message with a fadeout
        }else{
          $('#msg').html('<div id="alertFadeOut" style="color: red">No Data Found!</div>'); // Diplay message with a fadeout
        }
        $('#alertFadeOut').fadeOut(3000, function () {
                          $('#alertFadeOut').text('');
                      });
        console.log(data);
        $("#asubjects").html(data);

      });

      // $.ajax({
      //   type: "POST",
      //   url: "<?php echo base_url();?>core/get_unregistered_student",
      //   data: { cdid : selectedClass, subject_id : selectedSubject, ts_id : selectedTs} 
      // }).done(function(data){
        
      //   console.log(data);
      //   $("#students").html(data);
        
      // });


    });
     
    
  });
  </script> 
