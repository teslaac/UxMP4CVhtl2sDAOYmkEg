<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">

		  <h1 class="m-n font-thin h3">Modules</h1>

		</div>
		<div class="wrapper-md">

		<div class="row m-b doc-buttons">
                  <div class="col-sm-8">
                  <a href="#install-modules" class="btn btn-primary " data-toggle="modal"><i class="fa fa-plus"></i> Install Module</a>
                  </div>
                  <div class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control" placeholder="Search" type="text">
                      <span class="input-group-btn">
                        <button class="btn btn-info" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
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
                      ?>
				<section class="panel panel-default">
	                <header class="panel-heading">
	                  Modules Manager
	                </header>
	                <div class="table-responsive">
	                  <table class="table table-striped b-t b-light">
	                    <thead>
	                      <tr>
	                        <th class="th-sortable" data-toggle="class">No.</th>
	                        <th>Name</th>
	                        <th>Title</th>
	                        <th>Author</th>
	                        <th>Version</th>
	                        <th>Date Installed</th>
	                        <th>Date Upgraded</th>
	                        <th>Status</th>
	                        <th>Actions</th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
	                    foreach ($modules as $module) {
	                    	if(empty($i)){
	                    		$i = 1;
	                    	}
	                    ?>
	                      <tr>
		                        <td><?php echo $i; ?></td>
		                        <td><?php echo $module['module_name']; ?></td>
		                        <td><?php echo $module['module_title']; ?> </td>
		                        <td><?php echo $module['module_author']; ?></td>
		                        <td>
		                        <?php if(!empty($module['date_installed'])){
		                        echo "$module[version]";}else{
		                        	echo $module['module_version'];
		                        }?>		                        	
		                        </td>
		                        <td><?php echo $module['date_installed']; ?></td>
		                        <td><?php echo $module['date_upgraded']; ?></td>
		                        <td><?php if($module['status'] == 'active'){
		                        	echo "Activated";
		                        }else{
		                        	echo "Not Activated";
		                        }?> </td>
		                        <td><?php if($module['status'] == 'active' and $module['module_type'] != 'core'){ ?><a href="<?php echo base_url(); ?>modules/modules_manager/manage_module/<?php echo $module['module_type']; ?>/<?php echo $module['module_id']; ?>/inactive" class="btn btn-xs btn-danger"> De-activate</a><?php }elseif($module['module_type'] != 'core' and $module['status'] != 'active'){?> <a href="<?php echo base_url(); ?>modules/modules_manager/manage_module/<?php echo $module['module_type']; ?>/<?php echo $module['module_id']; ?>/active" class="btn btn-xs btn-success"> Activate</a>   <?php }?></td>
		                        <td>

		                        <!-- <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </a> -->
		                        <?php if(!empty($module['settings_url']) and $module['status'] == 'active'){?>
		                        <a href="<?php echo base_url().$module['settings_url']; ?>" class="btn btn-xs btn-primary"><i class="fa fa-gear"></i> </a><?php }?>
		                        <a href="#modal-form<?php echo $i; ?>" class="btn btn-xs btn-info" data-toggle="modal"><i class="fa fa-info-circle"></i> </a>
		                            <div class="modal fade" id="modal-form<?php echo $i; ?>">
				    <div class="modal-dialog">
				      <div class="modal-content">
				      	<div class="modal-header ng-scope">
						    <h3 class="modal-title">Module information!</h3>
						</div>							
				        <div class="modal-body">
				          <div class="row">
				            <div class="col-sm-12">
				            <?php
				            //Check If there's any update
				            if($module['module_version'] > $module['version'] and !empty($module['version'])){
				            ?>
				          	<div class="alert alert-info"> Heads up! There's a new version for this module, kindly click on upgrade to upgrade to latest version.</div>
				          	<?php }?> 

						      <div class="panel panel-default">
						        <div class="panel-heading">
						          <?php echo $module['module_name']; ?>
						        </div>
						        <table class="table table-striped m-b-none">
						          <tbody>
						            <tr>
						              <td>Author</td>
						              <td><?php echo $module['module_author']; ?></td>
						            </tr>
						            <tr>                    
						              <td>Version</td>
						              <td><?php echo $module['module_version']; ?></td>
						            </tr>
						            <tr>                    
						              <td>Description</td>
						              <td><?php echo $module['desc_lang_key']; ?></td>
						            </tr>
						            <tr>                    
						              <td>Features</td>
						              <td><?php echo $module['desc_lang_key']; ?></td>
						            </tr>
						            <tr>                    
						              <td>Permission</td>
						              <td><?php echo $module['desc_lang_key']; ?></td>
						            </tr>
						          </tbody>
						        </table>							        
						      </div>

						    </div>
				          </div><!--     
					          <div ng-repeat="alert in alerts" type="info" close="closeAlert($index)" class="alert ng-isolate-scope alert-info alert-dismissable" ng-class="['alert-' + (type || 'warning'), closeable ? 'alert-dismissable' : null]" role="alert">
							    <button ng-show="closeable" type="button" class="close" ng-click="close()">
							        <span aria-hidden="true">×</span>
							        <span class="sr-only">Close</span>
							    </button>
							    <div ng-transclude=""><span class="ng-binding ng-scope">Heads up! This alert needs your attention, but it is not super important.</span></div>
							  </div> -->      
				        </div>

				        <div class="modal-footer">
				        <?php 
				            if($module['module_version'] > $module['version'] and !empty($module['version'])){
				            ?>
				                  <a href="<?php echo base_url(); ?>modules/modules_manager/manage_module/<?php echo $module['module_type']; ?>/<?php echo $module['module_id']; ?>/active" class="btn btn-info btn-sm btn-addon"><i class="fa fa-plus"></i> Upgrade </a><?php }?>
				                  <?php if(!empty($module['settings_url']) and $module['status'] == 'active'){?>
				                  <a href="<?php echo base_url().$module['settings_url']; ?>" class="btn btn-dark btn-sm btn-addon"><i class="fa fa-gear"></i> Settings </a><?php }?>
				                  <?php if($module['status'] == 'active' and $module['module_type'] != 'core'){ ?>  
				      			<a href="<?php echo base_url(); ?>modules/modules_manager/manage_module/<?php echo $module['module_type']; ?>/<?php echo $module['module_id']; ?>/inactive" class="btn btn-danger btn-sm btn-addon"><i class="fa fa-times "></i> De-activate </a><?php }elseif($module['module_type'] != 'core' and $module['status'] != 'active'){?>
				      			<a href="<?php echo base_url(); ?>modules/modules_manager/manage_module/<?php echo $module['module_type']; ?>/<?php echo $module['module_id']; ?>/active" class="btn btn-success btn-sm btn-addon"><i class="fa fa-check "></i> Activate </a>
				      				<?php }?>

				        		<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
				                </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div>
		                        </td>
	                      </tr>

	                      <?php
	                      $i++;
	                      }?>
	                    </tbody>
	                  </table>
	                </div>
	                <footer class="panel-footer">
				      <div class="row">
				        <div class="col-sm-4 hidden-xs">
				          
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

	              

				  <div class="modal fade" id="install-modules">
				    <div class="modal-dialog">
				      <div class="modal-content">
				      	<div class="modal-header ng-scope">
						    <h3 class="modal-title"> <i class="fa fa-download"></i> Install Module</h3>
						</div>							
				        <div class="modal-body">
				          <div class="row">
				            <div class="col-sm-12">
				          	<div class="alert alert-info"> Heads up! This alert needs your attention, but it is not super important.</div> 
						      
						      <div class="panel panel-default">
						        <div class="panel-body">
						          <div class="clearfix text-center m-t" style=" margin-bottom: 20px">
						            <div class="inline">
						              
									<div class="bootstrap-filestyle input-group"><input class="form-control " disabled="" type="text"> <span tabindex="0" class="group-span-filestyle input-group-btn"><label for="filestyle-0" class="btn btn-default "><span class="glyphicon glyphicon-folder-open"></span> Choose file</label></span></div>            </div>                      
						          </div>
						        </div>
						      </div>

						    </div>
				          </div>   
					               
				        </div>

				        <div class="modal-footer">
				                  <a href="#" class="btn btn-info"><i class="fa fa-check "></i> Install </a>
				                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				                </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div>
		</div>	

			
    </div>
    <!-- /content -->


