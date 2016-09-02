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
      <!--           <i class="fa fa-font"></i>-->          
          <img src="<?php echo base_url('img/logo.png');?>" alt="." class="hide">
          <span class="hidden-folded m-l-xs"><img src="<?php echo base_url('img/rarmy/logo.png');?>"> READING ARMY</span>
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
                      Use awesome animate.css<br>
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
                <img src="<?php echo base_url('img/a0.jpg');?>" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md"><?php echo($userdata['lname']).' '.($userdata['fname']); ?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
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
            
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

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
                  <span class="font-bold" translate="aside.nav.DASHBOARD">Books</span>
                </a>
                <!---->
              </li>
              <li ui-sref-active="active">
                <a href="calender" ui-sref="app.calendar">
                  <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
                  <span class="font-bold" translate="aside.nav.CALENDAR">Test</span>
                </a>
              </li>
              <li ui-sref-active="active">
                <a ui-sref="app.mail.list">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold" translate="aside.nav.EMAIL">Hall of Fame</span>
                </a>
              </li>
              <!-- -->
            </ul>
          </nav>
          <!-- nav -->


        </div>
      </div>
    </div>
    <!-- / menu -->