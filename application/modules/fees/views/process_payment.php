<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="fa fa-gear"></i><?php //echo(ucfirst($module));?> Settings </button>
		  </span>
		  <h1 class="m-n font-thin h3"><?php echo(ucfirst($pagetitle));?></h1>
		  <?php  if(isset($pagesubtitle)){  
		  echo "<small>".$pagesubtitle."</small>";
		  } ?>
		</div>
		<div class="wrapper-md">		
            <div id="register_container" class="receiving">
				<div class="row">
					<!--Left small box-->
					<div class="col-md-9"> 
						<div class="">
							<div class="row">
								<div class="col-md-10 no-padd">
									<div>
									<div class="form-group">        
										<form class="form-inline" action="http://localhost/stockah2/index.php/receivings/add" method="post" accept-charset="utf-8" id="add_item_form" autocomplete="off">								
											<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
											<input type="text" name="item" value="" id="item" size="30" placeholder="Enter Extra Payment name" class="form-control" autocomplete="off">								
											<a href="#addextra" class="btn btn-primary btn-addon" title="Add Extra Payments"  data-toggle="modal"><i class="fa fa-money"></i>Add Extra Payments</a>									
											<a href="#" class="btn btn-danger btn-addon"><i class="fa fa-times"></i> Cancel</a>									
										</form>
										</div>
									</div>
								</div>
								<div class="col-md-2 no-padd">
									<form class="form-group" action="http://localhost/stockah2/index.php/receivings/change_mode" method="post" accept-charset="utf-8" id="mode_form" autocomplete="off">						
										<select name="mode" id="mode" class="form-control">
											<option value="services" selected="selected">Services</option>
											<option value="stock">Stock</option>
											<option value="refund">Refund</option>
											<option value="credit account">Credit Account</option>
										</select>																
									</form>
								</div>
							</div>
							
							<div class="">
							<section class="panel panel-default">
					            <header class="panel-heading"> 
					            	Select the payments you want to make now
					            </header>
					            <div class="table-responsive">
					              <table class="table table-striped b-t b-light">
					                <thead>
					                  	<tr>
											<th width="30px">No</th>
											<th width="200px">Item Name</th>
											<th width="120px">Amount</th>
											<th width="100px">Discount</th>
											<th width="80px">Total</th>
											<th width="50px">Delete</th>
											<th width="30px"> 
												<label class="i-checks i-checks-sm pull-right">
							                	<input type="checkbox">
							 	               	<i></i>
							              		</label>
											</th>
										</tr>
					                </thead>
					                <tbody>
					                  <tr id="reg_item_top">
										<td id="reg_item_name">1.</td>															
										<td id="reg_item_name">Oustanding</td>															
										<td id="reg_item_price">
											<form action="#" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="price" value="80.00" class="form-control input-sm" id="price_1">														
											</form>
										</td>
										<td id="reg_item_discount">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="discount" value="0" class="form-control input-sm" id="discount_1">													
											</form>	
										</td>
										<td id="reg_item_total">N802,000</td>
										<td id="reg_item_del text-center">
										<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>												
										</td>
										<td id="reg_item_seleted ">												
							              <label class="i-checks i-checks-sm pull-right">
							                <input type="checkbox">
							                <i></i>
							              </label>
							            </td>
										
									</tr>	
					                <tr id="reg_item_top">
										<td id="reg_item_name">2.</td>															
										<td id="reg_item_name">Main Bill</td>															
										<td id="reg_item_price">
											<form action="#" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="price" value="80.00" class="form-control input-sm" id="price_1">														
											</form>
										</td>
										<td id="reg_item_discount">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="discount" value="0" class="form-control input-sm" id="discount_1">													
											</form>	
										</td>
										<td id="reg_item_total">N62,000</td>
										<td id="reg_item_del text-center">
										<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>												
										</td>
										<td id="reg_item_seleted">												
							              <label class="i-checks i-checks-sm pull-right">
							                <input type="checkbox">
							                <i></i>
							              </label>
							            </td>										
									</tr>
									<tr id="reg_item_top">
										<td id="reg_item_name">3.</td>															
										<td id="reg_item_name">Lesson Bill</td>															
										<td id="reg_item_price">
											<form action="#" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="price" value="80.00" class="form-control input-sm" id="price_1">														
											</form>
										</td>
										<td id="reg_item_discount">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="discount" value="0" class="form-control input-sm" id="discount_1">													
											</form>	
										</td>
										<td id="reg_item_total">N62,000</td>
										<td id="reg_item_del text-center">
										<button class="btn btn-xs btn-default text-danger"><span class="text-danger"><i class="fa fa-times"></i></span></button>												
										</td>
										<td id="reg_item_seleted">												
							              <label class="i-checks i-checks-sm pull-right">
							                <input type="checkbox">
							                <i></i>
							              </label>
							            </td>										
									</tr>
									<tr id="reg_item_top">
										<td colspan="4" class="text-right h4"> Total Payable:</td>															
										<td id="total" class="h4">N624,000</td>
										<td colspan="2"> </td>																				
									</tr>

					                </tbody>
					              </table>


					              
					            </div>


					            <!-- <footer class="panel-footer">
							      <div class="row">
							        <div class="col-sm-4 hidden-xs">
							          <select class="input-sm form-control w-sm inline v-middle">
							            <option value="0">Bulk action</option>
							            <option value="1">Delete selected</option>
							            <option value="2">Bulk edit</option>
							            <option value="3">Export</option>
							          </select>
							          <button class="btn btn-sm btn-default">Apply</button>                  
							        </div>
							        <div class="col-sm-4 text-center">
							          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
							        </div>
							        <div class="col-sm-4 text-right text-center-xs">                
							          <ul class="pagination pagination-sm m-t-none m-b-none">
							            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
							            <li><a href="">1</a></li>
							            <li><a href="">2</a></li>
							            <li><a href="">3</a></li>
							            <li><a href="">4</a></li>
							            <li><a href="">5</a></li>
							            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
							          </ul>
							        </div>
							      </div>
							    </footer> -->
					          </section>

					          <section class="panel panel-default">
					            <div class="table-responsive">
					              <table class="table table-striped b-t b-light">
					                <tbody>					                  
									<tr id="reg_item_top">
										<td class="text-right h4"> Total Payment Selected:</td>															
										<td id="total" class="h4">N624,000</td>
										<td class="text-right h4"> Total Balance:</td>															
										<td id="total" class="h4">N624,000</td>
									</tr>
					                </tbody>
					              </table>					              
					            </div>
					          </section>

							<ul class="list-inline pull-left">
							<li>
								<a href="#" class="btn btn-info hidden-xs" title="Batch Payment"><div class="small_button">Batch Payment</div></a>					
								<a href="#" class="btn btn-info hidden-xs" title="Payment History"><div class="small_button">Payment History</div></a>					
							</li>
							</ul>
						</div>
						</div>
					</div>
					<!-- Right small box  -->
					<div class="col-md-3">
						<ul class="list-group">

							<li class="list-group-item nopadding">
								<div class="">
						                <a href="" class="pull-left thumb-md avatar b-3x m-r">
						                  <img src="../../img/a2.jpg" alt="...">
						                </a>
						                <div class="clear">
						                  <div class="h3 m-t-xs m-b-xs">
						                    Awonuga 
						                  </div>
						                  <div class="h3 m-t-xs m-b-xs">
						                    JohnSmith 
						                  </div>
						                  <small class="text-muted">Art director</small>
						                </div>
						            </div> 		
							</li>
							<li class="list-group-item nopadding">
								<!-- student info starts here-->
								<div class="widget-box no_left_right_border m-b">									
									<div class="widget-content">
										<div id="customer_info_shell">
											<form action="#" method="post" accept-charset="utf-8" id="select_student_form" autocomplete="off">								
											<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
											<input type="text" name="username" placeholder="Type student's name..." id="student" size="30" class="form-control" autocomplete="off">									
											</form>
										</div>
									</div>
								</div>
								<!--student info ends here-->	
								<!-- <div id="sale_details">
									<table id="sales_items_total" class="table">
										<tbody><tr class="success">
											<td class="left"><h4>Total:</h4></td>
											<td class="right"><h4>N80</h4></td>
										</tr>
									</tbody></table>
								</div> -->
								
							
								
									<div id="finish_sale">
										<form action="http://localhost/stockah2/index.php/receivings/complete" method="post" accept-charset="utf-8" id="finish_sale_form" autocomplete="off">						
										<div id="make_payment">
											<table id="make_payment_table" class="table">
												<tbody>
												<tr class="success">
													<td class="left h4">Total:</td>
													<td class="right h4">N80</td>
												</tr>
												<tr id="mpt_top" class="success ">
													<td colspan="2">
														Payment Type:   	
														<select name="payment_type" class="form-control">
															<option value="Cash" selected="selected">Cash</option>
															<option value="Check">Check</option>
															<option value="Debit Card">Debit Card</option>
															<option value="Credit Card">Credit Card</option>
														</select>									
													</td>
												</tr>

												<tr id="mpt_bottom" class="info">
													<td id="tender" colspan="2">
														<input  class="form-control" type="text" name="amount_tendered" value="" size="10" class="width_full_always" placeholder="Enter amount tendered">									</td>
												</tr>
												<tr class="info">
													<td colspan="2">
													<a class="btn btn-info btn-block" id="add_payment">Add Payment</a>
													</td>
												</tr>

											</tbody></table>
										</div>
										<div style="padding: 0 10px 0 10px;">
											<label id="comment_label" for="comment">Comments:</label>
											<textarea class="form-control" name="comment" cols="40" rows="2" id="comment"></textarea>							
											<div class="btn btn-primary btn-block btn-large" style="margin: 10px 0 10px 0;" id="finish_sale_button">Finish</div>													</div>
											</form>
										</div>
								
											</li>
										</ul>
					</div>	
				</div>
	    	</div>
	  </div>
 </div>


 <!--- modal start -->

 <div class="modal fade" id="addextra">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-money"></i> Select Extra Payment </h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
			<table class="table table-hover table-striped table-hover b-t b-light">
				<thead class="panel-heading">
					<tr>
						<th>No</th>
						<th>Payment Name</th>
						<th>Amount</th>
						<th >Select</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>SchoolFee</td>
						<td>#340,000</td>
						<td><label class="i-checks i-checks-sm"><input type="checkbox"><i></i></label></td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Swiminng</td>
						<td>#340,000</td>
						<td><label class="i-checks i-checks-sm"><input type="checkbox"><i></i></label></td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Swiminng</td>
						<td>#340,000</td>
						<td><label class="i-checks i-checks-sm"><input type="checkbox"><i></i></label></td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Swiminng</td>
						<td>#340,000</td>
						<td><label class="i-checks i-checks-sm"><input type="checkbox"><i></i></label></td>
					</tr>
					<tr>
						<td>1.</td>
						<td>Swiminng</td>
						<td>#340,000</td>
						<td><label class="i-checks i-checks-sm"><input type="checkbox"><i></i></label></td>
					</tr>

				</tbody>

			</table>
		</div>
      </div>
      <div class="modal-footer">
      	<div class="pull-right">
	      	<a class="btn btn-default" class="close" data-dismiss="modal" aria-hidden="true">Cancel</a>
	      	<a class="btn btn-warning btn-addon" id="add_payment_to_bill"><i class="fa fa-plus"> </i>Add payment to Bill</a>
	    </div>
      </div>
    </div>
  </div>
</div>