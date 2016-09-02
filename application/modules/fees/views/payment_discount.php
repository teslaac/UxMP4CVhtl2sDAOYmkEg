<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
       <form action="" role="form" method="post">
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right form-inline">
		  		
		         <select name="ts_id" class="form-control">
                  <?php foreach ($ts_details as $ts_detail) { ?>
                     <option <?php echo ($ts_detail['ts_id'] == $ts_id)? 'selected': '' ;?>  
                     value="<?php echo $ts_detail['ts_id'];?>">
                     <a href="<?php echo current_url(); ?>"><?php echo $ts_detail['term_name']." - ".$ts_detail['session_name']; ?> </a>
                    </option>
                    <?php }?>
                </select>
		        <button class="btn btn-info" name="filter" value="filter" type="submit">Go!</button>
		      </span>
		  <h1 class="m-n font-thin h3">Fees Discounts</h1>
		</div>
		</form>

		<div class="wrapper-md">    

		<?php $tdis = 0;foreach ($discounts as $dis) {  $tdis += $dis['discount']; } ?>

		<div class="col-sm-12 m-b-lg text-center ">
		        <a href="#searchrange" class="btn btn-lg btn-primary btn-addon m-b-xs" type="button" data-toggle="modal"><i class="fa fa-search"></i>Search Range</a>
		       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span> No of Students:</span>
		       <?php echo number_format(count($discounts)); ?>  </button>
		       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span>Total Discounts:</span> N<?php echo number_format($tdis); ?></button>
		      </div>
		      <div class="clearfix"></div>

			<section class="panel panel-default">
	            <header class="panel-heading">
	              Student Payment Discount Table
	            </header>
	            <div class="table-responsive">
	              <table class="table table-striped b-t b-light">
	                <thead>
	                  <tr>
	                   <th width="20"><input type="checkbox"></th>
	                    <th class="th-sortable" data-toggle="class">No.</th>
	                    <th>Surname</th>
	                    <th>Firstname</th>
	                    <th>Payment Name</th>
	                    <th>Term</th>
	                    <th>Session</th>
	                    <th>Discount Amount</th>
<!-- 	                    <th>Action</th>
 -->	                  </tr>
	                </thead>
	                <tbody>
	                  <?php $n = 0; foreach ($discounts as $dis) { ?>
	                  <tr>
	                    <td><input name="post[]" value="2" type="checkbox"></td>
	                    <td><?php echo ++$n; ?></td>
	                    <td><?php echo $dis['lname']; ?></td>
	                    <td><?php echo $dis['fname']; ?></td>
	                    <td><?php echo $dis['fees_shortname']; ?></td>
	                    <td><?php echo $dis['term_name']; ?></td>
	                    <td><?php echo $dis['session_name']; ?></td>
	                    <td>₦<?php echo $dis['discount'];?></td>
	                    <!--<td>₦</td>-->
	                  </tr>
	                  <?php } ?>
	                 
	                  <tr>
	                  	<td colspan="7" class="text-right"><b>Total</b></td>
	                  	<td><b>₦<?php echo $tdis; ?></b></td>
	                  </tr>
	                </tbody>
	              </table>
	            </div>
	            <footer class="panel-footer">
			      <div class="row">
			        <div class="col-sm-4 hidden-xs">
			         <!--  <select class="input-sm form-control w-sm inline v-middle">
			            <option value="0">Bulk action</option>
			            <option value="1">Delete selected</option>
			            <option value="2">Bulk edit</option>
			            <option value="3">Export</option>
			          </select> -->
			          <!-- <button class="btn btn-sm btn-default">Apply</button>  -->                 
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