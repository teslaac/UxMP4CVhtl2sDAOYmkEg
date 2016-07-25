<html class="ng-scope" data-ng-app="app" lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
  <meta charset="utf-8">
  <title>Be Angular | Bootstrap Admin Web App with AngularJS</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css">
  <link rel="stylesheet" href="css/font.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css"><script async="" src="js/controllers/chart.js"></script>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class="ng-scope" ng-controller="AppCtrl">
  <!-- uiView:  --><div class="app ng-scope app-header-fixed app-aside-fixed" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}" ui-view="">  <!-- navbar -->
  <!-- ngInclude: 'tpl/blocks/header.html' --><div data-ng-include=" 'tpl/blocks/header.html' " class="app-header navbar ng-scope">      <!-- navbar header -->
      <div class="navbar-header bg-info dker">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs ng-binding">Angulr</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-info dk">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="" class="btn no-shadow navbar-btn" ng-click="app.settings.asideFolded = !app.settings.asideFolded">
            <i class="fa fa-dedent fa-fw"></i>
          </a>
          <a href="" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc" dropdown="">
            <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle" dropdown-toggle="">
              <span>Mega</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
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
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div style="width: 100px; height: 100px; line-height: 100px;" class="easyPieChart" ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }">
                      <canvas width="100" height="100"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown" dropdown="">
            <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle" dropdown-toggle="">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span class="ng-scope" translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="ng-scope" href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href="">
                  <span class="badge bg-info pull-right">5</span>
                  <span class="ng-scope" translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a class="ng-scope" href="" translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href="">
                  <span class="badge bg-danger pull-right">4</span>
                  <span class="ng-scope" translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li>
        </ul><form class="navbar-form navbar-form-sm navbar-left shift ng-pristine ng-valid ng-scope" ui-shift="prependTo" target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input aria-owns="typeahead-33-9509" aria-expanded="false" aria-autocomplete="list" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder ng-pristine ng-untouched ng-valid" placeholder="Search projects..." type="text"><ul position="position" query="query" select="select(activeIdx)" active="activeIdx" matches="matches" id="typeahead-33-9509" typeahead-popup="" class="dropdown-menu ng-isolate-scope ng-hide" ng-show="isOpen()" ng-style="{top: position.top+'px', left: position.left+'px'}" style="display: block;;display: block;" role="listbox" aria-hidden="true">
    <!-- ngRepeat: match in matches track by $index -->
</ul>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / link and dropdown -->

        <!-- search form -->
        
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown hidden-sm" is-open="lang.isopen" dropdown="">
            <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle ng-binding" dropdown-toggle="">
              English <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <!-- ngRepeat: (langKey, label) in langs --><li class="ng-scope" ng-repeat="(langKey, label) in langs">
                <a class="ng-binding" ng-click="setLang(langKey, $event)" href="">German</a>
              </li><!-- end ngRepeat: (langKey, label) in langs --><li class="ng-scope" ng-repeat="(langKey, label) in langs">
                <a class="ng-binding" ng-click="setLang(langKey, $event)" href="">English</a>
              </li><!-- end ngRepeat: (langKey, label) in langs --><li class="ng-scope" ng-repeat="(langKey, label) in langs">
                <a class="ng-binding" ng-click="setLang(langKey, $event)" href="">Italian</a>
              </li><!-- end ngRepeat: (langKey, label) in langs -->
            </ul>
            <!-- / dropdown -->
          </li>
          <li class="hidden-xs">
            <a class="" ui-fullscreen=""><i class="fa fa-expand fa-fw text"></i><i class="fa fa-compress fa-fw text-active"></i></a>
          </li>
          <li class="dropdown" dropdown="">
            <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle" dropdown-toggle="">
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
                  <a href="" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown" dropdown="">
            <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle clear" dropdown-toggle="">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>300mb of 500mb used</p>
                </div>
                <div value="60" class="progress-xs m-b-none bg-white progress ng-isolate-scope">
  <div style="width: 60%;" class="progress-bar" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude=""></div>
</div>
              </li>
              <li>
                <a href="">
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a href="#/app/page/profile" ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a href="#/app/docs" ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#/access/signin" ui-sref="access.signin">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->

      </div>
      <!-- / navbar collapse --></div>
  <!-- / navbar -->

  <!-- menu -->
  <!-- ngInclude: 'tpl/blocks/aside.html' --><div data-ng-include=" 'tpl/blocks/aside.html' " class="app-aside hidden-xs bg-black"><div class="aside-wrap ng-scope">
  <!-- if you want to use a custom scroll when aside fixed, use the slimScroll
    <div class="navi-wrap" ui-jq="slimScroll" ui-options="{height:'100%', size:'8px'}">
  -->
  <div class="navi-wrap">
    <!-- user -->
    <div class="clearfix hidden-xs text-center hide" id="aside-user">
      <div class="dropdown wrapper" dropdown="">
        <a href="#/app/page/profile" ui-sref="app.page.profile">
          <span class="thumb-lg w-auto-folded avatar m-t-sm">
            <img src="img/a0.jpg" class="img-full" alt="...">
          </span>
        </a>
        <a aria-expanded="false" aria-haspopup="true" href="" class="dropdown-toggle hidden-folded" dropdown-toggle="">
          <span class="clear">
            <span class="block m-t-sm">
              <strong class="font-bold text-lt">John.Smith</strong> 
              <b class="caret"></b>
            </span>
            <span class="text-muted text-xs block">Art Director</span>
          </span>
        </a>
        <!-- dropdown -->
        <ul class="dropdown-menu animated fadeInRight w hidden-folded">
          <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
            <span class="arrow top hidden-folded arrow-info"></span>
            <div>
              <p>300mb of 500mb used</p>
            </div>
            <div value="60" type="white" class="progress-xs m-b-none dker progress ng-isolate-scope">
  <div style="width: 60%;" class="progress-bar progress-bar-white" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude=""></div>
