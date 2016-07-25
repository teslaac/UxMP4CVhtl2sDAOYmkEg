    <!-- content -->
<div class="step-content">
    <div class="step-pane active" id="step16">
      
      <div class="progress progress-xs m-t-n-sm">                  
          <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="90%" style="width: 90%"></div>
       </div>

    <a href="#department-modal" data-toggle="modal" class="btn btn-primary m-b">
    <i class="fa fa-plus"></i> Add Department</a>

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
              <th>H.O.D</th>
              <th>Edit</th>
              <th>Disable</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Science</td>
              <td>Dr. Jonathan</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
             <tr>
              <td>2</td>
              <td>Commercial</td>
              <td>Dr. Jonathan</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
             <tr>
              <td>3</td>
              <td>Art</td>
              <td>Dr. Jonathan</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </section>

    <div class="modal fade" id="department-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ng-scope">
            <h3 class="modal-title"> <i class="fa fa-plus"></i> Add Department</h3>
        </div>              
            <div class="modal-body">                                
                  <form class="bs-example form-horizontal ng-pristine ng-valid clearfix">                              
                         <div class="col-sm-6 m-r">
                              <div class="form-group">
                                <label>Department Name</label>
                                 <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                              </div>
                          </div>
                          <div class="col-sm-5   m-r">
                              <div class="form-group">
                                <label>H.O.D</label>
                                  <input type="text" class="form-control" id="" name="" placeholder="" required="">                                                 
                              </div>
                            </div>            
                  </form>
                        
                
                     
            </div>

            <div class="modal-footer">
                      <a href="#" class="btn btn-info"><i class="fa fa-save "></i> Save </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
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


