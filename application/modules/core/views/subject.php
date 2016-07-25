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
          <h1 class="m-n font-thin h3">Assign Multiple Student</h1>
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
          
             <form action="<?php echo base_url(); ?>core/assign_courses" method="Post">
            <div class="row row-sm text-center">
              <div class="table-responsive">
                <table class="table panel panel-info">
                  <thead class="panel-heading">
                    <tr>
                      <th>Class</th>
                      <th>Term/Session</th>
                      <th>Student</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="panel-body">
                    <tr>
                     
                        <td>
                          <div class="form-group">
                            <select name="cdid" id="input" class="form-control cdid" required="required">
                              <option <?php echo set_select('cdid','select',TRUE); ?> value="select">Select</option>
                  <?php
                  foreach ($classes as $class) {
                    ?>
                    <option <?php echo set_select('cdid', "class[id]"); ?> value="<?php echo $class['id'];?>"><?php echo $class['class_details']; ?>
                    </option>
                    <?php
                  }
                  ?>
                            </select>
                          </div>
                        </td>
                        <td>
                          <select name="ts_id" id="input ts_id" class="form-control" required="required">
                            
                             <option <?php echo set_select('ts_id','',TRUE); ?> value="">Select</option>
                  <?php
                  foreach ($ts_details as $ts_detail) {
                    ?>
                    <option <?php echo set_select('ts_id', "ts_detail[ts_id]"); ?> value="<?php echo $ts_detail['ts_id'];?>"><?php echo $ts_detail['term_name']."-".$ts_detail['session_name']; ?>
                    </option>
                    <?php
                  }
                  ?>
                            </select>
                        </td>
                        <td>
                          <div class="form-group">
                            <select name="student" id="student" class="form-control student" required="required">
                              <option value="all">All</option>
                            </select>
                          </div>
                        </td>
                        <span id="msg"></span>
                       <!--  <td>
                          <button type="submit" class="btn btn-sm btn-info">Go</button>
                        </td> -->
                      
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            
        <section class="panel panel-info clearfix ">
          <div class="panel-heading">
             <h2 class="panel-title"><i class="fa fa-plus"></i> Student/Subject Registration</h2>
          </div>
          <div class="panel-body">
            <div class="col-sm-6">
              <div class="panel panel-info">
                 <div class="panel-heading">
                   <h2 class="panel-title"><i class="fa fa-book"></i>  Select Subjects for Students</h2>
                 </div>
                 <div>
                   <div class="table-responsive">
                     <table class="table table-striped b-t b-light">
                       <thead>
                         <tr>
                           <th>No</th>
                           <th>Subject</th>
                           <th> Select All <input type="checkbox" id="selectallsubjects"></th>
                         </tr>
                       </thead>
                       <tbody>
                       <?php
                        foreach ($subject_details as $app_subject) {
                          if(empty($i)){
                            $i=1;
                          }
                                          ?>
                         <tr>
                           <td><?php echo $i; ?></td>
                           <td><?php echo $app_subject['subject_full_name']; ?></td>
                           <td><input type="checkbox" class='subjects' name="subject_id[]" value="<?php echo $app_subject['subject_id']; ?>"></td>
                         </tr>
                         <?php 
                         $i++;
                         }?>
                       </tbody>
                     </table>
                   </div>
                 </div>
              </div>
             </div>
             <div class="col-sm-6">
               <div class="panel panel-info">
                 <div class="panel-heading">
                   <h2 class="panel-title"><i class="fa fa-book"></i> Register Students For Subjects</h2>
                 </div>
                 <div>
                   <div class="table-responsive">
                     <table class="table table-striped b-t b-light">
                       <thead>
                         <tr>
                           <th>No</th>
                           <th>Surname</th>
                           <th>Othernames</th>
                           <th>Register All <input type="checkbox" id="selectallsutudents"></th>
                         </tr>
                       </thead>
                       <tbody id="students">
                         
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="panel-footer clearfix">
             <div class="pull-right">
               <button type="submit" class="btn btn-info ">Save Records</button>
             </div>
           </div>
                    
        </section>
      </form> 
    </div>
  </div>
 </div>




<script type="text/javascript">
  $(document).ready(function(){
    $('#selectallsubjects').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.subjects').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.subjects').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });

    $('#selectallsutudents').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.students').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.students').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });

    $("select.cdid").change(function(){
      var selectedClass = $(".cdid option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>core/subject/api",
        data: { cdid : selectedClass} 
      }).done(function(data){
        $("select.student").change();
        if(data != ''){
          $('#msg').html('<div id="alertFadeOut" style="color: green">Data Loaded!</div>'); // Diplay message with a fadeout
        }else{
          $('#msg').html('<div id="alertFadeOut" style="color: red">No Data Found!</div>'); // Diplay message with a fadeout
        }
        $('#alertFadeOut').fadeOut(3000, function () {
                          $('#alertFadeOut').text('');
                      });
        console.log(data);
        $("#student").html(data);
      });
    });  



    $("select.student").change(function(){
        var selectedClass = $(".cdid option:selected").val();
        var selectedStudent = $(".student option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>core/subject/api",
        data: { student : selectedStudent, cdid1 : selectedClass} 
      }).done(function(data){
        console.log(data);
        $("#students").html(data);
        $('#selectallsutudents').click();
      });
    });      

    $('#selectallsubjects').click();
    
    
  });
  </script> 