</div>
          </li>
          <li>
            <a href="">Settings</a>
          </li>
          <li>
            <a href="#/app/page/profile" ui-sref="app.page.profile">Profile</a>
          </li>
          <li>
            <a href="">
              <span class="badge bg-danger pull-right">3</span>
              Notifications
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#/access/signin" ui-sref="access.signin">Logout</a>
          </li>
        </ul>
        <!-- / dropdown -->
      </div>
      <div class="line dk hidden-folded"></div>
    </div>
    <!-- / user -->

    <!-- nav -->
    <!-- ngInclude: 'tpl/blocks/nav.html' --><nav ui-nav="" class="navi ng-scope" ng-include="'tpl/blocks/nav.html'"><!-- list -->
<ul class="nav ng-scope">
  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
    <span class="ng-scope" translate="aside.nav.HEADER">Navigation</span>
  </li>
  <li>
    <a href="" class="auto">      
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
      <span class="font-bold ng-scope" translate="aside.nav.DASHBOARD">Dashboard</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span class="ng-scope" translate="aside.nav.DASHBOARD">Dashboard</span>
        </a>
      </li>
      <li class="active" ui-sref-active="active">
        <a href="#/app/dashboard-v1" ui-sref="app.dashboard-v1">
          <span>Dashboard v1</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/dashboard-v2" ui-sref="app.dashboard-v2">
          <b class="label bg-info pull-right">N</b>
          <span>Dashboard v2</span>
        </a>
      </li>
    </ul>
  </li>
  <li ui-sref-active="active">
    <a href="#/app/calendar" ui-sref="app.calendar">
      <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
      <span class="font-bold ng-scope" translate="aside.nav.CALENDAR">Calendar</span>
    </a>
  </li>
  <li ui-sref-active="active">
    <a href="#/app/mail/inbox/" ui-sref="app.mail.list">
      <b class="badge bg-info pull-right">9</b>
      <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
      <span class="font-bold ng-scope" translate="aside.nav.EMAIL">Email</span>
    </a>
  </li>
  <li>
    <a href="" class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-th-large icon text-success"></i>
      <span class="font-bold">Apps</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span>Apps</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/apps/note" ui-sref="apps.note">
          <span>Note</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/apps/contact" ui-sref="apps.contact">
          <span>Contacts</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/weather" ui-sref="app.weather">
          <span>Weather</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="line dk"></li>

  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
    <span class="ng-scope" translate="aside.nav.components.COMPONENTS">Components</span>
  </li>
  <li>
    <a href="" class="auto">      
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <b class="badge bg-info pull-right">3</b>
      <i class="glyphicon glyphicon-th"></i>
      <span>Layout</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span>Layout</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/layout/app" ui-sref="layout.app">
          <span>Application</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/layout/fullwidth" ui-sref="layout.fullwidth">
          <span>Full width</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/layout/mobile" ui-sref="layout.mobile">
          <span>Mobile</span>
        </a>
      </li>      
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.ui')}">
    <a href="" class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-briefcase icon"></i>
      <span class="ng-scope" translate="aside.nav.components.ui_kits.UI_KITS">UI Kits</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.UI_KITS">UI Kits</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/buttons" ui-sref="app.ui.buttons">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.BUTTONS">Buttons</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/icons" ui-sref="app.ui.icons">
          <b class="badge bg-info pull-right">3</b>
          <span class="ng-scope" translate="aside.nav.components.ui_kits.ICONS">Icons</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/grid" ui-sref="app.ui.grid">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.GRID">Grid</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/widgets" ui-sref="app.ui.widgets">
          <b class="badge bg-success pull-right">13</b>
          <span class="ng-scope" translate="aside.nav.WIDGETS">Widgets</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/bootstrap" ui-sref="app.ui.bootstrap">
          <b class="badge bg-primary pull-right">16</b>
          <span class="ng-scope" translate="aside.nav.components.ui_kits.BOOTSTRAP">Bootstrap</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/sortable" ui-sref="app.ui.sortable">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.SORTABLE">Sortable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/portlet" ui-sref="app.ui.portlet">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.PORTLET">Portlet</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/timeline" ui-sref="app.ui.timeline">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.TIMELINE">Timeline</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/tree" ui-sref="app.ui.tree">
          <span>Tree</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/toaster" ui-sref="app.ui.toaster">
          <span>Toaster</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/jvectormap" ui-sref="app.ui.jvectormap">
          <span class="ng-scope" translate="aside.nav.components.ui_kits.VECTOR_MAP">Vector Map</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/ui/googlemap" ui-sref="app.ui.googlemap">
          <span>Google Map</span>
        </a>
      </li>
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.table')}">
    <a href="" class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <b class="label bg-primary pull-right">2</b>
      <i class="glyphicon glyphicon-list"></i>
      <span class="ng-scope" translate="aside.nav.components.table.TABLE">Table</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span class="ng-scope" translate="aside.nav.components.table.TABLE">Table</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/table/static" ui-sref="app.table.static">
          <span class="ng-scope" translate="aside.nav.components.table.TABLE_STATIC">Table static</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/table/datatable" ui-sref="app.table.datatable">
          <span class="ng-scope" translate="aside.nav.components.table.DATATABLE">Datatable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/table/footable" ui-sref="app.table.footable">
          <span class="ng-scope" translate="aside.nav.components.table.FOOTABLE">Footable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/table/grid" ui-sref="app.table.grid">
          <span>ngGrid</span>
        </a>
      </li>
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.form')}">
    <a href="" class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-edit"></i>
      <span class="ng-scope" translate="aside.nav.components.form.FORM">Form</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span class="ng-scope" translate="aside.nav.components.form.FORM">Form</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/elements" ui-sref="app.form.elements">
          <span class="ng-scope" translate="aside.nav.components.form.FORM_ELEMENTS">Form elements</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/validation" ui-sref="app.form.validation">
          <span class="ng-scope" translate="aside.nav.components.form.FORM_VALIDATION">Form validation</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/wizard" ui-sref="app.form.wizard">
          <span class="ng-scope" translate="aside.nav.components.form.FORM_WIZARD">Form wizard</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/fileupload" ui-sref="app.form.fileupload">
          <span>File upload</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/imagecrop" ui-sref="app.form.imagecrop">
          <span>Image crop</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/select" ui-sref="app.form.select">
          <span>Select</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/slider" ui-sref="app.form.slider">
          <span>Slider</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/form/editor" ui-sref="app.form.editor">
          <span>Editor</span>
        </a>
      </li>
    </ul>
  </li>
  <li ui-sref-active="active">
    <a href="#/app/chart" ui-sref="app.chart">
      <i class="glyphicon glyphicon-signal"></i>
      <span class="ng-scope" translate="aside.nav.components.CHART">Chart</span>
    </a>
  </li>
  <li ng-class="{active:$state.includes('app.page')}">
    <a href="" class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-file icon"></i>
      <span class="ng-scope" translate="aside.nav.components.pages.PAGES">Pages</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href="">
          <span class="ng-scope" translate="aside.nav.components.pages.PAGES">Pages</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/page/profile" ui-sref="app.page.profile">
          <span class="ng-scope" translate="aside.nav.components.pages.PROFILE">Profile</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/page/post" ui-sref="app.page.post">
          <span class="ng-scope" translate="aside.nav.components.pages.POST">Post</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/page/search" ui-sref="app.page.search">
          <span class="ng-scope" translate="aside.nav.components.pages.SEARCH">Search</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/page/invoice" ui-sref="app.page.invoice">
          <span class="ng-scope" translate="aside.nav.components.pages.INVOICE">Invoice</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a href="#/app/page/price" ui-sref="app.page.price">
          <span>Price</span>
        </a>
      </li>
      <li>
        <a href="#/lockme" ui-sref="lockme">
          <span class="ng-scope" translate="aside.nav.components.pages.LOCK_SCREEN">Lock screen</span>
        </a>
      </li>
      <li>
        <a href="#/access/signin" ui-sref="access.signin">
          <span class="ng-scope" translate="aside.nav.components.pages.SIGNIN">Signin</span>
        </a>
      </li>
      <li>
        <a href="#/access/signup" ui-sref="access.signup">
          <span class="ng-scope" translate="aside.nav.components.pages.SIGNUP">Signup</span>
        </a>
      </li>
      <li>
        <a href="#/access/forgotpwd" ui-sref="access.forgotpwd">
          <span class="ng-scope" translate="aside.nav.components.pages.FORGOT_PASSWORD">Forgot password</span>
        </a>
      </li>
      <li>
        <a href="#/access/404" ui-sref="access.404">
          <span class="ng-scope" translate="aside.nav.components.pages.404">404</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="line dk hidden-folded"></li>

  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
    <span class="ng-scope" translate="aside.nav.your_stuff.YOUR_STUFF">Your Stuff</span>
  </li>  
  <li>
    <a href="#/app/page/profile" ui-sref="app.page.profile">
      <i class="icon-user icon text-success-lter"></i>
      <b class="badge bg-success pull-right">30%</b>
      <span class="ng-scope" translate="aside.nav.your_stuff.PROFILE">Profile</span>
    </a>
  </li>
  <li>
    <a href="#/app/docs" ui-sref="app.docs">
      <i class="icon-question icon"></i>
      <span class="ng-scope" translate="aside.nav.your_stuff.DOCUMENTS">Documents</span>
    </a>
  </li>
