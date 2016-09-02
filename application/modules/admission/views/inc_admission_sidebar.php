<div class="col w-md wrapper bg-light dk hf">
    <ul class="nav nav-pills nav-stacked nav-sm aside">
        <li  class="active"><a href="<?php echo base_url("admission"); ?>"><i class="fa fa-fw fa-file"></i> Complete Application</a></li>
        <?php if($_SESSION['user_type'] == 'prospective'){?>
        <!-- <li  class=""><a href="<?php echo base_url("admission/parent"); ?>"><i class="fa fa-fw fa-user"></i> Parent Info</a></li> -->
       <li  class=""><a href="<?php echo base_url("admission/terms_and_conditions"); ?>"><i class="fa fa-fw fa-file-text"></i> Terms And Conditions</a></li>
        <li  class=""><a href="<?php echo base_url("admission/status"); ?>"><i class="icon-user-following"></i> Admission Status</a></li>
        <li  class=""><a href="<?php echo base_url("admission/print_form"); ?>"><i class="fa fa-fw fa-print"></i> Print Form</a></li>
        <li  class=""><a href="<?php echo base_url("admission/print_receipt"); ?>"><i class="fa fa-fw fa-print"></i> Print Reciept</a></li>
        <?php } ?>
    </ul>
</div>