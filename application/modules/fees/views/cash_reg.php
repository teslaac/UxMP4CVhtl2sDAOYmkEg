<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right form-inline">
        <select name="" class="form-control">
          <option value="1">1st Term - 2015/2016</option>
          <option value="1">2nd Term - 2015/2016</option>
          <option value="1">3rd Term - 2015/2016</option>
          <option value="1">All Term</option>
        </select>
      </span>
		  <h1 class="m-n font-thin h3">Fees Register and Fees Categories</h1>
	
	</div>
		<div class="wrapper-md">
      <div class="col-sm-12 m-b-lg text-center">
        <a href="#searchrange" class="btn btn-lg btn-primary btn-addon m-b-xs" type="button" data-toggle="modal"><i class="fa fa-search"></i>Search Range</a>
       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span> No of Fees:</span> 12 </button>
       <button class="btn btn-lg btn-info btn-addon m-b-xs"><span>Total Paid:</span> N154,120,200</button>
      </div>
      <div class="form-group col-sm-12">
                <div class="table-responsive">
                  <div class="panel panel-default">
                    <table class="table table-striped b-t b-light">
                      <thead class="panel-heading">
                        <tr>
                          <th>Date</th>
                          <th>Start Date - End Date</th>
                          <th>Term - Session</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="panel-body">
                        <tr>
                          <td class="form-inline">
                          <label class="i-checks">
                            <input name="radio" id="radio" type="radio" value="">
                            <i></i>
                          </label>
                           <select class="form-control">
                              <option value="1">Today</option>
                              <option value="1">Yesterday</option>
                              <option value="1">This week</option>
                              <option value="1">Last Week</option>
                              <option value="1">This Month</option>
                              <option value="1">Last Month</option>
                              <option value="1">This Year</option>
                              <option value="1">Last Year</option>
                            </select>
                          </td>
                          <td class="form-inline">
                            <label class="i-checks">
                              <input name="radio" id="radio" type="radio" value="">
                              <i></i>
                            </label>
                            <input class="form-control m-r-sm m-b-sm" required="" type="text">
                        
                            <input class="form-control m-b-sm" type="text" requiredss="">
                          </td>
                          <td class="form-inline ">
                            <label class="i-checks">
                              <input name="radio" id="radio" type="radio" value="">
                              <i></i>
                            </label>
                            <select class="form-control m-r-sm m-b-sm">
                              <option value="1">All Term</option>
                              <option value="1">1st Term</option>
                              <option value="1">2nd Term</option>
                              <option value="1">3rd Term</option>
                            </select>
                            <select class="form-control m-b-sm">
                              <option value="1">2012/2013</option>
                              <option value="1">2013/2014</option>
                              <option value="1">2014/2015</option>
                              <option value="1">2015.2016</option>
                            </select>
                          </td>
                          <td><button class="btn btn-info">Go</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
      </div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="panel panel-default">
        
        <div class="col-md-2 m-t-lg ">
          <div class="">
            <a href="#Home" class="btn btn-info btn-block active" aria-controls="home" role="tab" data-toggle="tab">Fees Register</a></li>
            <a href="#Main" class="btn btn-default btn-block" aria-controls="Main" role="tab" data-toggle="tab">Main Bill</a></li>
            <a href="#Lesson" class="btn btn-default btn-block" aria-controls="Lesson" role="tab" data-toggle="tab">Lesson</a></li>
            <a href="#Lunch" class="btn btn-default btn-block" aria-controls="lunch" role="tab" data-toggle="tab">Drink</a></li>
          </div>
        </div>
         
        <div class="col-md-10 m-t-lg">  
					 <div class="" role="tabpanel" id="wizard-2">


                     <!--  <ul class="steps nav-tabs">
                        <li data-target="#step1" role="presentation" class="active"><a href="#Register" aria-control="Register" role="tab" data-toggle="tab">Fees Register</a></li>
                        <li data-target="#step3" role="presentation"><a href="#Main" aria-control="Main" role="tab" data-toggle="tab">Main Bill</a></li>
                        <li data-target="#step4" role="presentation"><a href="#Lesson" aria-control="Lesson" role="tab" data-toggle="tab">Lesson</a></li>
                        <li data-target="#step5" role="presentation"><a href="#Lunch" aria-control="Lunch" role="tab" data-toggle="tab">Lunch</a></li>
                        <li data-target="#step6" role="presentation"><a href="#Drink" aria-control="Drink" role="tab" data-toggle="tab">Drink</a></li>
                        <li data-target="#step7" role="presentation"><a href="#Ass" aria-control="Ass" role="tab" data-toggle="tab">Ass</a></li>
                        <li data-target="#step8" role="presentation"><a href="#CDC" aria-control="CDC" role="tab" data-toggle="tab">CDC</a></li>
                        <li data-target="#step9" role="presentation"><a href="#Music" aria-control="Music" role="tab" data-toggle="tab">Music</a></li>
                        <li data-target="#step10" role="presentation"><a href="#Swim" aria-control="Swim" role="tab" data-toggle="tab">Swim</a></li>                                            
                      </ul> -->
                   </div>
                   <div class=" tab-content">
                    <div class="clearfix"></div>
                   	 <div class="tab-pane fade-in active" role="tabpannel" id="Home">
                   	 	<div class="panel panel-default">
                   	 		<div class="table-responsive">
                     	 			<table class="table table-striped b-t b-light">
                     	 				<thead class="panel-heading">
                              <header class="panel-heading">
                              <span class="h3"> STUDENT FEE REGISTER </span>
                                <span class=" pull-right form-inline ">
                                    <input class="form-control input-sm m-b" placeholder="Search" type="text">
                                    <a class="btn btn-sm btn-info m-b"> Total: N525,653</a>
                                </span>
                              </header>
                              <div class="row wrapper">
                                <div class="col-xs-6 m-b-xs">
                                  <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                                  </div>
                                <div class="col-xs-6 text-right">                         
                                  <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print</button>
                                  <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i>  Excel</button>

                                  <select class="input-sm form-control w-xxs inline v-middle">
                                    <option value="">10</option>
                                            <option value="">20</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">200</option>
                                  </select>
                                </div>
                              </div>
                                <!-- <tr>
                                  <th colspan="6"><span class="h3">STUDENT PAYMENT REGISTER</span></th>
                                  <th colspan="3" class="text-right">
                                    <button class="btn btn-small btn-success"><i class="fa fa-external-link"></i> Excel</button>
                                    <button class="btn btn-small btn-info">Total #0</button>
                                  </th>
                                </tr>
                                 <tr>
                                  <th colspan="7"><span class="h5 text-info">From 02-Feb-2016 To 02-Mar-2016</span></th>
                                  <th colspan="2" class="text-right">
                                    <form action="" method="POST" class="form-inline" role="form">
                                      <div class="form-group">
                                        <label class="" for="">Items per page</label>
                                        <select name="" id="input" class="form-control" required="required">
                                          <option value="">10</option>
                                          <option value="">20</option>
                                          <option value="">50</option>
                                          <option value="">100</option>
                                          <option value="">200</option>
                                        </select>
                                      </div>
                                    </form>
                                  </th>
                                </tr> -->
                     	 					<tr>
  						                   <th width="20"><input type="checkbox"></th>
  						                    <th class="th-sortable" data-toggle="class">No.</th>
  						                    <th>Date</th>
  						                    <th>Teller No</th>
  						                    <th>Student Name</th>
  						                    <th>Bank/Account</th>
  						                    <th>Term/Session</th>
  						                    <th>System Time</th>
  						                    <th>Amount Paid</th>
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
                     	 					</tr>
                     	 				</tbody>
                     	 			</table>
                   	 		</div>
                   	 	</div>
                   	 </div>
                   	  <!--- second tab   -->
                        
                    <div class="tab-pane fade-in" role="tabpannel" id="Main">
                      <div class="panel panel-default">
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                              <thead class="panel-heading">
                              <header class="panel-heading">
                              <span class="h3"> MAIN FEE REGISTER </span>
                                <span class="pull-right form-inline ">
                                    <input class="form-control input-sm m-b" placeholder="Search" type="text">
                                    <button class="btn btn-sm btn-info m-b"> Total: N525,653</button>
                                </span>
                              </header>
                              <div class="row wrapper">
                                <div class="col-sm-5 m-b-xs">
                                  <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                                  </div>
                                <div class="col-sm-7 text-right">                         
                                  <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print</button>
                                  <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i>  Excel</button>

                                  <select class="input-sm form-control w-xxs inline v-middle">
                                    <option value="">10</option>
                                            <option value="">20</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">200</option>
                                  </select>
                                </div>
                              </div>
                                <tr>
                                 <th width="20"><input type="checkbox"></th>
                                  <th class="th-sortable" data-toggle="class">No.</th>
                                  <th>Date</th>
                                  <th>Teller No</th>
                                  <th>Student Name</th>
                                  <th>Bank/Account</th>
                                  <th>Term/Session</th>
                                  <th>System Time</th>
                                  <th>Amount Paid</th>
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
                                </tr>
                              </tbody>
                            </table>
                        </div>
                      </div>
                     </div>
                      <!--- second tab   -->
               	  	<div class="step-pane tab-pane fade-in" role="tabpannel" id="Lesson">
                    	<div class="panel panel-default">

                   	 		<div class="table-responsive">
                          <table class="table table-striped b-t b-light">
                              <thead class="panel-heading">
                              <header class="panel-heading">
                              <span class="h3"> LESSON FEE REGISTER </span>
                                <span class="pull-right form-inline ">
                                    <input class="form-control input-sm m-b" placeholder="Search" type="text">
                                    <button class="btn btn-sm btn-info m-b"> Total: N525,653</button>
                                </span>
                              </header>
                              <div class="row wrapper">
                                <div class="col-sm-5 m-b-xs">
                                  <span class="h4 text-info">From 02-Feb-2016 To 02-Mar-2016</span>

                                  </div>
                                <div class="col-sm-7 text-right">                         
                                  <button class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Print</button>
                                  <button class="btn btn-sm btn-success"><i class="fa fa-external-link"></i>  Excel</button>

                                  <select class="input-sm form-control w-xxs inline v-middle">
                                    <option value="">10</option>
                                            <option value="">20</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">200</option>
                                  </select>
                                </div>
                              </div>
                                <tr>
                                 <th width="20"><input type="checkbox"></th>
                                  <th class="th-sortable" data-toggle="class">No.</th>
                                  <th>Date</th>
                                  <th>Teller No</th>
                                  <th>Student Name</th>
                                  <th>Bank/Account</th>
                                  <th>Term/Session</th>
                                  <th>System Time</th>
                                  <th>Amount Paid</th>
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
                                </tr>
                              </tbody>
                            </table>
                   	 		</div>
                   	 	</div>
                    </div>
                      <!--- third tab   -->
                  </div>

				</div>
              <div class="clearfix"></div>

			</div>
		
    </div>
  </div>
 </div>

<div class="modal fade" id="searchrange">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-search"></i>    Search Range</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
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
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="panel-body">
                        <tr>
                          <td>
                            <input type="text" class="form-control" required>
                          </td>
                          <td>
                            <input type="text" class="form-control" requiredss>
                          </td>
                          <td><button class="btn btn-info">Go</button></td>
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
    min-height: 400px !important;
}
</style>