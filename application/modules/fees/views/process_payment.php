<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  	<a href="<?php echo(base_url('fees/settings'));?>" class="btn btn-default btn-addon  "><i class="fa fa-gear"></i> Fees Settings </a>
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
										<form class="form-inline" action="" method="post" accept-charset="utf-8" id="add_item_form" autocomplete="off">								
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
						            
						            <form action="" method="post">
						            <div class="table-responsive">
						              <table class="table  table-hover b-t b-light">
						                <thead>
						                  	<tr>
												<th width="30px">No</th>
												<th width="">Item Name</th>
												<th width="100px">Amount</th>
												<th width="100px">Discount</th>
												<th width="100px">Total</th>
												<th width="50px">Delete</th>
												<th width="120px" class="text-center">Pay</th>
												<th width="30px"> 
													<label class="i-checks i-checks-sm pull-right">
								                	<input type="checkbox">
								 	               	<i></i>
								              		</label>
												</th >
											</tr>
						                </thead>
						                <tbody>
						                  	
											<?php $n=1; if($prevbil = $stu_fees_info['bills_prevbal']){?>
											
												<tr>
													<td><?php echo $n; ?>.</td>	
													<td><?php echo $prevbil['fees_shortname']; ?></td>		
													<td>N<span class="amount"><?php echo number_format($prevbil['price']) ; ?></span></td>
													<td>
														<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
															<input type="text"  name="discount" <?php echo ($prevbil['paid']==1)? 'readonly': ''; ?> value="<?php echo number_format($prevbil['discount']) ; ?>" class="form-control input-sm discount" form="form<?php echo $n; ?>">					
														</form>	
													</td>
													<td><!--N<?php echo number_format($prevbil['price']) ; ?>-->
														<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
															<input type="text" readonly name="totalbill"  value="<?php echo($totalbil = $prevbil['price']) ; ?>" class="form-control input-sm totalbil" form="form<?php echo $n; ?>">					
														</form>	
													</td>
													<td>
														<?php if($prevbil['paid']==1){ ?>
																<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>	
															<?php }else{ ?>
														<form action="" method="post" >
															<button type="submit" name="removebill" value="<?php echo $prevbil['id']; ?>" class="btn btn-xs btn-default text-danger">
															<span class="text-danger"><i class="fa fa-times"></i></span></button>
														</form>	
														<?php } ?>									
													</td>
													<td id="">
										              <form action="" name="paybil" method="post" id="form<?php echo$n; ?>">
										              	<?php if($prevbil['paid']==1){ ?>
															<a class="btn btn-xs btn-success pull-right"><i class="fa fa-check "></i> Paid</a>
															<button type="submit" name="unpaybillitem" value="<?php echo $prevbil['id']; ?>" class="btn btn-danger btn-xs pull-right m-r-xs">
															<i class="fa fa-times "></i>
															</button>

														<?php }else{ ?>
										              		<button type="submit" name="paybillitem" value="<?php echo $prevbil['id']; ?>" class="btn btn-info btn-xs pull-right">
															Pay Fee</button>
														<?php } ?>
													  </form>
										            </td>
													<td>												
										              <label class="i-checks i-checks-sm pull-right">
										                <input type="checkbox">
										                <i></i>
										              </label>
										            </td>
										           </form>										
												</tr>
											<?php }else{ ?>
												<tr><form action="" name="billing" method="post">
													<td>1.</td>													
													<td id="item_name"> Previous Balance</td>
													<td id="item_price">
														N<?php echo number_format($stu_fees_info['sum_previous_bal']) ; ?>
													</td>
													<td id="item_discount">0</td>
													<td id="reg_item_total">N<?php echo number_format($stu_fees_info['sum_previous_bal']) ; ?></td>
													<td id="reg_item_del text-center">
													<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>												
													</td>
													<td>
													    
												    	<input type="hidden" value="<?php echo $stu_fees_info['sum_previous_bal']; ?>" name="pb_amount">
												    	<input type="hidden" value="1" name="fees[]">

												    	<?php if($stu_fees_info['sum_previous_bal'] > 0){?>
														<input type="submit" name="add_to_bill" class="btn btn-warning btn-xs" value="Add to Bill">
														<?php } ?>
													 
													</td>
										            <td>												
										              <label class="i-checks i-checks-sm pull-right">
										                <input type="checkbox">
										                <i></i>
										              </label>
											         </td>
											         </form>	
												</tr>
											<?php }//end of prevbal if ?>
							                <?php $n=2; if($bills_main = $stu_fees_info['bills_main']){?>
											
												<tr>
													<td><?php echo $n; ?>.</td>	
													<td><?php echo $bills_main['fees_shortname']; ?></td>		
													<td>N<span class="amount"><?php echo($bills_main['price']) ; ?></span></td>
													<td>
														<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
															<input type="text" name="discount" <?php echo ($bills_main['paid']==1)? 'readonly': ''; ?> value="<?php echo number_format($bills_main['discount']) ; ?>" class="form-control input-sm discount" form="form<?php echo $n; ?>">					
														</form>	
													</td>
													<td><!--N<?php echo number_format($prevbil['price']) ; ?>-->
														<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
															<input type="text" readonly name="totalbill"  value="<?php echo($totalbil = $bills_main['price'] - $bills_main['discount']) ; ?>" class="form-control input-sm totalbil" form="form<?php echo $n; ?>">					
														</form>	
													</td>
													<td>
														<?php if($bills_main['paid']==1){ ?>
																<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>	
															<?php }else{ ?>
														<form action="" method="post" >
															<button type="submit" name="removebill" value="<?php echo $bills_main['id']; ?>" class="btn btn-xs btn-default text-danger">
															<span class="text-danger"><i class="fa fa-times"></i></span></button>
														</form>	
														<?php } ?>									
													</td>
													<td id="">
										              <form action="" name="billing" method="post" id="form<?php echo$n; ?>">
										              	<?php if($bills_main['paid']==1){ ?>
															<a class="btn btn-xs btn-success pull-right""><i class="fa fa-check "></i> Paid</a>
															<button type="submit" name="unpaybillitem" value="<?php echo $bills_main['id']; ?>" class="btn btn-danger btn-xs pull-right m-r-xs">
															<i class="fa fa-times "></i>
															</button>

														<?php }else{ ?>
										              		<button type="submit" name="paybillitem" value="<?php echo $bills_main['id']; ?>" class="btn btn-info btn-xs pull-right">
															Pay Fee</button>
														<?php } ?>
													  </form>
										            </td>
													<td>												
										              <label class="i-checks i-checks-sm pull-right">
										                <input type="checkbox">
										                <i></i>
										              </label>
										            </td>
										           </form>										
												</tr>

												<?php }else{ ?>
												<tr> 
													<td>2.</td>													
													<td id="item_name">Main Bill</td>							
													<td id="item_price">
														N<?php echo number_format($stu_fees_info['amount']) ; ?>
													</td>
													<td id="">
														<form form= action="/edit_item/1" method="post" accept-charset="utf-8" class="line_item_form" autocomplete="off"><input type="text" name="discount" value="0" class="form-control input-sm" id="discount_1">
														</form>	
													</td>
													<td>N<?php echo number_format($stu_fees_info['amount']) ; ?></td>
													<td id="reg_item_del text-center">
														<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>
													</td>
													<td>
														<form action="" name="billing" method="post" id="form<?php echo$n; ?>">
													    	<input type="hidden" value="<?php echo $stu_fees_info['amount']; ?>" name="pb_amount">
													    	<input type="hidden" value="2" name="fees[]">
															<input type="submit" name="add_to_bill" class="btn btn-warning btn-xs addtobil" value="Add to Bill">
													  	</form>
													</td>
													<td id="reg_item_seleted">												
										              <label class="i-checks i-checks-sm pull-right">
										                <input type="checkbox">
										                <i></i>
										              </label>
										            </td>										
												</tr> 
											<?php } // end of bill main?>

											

											<?php foreach ($stu_fees_info['bills'] as $bill) {?>
											
											<tr>
												<td><?php echo ++$n; ?>.</td>	
												<td><?php echo $bill['fees_shortname']; ?></td>		
												<td>N<span class="amount"><?php echo($bill['price']) ; ?></span></td>
												<td>
													<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
														<input type="text" name="discount"  <?php echo ($bill['paid']==1)? 'readonly': ''; ?> value="<?php echo number_format($bill['discount']) ; ?>" class="form-control input-sm discount" form="form<?php echo $n; ?>">					
													</form>	
												</td>
												<td><!--N<?php echo number_format($prevbil['price']) ; ?>-->
													<form action="" method="post" accept-charset="utf-8" class="" autocomplete="off">
														<input type="text" readonly name="totalbill"  value="<?php echo($totalbil = $bill['price'] - $bill['discount']) ; ?>" class="form-control input-sm totalbil" form="form<?php echo $n; ?>">					
													</form>	
												</td>
												<td>
													<?php if($bill['paid']==1){ ?>
															<button class="btn btn-xs btn-default text-danger"><span><i class="fa fa-lock"></i></span></button>	
														<?php }else{ ?>
													<form action="" method="post" >
														<button type="submit" name="removebill" value="<?php echo $bill['id']; ?>" class="btn btn-xs btn-default text-danger">
														<span class="text-danger"><i class="fa fa-times"></i></span></button>
													</form>	
													<?php } ?>									
												</td>
												<td id="">
									              <form action="" name="billing" method="post" id="form<?php echo$n; ?>">
									              	<?php if($bill['paid']==1){ ?>

														<a class="btn btn-xs btn-success pull-right""><i class="fa fa-check "></i> Paid</a>
														<button type="submit" name="unpaybillitem" value="<?php echo $bill['id']; ?>" class="btn btn-danger btn-xs pull-right m-r-xs">
														<i class="fa fa-times "></i>
														</button>
													<?php }else{ ?>
									              		<button type="submit" name="paybillitem" value="<?php echo $bill['id']; ?>" class="btn btn-info btn-xs pull-right">
														Pay Fee</button>
													<?php } ?>
												  </form>
									            </td>
												<td>												
									              <label class="i-checks i-checks-sm pull-right">
									                <input type="checkbox">
									                <i></i>
									              </label>
									            </td>



									            </form>										
											</tr>

											<?php } ?>

											<tr id="reg_item_top">
												<td colspan="4" class="text-right h4"> Total Payable:</td>															
												<td id="total" class="h4">N<?php echo number_format($stu_fees_info['sum_bill']) ;?></td>
													
												 <td></td>	
									            <td colspan="2" class="text-right">
												  <button type="submit" name="paybill" value="" class="btn btn-info pull-right ">
														Pay All Bill Items</button>
												 </td>																		
											</tr>
						                </tbody>
						              </table>
						            </div>
						           </form>
						          </section>

						          <section class="panel panel-default">
						            <div class="table-responsive">
						              <table class="table table-striped b-t b-light">
						                <tbody>					                  
										<tr id="reg_item_top">
										   <td  class="text-right h4"> Total Extra: N<?php echo number_format($stu_fees_info['sum_optional_bill']) ; ?></td>
											<td class="text-right h4"> Total Paid:</td>															
											<td id="total" class="h4">N<?php echo number_format($stu_fees_info['sum_bill_paid']) ; ?></td>
											<td class="text-right h4"> Total Balance:</td>															
											<td id="total" class="h4">N<?php echo number_format($stu_fees_info['balance']) ; ?></td>
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
						                <a href="" class="pull-left thumb-md  b-3x m-r">
						                  <img src="<?php echo base_url('img/a2.jpg'); ?>" width="100%">
						                </a>
						                <div class="clear">
						                  <div class="h4 m-b-xs">
						                    <b><?php echo ucfirst($stu_fees_info['lname']); ?></b>
						                  </div>
						                  <div class="h4 m-t-xs m-b-xs">
						                    <b><?php echo ucfirst($stu_fees_info['fname']); ?></b>
						                  </div>
						                  <small class="text-muted"><?php echo $stu_fees_info['class_details'] ; ?></small>
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
										<form action="" method="post" accept-charset="utf-8" name="finish_sale_form" autocomplete="off" >	

										<div id="make_payment">
											<table id="make_payment_table" class="table">
												<tbody>
												<tr class="success">
													<td class="h5">Credit Balance:</td>
													<td class=" h5"><b>N<?php echo number_format($stu_fees_info['credit']) ; ?></b></td>
												</tr>
												<tr id="mpt_top" class="success ">
													<td colspan="2">
														Payment Type:   	
														<select id="payment_type" name="payment_type" class="form-control" onchange="show_payID()" required="">
															<option value="">Select</option>
															<option value="Cash">Cash</option>
															<option value="Check">Check</option>
															<option value="Deposit">Deposit</option>
															<option value="POS">POS</option>
															<option value="Credit Card">Credit Card</option>
														</select>									
													</td>
												</tr>

												<tr class="info">
													<td id="tender" colspan="2">
														<input  class="form-control" type="number" name="trans_amount_paid" value="" placeholder="Enter amount tendered" required="">	
													</td>
												</tr>
												<!-- AMOUNT/BANKTO/TRACKID/BANKFROM/ -->
												<tr  class="info hide" id="showbankto">
													<td colspan="2">
														BANK TO:   	
														<select id="bankto" name="bankto" class="form-control" required="">
															<option value="GTB" selected="selected">GTB</option>
															<option value="FCMB">FCMB</option>
															<option value="UBA">UBA</option>
															<option value="WEMA">WEMA</option>
														</select>	
													</td>
												</tr>
												<tr  class="info hide" id="showtrackid">
													<td colspan="2">
														<input  class="form-control" id="trackid" name="trackid" placeholder="Enter payment ID" required="">									</td>
												</tr>
												<tr  class="info hide" id="showbankfrom">
													<td colspan="2">
														<input  class="form-control" id="bankfrom" name="bankfrom" placeholder="Enter BANK FROM" required="">									</td>
												</tr>
												<tr class="info">
													<td colspan="2">
													<input type="submit" class="btn btn-info btn-block" value="Add Payment"></input>
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

		      <form action="" method="POST" name="selected_optionals">
		      <div class="modal-body">
		     	
					<div class="">
						<?php $n= 1; foreach ($stu_extra_fees as $extra_fees) { ?>
							<div class="col-md-6">
								<div class="checkbox h4 m-b ">
									<label class="i-checks i-checks-sm ">
						                <input type="checkbox" value="<?php echo $extra_fees['id']; ?>" name='fees[]'>
						                <i class="fa fa-fw fa-square-o checked"></i>
						               <b> <?php echo $extra_fees['fees_name']; ?></b> - <?php echo number_format($extra_fees['amount']); ?>
						            </label>
			                    </div>
			                </div>
						<?php } ?>
						<div class='clearfix'></div>
					</div>
				
		      </div>

		      <div class="modal-footer">
		      	<div class="pull-right">
			      	<a class="btn btn-default" class="close" data-dismiss="modal" aria-hidden="true">Cancel</a>
			      	<input type="submit" name="add_to_bill" class="btn btn-warning btn-addon" value="Add to Bill">
			    </div>
		      </div>
		      </form>

		    </div>
		  </div>
		</div>



