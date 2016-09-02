<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<!-- content -->
<div class="app-content">
	<div ui-butterbar></div>
	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	<div class="app-content-body fade-in-up">
		<!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">
			<h1 class="m-n font-thin h3">Admission Letter View</h1>
		</div>
		<div class="wrapper-md">
			<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-info fade in widget-inner text-center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <?php echo $_SESSION['success']; ?>
        </div>
        <?php }elseif($this->session->flashdata('failed')){ ?>
          <div class="alert alert-info fade in widget-inner text-center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <?php echo $_SESSION['failed']; ?>
        </div>

          <?php }?>
			<div class="row m-b doc-buttons">
				<a href="<?php echo base_url("admission/admin/create_admission_letter"); ?>" class="btn btn-primary "><i class="fa fa-plus"></i>Add Admission Letter</a>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Admission Letter View
				</header>
				<div class="table-responsive">
					<table class="table table-striped b-t b-light">
						<thead>
							<tr>
								<th class="th-sortable" data-toggle="class">No.</th>
								<th>Name</th>
								<th>Status</th>
								<th>Session</th>
								<th>Edit</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; foreach ($view_admission_letter as $admission_letter): ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $admission_letter['title']; ?></td>
								<th><?php echo $admission_letter['status']; ?></th>
								<td><?php echo $admission_letter['session_name']; ?></td>
								<td><a href="#admission-modal<?php echo $admission_letter['id']; ?>" data-toggle="modal"  class="btn btn-xs btn-default">View</a>
								<div class="modal fade" id="admission-modal<?php echo $admission_letter['id']; ?>">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header ng-scope">
												<h3 class="modal-title"> <i class="fa fa-plus"></i> Edit Admission Letter</h3>
											</div>
			
											<form action="<?php echo base_url(); ?>admission/create_admission_letter/<?php echo $admission_letter['id']; ?>" class="bs-example form-horizontal ng-pristine ng-valid clearfix" method="post">
												<div class="col-sm-12 ">
													<div class="modal-body">
														<label>Title</label>
														<input type="text" id="" name="title" value="<?php echo $admission_letter['title']; ?>" placeholder="" class="form-control" required="">
													</div>
													<div class="col-sm-12 ">
														<label>Session</label>
													<select class="form-control " name="session_id" required="" >
												        <option value="">Select</option>
												        <?php
												  foreach ($app_sessions as $app_session) {
												      ?>
												      <option <?php echo set_select('session_id', "$app_session[session_id]",((($admission_letter['session_id']) == ($app_session['session_id']))?true:false)); ?> value="<?php echo $app_session['session_id']; ?>"><?php echo $app_session['session_name']; ?> Session
												      </option>
												      <?php
												  }
												  ?>
												    </select>
												</div>
													<div class="col-sm-12 ">
														<label>Content</label>
														<div class="col-sm-12">
															<textarea id="edit"  name="content"><?php echo $admission_letter['content']; ?></textarea>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Save changes</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</form>
											</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div>
									</td>
									<td>
										<?php if($admission_letter['status'] == 'active'){?>
		                        <a href="<?php echo base_url(); ?>core/status/admission_letter/<?php echo $admission_letter['id']; ?>/inactive/status" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Deactivate</a>
		                        <?php }else{?>
		                        <a href="<?php echo base_url(); ?>core/status/admission_letter/<?php echo $admission_letter['id']; ?>/active/status" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Activate</a>
		                        <?php }?>
										
									</td>
								</tr>
								<?php $i++; endforeach; ?>
							</tbody>
						</table>
					</div>					
				</section>
			</div>
		</div>
		<!-- /content -->