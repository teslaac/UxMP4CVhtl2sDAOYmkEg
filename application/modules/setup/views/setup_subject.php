    <!-- content -->
  <div class="step-content">
    <div class="step-pane active" id="step11">
        <div class="progress progress-xs m-t-n-sm">                  
            <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="95%" style="width: 95%"></div>
        </div>

    <a href="#subject-modal" data-toggle="modal" class="btn btn-primary m-b">
    <i class="fa fa-plus"></i> Add Subject</a>
    <section class="panel panel-default">
      <header class="panel-heading">
        Subject Table
      </header>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th class="th-sortable" data-toggle="class">No.</th>
              <th>Subj Short Name</th>
              <th>Subj Full Name</th>
              <th>Subj Unit</th>
              <th>Department</th>
              <th>School Div</th>
              <th>Edit</th>
              <th>Disable</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i = 0;
          if(!empty($subject_details)){
          foreach($subject_details as $subject_detail){
          if(empty($i)){
              $i = 1;
          }
          ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $subject_detail['subject_name']; ?></td>
              <td><?php echo $subject_detail['subject_full_name']; ?></td>
              <td class="unit"><?php echo $subject_detail['subject_unit']; ?></td>
              <td><?php echo $subject_detail['dept_name']; ?></td>
              <td><?php echo $subject_detail['school_div_name']; ?></td>
              <input type="hidden" class="sid" value="<?php echo $subject_detail['id']; ?>" >
              <input type="hidden" class="asid" value="<?php echo $subject_detail['subject_id']; ?>" >
              <input type="hidden" class="did" value="<?php echo $subject_detail['department_id']; ?>" >
              <input type="hidden" class="divid" value="<?php echo $subject_detail['school_div_id']; ?>" >
              <input type="hidden" class="stid" value="<?php echo $subject_detail['staff_id']; ?>" >
              <td><a href="#subject-modal" data-toggle="modal" class="btn btn-xs btn-primary edits"><i class="fa fa-pencil"></i> Edit</a></td>
             <?php if ($subject_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_subject/<?php echo $subject_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_subject/<?php echo $subject_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
                                  <?php }?>
            </tr>
              <?php
              $i++;}}else{
              echo "<center><b>No Data</b></center>";
          }
          ?>
          </tbody>
        </table>
      </div>
      
    </section>

    <div class="modal fade" id="subject-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ng-scope">
            <h3 class="modal-title subject"> <i class="fa fa-plus"></i> Add Subject</h3>
        </div>              
            <div class="modal-body">
                <form id="save_subject" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/subject">

                          <div class="col-sm-6 m-b subject_id">
                                <label>Subject Name</label>
                                  <select id="response" class="form-control" name="subject_id" required="">
                                      <option value="">Select</option>
                                      <?php
                                      foreach ($app_subjects as $app_subject) {
                                          ?>
                                          <option <?php echo set_select('subject_id', "$app_subject[subject_id]"); ?> value="<?php echo $app_subject['subject_id']; ?>"><?php echo $app_subject['subject_full_name']; ?>
                                          </option>
                                          <?php
                                      }
                                      ?>
                                  </select>
                          </div>

                          <div class="col-sm-6 m-b">
                                <label>Subject Unit</label>
                                <input type="text" id="" name="subject_unit" placeholder="" class="form-control" required="">
                          </div>
                          <div class="col-sm-6 m-b dept_id">
                                <label>Department</label>
                                  <select id="response" class="form-control" name="dept_id" required="">
                                    <option value="">Select</option>
                                      <?php
                                      foreach ($app_subjects_dept as $app_subject_dept) {
                                          ?>
                                          <option <?php echo set_select('dept_id', "$app_subject_dept[dept_id]"); ?> value="<?php echo $app_subject_dept['dept_id']; ?>"><?php echo $app_subject_dept['dept_name']; ?>
                                          </option>
                                          <?php
                                      }
                                      ?>
                                  </select>                                                 
                              </div>
                            <div class="col-sm-6 m-b school_div_id">
                                <label>School Div</label>
                                  <select id="response" class="form-control" name="school_div_id" required="">
                                    <option value="">Select</option>
                                      <?php
                                      foreach ($app_divs_school as $app_div) {
                                          ?>
                                          <option <?php echo set_select('school_div_id', "$app_div[school_div_id]"); ?> value="<?php echo $app_div['school_div_id']; ?>"><?php echo $app_div['school_div_name']; ?>
                                          </option>
                                          <?php
                                      }
                                      ?>
                                  </select>                                                 
                            </div>
                            <?php if($_SESSION['setup_status'] == 'Completed'){?>
                        <div class="col-sm-6 m-b staff_id">
                                <label>Lead Subject Teacher</label>
                                  <select id="" class="form-control" name="staff_id" >
                                  <option value="">Select</option>
                                  <?php
                            foreach ($staffs as $staff) {?>
                             <option <?php echo set_select('staff_id', "$staff[staff_id]"); ?> value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['title'].' '.$staff['initial'].' '.$staff['lname']; ?> 
                           <?php  }?>
                                </select>                                               
                            </div>
                            <?php  }?>
                        
                
                     
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-info"><i class="fa fa-save "></i> Save </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
              </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
     </div>
<div class="clearfix"></div>

</div>
    <!-- /content -->

    <style type="text/css">
    .app-footer.wrapper.footer2 {
        margin-left: 0px;
    }
    </style>

<script>
            $(".edits").click(function(){
                $(".subject").html('<i class="fa fa-pencil"></i> Edit Subject'); 
                var row = $(this).closest('tr');
                var a = row.find(".unit").text();
                var asid = row.find(".asid").val();
                var did = row.find(".did").val();
                var sid = row.find(".sid").val();
                var divid = row.find(".divid").val();
                <?php 
                if($_SESSION['setup_status'] == 'Completed'){?>
                var stid = row.find(".stid").val();
                $("div.staff_id select").val(stid);
                  <?php }?>
                $('#save_subject').attr('action', "<?php echo base_url(); ?>setup/save_setup/subject/"+sid);
                 $("div.subject_id select").val(asid);
                 $("div.dept_id select").val(did);
                 $("div.school_div_id select").val(divid);
                 $("input[name='subject_unit']").val(a);
                
            })
        </script>
