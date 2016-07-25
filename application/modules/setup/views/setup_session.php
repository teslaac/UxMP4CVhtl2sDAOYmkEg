    <!-- content -->
                    <div class="step-content">
                      <div class="step-pane active" id="step4">
                          
                          <div class="progress progress-xs m-t-n-sm">                  
                              <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                           </div>

                      <a href="#session-modal" data-toggle="modal" class="btn btn-primary m-b"><i class="fa fa-plus"></i> Add Session</a>

                      <section class="panel panel-default">
                        <header class="panel-heading">
                          Setup Session
                        </header>
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                            <thead>
                              <tr>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Session Name</th>
                                <th>Session Start</th>
                                <th>Session End</th>
                                <th>Edit</th>
                                <th>Disable</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($session_details as $session_detail){
                                if(empty($i)){
                                    $i = 1;
                                }
                            ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $session_detail['session_name']; ?></td>
                                <input type="hidden" class='session_name' value="<?php echo $session_detail['session_id']; ?>" >
                                <input type="hidden" class='sid' value="<?php echo $session_detail['id']; ?>" >
                                <td class="session_start"><?php echo $session_detail['session_start']; ?></td>
                                <td class="session_end"><?php echo $session_detail['session_end']; ?></td>
                                <td><a href="#session-modal" data-toggle="modal" class="btn btn-xs btn-primary edits"><i class="fa fa-pencil"></i> Edit</a></td>
                                <?php if ($session_detail['session_active'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_session/<?php echo $session_detail['id']; ?>/inactive/session_active/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_session/<?php echo $session_detail['id']; ?>/active/session_active/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
                                  <?php }?>
                              </tr>
                              <?php 
                           $i++; }
                            ?>
                            </tbody>
                          </table>
                        </div>
                        
                      </section>

                      <div class="modal fade" id="session-modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header ng-scope">
                              <h3 class="modal-title session"> <i class="fa fa-plus"></i> Add Session</h3>
                          </div>
                              <div class="modal-body">

                                    <form id="save_session" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/session">
                                          <div class="">
                                            <label class="col-sm-4 control-label">Session Name: </label>
                                            <div class="col-sm-8 m-b session_id">
                                              <select id="session_id" class="form-control" name="session_id" required="">
                                                <option value=""></option>
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
                                          </div>
                                          
                                          <div class="">
                                            <label class="col-sm-4 control-label">Session Start: </label>
                                            <div class="col-sm-8 m-b">
                                              <input class="form-control date" value="" name="session_start" type="text" required="">
                                            </div>
                                          </div>
                                          
                                          <div class="">
                                            <label class="col-sm-4 control-label">Session End: </label>
                                            <div class="col-sm-8 ">
                                              <input class="form-control date" value="" name="session_end" type="text" required="">
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


<script>
            $(".edits").click(function(){
                $(".session").html('<i class="fa fa-pencil"></i> Edit Session'); 
                var row = $(this).closest('tr');
                var a = row.find(".session_start").text();
                var b = row.find(".session_end").text();
                var session_name = row.find(".session_name").val();
                var sid = row.find(".sid").val();
                $('#save_session').attr('action', "<?php echo base_url(); ?>setup/save_setup/session/"+sid);
                 $("div.session_id select").val(session_name);
                 $("input[name='session_start']").val(a);
                 $("input[name='session_end']").val(b);

            })
        </script>