    <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
          <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
              app.settings.asideFolded = false; 
              app.settings.asideDock = false;
            ">
            <!-- main -->
            <div class="col">
              <!-- main header -->
              <div class="bg-light lter b-b wrapper-md">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <h1 class="m-n font-thin h3 text-black">Dashboard <?php // print_r($userdata); ?></h1>
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>
              </div>
              <!-- / main header -->
              <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                <!-- stats -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="row row-sm text-center">
                      <div class="col-xs-6">
                        <div class="panel padder-v item">
                          <div class="h1 text-info font-thin h1"><?php echo $no_students; ?></div>
                          <span class="text-muted text-xs">Students</span>
                          <div class="top text-right w-full">
                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <a href class="block panel padder-v bg-primary item">
                          <span class="text-white font-thin h1 block"><?php echo $no_staffs; ?></span>
                          <span class="text-muted text-xs">Staff</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row row-sm text-center">
                      <div class="col-xs-6">
                        <a href class="block panel padder-v bg-info item">
                          <span class="text-white font-thin h1 block"><?php echo $no_subjects; ?></span>
                          <span class="text-muted text-xs">Subjects</span>                          
                        </a>
                      </div>
                      <div class="col-xs-6">
                        <div class="panel padder-v item">
                          <div class="font-thin h1"><?php echo $no_parents; ?></div>
                          <span class="text-muted text-xs">Parents</span>
                          <div class="bottom text-left">
                            <i class="fa fa-caret-up text-warning m-l-sm"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-7">
                    <div class="panel wrapper">
                      <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                        <input type="checkbox" ng-model="showSpline">
                        <i></i>
                      </label>
                      <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
                      <div ui-jq="plot" ui-refresh="showSpline" ui-options="
                        [
                          { data: {{d0_1}}, label:'TV', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                          { data: {{d0_2}}, label:'Mag', points: { show: true, radius: 1}, splines: { show: showSpline, tension: 0.4, lineWidth: 1, fill: 0.8 } }
                        ], 
                        {
                          colors: ['{{app.color.info}}', '{{app.color.primary}}'],
                          series: { shadowSize: 3 },
                          xaxis:{ font: { color: '#a1a7ac' } },
                          yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                          grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                          tooltip: true,
                          tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
                        }
                      " style="height:246px" >
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- / stats -->

                <!-- service -->
                <section class="panel panel-default">
                      <header class="panel-heading font-bold">Modules Dashboard</header>  
                      <section class="panel-body" style="padding: 15px 5px;">   
                          <ul class="list-group menubox col-sm-12" style="padding: 0px;">

                          <?php foreach ($allowed_modules as $modules) {?>
                            <?php foreach ($modules as $module) {?>

                            <span class="col-xs-6  col-md-2"><li> <a href="<?php echo($module['route']); ?>"> <i class="fa <?php echo($module['icon']); ?>"></i> <?php echo ucfirst($module['action_name_key']); ?> </a> </li> </span>

                            <?php } ?>
                          <?php } ?>
                          

                            
                          </ul>
                        </section>
                      <div class="clearfix"></div>
                  </section>
              </div>
            </div>
            <!-- / main -->
            <!-- right col -->
            
            <!-- / right col -->
          </div>          
        <!-- PASTE above -->
      </div>
    </div>
    <!-- /content -->


