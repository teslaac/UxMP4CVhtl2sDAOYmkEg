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
                    <h1 class="m-n font-thin h3 text-black">Sign Up School</h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>              
                <div class="clearfix"></div>
              </div>
              <!-- / main header -->
              <div class="wrapper-md">

                  <div class="col-md-12">
                    <div class="alert alert-info fade in widget-inner">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        Please Enter correct Information      
                    </div>

                  
                      <div class="panel panel-default">
                        <div class="panel-heading ">SCHOOL'S INFO</div>
                        <div class="panel-body">
                          
                          <form class="bs-example form-horizontal ng-pristine ng-valid">                              

                           <div class="col-sm-6 clearfix">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">School Full Name: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="fullname"  required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Acronymous: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="acronymous"  required="" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Motto: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="Motto" required="" type="text">
                                </div>
                              </div>          

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Phone Number: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="phoneNumber"  required="" type="number">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Email Address: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="email" required="" type="email">
                                </div>
                              </div>          
                              
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Address: </label>
                                <div class="col-sm-8">
                                  <textarea class="form-control" rows="2" name="sch_address"></textarea>
                                </div>
                              </div> 
                        </div>

                        <div class="col-sm-6">                                        
                              <div class="form-group">              
                                <label class="col-sm-4 control-label">L.G.A:</label>    
                                <div class="col-sm-8">
                                  <select id="response" class="form-control lga" name="lga" required="">
                                    <option value="Ogun Waterside">Ikeja</option>
                                    <option value="">Select</option>
                                  </select>
                                </div>
                              </div>
                              

                              <div class="form-group">              
                                <label class="col-sm-4 control-label">State:</label>
                                <div class="col-sm-8">
                                  <select class="form-control state" name="state" required="">
                                    <option value=" ">Select</option>
                                    <option value="Abia">Abia States</option>
                                    <option value="Adamawa">Adamawa States</option>
                                    <option value="Akwa Ibom">Akwa Ibom States</option>
                                    <option value="Anambra">Anambra States</option>
                                    <option value="Bauchi">Bauchi States</option>
                                    <option value="Bayelsa">Bayelsa States</option>
                                    <option value="Benue">Benue States</option>
                                    <option value="Borno">Borno States</option>
                                    <option value="Cross River">Cross River States</option>
                                    <option value="Delta">Delta States</option>
                                    <option value="Ebonyi">Ebonyi States</option>
                                    <option value="Edo">Edo States</option>
                                    <option value="Ekiti">Ekiti States</option>
                                    <option value="Enugu">Enugu States</option>
                                    <option value="FCT-Abuja">FCT-Abuja</option>
                                    <option value="Gombe">Gombe States</option>
                                    <option value="Imo">Imo States</option>
                                    <option value="Jigawa">Jigawa States</option>
                                    <option value="Kaduna">Kaduna States</option>
                                    <option value="Kano">Kano States</option>
                                    <option value="Katsina">Katsina States</option>
                                    <option value="Kebbi">Kebbi States</option>
                                    <option value="Kogi">Kogi States</option>
                                    <option value="Kwara">Kwara States</option>
                                    <option value="Lagos">Lagos States</option>
                                    <option value="Nasarawa">Nasarawa States</option>
                                    <option value="Niger">Niger States</option>
                                    <option value="Ogun">Ogun States</option>
                                    <option value="Ondo">Ondo States</option>
                                    <option value="Osun">Osun States</option>
                                    <option value="Oyo">Oyo States</option>
                                    <option value="Plateau">Plateau States</option>
                                    <option value="Rivers">Rivers States</option>
                                    <option value="Sokoto">Sokoto States</option>
                                    <option value="Taraba">Taraba States</option>
                                    <option value="Yobe">Yobe States</option>
                                    <option value="Zamfara">Zamfara States</option>
                                    <option value="Non-Nigerian">Non-Nigerian</option>
                                  </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Country: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" name="country" value="NIGERIA" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Year Est: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" value="" name="dob" id="dob" required="" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Admin Username: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" name="username" value="" type="text">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label">Admin Password: </label>
                                <div class="col-sm-8">
                                  <input class="form-control" name="password" value="" type="text">
                                </div>
                              </div>
                          </div>          
                          </form>

                        </div>
                      </div>
                    </div>
                  
                  </div>

                  <div class="wrapper-md">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="form-actions text-right">
                          <button class="btn btn-info btn-addon"><i class="fa fa-arrow-circle-up"></i>Sign Up</button>
                            </div>
                            </div>
                        </div>
                      </div>
                  </div>
                    
                  <div class="clearfix"></div>

                  </div>

                  
        </div>
      </div>
    </div>
    <!-- /content -->

    <style type="text/css">
    .app-footer.wrapper.footer2 {
        margin-left: 0px;
    }
    </style>


