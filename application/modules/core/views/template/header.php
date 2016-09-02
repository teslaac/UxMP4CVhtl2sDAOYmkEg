<!DOCTYPE html>
<html lang="en">
<!-- <head> -->
    <?php require 'head.php'; ?>
<!--</head> -->
<body>
  
  <div class="app app-header-fixed" id="app">
    <!-- navbar -->
    <div class="app-header navbar">
      <!-- navbar header -->
      <div class="navbar-header dark bg-info dker">
        <button class="pull-right visible-xs dk" data-toggle="class:show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" data-toggle="class:off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
<!--           <i class="fa fa-font"></i>
 -->          
          <img src="<?php echo base_url('img/logo.png');?>" alt="." class="hide">
          <span class="hidden-folded m-l-xs"><img src="<?php echo base_url('img/logo.png');?>"> ACADAH SIMS</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" data-toggle="class:app-aside-folded" data-target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <!-- todo10 <a href class="btn no-shadow navbar-btn" data-toggle="class:show" data-target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a> -->
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <!-- <li class="dropdown pos-stc">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <span>Main Menu</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Modules Permissions</div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Add Students</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search Students</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Alumni</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Add Parent</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#eee',
                          barColor: '#333',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li> -->
          <!-- todo <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href>
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a href translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="<?php echo base_url();?>img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Notification not Available in demo<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <?php 
                if(!empty($user_info->profile_image)){
                  $profile_image = "assets/$_SESSION[sch_id]/".$user_info->profile_image;
                }else{
                  $profile_image = 'img/a0.jpg';
                }
                ?>
                <img src="<?php echo base_url($profile_image);?>" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?php echo($userdata['lname']).' '.($userdata['fname']); ?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li>
                <a href="<?php echo base_url('acadah/setup'); ?>">
                  <span class="badge bg-info pull-right">config</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">not in demo</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="" href="<?php echo base_url('logout');?>">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse -->
    </div>
    <!-- / navbar -->

    <!-- menu -->
    <div class="app-aside hidden-xs bg-black">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center show" id="aside-user">
            <div class="dropdown wrapper">
              <a ui-sref="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="<?php echo base_url();?>img/ccclear.png" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt"><?php echo strtoupper($userdata['sch_id']); ?></strong> 
                    
                  </span>
                  <span class="text-muted text-xs block"><?php echo($userdata['user_type']); ?> Login</span>
                </span>
              </a>
              <!-- dropdown --><!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

<?php if($page == 'dashboard') { ?>
          <!-- nav -->
          <nav ui-nav class="navi">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span translate="aside.nav.HEADER">Navigation</span>
              </li>
              <li class="active">
                <a href='home' class="auto">      
                  <!-- span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span> -->
                  <i class="glyphicon glyphicon-home icon text-primary-dker"></i>
                  <span class="font-bold" translate="aside.nav.DASHBOARD">Dashboard</span>
                </a>
                <!---->
              </li>
              <li ui-sref-active="active">
                <a href="#" ui-sref="app.calendar">
                  <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
                  <span class="font-bold" translate="aside.nav.CALENDAR">Calendar</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.mail.list">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold" translate="aside.nav.EMAIL">Email</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.chart">
                  <i class="fa fa-pencil "></i>
                  <span translate="aside.nav.components.NOTE">Note</span>
                </a>
              </li>

              <!-- -->

              <li class="line dk hidden-folded"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span translate="aside.nav.your_stuff.YOUR_STUFF">Your Stuff</span>
              </li>  
              <li>
                <a ui-sref="app.page.profile">
                  <i class="icon-user icon text-success-lter"></i>
                  <b class="badge bg-success pull-right">30%</b>
                  <span translate="aside.nav.your_stuff.PROFILE">Profile</span>
                </a>
              </li>
              <!-- <li>
                <a ui-sref="app.docs">
                  <i class="icon-question icon"></i>
                  <span translate="aside.nav.your_stuff.DOCUMENTS">Documents</span>
                </a>
              </li> -->
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded" translate="aside.MILESTONE">Milestone</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-info" style="width: 60%;">
              </div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded" translate="aside.RELEASE">Release</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-primary" style="width: 35%;">
              </div>
            </div>
          </div>
          <!-- / aside footer -->

<?php }else{ //OTHER PAGES ASIDE HOMEPAGE  ?>        
          <!-- nav -->
          <nav ui-nav class="navi">
            <ul class="nav">              
           
              <li>
                <a href='<?php echo base_url();?>home' class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-home icon text-primary-dker"></i>
                  <span class="font-bold" translate="aside.nav.DASHBOARD">Dashboard</span>
                </a>
              </li>

          <li class="line dk"></li>
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span translate="aside.nav.HEADER"><?php echo(ucfirst($page));?> Navigation</span>
              </li>
              
              <?php
               foreach ($allowed_modules_submenu as $submenu){
                 //echo($module['name_lang_key']); ?>

                 <li ui-sref-active="active" <?php if(uri_string() == $submenu['route']){ echo'class="active"'; }  ?>>
                  <a href="<?php echo base_url($submenu['route']); ?>" ui-sref="app.chart">
                    <i class="fa <?php echo $submenu['icon'];?>"></i>
                    <span class=""><?php echo $submenu['action_name_key'];?></span>
                  </a>
                </li>
              <?php } ?>

              <li class="line dk hidden-folded"></li>

            </ul>
          </nav>
          <!-- nav -->
<?php } ?>

        </div>
      </div>
    </div>
    <!-- / menu -->