<style type="text/css">
	.col3{
	    -webkit-column-count: 2; /* Chrome, Safari, Opera */
	    -moz-column-count: 2; /* Firefox */
	    column-count: 2;
	}
</style>
<script type="text/javascript">
	function show_payID() {
	    var x = document.getElementById("payment_type").value;
	    var showbankfrom = document.getElementById("showbankfrom");
	    var showtrackid =  document.getElementById("showtrackid");
	    var showbankto = document.getElementById("showbankto");

	    var bankto = document.getElementById("bankto");
	    var bankfrom = document.getElementById("bankfrom");
	    var trackid = document.getElementById("trackid");

	    if(x == 'Cash'){
			showbankfrom.className  = 'info hide'; trackid.disabled = true;
	    	showtrackid.className  = 'info hide'; bankfrom.disabled = true;
	    	showbankto.className  = 'info hide'; bankto.disabled = true;

	    }
	    if(x == 'Check'){
	        
			showbankfrom.className  = 'info'; bankfrom.disabled = false;
	    	showtrackid.className  = 'info'; trackid.disabled = false;
	    	showbankto.className  = 'info hide'; bankto.disabled = true;

	    }
	    if(x == 'Deposit'){

			showbankfrom.className  = 'info hide'; bankfrom.disabled = true;
	    	showtrackid.className  = 'info'; trackid.disabled = false;
	    	showbankto.className  = 'info'; bankto.disabled = false; 

	    	 }
	    if(x=='POS'){


			showbankfrom.className  = 'info'; bankfrom.disabled = false;
	    	showtrackid.className  = 'info'; trackid.disabled = false;
	    	showbankto.className  = 'info hide'; bankto.disabled = true;
	    	   }
	    if(x=='Credit Card'){
			showbankfrom.className  = 'info'; bankfrom.disabled = false;
	    	showtrackid.className  = 'info'; trackid.disabled = false;
	    	showbankto.className  = 'info hide'; bankto.disabled = true;
	    }	    
	}


 // $(".payfee").click(function(){
       
	// // var data = $('#form').serialize();
	// // $.post('url', data);
 //    })

 $(".discount, .amount").keyup(function(){
    var row = $(this).closest('tr');
    var discount = row.find(".discount").val();
    var tb =  row.find(".amount").text();

   	row.find(".totalbil").val(Number(tb) - Number(discount));

    console.log(tb);   
})
</script>

