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
                <th>Class Rep</th>
                <th>Edit</th>
                <th>Disable</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Details</td>
                <td>discr</td>
                <td>1</td>
                <td>Mr.Bamidele</td>
                <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Details</td>
                <td>discr</td>
                <td>1</td>
                <td>Mr.Bamidele</td>
                <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Details</td>
                <td>discr</td>
                <td>1</td>
                <td>Mr.Bamidele</td>
                <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                <td><a href="#" class="btn btn-xs btn-danger"><i class="fa fa-check"></i> Disable</a> </td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </section>

      <div class="modal fade" id="class_detail-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header ng-scope">
              <h3 class="modal-title"> <i class="fa fa-plus"></i> Add Class Details</h3>
              </div>              
              <div class="modal-body">                                
                <form class="bs-example form-horizontal ng-pristine ng-valid clearfix">                              
                 <div class="col-sm-6 m-r">
                    <div class="form-group">
                      <label>Class Details</label>
                       <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                    </div>
                  </div>
                  <div class="col-sm-5   m-r">
                    <div class="form-group">
                      <label>Class Descr</label>
                        <select id="response" class="form-control" name="term" required="">
                          <option value="">Select</option>
                          <option value="">Descr</option>
                        </select>                                                 
                    </div>
                  </div>
                  <div class="col-sm-6   m-r">
                    <div class="form-group">
                      <label>Class Level</label>
                        <select id="response" class="form-control" name="term" required="">
                          <option value="">Select</option>
                          <option value="">1</option>
                        </select>                                                 
                    </div>
                </div>
                <div class="col-sm-5 m-r">
                    <div class="form-group">
                      <label>Class Teacher</label>
                       <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
                    </div>
                </div>
                <div class="col-sm-6 m-r">
                    <div class="form-group">
                      <label>Class Rep</label>
                       <input type="text" id="" name="" placeholder="" class="form-control" required="">                        
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


