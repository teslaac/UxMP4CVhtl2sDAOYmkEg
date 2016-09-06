
<div class="col-xs-4 col-xs-offset-4 text-info"> <h3> STUDENT'S PROFILE </h3></div>
<!-- <?php print_r($pro_info[0]['class_name']); ?> -->
        <!-- Page content -->
        <div class="page-content">
			<div class="widget">
                
                    <div class="panel-body">						
                    <?php //print_r($student_info);?>
						<div class="col-xs-9">
								<div class="widget">
									<div class="panel panel-default">
										<div class="panel-heading"><h6 class="panel-title"> PROFILE DETAILS FOR <?php echo "$student_info[lname] $student_info[fname]"; ?>  </h6></div>
										<div class="table-responsive">
											<table class="table table-striped bold">
												<tbody>
													<tr>
														<td width="25%">Admission Number:</td>
														<td><?php echo $student_info['admission_no']; ?></td>
													</tr>
													<tr>
														<td>Student Id:</td>
														<td><?php echo $student_info['user_id']; ?></td>
													</tr>
													<tr>
														<td>Current Class:</td>
														<td><?php echo $student_info['class_details']; ?></td>
													</tr>

													<tr>
														<td>Day/Boarding:</td>
														<td><?php echo $student_info['hostel_status']; ?> </td>
													</tr>

													<!-- <tr>
														<td>Application Date:</td>
														<td><?php echo $pro_info['date']; ?></td>
													</tr>	 -->									
	
												</tbody>
											</table>
										</div>
									</div>
								</div>					
							</div>
							
							<div class="col-xs-3">                 
								<div class="widget ">
  									<div class="thumbnail text-center">
  										<div class="" style="padding: 30px; ">
  										<?php
                                        if(!empty($student_info['profile_image'])){
                                        $profile_image = "assets/$_SESSION[sch_id]/".$student_info['profile_image'];
                                        }else{
                                        $profile_image = 'img/a0.jpg';
                                        }
                                        ?>
                                         <img id="preview" src="<?php echo base_url($profile_image);?>" class="img-circle" alt="..." width='128' height='128'>
  										</div>
  									</div>
								</div>								
							</div>

							<div class="col-xs-12">
								<div class="widget">
									<div class="panel panel-default">
										<div class="panel-heading"><h6 class="panel-title"> PERSONAL DATA </h6></div>
										<div class="panel-body">
										<div class="col-xs-6">												
											<div class="panel panel-default">
												<div class="table-responsive">
													<table class="table  table-striped  bold">
														<tbody>
																<tr>
																	<td width="130px">Surname:</td>
																	<td><?php echo $student_info['lname'] ?></td>
																</tr>
																<tr>
																	<td width="">First Name:</td>
																	<td><?php echo $student_info['fname']; ?></td>
																</tr>
																<tr>
																	<td width="">Middle Name:</td>
																	<td> <?php echo $student_info['mname']; ?> </td>
																</tr>
																<tr>
																	<td>Phone Number :</td>
																	<td><?php echo $student_info['phone']; ?></td> 
																</tr>
																<tr>
																	<td>Date Of Birth :</td>
																	<td><?php echo $student_info['dob']; ?></td> 
																</tr>
																<tr>
																	<td>State of Origin :</td>
																	<td><?php echo $student_info['state']; ?></td> 
																</tr>
																<tr>
																	<td>LGA of Origin  :</td>
																	<td><?php echo $student_info['lg']; ?></td> 
																</tr>
																<tr>
																	<td>Nationality :</td>
																	<td><?php echo $student_info['nationality']; ?></td> 
																</tr>
																<tr>
																	<td>Gender :</td>
																	<td><?php echo $student_info['gender']; ?></td> 
																</tr>
																<tr>
																	<td>E-Mail Address :</td>
																	<td><?php echo $student_info['email']; ?></td> 
																</tr>										
																<tr>
																	<td>Hometown :</td>
																	<td><?php echo $student_info['hometown']; ?></td> 
																</tr>
																
															</tbody>
														</table>
													</div>
												</div>
											</div>
											
											<div class="col-xs-6">
												<div class="panel panel-default">														
													<div class="table-responsive">
														<table class="table table-striped bold">
															<tbody>
																
																<tr>
																	<td>Religion :</td>
																	<td><?php echo $student_info['religion']; ?></td> 
																</tr>
																<tr>
																	<td>Residential Address :</td>
																	<td><?php echo $student_info['address']; ?></td> 
																</tr>
																<tr>
																	<td>Residential State :</td>
																	<td><?php echo $student_info['state']; ?></td> 
																</tr>
																<!-- <tr>
																	<td>Residential Country :</td>
																	<td><?php echo $pro_info['country']; ?></td> 
																</tr> -->
																
															</tbody>
														</table>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading"><h6 class="panel-title">MEDICAL INFO</h6></div>
													<div class="table-responsive">
														<table class="table bold">
															<tbody> 

																<tr>
																	<td>Height:</td>
																	<td><?php echo $student_info['height']; ?> </td>
																</tr>
																<tr>
																	<td>Weight: </td>
																	<td><?php echo $student_info['weight']; ?></td> 
																</tr>								
																<tr>
																	<td>Disablity: </td>
																	<td><?php echo $student_info['disability']; ?></td>
																</tr>								
																<tr>
																	<td>Genotype:</td>
																	<td><?php echo $student_info['genotype']; ?></td> 
																</tr>													
																<tr>
																	<td>Bloodgroup: </td>
																	<td><?php echo $student_info['bloodgroup']; ?></td> 
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
											
										<div class="clearfix"></div>
									</div>
								</div>					
							</div>
					 </div>                     
    			
            </div>            
       </div>
    </div>