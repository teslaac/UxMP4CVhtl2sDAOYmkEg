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
		  	<button class="btn btn-default btn-addon  "><i class="icon-user"></i>200</button>
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i>200</button>
		  </span>
		  <h1 class="m-n font-thin h3"><?php echo $title ?> </h1>
		  <small> View the Tests and Exams score for all the student.</small>
		</div>
		<div class="wrapper-md">
			<div class="panel panel-default">
				<div class="table-responsive">
					<form action="" method="post">
					 <table class="table table-striped b-t b-light">
		                    <thead class="panel-heading">
								<tr>
									<th>Select Current Class</th>
									<th>Select Target Term</th>
									<th></th>
								</tr>
		            		</thead>
		            		<tbody class="panel-body">
		            			<tr>
		            				<td>
		            					<select name="cdid" id="input" class="form-control cdid" required="required">
                              <option <?php echo set_select('cdid','select',TRUE); ?> value="select">Select</option>
                  <?php
                  foreach ($classes as $class) {
                    ?>
                    <option <?php echo set_select('cdid', "class[id]"); ?> value="<?php echo $class['id'];?>"><?php echo $class['class_details']; ?>
                    </option>
                    <?php
                  }
                  ?>
                            </select>
		            				</td>
		            				<td>
		            					<select name="ts_id" id="ts_id" class="form-control ts_id" required="required">
                            
                             <option <?php echo set_select('ts_id','',TRUE); ?> value="">Select</option>
                  <?php
                  foreach ($ts_details as $ts_detail) {
                    ?>
                    <option <?php echo set_select('ts_id', "ts_detail[ts_id]"); ?> value="<?php echo $ts_detail['ts_id'];?>"><?php echo $ts_detail['term_name']."-".$ts_detail['session_name']; ?>
                    </option>
                    <?php
                  }
                  ?>
                            </select>
		            				</td>
		            				<td class="text-center">
		            					<input type="button" id="go" class="btn btn-info" name="" value="Get Class List"><span id="msg"></span>
		            				</td>
		            			</tr>
		            		</tbody>

		            </table>
		            </form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					 Student Records Table for  <span id="heading" class="req ">  </span> 
				</div>
				<div class="table-responsive">
					<table class="table table-hover table-striped b-t b-light">
						<thead class="panel-heading">
							<tr>
								<th>No</th>
								<th>Surname</th>
								<th>First Name</th>
								<th>Other Names</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="panel-body" id="students">
							
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body text-right">
					<a href="report_sheet/print_all_result" class="btn btn-info btn-lg"><i class="fa fa-print"></i> PRINT ALL</a>
				</div>
			</div>
		</div>
 	 </div>
 </div> 

     <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />


<script type="text/javascript">
		$(document).ready(function(){
	$("#go").click(function(){
      var selectedClass = $(".cdid option:selected").val();
      var selectedClassText = $(".cdid option:selected").text();
      var selectedTsText = $(".ts_id option:selected").text();
      var selectedTs = $(".ts_id option:selected").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>results/get_student_api",
        data: { cdid : selectedClass, ts_id : selectedTs } 
      }).done(function(data){
        if(data != ''){
          $('#msg').html('<div id="alertFadeOut" style="color: green">Data Loaded!</div>'); // Diplay message with a fadeout
        }else{
          $('#msg').html('<div id="alertFadeOut" style="color: red">No Data Found!</div>'); // Diplay message with a fadeout
        }
        $('#alertFadeOut').fadeOut(3000, function () {
                          $('#alertFadeOut').text('');
                      });
        $("#heading").html(selectedClassText+' '+ ' - '+selectedTsText);
        console.log(data);
        $("#students").html(data);
      });
    });  

  });
</script>