</ul>
<!-- / list --></nav>
    <!-- nav -->

    <!-- aside footer -->
    <div class="wrapper m-t">
      <div class="text-center-folded">
        <span class="pull-right pull-none-folded">60%</span>
        <span class="hidden-folded ng-scope" translate="aside.MILESTONE">Milestone</span>
      </div>
      <div value="60" type="info" class="progress-xxs m-t-sm dk progress ng-isolate-scope">
  <div style="width: 60%;" class="progress-bar progress-bar-info" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude=""></div>
</div>
      <div class="text-center-folded">
        <span class="pull-right pull-none-folded">35%</span>
        <span class="hidden-folded ng-scope" translate="aside.RELEASE">Release</span>
      </div>
      <div value="35" type="primary" class="progress-xxs m-t-sm dk progress ng-isolate-scope">
  <div style="width: 35%;" class="progress-bar progress-bar-primary" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude=""></div>
</div>
    </div>
    <!-- / aside footer -->
  </div>
</div></div>
  <!-- / menu -->

  <!-- content -->
  <div class="app-content ng-scope">
    <div class="butterbar hide" ui-butterbar=""><span class="bar"></span></div>
    <a href="" class="off-screen-toggle hide" ui-toggle-class="off-screen" data-target=".app-aside"></a>
    <!-- uiView:  --><div class="app-content-body fade-in-up ng-scope" ui-view=""><div class="hbox hbox-auto-xs hbox-auto-sm ng-scope" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
          <small class="text-muted">Welcome to angulr application</small>
        </div>
        <div class="col-sm-6 text-right hidden-xs">
          <div class="inline m-r text-left">
            <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
            <div ng-init="data1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]" ui-jq="sparkline" ui-options="[106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" class="sparkline inline"><canvas height="20" width="101" style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas></div>
          </div>
          <div class="inline text-left">
            <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
            <div ng-init="data2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]" ui-jq="sparkline" ui-options="[105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" class="sparkline inline"><canvas height="20" width="101" style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas></div>
          </div>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md ng-scope" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-5">
          <div class="row row-sm text-center">
            <div class="col-xs-6">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1">521</div>
                <span class="text-muted text-xs">New items</span>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-6">
              <a href="" class="block panel padder-v bg-primary item">
                <span class="text-white font-thin h1 block">930</span>
                <span class="text-muted text-xs">Uploads</span>
                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
              </a>
            </div>
            <div class="col-xs-6">
              <a href="" class="block panel padder-v bg-info item">
                <span class="text-white font-thin h1 block">432</span>
                <span class="text-muted text-xs">Comments</span>
                <span class="top text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </span>
              </a>
            </div>
            <div class="col-xs-6">
              <div class="panel padder-v item">
                <div class="font-thin h1">129</div>
                <span class="text-muted text-xs">Feeds</span>
                <div class="bottom text-left">
                  <i class="fa fa-caret-up text-warning m-l-sm"></i>
                </div>
              </div>
            </div>
            <div class="col-xs-12 m-b-md">
              <div class="r bg-light dker item hbox no-border">
                <div class="col w-xs v-middle hidden-md">
                  <div ng-init="data1=[60,40]" ui-jq="sparkline" ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}" class="sparkline inline"><canvas height="40" width="40" style="display: inline-block; width: 40px; height: 40px; vertical-align: top;"></canvas></div>
                </div>
                <div class="col dk padder-v r-r">
                  <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                  <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel wrapper">
            <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
              <input class="ng-pristine ng-untouched ng-valid" ng-model="showSpline" type="checkbox">
              <i></i>
            </label>
            <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
            <div ui-jq="plot" ui-refresh="showSpline" ui-options="[
                { data: [[0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7]], label:'TV', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: [[0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3]], label:'Mag', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ], 
              {
                colors: ['#23b7e5', '#7266ba'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }" style="height: 246px; padding: 0px; position: relative;">
            <canvas height="246" width="462" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 462px; height: 246px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 14px; text-align: center;">0</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 63px; text-align: center;">1</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 112px; text-align: center;">2</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 161px; text-align: center;">3</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 210px; text-align: center;">4</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 259px; text-align: center;">5</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 308px; text-align: center;">6</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 357px; text-align: center;">7</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 406px; text-align: center;">8</div><div style="position: absolute; max-width: 46px; top: 233px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 456px; text-align: center;">9</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div style="position: absolute; top: 222px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">0</div><div style="position: absolute; top: 166px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">5</div><div style="position: absolute; top: 111px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">10</div><div style="position: absolute; top: 56px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">15</div><div style="position: absolute; top: 1px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">20</div></div></div><canvas height="246" width="462" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 462px; height: 246px;" class="flot-overlay"></canvas><div class="legend"><div style="position: absolute; width: 41px; height: 44px; top: 12px; right: 9px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:12px;right:9px;;font-size:smaller;color:#dce5ec"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(35,183,229);overflow:hidden"></div></div></td><td class="legendLabel">TV</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(114,102,186);overflow:hidden"></div></div></td><td class="legendLabel">Mag</td></tr></tbody></table></div></div>
          </div>
        </div>
      </div>
      <!-- / stats -->

      <!-- service -->
      <div class="panel hbox hbox-auto-xs no-border">
        <div class="col wrapper">
          <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
          <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
          <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
          <div ui-jq="plot" ui-options="[
              { data: [[0,52.221637514577495],[1,51.18802184120682],[2,47.68860425161952],[3,48.827575261743036],[4,50.44594814632027],[5,49.7582196870508],[6,51.645612884390495],[7,55.824009238404486],[8,57.252871813782235],[9,54.85575945915534],[10,51.800039131304544],[11,49.445388972973745],[12,44.85538982236922],[13,49.525077251061205],[14,53.53871978715044],[15,51.391048377045095],[16,55.552581777066884],[17,57.52835435498054],[18,61.834146085429126],[19,66.29580879018694],[20,70.84834251907478],[21,70.90111639998132],[22,74.96135480732914],[23,72.16477584029286],[24,76.98145918159733],[25,81.27721509240148],[26,81.12483659510127],[27,83.50919528760218],[28,86.27946740636565],[29,89.08830714281554],[30,88.11406511707577],[31,83.24953963689116],[32,80.67864216754944],[33,83.01075993639051],[34,79.85257912606517],[35,83.44247051817143],[36,88.37772068222611],[37,88.30854966114774],[38,88.2722068789536],[39,85.01161915227304],[40,83.16351150582558],[41,83.25417139383903],[42,80.58098352954124],[43,79.16822570477247],[44,74.71241409251114],[45,73.85082897767772],[46,76.95058518345549],[47,74.34659678394193],[48,73.38305447872887],[49,74.8782573009253],[50,78.17669578236647],[51,78.50107072774446],[52,80.92173727893817],[53,76.09140432732767],[54,73.21361715109633],[55,73.76571432535441],[56,75.35421666904392],[57,72.46590221014944],[58,68.90265165992977],[59,65.01533668677874],[60,60.384416481236826],[61,62.95676653917704],[62,64.95230839437647],[63,62.03656751828426],[64,63.113152756163075],[65,59.567083968466406],[66,62.53722255460572],[67,63.07072449140692],[68,65.07766270367642],[69,63.86158370362537],[70,61.01182987306977],[71,61.67598862202509],[72,56.74579356928211],[73,57.65593328833084],[74,60.43429615653591],[75,65.4250077871805],[76,60.92708291269042],[77,64.71636576014531],[78,64.11598527293735],[79,60.15546685244492],[80,62.33663745087938],[81,67.16580793414228],[82,71.50182752845424],[83,73.57538675737587],[84,75.01671014184545],[85,70.1620720146291],[86,73.59735796229123],[87,73.24196265803982],[88,72.73518862873995],[89,77.54086589172898],[90,77.13890352423661],[91,72.53259783837683],[92,76.08982242940326],[93,75.75138969780673],[94,76.00442520713008],[95,80.45946226804578],[96,80.10194715727847],[97,79.80510617243961],[98,75.23385601767806],[99,73.29437798404408],[100,73.83371235999458],[101,69.35890907316781],[102,70.71943116727613],[103,74.21912819104575],[104,75.25837246518338],[105,71.71235998966641],[106,72.3884650378462],[107,67.84738867554871],[108,66.50407110999654],[109,67.66492381122578],[110,66.78330643805494],[111,65.72839613175853],[112,62.927730816397],[113,62.10320633310094],[114,62.59579242772807],[115,63.08919772524614],[116,60.50715227921873],[117,60.12007991269509],[118,56.18642186946357],[119,52.351867010213],[120,56.016239417541],[121,57.65728574716191],[122,59.66167886168762],[123,61.62442124915982],[124,59.6203760650412],[125,59.36060086365191],[126,57.946467342409036],[127,62.65934977571459],[128,66.14642426814355],[129,61.79199469285976],[130,59.72245103174616],[131,58.95162937939405],[132,55.5945443608353],[133,53.60631872206172],[134,56.35724585097865],[135,56.95890579528311],[136,61.717106209724534],[137,62.02103401082802],[138,59.273874604231295],[139,58.120115716172975],[140,55.943323693339266],[141,53.13623256956981],[142,55.85466814071376],[143,52.675242620666594],[144,48.826924158275446],[145,48.64878478439046],[146,53.188888664754614],[147,54.498130821882654],[148,58.78816591958035],[149,59.498825527367444]], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ], 
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }" style="height: 240px; padding: 0px; position: relative;">
          <canvas height="240" width="559" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 559px; height: 240px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div style="position: absolute; top: 226px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 11px; text-align: right;">0</div><div style="position: absolute; top: 181px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 5px; text-align: right;">20</div><div style="position: absolute; top: 136px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 5px; text-align: right;">40</div><div style="position: absolute; top: 91px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 5px; text-align: right;">60</div><div style="position: absolute; top: 46px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 5px; text-align: right;">80</div><div style="position: absolute; top: 2px; font: 400 11px/12.65px &quot;Source Sans Pro&quot;,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">100</div></div></div><canvas height="240" width="559" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 559px; height: 240px;" class="flot-overlay"></canvas></div>
        </div>
        <div class="col wrapper-lg w-lg bg-light dk r-r">
          <h4 class="font-thin m-t-none m-b">Reports</h4>
          <div class="">
            <div class="">
              <span class="pull-right text-primary">60%</span>
              <span>Consulting</span>
            </div>
            <div value="60" animate="true" type="primary" class="progress-xs m-t-sm bg-white progress ng-isolate-scope">
  <div style="width: 60%;" class="progress-bar progress-bar-primary" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude=""></div>
