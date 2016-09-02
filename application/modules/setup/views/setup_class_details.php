    <!-- content -->
<div class="step-content">
  <div class="step-pane active" id="step16">

        <div class="progress progress-xs m-t-n-sm">                  
            <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
         </div>

    <a href="#class_detail-modal" data-toggle="modal" class="btn btn-primary m-b">
    <i class="fa fa-plus"></i> Add Class Details</a>

      <section class="panel panel-default">
        <header class="panel-heading">
          Setup Class Details
        </header>
        <div class="table-responsive">
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th class="th-sortable" data-toggle="class">No.</th>
                <th>Class Detail</th>
                <th>Class Descr</th>
                <th>Class Level</th>
                <?php if($_SESSION['setup_status'] == 'Completed'){?>
                <th>Class Rep</th><?php }?>
                <th>Edit</th>
                <th>Disable</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            if(!empty($classd_details)){
            foreach($classd_details as $classd_detail){
            if(empty($i)){
                $i = 1;
            }
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td class="class_details_name"><?php echo $classd_detail['class_details']; ?></td>
                <td><?php echo $classd_detail['class_desc_name']; ?></td>
                <td><?php echo $classd_detail['class_name']; ?></td>
                <input type="hidden" class="lid" value="<?php echo $classd_detail['level_id']; ?>" >
                <input type="hidden" class="did" value="<?php echo $classd_detail['id']; ?>" >
                <input type="hidden" class="deid" value="<?php echo $classd_detail['desc_id']; ?>" >
                <input type="hidden" class="stdid" value="<?php echo $classd_detail['class_rep_id']; ?>" >
                <input type="hidden" class="ctid" value="<?php echo $classd_detail['class_teacher_id']; ?>" >
                <?php if($_SESSION['setup_status'] == 'Completed'){?>  <td><?php echo $classd_detail['fname'].' '.$classd_detail['lname']; ?></td> <?php }?>
                <td><a href="#class_detail-modal" data-toggle="modal" class="btn btn-xs btn-primary editcd"><i class="fa fa-pencil"></i> Edit</a></td>
                <?php if ($classd_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_details/<?php echo $classd_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_details/<?php echo $classd_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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

      <div class="modal fade" id="class_detail-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header ng-scope">
              <h3 class="modal-title class_details"> <i class="fa fa-plus"></i> Add Class Details</h3>
              </div>              
              <div class="modal-body">
                  <form id="save_class_details" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/classdetails">
                 <div class="col-sm-12 m-b">
                      <label>Class Details</label>
                       <input  id="" name="class_details" placeholder="JSS ONE BLUE" class="form-control" required="">
                    </div>
                <div class="col-sm-6 m-b class_level">
                      <label>Class Level</label>
                        <select id="class_level" class="form-control" name="class_level" required="">
                          <option value="">Select</option>
                            <?php
                            foreach ($app_levels_school as $app_level) {
                                ?>
                                <option <?php echo set_select('class_level', "$app_level[level_id]"); ?> value="<?php echo $app_level['level_id']; ?>"><?php echo $app_level['class_name']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>                                                 
                </div>
                  <div class="col-sm-6 m-b class_desc_id">
                      <label>Class Descr</label>
                        <select id="" class="form-control" name="class_desc_id" required="">
                          <option value="">Select</option>
                            <?php
                            foreach ($cd as $cd) {
                                ?>
                                <option <?php echo set_select('class_desc_id', "$cd[id]"); ?> value="<?php echo $cd['id']; ?>"><?php echo $cd['class_desc_name']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>                                                 
                  </div>
                  <?php if($_SESSION['setup_status'] == 'Completed'){?>
                <div class="col-sm-6 m-b class_teacher_id">
                      <label>Class Teacher</label>
                       <select id="" class="form-control" name="class_teacher_id" >
                          <option value="">Select</option>
                            <?php
                            foreach ($staffs as $staff) {?>
                             <option <?php echo set_select('class_teacher_id', "$staff[staff_id]"); ?> value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['title'].' '.$staff['initial'].' '.$staff['lname']; ?> 
                           <?php  }?>
                        </select> 
                </div>
                <div class="col-sm-6 m-b class_rep_id">
                      <label>Class Rep</label>
                       <select id="" class="form-control" name="class_rep_id" >
                          <option value="">Select</option>
                          <?php
                            foreach ($students as $student) {?>
                             <option <?php echo set_select('class_rep_id', "$student[student_id]"); ?> value="<?php echo $student['student_id']; ?>"><?php echo $student['lname'].' '.$student['fname']; ?> 
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
            $(".editcd").click(function(){
                $(".class_details").html('<i class="fa fa-pencil"></i> Edit Class Details'); 
                var row = $(this).closest('tr');
                var a = row.find(".class_details_name").text();
                var deid = row.find(".deid").val();
                var lid = row.find(".lid").val();
                var did = row.find(".did").val();
                <?php 
                if($_SESSION['setup_status'] == 'Completed'){?>
                var stdid = row.find(".stdid").val();
                var ctid = row.find(".ctid").val();
                $("div.class_rep_id select").val(stdid);
                $("div.class_teacher_id select").val(ctid);
                  <?php }?>
                $('#save_class_details').attr('action', "<?php echo base_url(); ?>setup/save_setup/classdetails/"+did);
                 $("div.class_desc_id select").val(deid);
                 $("div.class_level select").val(lid);
                 $("input[name='class_details']").val(a);
                
            })
        </script>