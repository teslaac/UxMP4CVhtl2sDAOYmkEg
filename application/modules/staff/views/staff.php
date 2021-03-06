<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<script>
	$(document).ready( function () {
		$('#list').DataTable();
	} );


</script>
    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
		<div class="bg-light lter b-b wrapper-md">

		  <span class="pull-right" >
		  	<button class="btn btn-default btn-addon  "><i class="icon-user"></i></i><?php echo $no_male; ?></button>
		  	<button class="btn btn-default btn-addon  "><i class="icon-user-female"></i></i><?php echo $no_female; ?></button>
		  </span>

		  <h1 class="m-n font-thin h3">Staff</h1>

		</div>
		<div class="wrapper-md">

<!--		<div class="row m-b doc-buttons">-->
<!--          <div class="col-sm-8">-->
<!--          <a href="add" class="btn btn-primary "><i class="fa fa-plus"></i> Add Staff</a>-->
<!--          <a href="#" class="btn btn-dark "><i class="fa fa-print"></i> Print All Staff List</a>-->
<!--          <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXPORT TO EXCEL</a>-->
<!--          </div>-->
<!--          <div class="col-sm-4">-->
<!--            <div class="input-group">-->
<!--              <input class="form-control" placeholder="Search" type="text">-->
<!--              <span class="input-group-btn">-->
<!--                <button class="btn btn-info" type="button">Go!</button>-->
<!--              </span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
		<section class="panel panel-default">
	        <header class="panel-heading">
	          Staff's Records Table
	        </header>
	        <div class="table-responsive">
	          <table class="table table-striped b-t b-light">
	            <thead>
	              <tr>
	               <th width="20"><input type="checkbox"></th>
	                <th class="th-sortable" data-toggle="class">No.</th>
	                <th>Title</th>
	                <th>Surname</th>
	                <th>First Name</th>
	                <th>Initial</th>
	                <th>Gender</th>
	                <th>Staff Position</th>
	                <th>Staff Type</th>
	                <th>Edit</th>
	                <th>Action</th>
	                <th>Print</th>
	              </tr>
	            </thead>
	            <tbody>
				<?php
				foreach($staff as $staff) {
				if(empty($i)){
					$i = 1;
				}
				?>
	              <tr>
	                <td><input name="post[]" value="2" type="checkbox"></td>
	                <td><?php echo $i; ?></td>
	                <th><?php echo $staff['title']; ?></th>
	                <td><?php echo $staff['lname']; ?></td>
	                <td><?php echo $staff['fname']; ?></td>
	                <td><?php echo $staff['initial']; ?></td>
	                <td><?php echo $staff['gender']; ?></td>
	                <td><?php echo $staff['staff_position']; ?></td>
	                <td><?php echo $staff['staff_type']; ?></td>
	                <td><a href="<?php echo base_url(); ?>staff/edit/<?php echo $staff['user_id']; ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
	                <?php if ($staff['status'] == 'active'){?> 
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_users/<?php echo $staff['id']; ?>/inactive/status" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Disable</a> </td>
                                <?php }else{?>
                                <td><a href="<?php echo base_url(); ?>core/status/acadah_users/<?php echo $staff['id']; ?>/active/status" class="btn btn-xs btn-success"><i class="fa fa-check"></i> Enable</a> </td>
                                  <?php }?>
	                <td><a href="<?php echo base_url(); ?>staff/print_profile/<?php echo $staff['user_id']; ?>" class="btn btn-xs btn-info"><i class="fa fa-print"></i>  Profile</a></td>
	              </tr>
					<?php
					$i++;
				}
				?>
	            </tbody>
	          </table>
	        </div>
	        <footer class="panel-footer">
	          <div class="row">
	            <div class="col-sm-4 hidden-xs">
	              <select class="input-sm form-control input-s-sm inline v-middle">
	                <option value="0">Bulk action</option>
	                <option value="1">Delete selected</option>
	                <option value="2">Bulk edit</option>
	                <option value="3">Export</option>
	              </select>
	              <button class="btn btn-sm btn-default">Apply</button>                  
	            </div>
	          </div>
	        </footer>
	      </section>
		</div>		
    </div>
    <!-- /content -->


