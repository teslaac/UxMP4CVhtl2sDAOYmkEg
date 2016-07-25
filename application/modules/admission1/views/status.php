    <!-- content -->
    <div class="app-content m-n ">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
          <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
              app.settings.asideFolded = false; 
              app.settings.asideDock = false;
            ">
            <!-- main -->
            <div class="col">
              <!-- main header -->
              <div class="bg-light lter b-b wrapper-md">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <h1 class="m-n font-thin h3 text-black">Admission Status</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->

                <div class="col w-md wrapper bg-light dk hf">
                <ul class="nav nav-pills nav-stacked nav-sm aside">
                    <li  class="active"><a href="#"><i class="fa fa-fw fa-file"></i> Complete Application</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Terms And Conditions</a></li>
                    <li  class=""><a href="#"><i class="icon-user-following"></i> Admission Status</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Form</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Admission Letter</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Reciept</a></li>

<!--                     <li  class=""><a href="#"><i class="fa fa-fw fa-money"></i> Payment Info</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-file"></i> Complete Application</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Terms And Conditions</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Form</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Admission Letter</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Reciept</a></li>
                     -->
                    
                  </ul>
                </div>
                <div class="col w-content wrapper-md">
                <section class="panel panel-default clearfix "> 
                    <div class="step-content">
                      <div class="step-pane active" id="step4">

                      <!--- new page content -->

                      <div class="row">
      		                <div class="col-lg-9 col-md-9 col-sm-12">
      		                    <div class="widget">
                								<div class="panel panel-default">
                									<div class="panel-heading"><h6 class="panel-title"><b> Basic Admission Information</b></h6></div>
                									<div class="table-responsive">
                										<table class="table table-striped table-bordered">
                											<tbody>
                												<tr>
                													<td width="25%"><b>Name:</b></td>
                													<td><b>ENIOLA EMMANUEL ADEDOYIN</b></td>
                												</tr>
                												<tr>
                													<td>Admission No:</td>
                													<td>TASUED787</td>
                												</tr>

                												<tr>
                													<td>Admission Date:</td>
                													<td> 02/09/1997 </td>
                												</tr>

                												<tr>
                													<td>Class Applied:</td>
                													<td> JSS 1 </td>
                												</tr>
                												<tr>
                													<td><b>Class Admitted:</b></td>
                													<td><b> JSS 1 </b></td>
                												</tr>										
                												<tr>
                													<td><b>Admission Status:<b></b></b></td>
                													<td><strong class="text-success">ADMITTED</strong></td>										</tr>										

                											</tbody>
                										</table>
                									</div>
                								</div>
      		                    </div>
      		                </div>

      		                <div class="widget">
              							<div class="col-lg-3 col-md-3 col-sm-6">
              								<div class="widget ">
              									<div class="thumbnail text-center">
              										<div class="" style="padding: 30px; ">
              										<i class="fa fa-user" style=" font-size: 105px; "></i>
              										</div>
              									</div>
              								</div>  						                  
              								<button class="btn btn-dark btn-block btn-addon"><i class="fa fa-print"></i>Admission Letter</button>
              							</div>
      		                </div>
      		            </div>
            			<!-- page content end -->
                    </div>
                  </section>
                </div>
            <div class="clearfix"></div>
          </div>
                  
        </div>
      </div>
    </div>
    <!-- /content -->