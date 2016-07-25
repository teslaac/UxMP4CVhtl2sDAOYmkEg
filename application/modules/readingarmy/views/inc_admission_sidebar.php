<div class="col w-md wrapper bg-light dk hf">
<div class="panel panel-default">
        <div class="panel-body">
          <div class="clearfix text-center m-t">
            <div class="inline">
              <div>
                <div class="thumb-xl">
                  <img src="<?php echo base_url("img/rarmy/badge1.png"); ?>" class="img-circle" alt="..." width="100%">
                </div>
              <h4 class=" m-t m-b">Lieutenant Colonel </h4>
            </div>                      
          </div>
        </div>
        <footer class="panel-footer bg-info text-center no-padder">
          <div class="row no-gutter">
            <div class="col-xs-6">
              <div class="wrapper">
                <span class="m-b-xs h3 block text-white">24,534</span>
                <small class="text-muted">Points</small>
              </div>
            </div>
            <div class="col-xs-6 dk">
              <div class="wrapper">
                <span class="m-b-xs h3 block text-white">55</span>
                <small class="text-muted">Books</small>
              </div>
            </div>
          </div>
        </footer>
      </div>
   </div>
    <ul class="nav nav-pills nav-stacked nav-sm aside">
        <li  class=""><a href="<?php echo base_url("readingarmy"); ?>"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li  class=""><a href="<?php echo base_url("readingarmy"); ?>"><i class="fa fa-fw fa-user"></i> My Books</a></li>
        <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Tests</a></li>
        <li  class=""><a href="<?php echo base_url("readingarmy/status"); ?>"><i class="icon-user-following"></i> Hall of Fame</a></li>
    </ul>
</div>

<?php 
if($userdata['user_type'] == 'uploader') { ?>
	<div class="col w-md wrapper bg-light dk hf">
	    <ul class="nav nav-pills nav-stacked nav-sm aside">
	        <li  class="active"><a href="<?php echo base_url("readingarmy"); ?>"><i class="fa fa-fw fa-file"></i> Upload Book</a></li>
	        <li  class=""><a href="<?php echo base_url("readingarmy/parent"); ?>"><i class="fa fa-fw fa-user"></i> My Books</a></li>
	        <li  class=""><a href="#"><i class="fa fa-fw fa-file-text"></i> Create Tests </a></li>
	    </ul>
	</div>
<?php } ?>