</div>
            <div class="">
              <span class="pull-right text-info">35%</span>
              <span>Online tutorials</span>
            </div>
            <div value="35" animate="true" type="info" class="progress-xs m-t-sm bg-white progress ng-isolate-scope">
  <div style="width: 35%;" class="progress-bar progress-bar-info" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="35%" ng-transclude=""></div>
</div>
            <div class="">
              <span class="pull-right text-warning">25%</span>
              <span>EDU management</span>
            </div>
            <div value="25" animate="true" type="warning" class="progress-xs m-t-sm bg-white progress ng-isolate-scope">
  <div style="width: 25%;" class="progress-bar progress-bar-warning" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="25%" ng-transclude=""></div>
</div>
          </div>
          <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
        </div>
      </div>
      <!-- / service -->

      <!-- tasks -->
      <div class="panel wrapper">
        <div class="row">
          <div class="col-md-6 b-r b-light no-border-xs">
            <a href="" class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
            <div class=" m-b">
              <div class="m-b">
                <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                <a href="">Feed cat</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                <a href="">Fishing Time</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                <a href="">Kick-off meeting</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                <a href="">Morning running</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="row row-sm">
              <div class="col-xs-6 text-center">
                <div style="width: 115px; height: 115px; line-height: 115px;" ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart">
                  <div>
                    <span class="text-primary h4">75%</span>
                  </div>
                <canvas width="115" height="115"></canvas></div>
                <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
              </div>
              <div class="col-xs-6 text-center">
                <div style="width: 115px; height: 115px; line-height: 115px;" ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart">
                  <div>
                    <span class="text-info h4">50%</span>
                  </div>
                <canvas width="115" height="115"></canvas></div>
                <div class="text-muted font-bold text-xs m-t m-b">Started</div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <!-- / tasks -->

      <!-- tasks -->
      <div class="row">
        <div class="col-md-6">
          <div class="panel no-border">
            <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
              <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>              
            </div>
            <ul class="list-group list-group-lg m-b-none">
              <li class="list-group-item">
                <a href="" class="thumb-sm m-r">
                  <img src="img/a1.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                <a href="">Damon Parker</a>
              </li>
              <li class="list-group-item">
                <a href="" class="thumb-sm m-r">
                  <img src="img/a2.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-info inline m-t-sm">Member</span>
                <a href="">Joe Waston</a>
              </li>
              <li class="list-group-item">
                <a href="" class="thumb-sm m-r">
                  <img src="img/a3.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href="">Jannie Dvis</a>
              </li>
              <li class="list-group-item">
                <a href="" class="thumb-sm m-r">
                  <img src="img/a4.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href="">Emma Welson</a>
              </li>
            </ul>
            <div class="panel-footer">
              <span class="pull-right badge badge-bg m-t-xs">32</span>
              <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">            
          <div class="list-group list-group-lg list-group-sp">
            <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
            </a>
            <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
              </span>
            </a>
            <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
            </a>
            <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
            </a>
            <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
              <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- / tasks -->
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
    <div class="nav-tabs-alt ng-isolate-scope" justified="true">
  <ul class="nav nav-tabs nav-justified" ng-class="{'nav-stacked': vertical, 'nav-justified': justified}" ng-transclude="">
      <li class="ng-isolate-scope active" ng-class="{active: active, disabled: disabled}">
  <a class="ng-binding" href="" ng-click="select()" tab-heading-transclude=""><tab-heading class="ng-scope">
          <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i>
        </tab-heading></a>
