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

		  <h1 class="m-n font-thin h3">Admission Letter</h1>
      <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-info fade in widget-inner text-center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            Success.
        </div>
        <?php } ?>
         <?php print_r($usession); ?>
		</div>
		<div class="wrapper-md">
         
		<div class="row m-b doc-buttons">
                  <!-- <div class="col-sm-8">
                  <a href="#" class="btn btn-primary "><i class="fa fa-plus"></i> Add Students</a>
                  <a href="#" class="btn btn-dark "><i class="fa fa-print"></i> Print Paid Applicant</a>
                  <a href="#" class="btn btn-info "><i class="fa fa-print"></i> Print All Applicant Lists</a>
                  <a href="#" class="btn btn-success"><i class="fa fa-th"></i> EXPORT TO EXCEL</a>
                  </div> -->
                  <div class="col-sm-4">
                    <!-- <div class="input-group">
                     <select class="input-sm form-control input-s-sm inline v-middle">
                        <option value="0">Bulk action</option>
	                    <option value="1">All applicants</option>
	                    <option value="2">Paid Applicant</option>
	                    <option value="3">Export</option>
		             </select>
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-info" type="button">Go!</button>
                      </span>
                    </div> -->
                  </div> 
                </div>
		<section class="panel panel-default">
		                <header class="panel-heading">
		                  Applicant Records Table
		                </header>
 <div class="table-responsive">
<?php foreach ($edit_admission_letter as $edit); ?>
	<div class="line line-dashed b-b line-lg"></div>
  <form action="<?php echo base_url(); ?>admission/edit_admission_letter/<?php echo $edit['id']; ?>" method="post">
     <div class="form-group m-b clearfix">
        <label class="col-sm-2 control-label">Name: <span>*</span></label>
        <div class="col-sm-10">
            <input class="form-control" value="<?php echo $edit['sch_admin_name']; ?>" name="name" type="text">
        </div>
    </div>
    <?php // foreach ($usession as $asession); ?>
    <div class="form-group m-b clearfix">
        <label class="col-sm-2 control-label">Session: <span>*</span></label>
        <div class="col-sm-10">
          <select class="form-control state" name="session" >
            <option value="select">Select</option>
            <option value="2015/2016">2015/2016</option>
        </select>
            <!-- <input class="form-control" value="<?php //echo set_value('session'); ?>" name="session" type="text"> -->
        </div>
    </div>
    <div class="line line-dashed b-b line-lg"></div>
    <div class="form-group m-b clearfix">
      <label class="col-sm-2 control-label">  Content: <span>*</span></label>
        <div class="col-sm-10">
        <textarea id="edit"  name="content"><?php echo $edit['content']; ?></textarea>
<!--         <input type="hidden" name="id" id="id" value="<?php //echo $edit_admission_letter['id']; ?>" /> -->
     </div>
  </div>
  <div class="line line-dashed b-b line-lg"></div>
	    <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
    </form>
	</div>
</section>