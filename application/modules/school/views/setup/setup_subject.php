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
            <tr>
              <td>1</td>
              <td>MAT</td>
              <td>Mathematics</td>
              <td>3</td>
              <td>Science</td>
              <td>Div one</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
             <tr>
              <td>2</td>
              <td>MAT</td>
              <td>Mathematics</td>
              <td>3</td>
              <td>Science</td>
              <td>Div one</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
             <tr>
              <td>3</td>
              <td>MAT</td>
              <td>Mathematics</td>
              <td>3</td>
              <td>Science</td>
              <td>Div one</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
              <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </section>

    <div class="modal fade" id="subject-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ng-scope">
            <h3 class="modal-title"> <i class="fa fa-plus"></i> Add Subject</h3>
        </div>              
            <div class="modal-body">                                
                  <form class="bs-example form-horizontal ng-pristine ng-valid clearfix">  
                  <div class="row">                           
                         <div class="col-sm-6">
                                <label>Subject Short Name</label>
                                 <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                          </div>
                          <div class="col-sm-6">
                                <label>Subject Full Name</label>
                                 <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                          </div>
                          <div class="col-sm-6 m-t">
                                <label>Subject Unit</label>
                                <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                          </div>
                          <div class="col-sm-6 m-t">
                                <label>Department</label>
                                  <select id="response" class="form-control" name="term" required="">
                                    <option value="">Select</option>
                                    <option value="">Science</option>
                                  </select>                                                 
                              </div>
                            <div class="col-sm-6 m-t">
                                <label>School Div</label>
                                  <select id="response" class="form-control" name="term" required="">
                                    <option value="">Select</option>
                                    <option value="">Div one</option>
                                  </select>                                                 
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