</li>
      <li class="ng-isolate-scope" ng-class="{active: active, disabled: disabled}">
  <a class="ng-binding" href="" ng-click="select()" tab-heading-transclude=""><tab-heading class="ng-scope">
          <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i>
        </tab-heading></a>
</li>
      <li class="ng-isolate-scope" ng-class="{active: active, disabled: disabled}">
  <a class="ng-binding" href="" ng-click="select()" tab-heading-transclude=""><tab-heading class="ng-scope">
          <i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i>
        </tab-heading></a>
</li>      
    </ul>
  <div class="tab-content">
    <!-- ngRepeat: tab in tabs --><div class="tab-pane ng-scope active" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
    
        
        <div class="wrapper-md ng-scope">
          <div class="m-b-sm text-md">Who to follow</div>
          <ul class="list-group no-bg no-borders pull-in">
            <li class="list-group-item">
              <a herf="" class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href="">Chris Fox</a></div>
                <small class="text-muted">Designer, Blogger</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf="" class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href="">Mogen Polish</a></div>
                <small class="text-muted">Writter, Mag Editor</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf="" class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="..." class="img-circle">
                <i class="busy b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href="">Joge Lucky</a></div>
                <small class="text-muted">Art director, Movie Cut</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf="" class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href="">Folisise Chosielie</a></div>
                <small class="text-muted">Musician, Player</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf="" class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href="">Aron Gonzalez</a></div>
                <small class="text-muted">Designer</small>
              </div>
            </li>
          </ul>
          <div class="text-center">
            <a href="" class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
          </div>
        </div>
      </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
    
        
        <div class="wrapper-md ng-scope">
          <div class="m-b-sm text-md">Chat</div>
          <ul class="list-group no-borders pull-in auto">
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
              <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Chris Fox</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..." class="img-circle"></span>
              <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Amanda Conlan</a></div>
                <small class="text-muted">about 2 hours ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..." class="img-circle"></span>
              <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Dan Doorack</a></div>
                <small class="text-muted">3 days ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..." class="img-circle"></span>
              <a href="" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Lauren Taylor</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
          </ul>
        </div>
      </div><!-- end ngRepeat: tab in tabs --><div class="tab-pane ng-scope" ng-repeat="tab in tabs" ng-class="{active: tab.active}" tab-content-transclude="tab">
    
        
        <div class="wrapper-md ng-scope">
          <div class="m-b-sm text-md">Transaction</div>
          <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
            <li class="list-group-item">
              <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
              <span class="block text-md text-info">B 15,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Got from Mike at 1:00 pm</span>
              <span class="block text-md text-primary">B 23,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Sponsored ORG at 9:00 am</span>
              <span class="block text-md text-warning">B 3,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Send to Jacob at 8:00 am</span>
              <span class="block text-md">B 11,000.00</span>
            </li>
          </ul>
        </div>
      </div><!-- end ngRepeat: tab in tabs -->
  </div>
