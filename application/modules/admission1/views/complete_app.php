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
                    <h1 class="m-n font-thin h3 text-black">Complete Application</h1>
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
                    <li  class=""><a href="status"><i class="icon-user-following"></i> Admission Status</a></li>
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
			
						<div class="alert alert-info fade in widget-inner">
			                <button type="button" class="close" data-dismiss="alert">x</button>
			              Please Complete Your Application Form Below with Valid Info.
			            </div>
						<div class="panel panel-default">
	                        <div class="panel-heading ">STUDENT'S PERSONAL DETAILS</div>
	                        <div class="panel-body">
	                          
	                          <form class="bs-example form-horizontal ng-pristine ng-valid">                              

	                           <div class="col-sm-6 clearfix">
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Surname: <span>*</span></label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="fullname"  required="" type="text">
	                                </div>
	                              </div>
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">First Name: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="acronymous"  required="" type="text">
	                                </div>
	                              </div>
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Other Name: </label>
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
	                                <label class="col-sm-4 control-label">Application Level : </label>
	                                <div class="col-sm-8">
	                                  <select class="form-control state" name="state" required="">
	                                    <option value=" ">Select</option>
	                                    <option value="Abia">JSS1</option>
	                                    <option value="Adamawa">JSS2</option>
	                                  </select>                               
	                                </div>
	                              </div>


	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Day/Boarding: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="day-boarding" required="" type="email">
	                                </div>
	                              </div>  

	                              <div class="form-group">
									 <label class="col-sm-4 control-label">Religion: </label>
									<div class="col-sm-8">
										<select class="form-control" name="religion" id="religion" required="">
											<option value="Islam">Islam</option>
											<option value="">---Select Religion---</option>
											<option value="Islam">Islam</option>
											<option value="Christianity">Christianity</option>
											<option value="Traditional">Traditional</option>
										</select>
									</div>
								</div>
	                              <div class="form-group">              
	                                <label class="col-sm-4 control-label">Gender:</label>
	                                <div class="col-sm-8">
	                                  <select class="form-control state" name="state" required="">
	                                    <option value=" ">Select</option>
	                                    <option value="Abia">Male</option>
	                                    <option value="Adamawa">Female</option>
	                                  </select>
	                                 </div>
	                              </div> 
	   
	                        </div>

	                        <div class="col-sm-6">  
								 

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Residential Address: </label>
	                                <div class="col-sm-8">
	                                  <textarea class="form-control" rows="2" name="sch_address"></textarea>
	                                </div>
	                              </div> 
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Residential Country: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" name="country" value="NIGERIA" type="text">
	                                </div>
	                              </div>

	                              <div class="form-group">              
	                                <label class="col-sm-4 control-label">Residential State:</label>
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
	                                <label class="col-sm-4 control-label">Date of Birth: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="dob" id="dob" required="" type="text">
	                                  <label class="control-label">Hint: e.g DD/MM/YYYY </label>
	                                </div>
	                              </div>

	                              <div class="form-group">
									<label class="col-sm-4 control-label">Nationality: </label>
									<div class="col-sm-8">
										<input class="form-control" name="nationality" value="NIGERIA" type="text">
									</div>
								  </div>

								  	<div class="form-group">              
										<label class="col-sm-4 control-label">State of Origin:</label>
										<div class="col-sm-8">
											<select class="form-control state" name="state" required="">
												<option value="Ogun">Ogun</option>
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
										<label class="col-sm-4 control-label">L.G.A of Origin:</label>		
										<div class="col-sm-8">
											<select id="response" class="form-control lga" name="lga" required="">
												<option value="Ogun Waterside">Ogun Waterside</option>
												<option value="">Select</option>
											</select>
										</div>
								  	</div>

								<div class="form-group">
									<label class="col-sm-4 control-label">Hometown: </label>
									<div class="col-sm-8">
										<input class="form-control" name="hometown" value="" type="text">
									</div>
								</div>

	                           </div>          
	                          </form>

	                        </div>
	                      </div>
						<div class="panel panel-default">
	                        <div class="panel-heading ">PARENT/GAURDIAN INFO</div>
	                        <div class="panel-body">
	                          
	                          <form class="bs-example form-horizontal ng-pristine ng-valid">                              

	                           <div class="col-sm-6 clearfix">
	                           <div class="form-group">
	                                <label class="col-sm-4 control-label">Title : </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="ptitle"  placeholder="Mr, Mrs, Dr, Prof" required="" type="text">
	                                  <!-- <label class="control-label">Hint: Mr, Mrs, Dr, Prof</label> -->
	                                </div>
	                              </div>
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Surname: <span>*</span></label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="lname"  required="" type="text">
	                                </div>
	                              </div>
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">First Name: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="fname"  required="" type="text">
	                                </div>
	                              </div>
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Initial: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="initial" required="" type="text">
	                                </div>
	                              </div>          

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Phone Number: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="phone"  required="" type="number">
	                                </div>
	                              </div>

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Email Address: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="email" required="" type="email">
	                                </div>
	                              </div>
         	                              
	   
	                        </div>

	                        <div class="col-sm-6">  

	                              <div class="form-group">              
	                                <label class="col-sm-4 control-label">Gender:</label>
	                                <div class="col-sm-8">
	                                  <select class="form-control" name="gender" required="">
	                                    <option value=" ">Select</option>
	                                    <option value="Abia">Male</option>
	                                    <option value="Adamawa">Female</option>
	                                  </select>
	                                 </div>
	                              </div>  

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Full Address: </label>
	                                <div class="col-sm-8">
	                                  <textarea class="form-control" rows="2" name="address"></textarea>
	                                </div>
	                              </div> 
	                              
	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Relationship: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" name="relationship"  type="text">
	                                </div>
	                              </div>

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Occupation: </label>
	                                <div class="col-sm-8">
	                                  <input class="form-control" value="" name="occupation" required="" type="text">
	                                </div>
	                              </div>

	                              <div class="form-group">
	                                <label class="col-sm-4 control-label">Occupation Address: </label>
	                                <div class="col-sm-8">
	                                  <textarea class="form-control" rows="2" name="address"></textarea>
	                                </div>
	                              </div> 

	                           </div>          
	                          </form>

	                        </div>
	                      </div>


				    	<div class="row">
					    	<div class="col-sm-6">
		                      <div class="panel panel-default">
						        <div class="panel-heading ">MEDICAL INFO</div>
						        <div class="panel-body">
						          <form class="bs-example form-horizontal ng-pristine ng-valid">															

										<div class="form-group">
											<label class="col-sm-4 control-label">Height: </label>
											<div class="col-sm-8">
												<input class="form-control" value="" name="Height">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-4 control-label">Weight: </label>
											<div class="col-sm-8">
												<input class="form-control" value="" name="Weight" type="text">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-4 control-label">Disablity: </label>
											<div class="col-sm-8">
												<input class="form-control" value="" name="Disablity" type="text">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-4 control-label">Genotype: </label>
											<div class="col-sm-8">
												<input class="form-control" value="" name="Genotype" type="text">
											</div>
										</div>					
										
										<div class="form-group">
											<label class="col-sm-4 control-label">Bloodgroup: </label>
											<div class="col-sm-8">
												<input class="form-control" value="" name="Bloodgroup" type="text">
											</div>
										</div>												          
						          </form>
						        </div>
						      </div>
						    </div>

					      	<div class="col-sm-6">
						      <div class="panel panel-default">
							    <div class="panel-heading ">UPLOAD PASSPORT</div>

						        <div class="panel-body">
						          <div class="clearfix text-center m-t" style=" margin-bottom: 20px">
						            <div class="inline">
						              <div style="height: 134px; line-height: 134px; margin-bottom: 40px" class="easyPieChart">
						                <div class="thumb-xl">
						                  <img src="http://localhost/acadah_app/img/a8.jpg" class="img-circle" alt="...">
						                </div>
						              <canvas width="134" height="134"></canvas>
						              </div>
									<div class="bootstrap-filestyle input-group"><input class="form-control " disabled="" type="text"> <span tabindex="0" class="group-span-filestyle input-group-btn"><label for="filestyle-0" class="btn btn-default "><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>            </div>                      
						          </div>
						        </div>
						      </div>
						      
							</div>
						</div>
					  		<div class="clearfix"></div>
					    	<div class="panel panel-default">
					    		<div class="panel-body">
					    		<div class="form-actions text-right">
					    			<button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save Application</button>
					            </div>
					            </div>
					        </div>
						<div class="clearfix"></div>


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

    <style type="text/css">
    .app-footer.wrapper.footer2 {
        margin-left: 0px;
    }
    </style>