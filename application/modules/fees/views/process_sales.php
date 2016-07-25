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
		  <h1 class="m-n font-thin h3"><?php //echo(ucfirst($module));?> School Stocks</h1>
		  <small> Sell stock items for all users.  </small>
		</div>
		<div class="wrapper-md">		
            <div id="register_container" class="receiving">
				<div class="row">
					<!--Left small box-->
					<div class="col-md-9"> 
						<div class="">
							<div class="row">
								<div class="col-md-10 no-padd">
								<label>Receiving Mode</label>
									<div>
									<div class="form-group">        
										<form class="form-inline" action="http://localhost/stockah2/index.php/receivings/add" method="post" accept-charset="utf-8" id="add_item_form" autocomplete="off">								
											<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
											<input type="text" name="item" value="" id="item" size="30" placeholder="Enter item name or scan barcode" class="form-control" autocomplete="off">								
											<a href="http://localhost/stockah2/index.php/items/view/-1/1/receiving" class="btn btn-primary" title="New Item" >New Item</a>									
											<a href="http://localhost/stockah2/index.php/receivings/suspended" class="btn btn-primary" title="Suspended Receivings">Suspended Receivings</a>									
											<a href="#" class="btn btn-warning">Suspend </a>									
											<a href="#" class="btn btn-danger"> Cancel</a>									
										</form>
										</div>
									</div>
								</div>
								<div class="col-md-2 no-padd">
									<form class="form-group" action="http://localhost/stockah2/index.php/receivings/change_mode" method="post" accept-charset="utf-8" id="mode_form" autocomplete="off">						
									<label>Receiving Mode</label>														
										<select name="mode" id="mode" class="form-control">
										<option value="receive" selected="selected">Receive</option>
										<option value="return">Return</option>
										<option value="transfer">Transfer</option>
										</select>						
										
									</form>
								</div>
							</div>
							
							<div class="">
							<section class="panel panel-default">
					            <header class="panel-heading"> 
					            	Student Payment Records Table
					            </header>
					            <div class="table-responsive">
					              <table class="table table-striped b-t b-light">
					                <thead>
					                  	<tr>
											<th>Item Name</th>
											<th>Cost</th>
											<th>Quantity</th>
											<th>Stock</th>
											<th>Disc %</th>
											<th>Total</th>
											<th>Delete</th>
										</tr>
					                </thead>
					                <tbody>
					                  <tr id="reg_item_top">
										<td id="reg_item_name">1 (1/4) union waste (1 (1/4))</td>															
										<td id="reg_item_price">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="price" value="80.00" class="form-control" id="price_1">														
											</form>
										</td>
																																						
										<td id="reg_item_qty">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="quantity" value="1" class="form-control" id="quantity_1">													
											</form>
										</td>
										<td class="text text-warning sales_stock" id="reg_item_stock">0</td>
										<td id="reg_item_discount">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="discount" value="0" class="form-control" id="discount_1">													
											</form>	
										</td>
										<td id="reg_item_total">N80</td>
										<td id="reg_item_del">												
										<a href="http://localhost/stockah2/index.php/receivings/delete_item/1" class="delete_item"><i class="fa fa-trash-o fa fa-2x text-error"></i></a>												</td>
										
									</tr>
									<tr id="reg_item_bottom">
										<td id="reg_item_descrip_label">Desc:</td>
										<td id="reg_item_descrip" colspan="7">
											<form action="http://localhost/stockah2/index.php/receivings/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off">
											<input type="hidden" name="description" value="">
											</form>	
										</td>								 
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
							<ul class="list-inline pull-left">
							<li>
								<a href="http://localhost/stockah2/index.php/receivings/batch_receiving" class="btn btn-primary none suspended_recvs_btn hidden-xs" title="Batch receiving"><div class="small_button">Batch receiving</div></a>					
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
						                  <img src="../img/a2.jpg" alt="...">
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