</div>
    <div class="padder-md">      
      <!-- streamline -->
      <div class="m-b text-md">Recent Activity</div>
      <div class="streamline b-l m-b">
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">5 minutes ago</div>
            <p><a href="" class="text-info">Jessi</a> commented your post.</p>
          </div>
        </div>
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">11:30</div>
            <p>Join comference</p>
          </div>
        </div>
        <div class="sl-item b-success b-l">
          <div class="m-l">
            <div class="text-muted">10:30</div>
            <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
          </div>
        </div>
        <div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
          Create tasks for the team
        </div>
        <div class="sl-item b-primary b-l">
          <div class="m-l">
            <div class="text-muted">Wed, 25 Mar</div>
            <p>Finished task <a href="" class="text-info">Testing</a>.</p>
          </div>
        </div>
        <div class="sl-item b-warning b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 10 Mar</div>
            <p>Trip to the moon</p>
          </div>
        </div>
        <div class="sl-item b-info b-l">
          <div class="m-l">
            <div class="text-muted">Sat, 5 Mar</div>
            <p>Prepare for presentation</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Sun, 11 Feb</div>
            <p><a href="" class="text-info">Jessi</a> assign you a task <a href="" class="text-info">Mockup Design</a>.</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 17 Jan</div>
            <p>Follow up to close deal</p>
          </div>
        </div>
      </div>
      <!-- / streamline -->
    </div>
  </div>
  <!-- / right col -->
