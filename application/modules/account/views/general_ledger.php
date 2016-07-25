<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <h1 class="m-n font-thin h3">General Ledger &amp; Bank Book</h1>
		</div>
		<div class="wrapper-md">
			<div class="col-sm-12 m-b-lg text-center">
        <a href="#searchrange" class="btn btn-lg btn-primary btn-addon m-b-xs" type="button"  data-toggle="modal"><i class="fa fa-search"></i>Search Range</a>
       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span>Total Inflow:</span> N54,120,200 </button>
       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span>Total Outflow:</span> N154,120,200</button>
       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span>Total balance:</span> N254,120,200</button>

      </div>

			<div class="col-sm-12">
				<div class="panel panel-default">
					 <div class="wizard wizard-vertical nav nav-pills clearfix" role="tabpanel" id="wizard-2">
                      <ul class="steps nav-tabs">
                        <li data-target="#step1" role="presentation" class="active"><a href="#Cash" aria-control="Cash" role="tab" data-toggle="tab">Cash</a></li>
                        <li data-target="#step2" role="presentation"><a href="#GTBANK" aria-control="GTBANK" role="tab" data-toggle="tab">GTBANK 1011038370</a></li>
                        <li data-target="#step3" role="presentation"><a href="#ZENITH" aria-control="ZENITH" role="tab" data-toggle="tab">ZENITH 1011038370</a></li>
                        <!-- <li data-target="#step4" role="presentation"><a href="#Lesson" aria-control="Lesson" role="tab" data-toggle="tab">Lesson</a></li>
                            <li data-target="#step10" role="presentation"><a href="#Swim" aria-control="Swim" role="tab" data-toggle="tab">Swim</a></li>  -->                                           
                      </ul>
                   </div>
                   <div class="step-content tab-content">
                    <div class="step-pane tab-pane fade-in active" role="tabpannel" id="Cash">
                   	 	<div class="panel panel-default">
                      <header class="panel-heading">
                        <span class="h3"> CASH ACCOUNT </span>
                        <span class="pull-right form-inline">
                            <input class="form-control input-sm" placeholder="Search" type="text">
                            <button class="btn btn-sm m-b-xs btn-default">Total Inflow: N567,090,345</button>
                            <button class="btn btn-sm m-b-xs btn-default">Total Outflow: N567,090,345</button>
                            <button class="btn btn-sm m-b-xs btn-default">Balance: N567,090,345</button>
                        </span>
                      </header>
                      <div class="row wrapper">
                        <div class="col-sm-5 m-b-xs">
                          <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                          </div>
                        <div class="col-sm-7 text-right">                         
                          <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print Record</button>
                          <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i> Export to Excel</button>

                          <select class="input-sm form-control w-xxs inline v-middle">
                            <option value="">10</option>
                                    <option value="">20</option>
                                    <option value="">50</option>
                                    <option value="">100</option>
                                    <option value="">200</option>
                          </select>
                        </div>
                      </div>
                      
                   	 		<div class="table-responsive">
                   	 			<table class="table table-striped b-t b-light">
                             <thead class="panel-heading">
                   	 					<tr>
						                   <th width="20"><input type="checkbox"></th>
						                    <th class="th-sortable" data-toggle="class">No.</th>
						                    <th>Date</th>
						                    <th>Voucher No</th>
						                    <th>Name</th>
						                    <th>Paymet Details</th>
						                    <th>Quantity</th>
						                    <th>Inflow</th>
						                    <th>Outflow</th>
                                <th>Balance</th>
						                 </tr>
                   	 				</thead>
                   	 				<tbody class="panel-body">
                   	 					<tr>
                   	 						<td><input name="post[]" value="2" type="checkbox"></td>
	                    					<td>1</td>
                   	 						<td></td>
                   	 						<td></td>
                   	 						<td></td>
                   	 						<td></td>
                   	 						<td></td>
                   	 						<td></td>
                   	 						<td></td>
                                <td></td>
                   	 					</tr>
                              <tr>
                                <td colspan="7" class="text-right">Total</td>
                                <td>#0</td>
                                <td>#0</td>
                                <td>#0</td>
                              </tr>
                   	 				</tbody>
                   	 			</table>
                   	 		</div>
                   	 	</div>
                   	 </div>
                   	  <!--- second tab   -->

               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="GTBANK">
                      <div class="panel panel-default">

                      <header class="panel-heading">
                        <span class="h3"> GTBANK ACCOUNT </span>
                        <span class="pull-right form-inline">
                            <input class="form-control input-sm" placeholder="Search" type="text">
                            <button class="btn btn-sm btn-info"><i>#0</i> Total Inflow</button>
                            <button class="btn btn-sm btn-info"><i>#0</i> Total Outflow</button>
                            <button class="btn btn-sm btn-info"><i>#0</i> Balance</button>
                        </span>
                      </header>
                      <div class="row wrapper">
                        <div class="col-sm-5 m-b-xs">
                          <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                          </div>
                        <div class="col-sm-7 text-right">                         
                          <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print Record</button>
                          <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i> Export to Excel</button>

                          <select class="input-sm form-control w-xxs inline v-middle">
                            <option value="">10</option>
                                    <option value="">20</option>
                                    <option value="">50</option>
                                    <option value="">100</option>
                                    <option value="">200</option>
                          </select>
                        </div>
                      </div>
                      
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                             <thead class="panel-heading">
                              <tr>
                               <th width="20"><input type="checkbox"></th>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Date</th>
                                <th>Voucher No</th>
                                <th>Name</th>
                                <th>Paymet Details</th>
                                <th>Quantity</th>
                                <th>Inflow</th>
                                <th>Outflow</th>
                                <th>Balance</th>
                             </tr>
                            </thead>
                            <tbody class="panel-body">
                              <tr>
                                <td><input name="post[]" value="2" type="checkbox"></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td colspan="7" class="text-right">Total</td>
                                <td>#0</td>
                                <td>#0</td>
                                <td>#0</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                     </div>
                      <!--- third tab   -->
                    <div class="step-pane tab-pane fade-in" role="tabpannel" id="ZENITH">
                      <div class="panel panel-default">
                      <header class="panel-heading">
                        <span class="h3"> ZENITH ACCOUNT </span>
                        <span class="pull-right form-inline">
                            <input class="form-control input-sm" placeholder="Search" type="text">
                            <button class="btn btn-sm btn-info"><i>#0</i> Total Inflow</button>
                            <button class="btn btn-sm btn-info"><i>#0</i> Total Outflow</button>
                            <button class="btn btn-sm btn-info"><i>#0</i> Balance</button>
                        </span>
                      </header>
                      <div class="row wrapper">
                        <div class="col-sm-5 m-b-xs">
                          <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                          </div>
                        <div class="col-sm-7 text-right">                         
                          <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print Record</button>
                          <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i> Export to Excel</button>

                          <select class="input-sm form-control w-xxs inline v-middle">
                            <option value="">10</option>
                                    <option value="">20</option>
                                    <option value="">50</option>
                                    <option value="">100</option>
                                    <option value="">200</option>
                          </select>
                        </div>
                      </div>
                      
                        <div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                             <thead class="panel-heading">
                              <tr>
                               <th width="20"><input type="checkbox"></th>
                                <th class="th-sortable" data-toggle="class">No.</th>
                                <th>Date</th>
                                <th>Voucher No</th>
                                <th>Name</th>
                                <th>Paymet Details</th>
                                <th>Quantity</th>
                                <th>Inflow</th>
                                <th>Outflow</th>
                                <th>Balance</th>
                             </tr>
                            </thead>
                            <tbody class="panel-body">
                              <tr>
                                <td><input name="post[]" value="2" type="checkbox"></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td colspan="7" class="text-right">Total</td>
                                <td>#0</td>
                                <td>#0</td>
                                <td>#0</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                     </div>
                      <!--- third tab   -->


                     
				</div>
			</div>
		
    </div>
  </div>
 </div>

