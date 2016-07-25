    <!-- content -->
                    <div class="step-content">
                      <div class="step-pane active" id="step10">
                          <div class="progress progress-xs m-t-n-sm">                  
                              <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="60%" style="width: 60%"></div>
                           </div>

                      <a href="#class_level-modal" data-toggle="modal" class="btn btn-primary m-b">
                      <i class="fa fa-plus"></i> Add Class Level</a>

                      <section class="panel panel-default">
                        <header class="panel-heading">
                          Setup Class Level
                        </header>
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Level Name</th>
                                <th>School Div</th>
                                <th>Edit</th>
                                <th>Disable</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            if(!empty($cl_details)){
                            foreach($cl_details as $cl_detail){
                            if(empty($i)){
                                $i = 1;
                            }
                            ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td class="class_name"><?php echo $cl_detail['class_name']; ?></td>
                                <td><?php echo $cl_detail['school_div_name']; ?></td>
                                <input type="hidden" class="cid" value="<?php echo $cl_detail['id']; ?>" >
                                <input type="hidden" class="alid" value="<?php echo $cl_detail['level_id']; ?>" >
                                <input type="hidden" class="sdid" value="<?php echo $cl_detail['school_div_id']; ?>" >

                                <td><a href="#class_level-modal" data-toggle="modal" class="btn btn-xs btn-primary editcl"><i class="fa fa-pencil"></i> Edit</a></td>
                                 <?php if ($cl_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_level/<?php echo $cl_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_level/<?php echo $cl_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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

                      <div class="modal fade" id="class_level-modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header ng-scope">
                              <h3 class="modal-title class_level"> <i class="fa fa-plus"></i> Add Class Level</h3>
                          </div>              
                              <div class="modal-body">
                                  <form id="save_class_level" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/classlevel">

                                      <div class="form-group">
                                          <label class="col-sm-4 control-label">App Class Levels: </label>
                                          <div class="col-sm-8 level_id">
                                            <select id="response" class="form-control" name="level_id" required="">
                                              <option value="">Select</option>
                                                <?php
                                                foreach ($app_levels as $app_level) {
                                                    ?>
                                                    <option <?php echo set_select('level_id', "$app_level[level_id]"); ?> value="<?php echo $app_level['level_id']; ?>"><?php echo $app_level['class_name']; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                            </select> 
                                          </div>
                                        </div>                                                                   
                                       <div class="form-group">
                                          <label class="col-sm-4 control-label">School Class Level: </label>
                                          <div class="col-sm-8">
                                            <input class="form-control" value="" name="class_name" required="">
                                          </div>
                                        </div>
                                        <div class="form-group school_div_id">
                                          <label class="col-sm-4 control-label">School Div: </label>
                                          <div class="col-sm-8">
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
                                        </div>          

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
            $(".editcl").click(function(){
                $(".class_level").html('<i class="fa fa-pencil"></i> Edit Class Level'); 
                var row = $(this).closest('tr');
                var a = row.find(".class_name").text();
                var sdid = row.find(".sdid").val();
                var alid = row.find(".alid").val();
                var cid = row.find(".cid").val();
                $('#save_class_level').attr('action', "<?php echo base_url(); ?>setup/save_setup/classlevel/"+cid);
                 $("div.school_div_id select").val(sdid);
                 $("div.level_id select").val(alid);
                 $("input[name='class_name']").val(a);
                
            })
        </script>