    <!-- content -->
                    <div class="step-content">
                      <div class="step-pane active" id="step10">

                        <div class="progress progress-xs m-t-n-sm">                  
                            <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="70%" style="width: 70%"></div>
                         </div>

                      <a href="#class_desc-modal" data-toggle="modal" class="btn btn-primary m-b">
                      <i class="fa fa-plus"></i> Add Class Descr</a>

                      <section class="panel panel-default">
                        <header class="panel-heading">
                          Setup Class Descr
                        </header>
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Class Descr</th>
                                <th>School Div</th>
                                <th>Edit</th>
                                <th>Disable</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            if(!empty($cd_details)){
                            foreach($cd_details as $cd_detail){
                            if(empty($i)){
                                $i = 1;
                            }
                            ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td class="class_desc_name"><?php echo $cd_detail['class_desc_name']; ?></td>
                                <td><?php echo $cd_detail['school_div_name']; ?></td>
                                <input type="hidden" class="cdid" value="<?php echo $cd_detail['id']; ?>">
                                <input type="hidden" class="sdid" value="<?php echo $cd_detail['sch_div_id']; ?>">
                                <td><a href="#class_desc-modal" data-toggle="modal" class="btn btn-xs btn-primary editscd"><i class="fa fa-pencil"></i> Edit</a></td>
                                <?php if ($cd_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_desc/<?php echo $cd_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_class_desc/<?php echo $cd_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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

                      <div class="modal fade" id="class_desc-modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header ng-scope">
                              <h3 class="modal-title sclass_desc"> <i class="fa fa-plus"></i> Add Class Description</h3>
                          </div>              
                          <div class="modal-body">
                              <form id="save_classdesc" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/classdesc">
                                <div class="col-sm-6">
                                  <label>Class Descr</label>
                                   <input type="text" id="" name="class_desc_name" placeholder="" class="form-control" required="">
                                </div>
                                <div class="col-sm-6 sch_div_id">
                                  <label>School Div</label>
                                    <select id="response" class="form-control" name="sch_div_id" required="">
                                      <option value="">Select</option>
                                        <?php
                                        foreach ($app_divs_school as $app_div) {
                                            ?>
                                            <option <?php echo set_select('sch_div_id', "$app_div[school_div_id]"); ?> value="<?php echo $app_div['school_div_id']; ?>"><?php echo $app_div['school_div_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>                                                 
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
                </div>
                <div class="clearfix"></div>
    <!-- /content -->

    <style type="text/css">
    /*.app-footer.wrapper.footer2 {
        margin-left: 0px;
    }*/
    </style>

<script>
            $(".editscd").click(function(){
                $(".sclass_desc").html('<i class="fa fa-pencil"></i> Edit Class Descr'); 
                var row = $(this).closest('tr');
                var a = row.find(".class_desc_name").text();
                var cdid = row.find(".cdid").val();
                var sdid = row.find(".sdid").val();
                $('#save_classdesc').attr('action', "<?php echo base_url(); ?>setup/save_setup/classdesc/"+cdid);
                 $("div.sch_div_id select").val(sdid);
                 $("input[name='class_desc_name']").val(a);
                
            })
        </script>
