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
		<section class="panel panel-default">
		                <header class="panel-heading">
		                  Create Admission Letter
		                </header>
 <div class="table-responsive">

	<div class="line line-dashed b-b line-lg"></div>
  <form action="<?php echo base_url(); ?>admission/create_admission_letter" method="post">
     <div class="form-group m-b clearfix">
        <label class="col-sm-2 control-label">Title: <span>*</span></label>
        <div class="col-sm-10">
            <input class="form-control" value="<?php echo set_value('title'); ?>" name="title" required='' type="text">
        </div>
    </div>
    <div class="form-group m-b clearfix">
        <label class="col-sm-2 control-label">Session: <span>*</span></label>
        <div class="col-sm-10">
          <select class="form-control " name="session_id" required="" >
            <option value="">Select</option>
            <?php
      foreach ($app_sessions as $app_session) {
          ?>
          <option <?php echo set_select('session_id', "$app_session[session_id]"); ?> value="<?php echo $app_session['session_id']; ?>"><?php echo $app_session['session_name']; ?> Session
          </option>
          <?php
      }
      ?>
        </select>
        </div>
    </div>
    <div class="line line-dashed b-b line-lg"></div>
    <div class="form-group m-b clearfix">
      <label class="col-sm-2 control-label">  Content: <span>*</span></label>
        <div class="col-sm-10">
        <textarea id="edit"  name="content"></textarea>
      
     </div>
  </div>
  <div class="line line-dashed b-b line-lg"></div>
	    <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           <a href="<?php echo base_url(); ?>admission/admin/view_admission_letter"><button type="button" class="btn btn-default">Cancel</button></a>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
    </form>
	</div>
</section>