    <!-- content -->
                  <div class="step-content">
                    <div class="step-pane active" id="step4">
                      
                        <div class="progress progress-xs m-t-n-sm">                  
                          <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                        </div>

                      <a href="#term_reg-modal" data-toggle="modal" class="btn btn-primary m-b">
                      <i class="fa fa-plus"></i> Add Term</a>

                      <section class="panel panel-default">
                        <header class="panel-heading">
                          Setup Terms
                        </header>
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Session</th>
                                <th>Term Name</th>
                                <th>Term Start</th>
                                <th>Term End</th>
                                <th>Edit</th>
                                <th>Disable</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            if(!empty($ts_details)){
                            foreach($ts_details as $ts_detail){
                            if(empty($i)){
                                $i = 1;
                            }
                            ?>
                              <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $ts_detail['session_name'];?></td>
                                <td><?php echo $ts_detail['term_name'];?></td>
                                <td class="term_start"><?php echo $ts_detail['ts_start'];?></td>
                                <td class="term_end"><?php echo $ts_detail['ts_end'];?></td>
                                <input type="hidden" value="<?php echo $ts_detail['id']; ?>"  class="tsid">
                                 <input type="hidden" value="<?php echo $ts_detail['term_id']; ?>"  class="term_id">
                                 <input type="hidden" value="<?php echo $ts_detail['session_id']; ?>"  class="session_id">
                                 <input type="hidden" value="<?php echo $ts_detail['ts_active']; ?>"  class="ts_active">
                                 <td><a href="#term_reg-modal" data-toggle="modal" class="btn btn-xs btn-primary edittr"><i class="fa fa-pencil"></i> Edit</a></td>
                                <?php if($ts_detail['ts_active'] == 'active'){ ?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_term_session/<?php echo $ts_detail['id']; ?>/inactive/ts_active/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_term_session/<?php echo $ts_detail['id']; ?>/active/ts_active/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
                                <?php } ?>
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

                        <div class="modal fade" id="term_reg-modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header ng-scope">
                                <h3 class="modal-title term_reg"> <i class="fa fa-plus"></i> Add Term</h3>
                              </div>              
                              <div class="modal-body">
                                  <form id="save_term_reg" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/activeterm">
                                            <div class="col-sm-4 term_id">
                                                  <label>Term</label>
                                                    <select id="response" class="form-control" name="term_id" required="" >
                                                      <option value="">Select</option>
                                                        <?php
                                                        foreach ($app_terms_school as $app_term) {
                                                            ?>
                                                            <option <?php echo set_select('term_id', "$app_term[term_id]"); ?> value="<?php echo $app_term['term_id']; ?>"><?php echo $app_term['term_name']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>                        
                                            </div>
                                            <div class="col-sm-4 session_id">
                                                  <label>Session</label>
                                                    <select id="response" class="form-control" name="session_id" required="">
                                                      <option value="">Select</option>
                                                        <?php
                                                        foreach ($app_sessions as $app_session) {
                                                            ?>
                                                            <option <?php echo set_select('session_id', "$app_session[session_id]"); ?> value="<?php echo $app_session['session_id']; ?>"><?php echo $app_session['session_name']; ?> Session
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>                                                 
                                            </div>
                                            <div class="col-sm-4 ts_active">
                                                  <label>Status</label>
                                                    <select id="response" class="form-control" name="ts_active" required="">
                                                      <option value="">Select</option>
                                                      <option value="active">Active</option>
                                                      <option value="inactive">Inactive</option>
                                                    </select>                                                 
                                            </div>  

                                            <div class="col-sm-4">
                                                  <label>Term Start</label>
                                                   <input class="form-control date" type="text" name="term_start" required="">                                                 
                                            </div>  

                                            <div class="col-sm-4">
                                                  <label>Term End</label>
                                                     <input class="form-control date" type="text" name="term_end" required="">                                          
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
    .app-footer.wrapper.footer2 {
        margin-left: 0px;
    }
    </style>
<script>
            $(".edittr").click(function(){
                $(".term_reg").html('<i class="fa fa-pencil"></i> Edit Term'); 
                var row = $(this).closest('tr');
                var a = row.find(".term_start").text();
                var b = row.find(".term_end").text();
                var tsid = row.find(".tsid").val();
                var term_id = row.find(".term_id").val();
                var session_id = row.find(".session_id").val();
                var ts_active = row.find(".ts_active").val();
                $('#save_term_reg').attr('action', "<?php echo base_url(); ?>setup/save_setup/activeterm/"+tsid);
                 $("div.session_id select").val(session_id);
                 $("div.term_id select").val(term_id);
                 $("div.ts_active select").val(ts_active);
                 
                 $("input[name='term_start']").val(a);
                 $("input[name='term_end']").val(b);


            })
        </script>

