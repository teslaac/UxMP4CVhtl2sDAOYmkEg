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
                    <h1 class="m-n font-thin h3 text-black">Payment Details</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->

                <div class="col w-md wrapper bg-light dk hf">
                <ul class="nav nav-pills nav-stacked nav-sm aside">
                    <li  class="active"><a href="#"><i class="fa fa-fw fa-money"></i> Payment Info</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-info-circle"></i> Application Instructions</a></li>

<!--                     <li  class=""><a href="#"><i class="fa fa-fw fa-money"></i> Payment Info</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-file"></i> Complete Application</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Terms And Conditions</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Form</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Admission Letter</a></li>
                    <li  class=""><a href="#"><i class="fa fa-fw fa-print"></i> Print Reciept</a></li> -->
                    
                  </ul>
                </div>
                <div class="col w-content wrapper-md">
                <section class="panel panel-default clearfix "> 
                    <div class="step-content">
                      <div class="step-pane active" id="step4">
            
                    <!-- <div class="">
                      <div class="progress-bar progress-bar-info " data-toggle="tooltip" data-original-title="40%" style="width: 40%"> 40%</div>
                    </div> -->

		            <div class="alert alert-info fade in widget-inner">
		                <button type="button" class="close" data-dismiss="alert">x</button>
		              Please Enter Correct Payment Details      
		            </div>

                <div class="alert alert-success fade in widget-inner">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    Payment Details Submitted Succesfully! You shall be able to print your reciept online when your payment has been confirmed. Thank you!    
                </div>



                      <div class="panel panel-default">
                        <div class="panel-heading ">Enter Payment Details</div>
                        <div class="panel-body">
                          
                          <form class="bs-example form-horizontal ng-pristine ng-valid">  
                          
                          <div class="col-sm-6 clearfix">

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Account Name:</label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="ADEOLA INTERNATIONAL" name="accname"   required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Account Number: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="534490937" name="accno"   required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Depositor's Name:</label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="984" name="depositor"  required="" type="text">
                                </div>
                              </div>
                                        
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Phone No:</label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="08080442332" name="phone"  required="" type="text">
                                </div>
                              </div>

                          </div>
                        
                        <div class="col-sm-6 clearfix">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Bank Name:</label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="GTBank" name="otherName" id="otherName"  required="" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Branch:</label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="Ijebu-ode" name="branch"  required="" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Amount Paid: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="10,000" name="amtpaid"  required="" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Date: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="12/12/15" name="date"  required="" type="text">
                                </div>
                              </div>

                          </div>
                          <div class="form-actions text-right">
                              <a href="http://localhost/acadah_app/admission/payment"> <button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button></a>
                          </div>
                        </form>

                        </div>


                      </div>

                       </div>

                       <section class="panel panel-default">
    			                <header class="panel-heading">
    			                 Payment Info
    			                </header>
    			                <div class="table-responsive">
    			                  <table class="table table-striped b-t b-light">
    			                    <thead>
    			                      <tr>
    			                        <th class="th-sortable" data-toggle="class">S/N</th>
    			                        <th>Teller#</th>
    			                        <th>Amount</th>
    			                        <th>Status</th>
    			                        <th>Date</th>
    			                        <th>Print</th>
    			                      </tr>
    			                    </thead>
    			                    <tbody>
    			                      <tr>
    			                        <td>1</td>
    			                        <td>013784993</td>
    			                        <td>NGN103,465.00</td>
    			                        <td><span class="text-info">PENDING</span></td>
    			                        <td>11/11/2014 9:38</td>
    			                        <td><a href="#" class="btn btn-xs btn-dark"><i class="fa fa-print"></i> Print Receipt</a></td>
    			                      </tr>
    			                    </tbody>
    			                  </table>
    			                </div>
    			            </section>
                    
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="form-actions text-right">
                          <a href="<?php echo base_url();?>admission/completeapp"><button class="btn btn-info btn-addon"><i class="fa  fa-angle-double-right"></i>Complete Application</button></a>
                        </div>
                      </div>
                    </div>

                    </div>

                    

                  </section>

                </div>
            <div class="clearfix"></div>
          </div>

                  
        </div>
      </div>
    </div>
    <!-- /content -->
