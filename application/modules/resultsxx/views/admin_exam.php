<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
		<div class="bg-light lter b-b wrapper-md">
		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="fa fa-gear"></i>Results Settings </button>
		  </span>
		  <h1 class="m-n font-thin h3">Examination Records</h1>
		  <small> Get the all information about Examinations here. </small>
		</div>
		<div class="wrapper-md">
			<div class="controlB text-center m-b-lg">
            	<ul>
                	<li><a href="results/scores" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/pen.png"  alt="..."><span>Enter Scores</span></a></li>
                    <li><a href="results/reportsheet" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/attibutes.png"  alt="..."><span>Report sheets</span></a></li>
                    <li><a href="results/scoresheet" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/billing.png"  alt="..."><span>Score Sheets</span></a></li>
                    <li><a href="" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/advertising.png"  alt="..."><span>Broad Sheet</span></a></li>
                    <li><a href="" title="" class="btn btn-sm btn-info"><img src="<?php echo base_url();?>img/sign-up.png"  alt="..."><span>Annual Promotion</span></a></li>
                </ul>
            </div>
            <!-- <div class="horControlB m-b">
            	<ul>					
                	<li><a href="" title="" class="btn btn-xs btn-info"><img src="<?php echo base_url();?>img/settings.png"  alt="..."><span>Exam Settings</span></a></li>
                    <li><a href="" title="" class="btn btn-xs btn-info"><img src="<?php echo base_url();?>img/statistics.png"  alt="..."><span>Check Statistics</span></a></li>
                    <li><a href="" title="" class="btn btn-xs btn-info"><img src="<?php echo base_url();?>img/lock.png"  alt="..."><span>Result Access</span></a></li>
                </ul>
            </div> -->
            <section class="panel panel-default">
		                <header class="panel-heading">
		                  CLASSES BROADSHEETS
		                </header>
		                <div class="table-responsive">
		                  <table class="table table-striped table-hover b-t b-light">
		                    <thead>
		                      <tr>
		                        <th class="th-sortable" data-toggle="class">No.</th>
		                        <th>Class Details</th>
		                        <th>Class Teacher</th>
		                        <th>No Of Students</th>
		                        <th>Process Status</th>
		                        <th>Print Broadsheet</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                      <tr>
		                        <td>1</td>
		                        <td>JSS1 A</td>
		                        <td>MR. JAMIU S.O</td>
		                        <td>10</td>
		                        <td>1</td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> VIEW BROADSHEET</a></td>
		                      </tr>
		                      <tr>
		                        <td>1</td>
		                        <td>JSS1 A</td>
		                        <td>MR. JAMIU S.O</td>
		                        <td>10</td>
		                        <td>1</td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> VIEW BROADSHEET</a></td>
		                      </tr>
		                     <tr>
		                        <td>1</td>
		                        <td>JSS1 A</td>
		                        <td>MR. JAMIU S.O</td>
		                        <td>10</td>
		                        <td>1</td>
		                        <td><a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye"></i> VIEW BROADSHEET</a></td>
		                      </tr>
		                      
		                    </tbody>
		                  </table>
		                </div>
		                <footer class="panel-footer">
					      <div class="row">
					        <div class="col-sm-4 col-md-offset-4  text-center">
					          <small class="text-muted inline m-t-sm m-b-sm">showing 20 of 20 items</small>
					        </div>
					      </div>
					    </footer>
		              </section>
		
    </div>
  </div>
 </div>

    <!-- /content -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />



