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
                    <small class="text-muted">Welcome to Acadah Smart School application</small>
                  </div>
                </div>
              </div>
              <!-- / main header -->
              <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                    <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                <!-- stats -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="row row-sm text-center">
                      <div class="col-xs-6">
                        <div class="panel padder-v item">
                          <div class="h1 text-info font-thin h1">1201</div>
                          <span class="text-muted text-xs">Students</span>
                          <div class="top text-right w-full">
                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <a href class="block panel padder-v bg-primary item">
                          <span class="text-white font-thin h1 block">200</span>
                          <span class="text-muted text-xs">Staff</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row row-sm text-center">
                      <div class="col-xs-6">
                        <a href class="block panel padder-v bg-info item">
                          <span class="text-white font-thin h1 block">32</span>
                          <span class="text-muted text-xs">Subjects</span>                          
                        </a>
                      </div>
                      <div class="col-xs-6">
                        <div class="panel padder-v item">
                          <div class="font-thin h1">129</div>
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
                <section class="panel-body" style="padding: 15px 5px;">   
                          <ul class="list-group menubox col-sm-12" style="padding: 0px;">
                            <span class="col-xs-6  col-md-2"><li> <a href="users"> <i class="fa fa-users "></i> Students </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="users"> <i class="fa fa-user"></i> Staff </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="users"> <i class="fa icon-users"></i> Parent </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href=""> <i class="fa fa-plus-circle "></i> Manage Admission </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-file-text"></i> Manage Result </a> </li>  </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-money"></i> Bursary </a> </li> </span>               
                            
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-check-square-o"></i> Attendance </a> </li>  </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-trophy"></i> Achievement </a> </li>  </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-medkit"></i> Health Records </a> </li>  </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-thumbs-o-down"></i> Disciple </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-file-text"></i> Transcripts </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-file-text-o"></i> Result </a> </li></span>
                            
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-bar-chart-o"></i> Result Analyser </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-file-o"></i> Testimonial </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-usd"></i> Billing </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-sort-amount-desc"></i> Staff Payroll </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-credit-card icon"></i> ePayment </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-minus-square"></i> Scarch Card </a> </li></span>

                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-mobile"></i> SMS  </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-envelope-o"></i> Message </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-envelope"></i> Mail &amp; Newsletter </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-comments"></i> Chat </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-male"></i> Human Resource </a> </li></span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-sort-alpha-asc"></i> Scheme of Work </a> </li> </span>

                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-copy"></i> eClass </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-book"></i> Library System </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-clock-o"></i> Timetable </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-calendar"></i> Event &amp; Calender </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-users"></i> Alumni </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-globe"></i> Manage Website </a> </li> </span>

                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-ticket"></i> Ticketing System </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-building-o"></i> Hostel </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-road"></i> Tranport </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-pencil "></i> Notepad </a> </li> </span>
                            <span class="col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-question-circle "></i> e-Exam </a> </li> </span> 
                            <!-- <li> <a href="#"> <i class="fa fa-th-large "></i> Module Manager </a> </li> --> 
                            <span class=" col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-gears "></i> Settings  </a> </li> </span>

                            <span class=" col-xs-6  col-md-2"><li> <a href="#"> <i class="fa fa-cloud-download"></i> Backup </a> </li> </span>
                          </ul>
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


