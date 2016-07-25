<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <!-- content -->
    <div class="app-content">
      	<div ui-butterbar></div>
      	<a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
	      	<div class="app-content-body fade-in-up">
	        <!-- COPY the content from "tpl/" -->
		       
				<div class="bg-light lter b-b wrapper-md">
				  <h1 class="m-n font-thin h3"> <i class="icon-settings"> </i> Permission Settings</h1>
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

	                    <a href="<?php echo base_url(); ?>core/permissions/admin" class="btn <?php if($usertype == 'admin'){ echo 'btn-primary'; }else{ echo 'btn-default';} ?>">Admin Permissions</a>
	                    <a href="<?php echo base_url(); ?>core/permissions/student" class="btn <?php if($usertype == 'student'){ echo 'btn-primary'; }else{ echo 'btn-default';} ?>">Student Permissions</a>
	                    <a href="<?php echo base_url(); ?>core/permissions/staff" class="btn <?php if($usertype == 'staff'){ echo 'btn-primary'; }else{ echo 'btn-default';} ?>" >Staff Permissions</a>

	<form class="" action="<?php echo base_url() ?>core/manage_custom_permission/<?php echo $usertype; ?>" role="form" method="post">
		                   <div class="form-group m-t">
				                <div class="table-responsive">
				                  <div class="panel panel-default">
				                    <table class="table table-striped b-t b-light">
				                      <thead class="panel-heading">
				                        <tr>
				                         <!--  <th>User Type</th> -->
				                          <th>Manage Roles</th>
				                          <th>Select User</th>
				                          <th></th>
				                        </tr>
				                      </thead>
				                      <tbody class="panel-body">
				                        <tr>
				                          
				                          <td class="form-inline">
				                          <label class="i-checks">
				                            <input name="mode" id="rrole" type="radio" value="role">
				                            <i></i>
				                          </label>
				                           <select class="form-control" name="role_id">
				                           	<option value=" ">Select</option>
                                        <?php
                                        foreach ($aroles as $arole) {
                                            ?>
                                            <option <?php echo set_select('role', "$arole[id]"); ?> value="<?php echo $arole['id']; ?>"><?php echo $arole['role_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
				                            </select>
				                            <a href="#searchrange" class="btn btn-info btn-addon" type="button"  data-toggle="modal"><i class="fa fa-pencil"></i>Manage Roles</a>
				                          </td>
				                          <td class="form-inline ">
				                            <label class="i-checks">
				                              <input name="mode" id="ruser_id" type="radio" value="user">
				                              <i></i>
				                            </label>
				                            <select class="form-control m-r-sm m-b-sm" name="user_id">
				                            	<option value=" ">Select</option>
				                            <?php foreach($users as $user){?>
				                              <option <?php echo set_select('user_id', "$user[user_id]"); ?> value="<?php echo $user['user_id'] ?>"><?php echo ucfirst($user['sch_id']).'-'.$user['id'].' '. $user['fname'].' '.$user['lname'];?> </option>
				                              <?php }?>
				                            </select>
				                          </td>
				                          <td><button class="btn btn-success">Save</button></td>
				                        </tr>
				                      </tbody>
				                    </table>
				                  </div>
				                </div>
				                
				      		</div> 
				      		
	                    <!-- Tab panes -->
	                    <div class="panel panel-default">
									<div class="panel-heading clearfix">
											Manage <b>Group</b> Permissions (<?php echo $usertype; ?>) 
									</div>
									<div class="panel-body">
									   	<?php foreach ($modules as $module) {?>

									   
										<div style="min-height:220px;" class="col-md-3">
											<div role="tabpanel" class="tab-pane fade active in" id="tab5">
					                            <div class="panel panel-default">
													<div class="panel-heading clearfix">
														 <b><?php echo $module['module_name']; ?></b> Actions  
													</div>
													<div class="panel-body">
													<?php $map = $this->Module->get_modules_ap($usertype,$module['module_id']);
													foreach($map as $map){?>
															<label class="i-checks i-checks-sm block">
												                <input type="checkbox" name="perm[]" value="<?php echo $map['action_id']; ?>:<?php echo $map['dashboard']; ?>">
												                <i class="fa fa-fw fa-square-o checked"></i>
												                <?php echo $map['action_name_key']; ?>			            
												             </label><?php }?>
															
													</div>
												</div>
					                        </div>
										</div>
											<?php }?>
									

									</div>
								</form>
									
								</div>
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
        <h4 class="modal-title"><i class="fa fa-search"></i>    Manage Roles</h4>
      </div>
      <div class="modal-body">
        <div class=" panel-default">
        <div class="panel-body">
        	<form class="form-inline" action="<?php echo base_url() ?>core/save_role" role="form" method="post">
	          		<div class="form-group m-b">
	      		          <input type="text" name="role_name" class="form-control" required placeholder="Role">
	      		          <input type="hidden" name="role_id">
		                  <button class="btn btn-info" type="submit">Save Role</button>
		            </div>

		            </form>
		            <div class="clearfix"></div>
            	<div class="table-responsive m-t">
                  <div class="panel panel-default">
    
                    <table class="table table-striped b-t b-light">
                      <thead class="panel-heading">
                        <tr>
                          <th>Role</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="panel-body">
                      <?php foreach($roles as $role){?>
                        <tr>
                          <td class='role_name'><?php echo $role['role_name']; ?></td>
                          <td>
                          <?php if($role['status'] == 'active'){?>
                           <a href="<?php echo base_url(); ?>core/save_role/inactive/<?php echo $role['id']; ?>"><button class="btn btn-danger">Disable</button></a><?php }else{?><a href="<?php echo base_url(); ?>core/save_role/active/<?php echo $role['id']; ?>"><button class="btn btn-success">Enable</button></a>
                           	<?php }?>
                           	<input type="hidden" class="role_id" value="<?php echo $role['id']; ?>">
                           <a href="#" class='editrn'>Edit</a> 
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
               <div class="clearfix"></div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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