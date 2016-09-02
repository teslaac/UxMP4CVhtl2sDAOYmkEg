<!-- content -->
    <div class="step-content">

    <div class="progress progress-xs m-t-n-sm">                  
          <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
        </div>

      <div class="step-pane active" id="step10">

      <a href="#schdiv-modal" data-toggle="modal" class="btn btn-primary m-b">
      <i class="fa fa-plus"></i> Add School Division</a>

      <section class="panel panel-default">
        <header class="panel-heading">
          Setup School Div
        </header>
        <div class="table-responsive">
          <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th class="th-sortable" data-toggle="class">No.</th>
                <th>School Div Name</th>
                <th>Edit</th>
                <th>Disable</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            if(!empty($div_details)){
            foreach($div_details as $div_detail){
            if(empty($i)){
                $i = 1;
            }
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td class="sch_div"><?php echo $div_detail['school_div_name']; ?></td>
                <input type="hidden" class="sch_div_id" value="<?php echo $div_detail['id']; ?>">
                <input type="hidden" class="app_div_id" value="<?php echo $div_detail['school_div_id']; ?>">
                <td><a href="#schdiv-modal" data-toggle="modal" class="btn btn-xs btn-primary editsd"><i class="fa fa-pencil"></i> Edit</a></td>
                <?php if ($div_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_div/<?php echo $div_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_div/<?php echo $div_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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
        
      <div class="modal fade" id="schdiv-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header ng-scope">
              <h3 class="modal-title schdiv"> <i class="fa fa-plus"></i> Add School Division</h3>
          </div>              
              <div class="modal-body">
                  <form id="save_schdiv" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/schdiv">
                           <div class="form-group">
                            <label class="col-sm-4 control-label">App Div Name: </label>
                            <div class="col-sm-8 school_div_id">
                              <select id="response" class="form-control" name="school_div_id" required="">
                                <option value="">Select</option>
                                  <?php
                                  foreach ($app_divs as $app_div) {
                                      ?>
                                      <option <?php echo set_select('school_div_id', "$app_div[school_div_id]"); ?> value="<?php echo $app_div['school_div_id']; ?>"><?php echo $app_div['school_div_name']; ?>
                                      </option>
                                      <?php
                                  }
                                  ?>
                              </select>                           
                             </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-sm-4 control-label">School Div Name: </label>
                            <div class="col-sm-8">
                              <input class="form-control" value="" name="school_div_name" required="">
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
            $(".editsd").click(function(){
                $(".schdiv").html('<i class="fa fa-pencil"></i> Edit School Division'); 
                var row = $(this).closest('tr');
                var a = row.find(".sch_div").text();
                var sch_div_id = row.find(".sch_div_id").val();
                var app_div_id = row.find(".app_div_id").val();
                $('#save_schdiv').attr('action', "<?php echo base_url(); ?>setup/save_setup/schdiv/"+sch_div_id);
                 $("div.school_div_id select").val(app_div_id);
                 $("input[name='school_div_name']").val(a);
                
            })
        </script>