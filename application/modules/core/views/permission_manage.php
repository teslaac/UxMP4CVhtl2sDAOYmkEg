<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		       
				<div class="bg-light lter b-b wrapper-md">
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Manage Permissions</h1>
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
                              <?php echo $_SESSION['success']; ?>
                          </div>
                      <?php }
                      	echo validation_errors();
                      ?>
		            <div class="">
	                	<div role="tabpanel">
	                    <!-- Nav tabs -->
	<form class="" action="<?php echo base_url() ?>core/permissions_manage" role="form" method="post">
		                   <div class="form-group m-t">
				                <div class="table-responsive">
				                  <div class="panel panel-default">
				                    <table class="table table-striped b-t b-light">
				                      <thead class="panel-heading">
				                        <tr>
				                          <th>User Type</th>
				                          <th>Manage Roles</th>
				                          <th>Select User</th>
				                          <th></th>
				                        </tr>
				                      </thead>
				                      <tbody class="panel-body">
				                        <tr>
				                          <td class="form-inline">
				                          <label class="i-checks">
				                            <input name="mode" <?php echo set_checkbox('mode','group',((('group') == ($mode))?true:false)); ?> id="ruser_type" type="radio" value="group">
				                            <i></i>
				                          </label>
				                           <select class="form-control" name="user_id1">
				                              <option <?php echo set_select('user_id1','admin',((('admin') == ($user_id))?true:false)); ?> value="admin">Admin</option>
				                              <option <?php echo set_select('user_id1','student',((('student') == ($user_id))?true:false)); ?> value="student">Student</option>
				                              <option <?php echo set_select('user_id1','staff',((('staff') == ($user_id))?true:false)); ?> value="staff">Staff</option>
				                              <option <?php echo set_select('user_id1','prospective',((('prospective') == ($user_id))?true:false)); ?> value="Prospective">Prospective</option>
				                              <option <?php echo set_select('user_id1','reader',((('reader') == ($user_id))?true:false)); ?> value="reader">Reader</option>
				                            </select>
				                          </td>
				                          <td class="form-inline">
				                          <label class="i-checks">
				                            <input name="mode" <?php echo set_checkbox('mode','role',((('role') == ($mode))?true:false)); ?> id="rrole" type="radio" value="role">
				                            <i></i>
				                          </label>
				                           <select class="form-control" name="user_id2">
				                           	<option value="">Select</option>
                                        <?php
                                        foreach ($aroles as $arole) {
                                            ?>
                                            <option <?php echo set_select('user_id2',"$arole[id]",((("$arole[id]") == ($user_id))?true:false)); ?> value="<?php echo $arole['id']; ?>"><?php echo $arole['role_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
				                            </select>
				                          </td>
				                          <td class="form-inline ">
				                            <label class="i-checks">
				                              <input name="mode" <?php echo set_checkbox('mode','user',((('user') == ($mode))?true:false)); ?> id="ruser_id" type="radio" value="user">
				                              <i></i>
				                            </label>
				                            <select class="form-control m-r-sm m-b-sm" name="user_id3">
				                            	<option value=" ">Select</option>
				                            <?php foreach($users as $user){?>
				                              <option <?php echo set_select('user_id3',$user['user_id'],((($user['user_id']) == ($user_id))?true:false)); ?> value="<?php echo $user['user_id'] ?>"><?php echo ucfirst($user['sch_id']).'-'.$user['id'].' '. $user['fname'].' '.$user['lname'];?> </option>
				                              <?php }?>
				                            </select>
				                          </td>
				                          <td><button class="btn btn-info">Go</button></td>
				                        </tr>
				                      </tbody>
				                    </table>
				                  </div>
				                </div>
				                
				      		</div>
				      		</form> 
				      		
	                    <!-- Tab panes -->
	                    <?php if(!empty($user_id)){?>
	                    <div class="panel panel-default">
									<div class="panel-heading clearfix">
											Manage Permissions (<?php echo $user_id; ?>) 
									</div>
			<form class="" action="<?php echo base_url() ?>core/manage_custom_permission/<?php echo $mode; ?>/edit" role="form" method="post">
									<div class="panel-body">
									   	<?php foreach ($modules as $module) {?>

									   
										<div style="min-height:220px;" class="col-md-3">
											<div role="tabpanel" class="tab-pane fade active in" id="tab5">
					                            <div class="panel panel-default">
													<div class="panel-heading clearfix">
														 <b><?php echo $module['module_name']; ?></b> Actions  
													</div>
													<div class="panel-body">
													<?php $map = $this->Module->get_modules_eap($user_id,$mode,$module['module_id']);
													foreach($map as $map){?>
															<label class="i-checks i-checks-sm block">
												                <input <?php echo set_checkbox('perm[]',$map['action_id'],((($user_id) == ($map['access_user_id']))?true:false)); ?> type="checkbox" name="perm[]" value="<?php echo $map['action_id']; ?>:<?php echo $map['dashboard']; ?>">
												                <i class="fa fa-fw fa-square-o checked"></i>
												                <?php echo $map['action_name_key']; ?>			            <input type='hidden' name='user_id' value='<?php echo $user_id; ?>'>
												             </label><?php }?>
															
													</div>
												</div>
					                        </div>
										</div>
											<?php }?>
									

									</div>
										
									
								</div>
								

	                </div>
	                <div class="panel-footer clearfix">
	                	<div class="pull-right">
	                		<button class="btn btn-success">Save</button>
	                		</div>
	                </div>

	            </div>
	            <?php }?>
				
			</div>
		</div>
	</div>
	 <div class="clearfix"></div>

	<style type="text/css">
		.block{
			 display: block;
		}
		.panel {
     		margin-bottom: 0px; 
     	}
	</style>
	<script>
            $(".editrn").click(function(){
                var row = $(this).closest('tr');
                var a = row.find(".role_name").text();
                var b = row.find(".role_id").val();
                 $("input[name='role_name']").val(a);
                 $("input[name='role_id']").val(b);
                
            })
        </script>