<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">

		  <span class="pull-right" >
		  	<a href="<?php echo base_url(); ?>students/add"><button class="btn btn-default btn-addon  "><i class="icon-user"></i></i>FULL REGISTRATION</button></a>
		  </span>

		  <h1 class="m-n font-thin h3">Quick Students Registration</h1>

		</div>
		<?php
			if(!empty($_SESSION['failed'])){?>
				<div class="alert alert-danger fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['failed']; ?>
				</div>
			<?php }elseif(!empty($_SESSION['success'])){?>
				<div class="alert alert-success fade in widget-inner">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<?php echo $_SESSION['success'];?>
				</div>
			<?php }
			echo validation_errors();
			?>
		<div class="wrapper-md">

		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">QUICK REGISTRATION</div>
	        <form action="<?php echo base_url(); ?>students/quick_reg" class="bs-example form-horizontal ng-pristine ng-valid" method='post'>														
	        <div class="panel-body">
	          	
					<div class="form-group">
						<label class="col-sm-4 control-label">No of Student: </label>
						<div class="col-sm-8">
							<input class="form-control" name="no" required="" type="number">
						</div>
					</div>
								          
	          
	        </div>
	       <div class="panel-footer text-right">
	       	    <button class="btn btn-primary btn-addon ">Process</button>
	       </div>
	       </form>
	      </div>
		</div>
		<div class="col-sm-6">
	      <div class="panel panel-default">
	        <div class="panel-heading ">UPLOAD FROM EXCEL</div>
	        <form action="<?php echo base_url(); ?>students/quick_reg" class="bs-example form-horizontal ng-pristine ng-valid" method='post' enctype="multipart/form-data">														
	        <div class="panel-body">
	          	
					<div class="form-group">
						<label class="col-sm-4 control-label">Choose File</label>
						<div class="col-sm-8">
							<input class="form-control" name="file" required="" type="file">
						</div>
					</div>
								          
	          
	        </div>
	       <div class="panel-footer text-right">
	       	    <button class="btn btn-primary btn-addon ">Import</button>
	       </div>
	       </form>
	      </div>
		</div>
		<form action="<?php echo base_url(); ?>students/quick_register/<?php echo $no; ?>" class="bs-example form-horizontal ng-pristine ng-valid" method='post'>	
		<div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Enter the Students Information
        </div>
        <table class="table table-striped m-b-none">
          <thead>
            <tr>
              <th>No</th>
              <th>Surname</th>
              <th>First Name</th>
              <th>Other Name</th>
              <th>Adminssion No</th>
              <th>Email</th>
              <th>Class</th>
              <th>Gender</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=1; $i <= $no ; $i++) {

            	$sname = $fname = $mname = $admission_no = $email = $class_details = $gender = '';
          	if(!empty($loaded)){
          		if(empty($r)){
          			$r = 2;
          		}
          		if(isset($loaded['values'][$r]["A"])){
          			$sname = $loaded['values'][$r]["A"];
          		}
          		if(isset($loaded['values'][$r]["B"])){
          			$fname = $loaded['values'][$r]["B"];
          		}
          		if(isset($loaded['values'][$r]["C"])){
          			$mname = $loaded['values'][$r]["C"];
          		}
          		if(isset($loaded['values'][$r]["D"])){
          			$admission_no = $loaded['values'][$r]["D"];
          		}
          		if(isset($loaded['values'][$r]["E"])){
          			$email = $loaded['values'][$r]["E"];
          		}
          		if(isset($loaded['values'][$r]["F"])){
          			$gender = strtolower($loaded['values'][$r]["F"]);
          		}
          		if(isset($loaded['values'][$r]["G"])){
          			$class_details = $loaded['values'][$r]["G"];
          		}
          		//print_r($loaded['values']);
          
          		$r++;
          	}






            	?> 

            <tr>
              <td>
                <?php echo $i;?>
              </td>
              
              <td>					
              <?php echo form_error("sname$i"); ?>			
              		<input class="form-control" value='<?php echo set_value("sname$i",$sname); ?>' name="sname<?php echo $i;?>" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value='<?php echo set_value("fname$i",$fname); ?>' name="fname<?php echo $i;?>" required="" type="text">
			  </td>
			  <td>							
              		<input class="form-control" value='<?php echo set_value("mname$i",$mname); ?>' name="mname<?php echo $i;?>" required="" type="text">
			  </td>
			   <td>							
              		<input class="form-control" value='<?php echo set_value("admission_no$i",$admission_no); ?>' name="admission_no<?php echo $i;?>" required="" type="text">
			  </td>
			   <td>							
              		<input class="form-control" value='<?php echo set_value("email$i",$email); ?>' name="email<?php echo $i;?>" required="" type="email">
			  </td>
			  <td>
			  <select class="form-control state" name="admission_class<?php echo $i;?>" >
									<option <?php echo set_select('admission_class','',TRUE); ?> value=" ">Select</option>
									<?php
									foreach ($classes as $class) {
										?>
										<option <?php echo set_select('admission_class', "$class[level_id]-$class[id]",((("$class[level_id]-$class[id]") == ($class_details))?true:false)); ?> value="<?php echo $class['level_id']; ?>-<?php echo $class['id']; ?>"><?php echo $class['class_details']; ?>
										</option>
										<?php
									}
									?>
								</select>
			  </td>
			  <td>							
				<div class="radio">
	              <label class="i-checks">
	                <input <?php echo set_radio("gender$i","male",((("male") == ($gender))?true:false)); ?> name="gender<?php echo $i;?>" value="male" type="radio">
	                <i></i>
	                Male 
	              </label>
	              <label class="i-checks">
	                <input <?php echo set_radio("gender$i","female",((("female") == ($gender))?true:false)); ?> name="gender<?php echo $i;?>" value="female" type="radio">
	                <i></i>
	                Female
	              </label>
	            </div>			  
            </td>
            </tr>
           
           

            </tr>
            <?php  }?>
          </tbody>
        </table>
      </div>
    </div>

	    <div class="col-md-12">

	    	<div class="panel panel-default">
	    	<div class="panel-heading ">Other Fields</div>
	    		<div class="panel-body">
		    		<div class="col-md-6">
		    			<div class="form-group">			          
				          <label class="col-sm-2 control-label" style="padding-top: 5px;">Admission Date</label>
				          <div class="col-sm-10">
				          	<input type="hidden" name="usertype" value="student">
				            <input class="form-control date" value="" name="admission_date" required="" type="text">
				          </div>
				       </div>
			        </div>
			        <div class="col-md-6">

			    		<div class="form-actions text-right">
			    			<button class="btn btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
			            </div>
			        </div>
	            </div>
	        </div>
        </div>
        </form>
		<div class="clearfix"></div>

    </div>
    <!-- /content -->


