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
										<h1 class="m-n font-thin h3 text-black">Create an Account Below</h1>
										<small class="text-muted">Welcome to Acadah Smart School application</small>
									</div>
								</div>              
								<div class="clearfix"></div>
							</div>
							<!-- / main header -->

								<div class="col w-md wrapper bg-light dk hf">
								<ul class="nav nav-pills nav-stacked nav-sm aside">
										<li  class="active"><a href="#"><i class="fa fa-fw fa-edit"></i> Apply Now</a></li>
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
											<div class="step-pane active" id="">
						

												<div class="alert alert-info fade in widget-inner">
														<button type="button" class="close" data-dismiss="alert">x</button>
													Please Enter correct Information      
												</div>
												<div class="alert alert-info fade in widget-inner">
														<button type="button" class="close" data-dismiss="alert">x</button>
													Account Created Successfully. <br/>
													Please login with the following info <br/>
													Username: <b>TASUED212</b>
													Pasword: <b>Adelaja</b>

												</div>

											<div class="panel panel-default">
												<div class="panel-heading ">Enter your details: (Required fields are marked with *)</div>
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
																	</select>                                </div>
															</div>
	 
												</div>

												<div class="col-sm-6">  

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

															<div class="form-group">
																<label class="col-sm-4 control-label">Address: </label>
																<div class="col-sm-8">
																	<textarea class="form-control" rows="2" name="sch_address"></textarea>
																</div>
															</div> 
															
															<div class="form-group">
																<label class="col-sm-4 control-label">Country: </label>
																<div class="col-sm-8">
																	<input class="form-control" name="country" value="NIGERIA" type="text">
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
																<label class="col-sm-4 control-label">Date of Birth: </label>
																<div class="col-sm-8">
																	<input class="form-control" value="" name="dob" id="dob" required="" type="text">
																	<label class="control-label">Hint: e.g DD/MM/YYYY </label>
																</div>
															</div>

													 </div>          
													</form>

												</div>
											</div>
									</div>
											<div class="step-pane active" id="step5">
													<div class="panel panel-default">
														<div class="panel-heading"><h6 class="panel-title">APPLICATION PROCEDURE</h6></div>
													<div class="panel-body">
														
														
																<p>1. Apply for the Admissions procsess by clicking Apply Now on an open Application<br>
																<strong>(Please fill the form correctly and supply a VALID EMAIL ADDRESS because your login details will be sent to whatever email address you provide)</strong></p>                         
																
														<div class="widget">
																<table class="table table-striped table-bordered">
																		<thead>
																				<tr>
																						<th> Session Name </th>
																						<th> Status 
																						</th><th> Action 
																				</th></tr>  
																		</thead>
																
																		<tbody>
																				<tr>
																						<td>2015/2016</td>
																						<td>OPEN</td>
																						<td><a class="btn btn-primary btn-xs" href="application_register.php?psid=1">Click here to Apply</a></td>
																				</tr>
																										
																		</tbody>
																</table>                        
												</div>  
																								
														<p>2. Check your email inbox (or Spam) to get your <strong>Applicant ID </strong>and <strong>Password</strong></p>
														<p>3. Return to the website and Click Login to access Application Form </p><p><a class="btn btn-primary" href="login.php"> Click here to Login </a></p>
														<p>4. Continue by carefully filling the Application Form and click submit</p>  
														<p>6. Print the Application form</p>
														<p>7. Proceed to the Admissions office with the printout and copies of your credentials </p>
													</div>
											</div>     
															</div>

											<div class="form-actions text-right">
													<button class="btn btn-default btn-addon"><i class="fa  icon-refresh"></i>Cancel</button>
													<a href="<?php echo base_url();?>admission/payment"> <button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Create Account</button></a>
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