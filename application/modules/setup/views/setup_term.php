    <!-- content -->
   
                    <div class="step-content">
                      <div class="step-pane active" id="step4">
                  
                  <div class="progress progress-xs m-t-n-sm">                  
                      <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="30%" style="width: 30%"></div>
                   </div>

                      <a href="#term-modal" data-toggle="modal" class="btn btn-primary m-b">
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
                                <th>Term Name</th>
                                <th>Edit</th>
                                <th>Disable</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            if(!empty($term_details)){
                            foreach($term_details as $term_detail){
                            if(empty($i)){
                                $i = 1;
                            }
                            ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td class="term_name"><?php echo $term_detail['term_name']; ?></td>
                                <input type="hidden" value="<?php echo $term_detail['id']; ?>" class="tid">
                                <input type="hidden" value="<?php echo $term_detail['term_id']; ?>"  class="term_id">
                               <td><a href="#term-modal" data-toggle="modal" class="btn btn-xs btn-primary editt"><i class="fa fa-pencil"></i> Edit</a></td>
                                <?php if ($term_detail['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_term/<?php echo $term_detail['id']; ?>/inactive/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_school_term/<?php echo $term_detail['id']; ?>/active/status/<?php echo uri_string(); ?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
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

                      <div class="modal fade" id="term-modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header ng-scope">
                                <h3 class="modal-title term"> <i class="fa fa-plus"></i> Add Term</h3>
                              </div>              
                              <div class="modal-body">
                                  <form id="save_term" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="POST" action="<?php echo base_url(); ?>setup/save_setup/term">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">App Term Name: </label>
                                    <div class="col-sm-8 term_id">
                                      <select id="" class="form-control" name="term_id" required="">
                                        <option value="">Select</option>
                                          <?php
                                          foreach ($app_terms as $app_term) {
                                              ?>
                                              <option <?php echo set_select('term_id', "$app_term[term_id]"); ?> value="<?php echo $app_term['term_id']; ?>"><?php echo $app_term['term_name']; ?>
                                              </option>
                                              <?php
                                          }
                                          ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">School Term Name: </label>
                                    <div class="col-sm-8">
                                      <input class="form-control" value="" name="term_name" required="">
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
                       </div><!-- 
                      <div class="step-pane" id="step5">
                        <p>Unzipping this file, please wait it complete...</p>
                        <div class="progress progress-xs m-t-sm">                  
                          <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                        </div>
                        <p class="text-muted"><small>Some features you need know...</small></p>     
                      </div>
                      <div class="step-pane" id="step6">
                        <p>Thank you for choose this theme for your web application. <br>Have Fun!</p>
                      </div>
                      <div class="actions m-t text-right">
                        <button type="button" class="btn btn-default btn-sm btn-prev" data-target="#wizard-2" data-wizard="previous" disabled="disabled">Prev</button>
                        <button type="button" class="btn btn-default btn-sm btn-next" data-target="#wizard-2" data-wizard="next" data-last="Finish">Next</button>
                      </div> -->
                    
                  <div class="clearfix"></div>

                  </div>

                  
    <!-- /content -->

    <style type="text/css">
    .app-footer.wrapper.footer2 {
        margin-left: 0px;
    }
    </style>

    <script>
            $(".editt").click(function(){
                $(".term").html('<i class="fa fa-pencil"></i> Edit Term'); 
                var row = $(this).closest('tr');
                var a = row.find(".term_name").text();
                var term_id = row.find(".term_id").val();
                var tid = row.find(".tid").val();
                $('#save_term').attr('action', "<?php echo base_url(); ?>setup/save_setup/term/"+tid);
                 $("div.term_id select").val(term_id);
                 $("input[name='term_name']").val(a);
                
            })
        </script>