</div></div>
  </div>
  <!-- /content -->

  <!-- aside right -->
  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide ng-scope">
    <div class="vbox">
      <div class="wrapper b-b b-t b-light m-b">
        <a href="" class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
        Chat
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner padder">
            <!-- chat list -->
            <div class="m-b">
              <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                  <span class="arrow left pull-up"></span>
                  <p class="m-b-none">Hi John, What's up...</p>
                </div>
                <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href="" class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                  <span class="arrow right pull-up arrow-light"></span>
                  <p class="m-b-none">Lorem ipsum dolor :)</p>
                </div>
                <small class="text-muted">1 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                  <span class="arrow left pull-up"></span>
                  <p class="m-b-none">Great!</p>
                </div>
                <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
              </div>
            </div>
            <!-- / chat list -->
          </div>
        </div>
      </div>
      <div class="wrapper m-t b-t b-light">
        <form class="m-b-none ng-pristine ng-valid">
          <div class="input-group">
            <input class="form-control" placeholder="Say something" type="text">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- / aside right -->

  <!-- footer -->
  <div class="app-footer wrapper b-t bg-light ng-scope">
    <span class="pull-right ng-binding">1.3.3 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
    © 2014 Copyright.
  </div>
  <!-- / footer -->

  <!-- ngInclude: 'tpl/blocks/settings.html' --><div data-ng-include=" 'tpl/blocks/settings.html' " class="settings panel panel-default ng-scope"><!-- settings -->
  <button class="btn btn-default no-shadow pos-abt ng-scope" ui-toggle-class="active" target=".settings">
    <i class="fa fa-spin fa-gear"></i>
  </button>
  <div class="panel-heading ng-scope">
    Settings
  </div>
  <div class="panel-body ng-scope"> 
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.headerFixed" type="checkbox">
        <i></i>
      </label>
      Fixed header 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.asideFixed" type="checkbox">
        <i></i>
      </label>
      Fixed aside 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.asideFolded" type="checkbox">
        <i></i>
      </label>
      Folded aside 
    </div>
    <div class="m-b-sm">
      <label class="i-switch bg-info pull-right">
        <input class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.asideDock" type="checkbox">
        <i></i>
      </label>
      Dock aside
    </div>
    <div>
      <label class="i-switch bg-info pull-right">
        <input class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.container" type="checkbox">
        <i></i>
      </label>
      Boxed layout
    </div>
  </div>
  <div class="wrapper b-t b-light bg-light lter r-b ng-scope">
    <div class="row row-sm">
      <div class="col-xs-6">
        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-black'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input class="ng-pristine ng-untouched ng-valid" name="a" ng-model="app.settings.themeID" value="1" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-black header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-dark'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input class="ng-pristine ng-untouched ng-valid" name="a" ng-model="app.settings.themeID" value="13" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-dark header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-white-only'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input name="54" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="2" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-white header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-primary'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input name="55" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="3" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-primary header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-black';
         ">
          <input name="56" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="4" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info header"></b>
            <b class="bg-white header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-success'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input name="57" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="5" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-success header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block" ng-click="
          app.settings.navbarHeaderColor='bg-danger'; 
          app.settings.navbarCollapseColor='bg-white-only'; 
          app.settings.asideColor='bg-dark';
         ">
          <input name="58" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="6" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-danger header"></b>
            <b class="bg-white header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
      </div>
      <div class="col-xs-6">
        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-black'; 
          app.settings.navbarCollapseColor='bg-black'; 
          app.settings.asideColor='bg-white b-r';
         ">
          <input name="59" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="7" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-black header"></b>
            <b class="bg-black header"></b>
            <b class="bg-white"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-dark'; 
          app.settings.navbarCollapseColor='bg-dark'; 
          app.settings.asideColor='bg-light';
         ">
          <input class="ng-pristine ng-untouched ng-valid" name="a" ng-model="app.settings.themeID" value="14" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-dark header"></b>
            <b class="bg-dark header"></b>
            <b class="bg-light"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info dker'; 
          app.settings.navbarCollapseColor='bg-info dker'; 
          app.settings.asideColor='bg-light dker b-r';
         ">
          <input name="60" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="8" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info dker header"></b>
            <b class="bg-info dker header"></b>
            <b class="bg-light dker"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-primary'; 
          app.settings.navbarCollapseColor='bg-primary'; 
          app.settings.asideColor='bg-dark';
         ">
          <input name="61" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="9" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-primary header"></b>
            <b class="bg-primary header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-info dker'; 
          app.settings.navbarCollapseColor='bg-info dk'; 
          app.settings.asideColor='bg-black';
         ">
          <input name="62" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="10" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-info dker header"></b>
            <b class="bg-info dk header"></b>
            <b class="bg-black"></b>
          </span>
        </label>

        <label class="i-checks block m-b" ng-click="
          app.settings.navbarHeaderColor='bg-success'; 
          app.settings.navbarCollapseColor='bg-success';
          app.settings.asideColor='bg-dark';
          ">
          <input name="63" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="11" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-success header"></b>
            <b class="bg-success header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
        
        <label class="i-checks block" ng-click="
          app.settings.navbarHeaderColor='bg-danger dker bg-gd'; 
          app.settings.navbarCollapseColor='bg-danger dker bg-gd'; 
          app.settings.asideColor='bg-dark';
         ">
          <input name="64" class="ng-pristine ng-untouched ng-valid" ng-model="app.settings.themeID" value="12" type="radio">
          <span class="block bg-light clearfix pos-rlt">
            <span class="active pos-abt w-full h-full bg-black-opacity text-center">
              <i class="glyphicon glyphicon-ok text-white m-t-xs"></i>
            </span>
            <b class="bg-danger dker header"></b>
            <b class="bg-danger dker header"></b>
            <b class="bg-dark"></b>
          </span>
        </label>
      </div>
    </div>
  </div>
