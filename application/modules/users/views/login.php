<html idmmzcc-ext-docid="565594112" class="ng-scope" data-ng-app="app" lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
  <meta charset="utf-8">
  <title>Acadah SIMS | Smart School Admin</title>
   <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/app.css" type="text/css" />
  
  <link rel="stylesheet" href="../css/app.css" type="text/css"><script async="" src="../js/controllers/chart.js"></script>
<body class="ng-scope" ng-controller="AppCtrl">
  <!-- uiView:  -->
  <div class="app ng-scope app-header-fixed app-aside-fixed" id="app"  ui-view=""><!-- uiView:  --><div ui-view="" class="fade-in-right-big smooth ng-scope"><div class="container w-xxl w-auto-xs ng-scope" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href="" class="navbar-brand block m-t ng-binding">Acadah SIMS</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to get in touch</strong>
    </div>
    <?php if(@$error): ?>
      <div class="alert alert-info">
        <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
        <?php echo $error; ?>
      </div>
      <?php endif; ?>

    <form name="form" class="form-validation" method="post" action="">
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input placeholder="User ID" class="form-control no-border" name="user_id" required="" type="text">
        </div>
        <div class="list-group-item">
           <input placeholder="Password" class="form-control no-border" name="password" required="" type="password">
        </div>
      </div>
      <button  type="submit" class="btn btn-lg btn-primary btn-block" >Log in</button>
      
      <div class="text-center m-t m-b">
        <a href="#/access/forgotpwd" ui-sref="access.forgotpwd">Forgot password?</a>       
         <a href="<?php echo base_url('admission/apply'); ?>" class="m-r m-l">New Applicant</a>
      </div>
      
<!--       <div class="line line-dashed"></div>
      <p class="text-center"><small>Do not have an account?</small></p>
      <a href="#/access/signup" ui-sref="access.signup" class="btn btn-lg btn-default btn-block">Create an account</a>
  -->   </form>
  </div>
  <!-- ngInclude: 'tpl/blocks/page_footer.html' -->
 
</div>
</div>


  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

  

</body>

</html>