<div class="modal fade" id="searchrange">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-search"></i>    Search Range</h4>
      </div>
      <div class="modal-body">
        <div class=" panel-default">
        <div class="panel-body">
          <form action="" role="form" method="POST" class="clearfix">
            <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="" checked="checked">
                <i></i>
                </label>
            </div>
                <div class="form-group col-sm-11 pull-left">
                  <select name="" class="form-control">
                  <option value="1">Today</option>
                  <option value="1">Yesterday</option>
                  <option value="1">This week</option>
                  <option value="1">Last Week</option>
                  <option value="1">This Month</option>
                  <option value="1">Last Month</option>
                  <option value="1">This Year</option>
                  <option value="1">Last Year</option>
                </select>
                </div>
              <div class="clearfix"></div>
              <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="">
                <i></i>
                </label>
            </div>
            <div class="form-group col-sm-11 pull-left">
                <div class="table-responsive">
                  <div class="panel panel-default">
                    <table class="table table-striped b-t b-light">
                      <thead class="panel-heading">
                        <tr>
                          <th>Start Date</th>
                          <th>End Date</th>
                        </tr>
                      </thead>
                      <tbody class="panel-body">
                        <tr>
                          <td>
                            <input type="text" class="form-control">
                          </td>
                          <td>
                            <input type="text" class="form-control">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <div class="clearfix"></div>
             <div class="radio">
              <label class="i-checks col-sm-1 pull-left">
                <input type="radio" name="radio" id="radio" value="" checked="checked">
                <i></i>
                </label>
            </div>
               <div class="form-group pull-left col-sm-11">
               <div class="row">
                 <div class="col-sm-6">
                    <select name="" class="form-control col-sm-6">
                      <option value="1">All Term</option>
                      <option value="1">1st Term</option>
                      <option value="1">2nd Term</option>
                      <option value="1">3rd Term</option>
                    </select>
                 </div>
                 <div class="col-sm-6">
                    <select name="" class="form-control col-sm-6">
                      <option value="1">2012/2013</option>
                      <option value="1">2013/2014</option>
                      <option value="1">2014/2015</option>
                      <option value="1">2015.2016</option>
                    </select>
                 </div>
               </div>
               </div>
               <div class="clearfix"></div>
               <button class="btn btn-info btn-large pull-right" type="submit" role="button">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<style type="text/css">
  .step-content {
    min-height: 300px !important;
}
</style>