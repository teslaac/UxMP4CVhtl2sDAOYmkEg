    <!-- content -->
<div class="step-content">
    <div class="step-pane active" id="step16">
      
      <div class="progress progress-xs m-t-n-sm">                  
          <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="90%" style="width: 90%"></div>
       </div>

    <a href="#department-modal" data-toggle="modal" class="btn btn-primary m-b">
    <i class="fa fa-plus"></i> Add Subject Department</a>

    <section class="panel panel-default">
      <header class="panel-heading">
        Department Details
      </header>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th class="th-sortable" data-toggle="class">No.</th>
              <th>Department Name</th>
              <?php if($_SESSION['setup_status'] == 'Completed'){?>
              <th>H.O.D</th><?php }?>
              <th>Edit</th>
              <th>Disable</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i = 0;
          if(!empty($sd_details)){
          foreach($sd_details as $sd_detail){
          if(empty($i)){
              $i = 1;
          }
          ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $sd_detail['dept_name']; ?></td>
              <input type="hidden" class="sdid" value="<?php echo $sd_detail['id']; ?>" >
              <input type="hidden" class="did" value="<?php echo $sd_detail['dept_id']; ?>">
              <input type="hidden" class="stid" value="<?php echo $sd_detail['staff_id']; ?>" >
              <?php if($_SESSION['setup_status'] == 'Completed'){?><td><?php echo $sd_detail['fname'].' '.$sd_detail['lname']; ?></td><?php }?>
              <td><a href="#department-modal" data-toggle="modal" class="btn btn-xs btn-primary editd"><i class="fa fa-pencil"></i> Edit</a></td>
              <?php if ($sd_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_subject_dept/<?php echo $sd_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_subject_dept/<?php echo $sd_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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

    <div class="modal fade" id="department-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ng-scope">
            <h3 class="modal-title department"> <i class="fa fa-plus"></i> Add Subject Department</h3>
        </div>              
            <div class="modal-body">
                <form id="save_department" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/department">
                         <div class="col-sm-6 m-b dept_id">
                                <label>Subject Department</label>
                             <select id="dept_id" class="form-control" name="dept_id" required="">
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
                         <?php if($_SESSION['setup_status'] == 'Completed'){?>
                          <div class="col-sm-6 m-b staff_id">
                                <label>H.O.D</label>
                                  <select id="" class="form-control" name="staff_id" >
                                  <option value="">Select</option>
                                  <?php
                            foreach ($staffs as $staff) {?>
                             <option <?php echo set_select('staff_id', "$staff[staff_id]"); ?> value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['title'].' '.$staff['initial'].' '.$staff['lname']; ?> 
                           <?php  }?>
                                </select>  
                          </div>   
                          <?php }?>         

                        
                
                     
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
            $(".editd").click(function(){
                $(".department").html('<i class="fa fa-pencil"></i> Edit Subject Department'); 
                var row = $(this).closest('tr');
              <?php 
                if($_SESSION['setup_status'] == 'Completed'){?>
                var stid = row.find(".stid").val();
                $("div.staff_id select").val(stid);
                  <?php }?>
                var sdid = row.find(".sdid").val();
                var did = row.find(".did").val();
                $('#save_department').attr('action', "<?php echo base_url(); ?>setup/save_setup/department/"+sdid);
                 $("div.dept_id select").val(did);
                 
                
            })
        </script>