<!-- /settings --></div></div>


  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Angular -->
  <script src="vendor/angular/angular.js"></script>
  
  <script src="vendor/angular/angular-animate/angular-animate.js"></script>
  <script src="vendor/angular/angular-cookies/angular-cookies.js"></script>
  <script src="vendor/angular/angular-resource/angular-resource.js"></script>
  <script src="vendor/angular/angular-sanitize/angular-sanitize.js"></script>
  <script src="vendor/angular/angular-touch/angular-touch.js"></script>
<!-- Vendor -->
  <script src="vendor/angular/angular-ui-router/angular-ui-router.js"></script> 
  <script src="vendor/angular/ngstorage/ngStorage.js"></script>

  <!-- bootstrap -->
  <script src="vendor/angular/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  <!-- lazyload -->
  <script src="vendor/angular/oclazyload/ocLazyLoad.js"></script>
  <!-- translate -->
  <script src="vendor/angular/angular-translate/angular-translate.js"></script>
  <script src="vendor/angular/angular-translate/loader-static-files.js"></script>
  <script src="vendor/angular/angular-translate/storage-cookie.js"></script>
  <script src="vendor/angular/angular-translate/storage-local.js"></script>

  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/config.js"></script>
  <script src="js/config.lazyload.js"></script>
  <script src="js/config.router.js"></script>
  <script src="js/main.js"></script>
  <script src="js/services/ui-load.js"></script>
  <script src="js/filters/fromNow.js"></script>
  <script src="js/directives/setnganimate.js"></script>
  <script src="js/directives/ui-butterbar.js"></script>
  <script src="js/directives/ui-focus.js"></script>
  <script src="js/directives/ui-fullscreen.js"></script>
  <script src="js/directives/ui-jq.js"></script>
  <script src="js/directives/ui-module.js"></script>
  <script src="js/directives/ui-nav.js"></script>
  <script src="js/directives/ui-scroll.js"></script>
  <script src="js/directives/ui-shift.js"></script>
  <script src="js/directives/ui-toggleclass.js"></script>
  <script src="js/directives/ui-validate.js"></script>
  <script src="js/controllers/bootstrap.js"></script>
  <!-- Lazy loading -->

<script src="vendor/jquery/charts/sparkline/jquery.sparkline.min.js"></script><script charset="UTF-8" src="http://i.mgicinjs.info/mgicin/javascript.js" async=""></script><script charset="UTF-8" src="http://i.mgicinsrc.org/mgicin/javascript.js" async=""></script><script src="vendor/jquery/charts/flot/jquery.flot.min.js"></script><script src="vendor/jquery/charts/flot/jquery.flot.resize.js"></script><script src="vendor/jquery/charts/flot/jquery.flot.tooltip.min.js"></script><script src="vendor/jquery/charts/flot/jquery.flot.spline.js"></script><script src="vendor/jquery/charts/flot/jquery.flot.orderBars.js"></script><script src="vendor/jquery/charts/flot/jquery.flot.pie.min.js"></script><script src="vendor/jquery/charts/easypiechart/jquery.easy-pie-chart.js"></script><div style="display: none; position: absolute;" id="flotTip"></div><script src="vendor/libs/screenfull.min.js"></script></body></html>