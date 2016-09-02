<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

<?php //echo lang('sales_giftcard_number')." <small> -  ".lang('sales_giftcard_number'); ?> 
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right form-inline" >
		  	
            <a href="<?php echo(base_url($module.'/settings'));?>" class="btn btn-default btn-addon  "><i class="fa fa-gear"></i> <?php echo(ucfirst($module));?> Settings </a>
		  </span>
		  <h1 class="m-n font-thin h3"><?php echo(ucfirst($module));?> Records</h1>
		  <small> Manage Oustanding, Discount, Fees and Fees Categories. </small>
		</div>
		<div class="wrapper-md">
			
            <div class="row row-sm text-center">
              <div class="col-sm-offset-2 col-sm-2">
                <div class="panel padder-v item">
                  <div class="h1 text-info font-thin h1"><?php echo $usercount; ?></div>
                  <span class="text-muted text-xs">Total Students</span>
                </div>
              </div>
              <div class="col-sm-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block"><?php print_r($stat['paid']); ?></span>
                  <span class="text-muted text-xs">Fully Paid Students</span>
                </a>
              </div>
              <div class="col-sm-2">
                <a href class="block panel padder-v bg-info item">
                  <span class="text-white font-thin h1 block"><?php print_r($stat['partpay']); ?></span>
                  <span class="text-muted text-xs">Partly Paid Students</span>
                </a>
              </div>
              <div class="col-sm-2">
                <a href class="block panel padder-v bg-danger item">
                  <span class="text-white font-thin h1 block"><?php print_r($stat['unpaid']); ?></span>
                  <span class="text-muted text-xs">Unpaid Students</span>
                </a>
              </div>
            </div>

            <div class="row m-b doc-buttons">
 				<div class="col-md-7">
 					<form class="form-inline" action="" role="form" method="post">
		          		<div class="form-group m-b">
		          			<input type="text" name="" class="form-control" placeholder="Search">
		          			 <select name="level_id" class="form-control">
		          			 	<option value="all">
                                  All
                                </option>
                              	<?php foreach ($app_levels_school as $level) { ?>
                                 <option value="<?php echo $level['level_id']; ?>">
                                  <?php echo $level['class_name']; ?> 
                                </option>
                                <?php } ?>
                            </select>
		      		        <select name="ts_id" class="form-control">
                              <?php
                              foreach ($all_ts_details as $ts_detail) {
                                ?>
                                 <option <?php echo ($ts_detail['ts_id'] == $ts_id)? 'selected': '' ;?>  
                                 value="<?php echo $ts_detail['ts_id'];?>">
                                 <a href="<?php echo current_url(); ?>"><?php echo $ts_detail['term_name']." - ".$ts_detail['session_name']; ?> </a>
                                </option>
                                <?php
                              }?>
                            </select>
		      		          <input type="hidden" name="role_id">
			                  <button class="btn btn-info" name="filter" value="filter" type="submit">Go!</button>
			            </div>
			         </form>
	            </div>              
              <div class="col-md-5">
              	<div class="btn-group pull-right">
                  <a href="<?php echo base_url('fees/fees_bursary/'.$ts_id.'/'.$level_id.'/part/print'); ?>" class="btn btn-dark" target="_blank"><i class="fa fa-print"></i>  PART</a>
                  <a href="<?php echo base_url('fees/fees_bursary/'.$ts_id.'/'.$level_id.'/paid/print'); ?>" class="btn btn-dark" target="_blank"><i class="fa fa-print"></i>  PAID</a>
                  <a href="<?php echo base_url('fees/fees_bursary/'.$ts_id.'/'.$level_id.'/debtors/print'); ?>" class="btn btn-dark" target="_blank"><i class="fa fa-print"></i>  DEBTORS</a>
                  <a href="<?php echo base_url('fees/fees_bursary/'.$ts_id.'/'.$level_id.'/all/print'); ?>" class="btn btn-dark" target="_blank"><i class="fa fa-print"></i>  ALL RECORD</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXCEL</a>
                </div>
              </div>
             
            </div>
			<section class="panel panel-default">
	            <header class="panel-heading">
	              Student Payment Records Table
	            </header>

	              <div class="table-responsive">
	              <table class="table table-striped b-t b-light" id="list">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Fullname </th>
	                    <th>Class</th>
	                    <th>Main Bill</th>
	                    <th>Outstanding</th>
	                    <th>Extra Bill</th>
	                    <th>Total</th>
	                    <th>Paid</th>
	                    <th>Balance</th>
	                    <th>Credit</th>
	                    <!-- <th>Credit</th> -->
	                    <th colspan="2">Action</th>
	                  </tr>
	                </thead>
	                <tbody>
						<?php
						foreach($students as $student) {
							if(empty($i)){
								$i = 1;
							}
							?>
							<tr>
								<td><input name="post[]" value="2" type="checkbox"></td>
								<td><?php echo $i; ?></td>
								<td><?php echo strtoupper($student['lname']); ?> <?php echo strtoupper($student['fname']); ?></td>
								<td><?php echo strtoupper($student['class_details']); ?></td>
								<td><?php echo number_format($student['amount']); ?></td>
								<td><?php echo number_format($student['payment_balance']); ?></td>
								<td><?php echo number_format($student['sum_bill']); ?></td>
								<td><?php echo number_format($student['total_payable']); ?></td>
								<td><?php echo number_format($student['trans_amount_paid']); ?></td>
								<td><?php echo number_format($student['total_payable'] - $student['trans_amount_paid']); ?></td>
								<td><?php echo number_format($student['balance']); ?></td>
								<!--<td><?php echo number_format($student['balance']); ?></td>-->
								<td><a href="<?php echo base_url('fees/process/'.$student['user_id']); ?>" class="btn btn-xs btn-primary"><i class="fa fa-dollar"></i> Process </a>
	                            <a href="#" class="btn btn-xs btn-info"> Pay History</a></td>
							</tr>
							<?php
								$i++;
						}
						?>

	                </tbody>
	              </table>
	            </div>
	            <footer class="panel-footer">
			      <div class="row">
			        <div class="col-sm-4 hidden-xs">
			          <!-- <select class="input-sm form-control w-sm inline v-middle">
			            <option value="0">Bulk action</option>
			            <option value="1">Delete selected</option>
			            <option value="2">Bulk edit</option>
			            <option value="3">Export</option>
			          </select>
			          <button class="btn btn-sm btn-default">Apply</button>  -->                 
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
			    </footer>
	          </section>
		
		
    </div>
  </div>
 </div>