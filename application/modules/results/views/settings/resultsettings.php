<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<!-- content -->
<div class="app-content">
	<div ui-butterbar></div>
	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	<div class="app-content-body fade-in-up">
		<!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">
		  
		  <h1 class="m-n font-thin h3">Result Settings</h1>
		  <small> Get the all information about Examinations here. </small>
		</div>
		
		<div class="wrapper-md">
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
			<?php }else{ ?>
			<div class="alert alert-info fade in widget-inner">
                <button type="button" class="close" data-dismiss="alert">x</button>
              Please Enter correct Information      
            </div>
			<?php } ?>
			<div class="controlB text-center m-b-lg" role="tabpanel">
		      	<ul role="tablist">
		          	<li role="presentation">
		          	<a href="#comments" class="btn btn-sm btn-info" aria-controls="comments" role="tab" data-toggle="tab">
		          		<img src="<?php echo base_url();?>img/pen.png"  alt="...">
		          		<span>Comment Settings</span></a>
		          	</li>
		             <li role="presentation">
		             	<a href="#scores" class="btn btn-sm btn-info" aria-controls="scores" role="tab" data-toggle="tab">
		             		<img src="<?php echo base_url();?>img/attibutes.png"  alt="...">
		             		<span>Scores Settings</span>
		             	</a>
		             </li>
		              <li role="presentation" class="active">
		              	<a href="#general" class="btn btn-sm btn-info" aria-controls="general" role="tab" data-toggle="tab">
		              		<img src="<?php echo base_url();?>img/billing.png"  alt="...">
		              		<span>general Settings</span>
		              	</a>
		              </li>
		              
		          </ul>
		      </div>
			<div class="tab-content">
				<section class="panel panel-default tab-pane" id="comments" role="tabpanel">
					<div class="panel-heading">
						<h2 class="panel-title">Comments settings</h2>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped b-t b-light  panel panel-default">
								<thead class="panel-heading">
									<tr>
										<th>No</th>
										<th>From</th>
										<th>To</th>
										<th>Principal's Comment</th>
										<th>Promotion Comment</th>
										<th>Class Teacher's Comment</th>
										<th>Hostel Master's Comment</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$i = 1;
								foreach($comments as $comment){
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td class='start_value'><?php echo $comment['start_value']; ?></td>
										<td class='end_value'><?php echo $comment['end_value']; ?></td>
										<td class='principal_comment'><?php echo $comment['principal_comment']; ?></td>
										<input type='hidden' class='comment_id' name='comment_id' value="<?php echo $comment['id']; ?>">
										<td class='promotion_comment'><?php echo $comment['promotion_comment']; ?></td>
										<td class='class_teacher_comment'><?php echo $comment['class_teacher_comment']; ?></td>
										<td class='hostel_master_comment'><?php echo $comment['hostel_master_comment']; ?></td>
										<td>	
											<a class="btn btn-sm btn-rounded btn-icon btn-default editc" title="edit" data-toggle="modal" href='#modal-comment'><i class="glyphicon glyphicon-edit text-info"></i></a>								
								      <a class="btn btn-sm btn-rounded btn-icon btn-default" title="delete"><i class="fa fa-times text-danger"></i></a>
								     </td>
									</tr>
									<?php $i++; }?>
								</tbody>
							</table>
						</div>	
					</div>
					<div class="panel-footer clearfix">
						<span class="pull-right">
							<a class="btn btn-primary btn-addon" data-toggle="modal" href='#modal-comment'><i class="fa fa-plus"></i>Add Comment</a>
						</span>
					</div>
				</section>

				<section class="panel panel-default tab-pane" id="scores" role="tabpanel">
					<div class="panel-heading">
						<h2 class="panel-title">Exams and Scores Settings</h2>
					</div>
					<div class="table-responsive">
						<table class="table table-striped b-t b-light">
							<thead>
								<tr>
									<th>Exam Name</th>
									<th>Exam Score</th>
									<th>Exam Pass</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							$i = 1;
							foreach($scores as $score){
							?>
								<tr>
									<td ><?php echo strtoupper($score['score_type']); ?></td>
									<td class='score_max'><?php echo $score['score_max']; ?></td>
									<td class='score_pass'><?php echo $score['score_pass']; ?></td>
									<input type='hidden' class='score_id' value='<?php echo $score['id']; ?>'  >
									<input type='hidden' class='score_type' value='<?php echo $score['score_type']; ?>'  >
									<td>
										<a class="btn btn-sm btn-rounded btn-icon btn-default editscore" title="edit" data-toggle="modal" href='#modal-scores'><i class="glyphicon glyphicon-edit text-info"></i></a>								
								       <a class="btn btn-sm btn-rounded btn-icon btn-default" title="delete"><i class="fa fa-times text-danger"></i></a> 
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
					<div class="panel-footer clearfix">
						<div class="pull-right m-r-xxl">
							<a class="btn m-b-xs btn-sm btn-info btn-addon" data-toggle="modal" href='#modal-scores'><i class="fa fa-plus"></i>Add Scores</a>
						</div>
					</div>
				</section>


				<section class="panel panel-default tab-pane active" id="general" role="tabpanel">
				<form role="form" action="<?php echo base_url(); ?>core/save_settings/results/general" method="POST" enctype='multipart/form-data'>
					<div class="panel-heading">
						<h2 class="panel-title">General settings</h2>
					</div>
					<div class="panel-body">
						
							 <div class="row">
							 	<div class="col-sm-6">
							 		<div class="panel panel-default">
							 			<div class="panel-heading">
							 				<h3 class="panel-title"></h3>
							 			</div>
							 			<div class="panel-body">
							 				<div class="form-group">
									          	<label class="col-sm-4 control-label">View/Hide position</label>
									          	<div class="col-sm-8">
									            	
									            	<label class="i-switch i-switch-lg bg-info m-t-xs m-r">
									              		<input type="checkbox" name="result_position_status">
									              		<i></i>
									            	</label>
									          	</div>
									        </div>
									        <div class="form-group">
									          	<label class="col-sm-4 control-label">View/Hide result</label>
									          	<div class="col-sm-8">
									            	
									            	<label class="i-switch i-switch-lg bg-info m-t-xs m-r">
									              		<input type="checkbox" name="result_view_status">
									              		<i></i>
									            	</label>
									          	</div>
									        </div>


									        <div class="form-group">
									          	<label class="col-sm-4 control-label">Allow Debtors to view result</label>
									          	<div class="col-sm-8">
									            	
									            	<label class="i-switch i-switch-lg bg-info m-t-xs m-r">
									              		<input type="checkbox" name="result_debtors_status" >
									              		<i></i>
									            	</label>
									          	</div>
									        </div>

									        <div class="form-group">
									        <label>Result Format</label>
									        	<select name="result_format" id="input" class="form-control" required="required">
									        		<option <?php echo set_select('result_format','cgpa',((('cgpa') == ($module_settings['result_format']))?true:false)); ?> value="cgpa">C.G.P.A</option>
									        		<option <?php echo set_select('result_format','grading',((('grading') == ($module_settings['result_format']))?true:false)); ?> value="grading">GRADING</option>
									        	</select>
									        </div>



							 			</div>	
							 		</div>
							 	</div>
							 	<div class="col-sm-6">
							 		<div class="panel panel-default">
							 			<div class="panel-heading">
							 				<h3 class="panel-title"></h3>
							 			</div>
							 			<div class="panel-body">
							 				<div class="form-group">
							 					<label>Next Term Begins</label>
							 					<input type="text" name="result_term_begin" value="<?php echo $module_settings['result_term_begin']; ?>" class="form-control date" placeholder="">
							 				</div>
							 				<div class="form-group">
							 					<label>Next Term ends</label>
							 					<input type="text" value="<?php echo $module_settings['result_term_begin']; ?>" name="result_term_end" class="form-control date" placeholder="">
							 				</div>

							 				<div class="form-group">
							 					<label>Principal's Signature: </label>
							 					<label class="file">
							 						<input type="file" id="file">
							 						<span class="file-custom"></span>
							 					</label>
							 				</div>
							 			</div>
							 		</div>
							 	</div>
							 </div>
						
					</div>
					<div class="panel-footer clearfix">
						<span class="pull-right">
							<button class="btn btn-primary btn-addon" type="submit"><i class="fa fa-save"></i> Save</button>
						</span>

					</div>
					</form>
				</section>
			</div>
			
		</div>
	</div>
</div>
<!-- /content -->

    <link rel="stylesheet" href="<?php echo base_url();?>css/results.css" type="text/css" />



<div class="modal fade" id="modal-comment">
	<div class="modal-dialog">
		<div class="modal-content panel panel-default">
			<div class="modal-header panel-heading">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title panel-title comments"><i class="fa fa-plus fa-2x"></i>  Add Comment</h4>
			</div>
			<form id="comment" action="<?php echo base_url() ?>results/save_comment" method="POST" role="form">
				<div class="modal-body panel-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-2">From</label>
								<input type="text" class="form-control" name="start_value">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label >To</label>
								<input type="text" class="form-control" name="end_value">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Principal's Comment</label>
								<textarea name="principal_comment" id="input" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Class Teacher's Comment</label>
								<textarea name="class_teacher_comment" id="input" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Promotion Comment</label>
								<textarea name="promotion_comment" id="input" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Hostel Master's Comment</label>
								<textarea name="hostel_master_comment" id="input" class="form-control" rows="3" required="required"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer panel-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary btn-addon"><i class="fa fa-save"></i>Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-scores">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title score"><i class="fa fa-plus"></i> Add New Score</h3>
			</div>
			<form id="score" action="<?php echo base_url(); ?>results/save_score" method="POST" role="form">
				<div class="modal-body">
					<div class="form-group score_type">
						<label for="input" class="col-sm-5 control-label">Score Type:</label>
						<select name="score_type" id="input" class="form-control " required="required">
							<option value="ca">Test</option>
							<option value="exam">Exam</option>
							<option value="total">Total Score</option>
						</select>
					</div>
					<duv class="form-group">
						<label>Max Score</label>
						<input type="number" name="score_max" class="form-control">
					</duv>	
					<duv class="form-group">
						<label>Pass Score</label>
						<input type="number" name="score_pass" class="form-control">
					</duv>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn m-b-xs btn-sm btn-info btn-addon"><i class="fa fa-save"></i>Save</button>
				</div>
			</form>
		</div>
	</div>
</div>




<style type="text/css">
	li.active .btn{
		background: #19a9d5;
	}
</style>





<!-- 
<div class="checkbox">
              <label class="i-checks">
                <input checked="" value="" type="checkbox">
                <i></i>
                Option two checked
              </label>
            </div>
 -->



       <!--  <div class="form-group">
          	<label class="col-sm-2 control-label">Switch size</label>
          	<div class="col-sm-10">
            	<label class="i-switch i-switch-md bg-info m-t-xs m-r">
              		<input checked="" type="checkbox">
              		<i></i>
            	</label>
            	<label class="i-switch i-switch-lg bg-dark m-t-xs m-r">
              		<input type="checkbox">
              		<i></i>
            	</label>
          	</div>
        </div> -->
        <script type="text/javascript">
        $(".editscore").click(function(){
                $(".score").html('<i class="fa fa-pencil"></i> Edit Score'); 
                var row = $(this).closest('tr');
                var a = row.find(".score_max").text();
                var b = row.find(".score_pass").text();
                var c = row.find(".score_type").val();
                var sid = row.find(".score_id").val();
                $('#score').attr('action', "<?php echo base_url(); ?>results/save_score/"+sid);
                 $("input[name='score_max']").val(a);
                 $("input[name='score_pass']").val(b);
                 $("div.score_type select").val(c);
                
            });
        	$(".editc").click(function(){
                $(".comments").html('<i class="fa fa-pencil"></i> Edit Comment'); 
                var row = $(this).closest('tr');
                var a = row.find(".start_value").text();
                var b = row.find(".end_value").text();
                var c = row.find(".principal_comment").text();
                var d = row.find(".promotion_comment").text();
                var e = row.find(".class_teacher_comment").text();
                var f = row.find(".hostel_master_comment").text();
                var cid = row.find(".comment_id").val();
                $('#comment').attr('action', "<?php echo base_url(); ?>results/save_comment/"+cid);
                 // $("div.sch_div_id select").val(sdid);
                 $("input[name='start_value']").val(a);
                 $("input[name='end_value']").val(b);
                 $("textarea[name='principal_comment']").val(c);
                 $("textarea[name='promotion_comment']").val(d);
                 $("textarea[name='class_teacher_comment']").val(e);
                 $("textarea[name='hostel_master_comment']").val(f);
                
            });
        <?php 
        if($module_settings['result_position_status'] == 'on'){?>
        	$("input[name='result_position_status']").attr("checked", true);
        <?php } if($module_settings['result_view_status'] == 'on'){?>
        	$("input[name='result_view_status']").attr("checked", true);
        <?php } if($module_settings['result_debtors_status'] == 'on'){?> 
        	$("input[name='result_debtors_status']").attr("checked", true);
        <?php }
        ?>
        	 $('form').submit(function(e){
    var b = $("input:checkbox:not(:checked)");
    $(b).each(function () {
        $(this).val('off'); //Set whatever value you need for 'not checked'
        $(this).attr("checked", true);
    });
    return true;
});
        </script>