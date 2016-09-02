
<!-- content -->
<div class="app-content m-n ">
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
                        <div class="col-xs-12 text-center">
                            <h1 class="m-n font-thin h3 text-black ">Take a Test</h1>
                            <small class="text-muted">Read to Lead</small>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- / main header -->

                <!-- / inc_admission_sidebar -->
                <?php include 'inc_admission_sidebar.php'; ?>

                <div class="col w-content wrapper-md">
                    <?php $data = array('class' => 'bs-example form-horizontal ng-pristine ng-valid'); ?>
                    <?php echo form_open('admission/completeapp', $data); ?>
                    <section class="panel panel-default clearfix ">
                        <div class="step-content">
                            <div class="step-pane active" id="step4">

                                <?php echo validation_errors(); ?>
                                <?php if(isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-info fade in widget-inner">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        
                                          <?php  echo $this->session->flashdata("success"); ?>
                                    </div>
                                <?php  } ?>
                                
                                <div class="row">
                                
                                <div class="col-md-12">    
                                    <div class="panel">
                                      <div class="panel-heading text-info h3">BURT GELLER <span class="font-thin"> by Adesola Adeola ~ TEST ~ <img src="<?php echo base_url("img/rarmy/rating-img.png"); ?>"> </span> <span class="text-right"> <button type="button" class="btn btn-info">05:20</button></span></div>
                                      <div class="m-t">

                                      <div class="row">
                            <div class="col-lg-12">    
                                 <!-- Tab panes -->
                                    <div class="tab-content">
                                        
                                            <div role="tabpanel" class="tab-pane  active" id="test11">

                                                <section id="testwrap">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">

                                                            Click on your choice of answer for the following questions 
                                                        </div>
                                                        <!-- /.panel-heading -->
                                                        <div class="panel-body pbtm0">                      
                                                            <div class="clear" style="clear:both">
                                                                <!-- /.table-responsive -->

                                                                <div role="tabpanel">

                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">

                                                                                <div role="t1" class="tab-pane active fade in" id="ts11q43291">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 1 
                                                                                                        <a href="#ts11q43292" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43290" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Inductive argument can have more than five premises</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43291" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43291" "="" value="1"> no <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43291" checked="" value="2"> unsure <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43291" value="3"> yes <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43291" value="4"> undecided <br> 

                                                                                                            <input type="hidden" value="ts11q43292" name="nextq">
                                                                                                            <input type="hidden" value="43291" name="ucid">
                                                                                                            <input type="hidden" value="1703" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43291" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43292">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 2 
                                                                                                        <a href="#ts11q43293" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43291" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>________________are chains enthymeme where the unstated conclusion of a syllogism serves as a premise for the next syllogism</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43292" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43292" "="" value="1"> Argument <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43292" checked="" value="2"> proof <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43292" value="3"> sorites <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43292" value="4"> fallacy <br> 

                                                                                                            <input type="hidden" value="ts11q43293" name="nextq">
                                                                                                            <input type="hidden" value="43292" name="ucid">
                                                                                                            <input type="hidden" value="1683" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43292" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43293">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 3 
                                                                                                        <a href="#ts11q43294" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43292" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Inductive arguments can be grouped into ________________forms</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43293" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43293" "="" value="1"> one <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43293" value="2"> two <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43293" checked="" value="3"> three <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43293" value="4"> four <br> 

                                                                                                            <input type="hidden" value="ts11q43294" name="nextq">
                                                                                                            <input type="hidden" value="43293" name="ucid">
                                                                                                            <input type="hidden" value="1698" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43293" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43294">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 4 
                                                                                                        <a href="#ts11q43295" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43293" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Man know thyself' was often emphasised by ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43294" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43294" "="" value="1"> Empedocles <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43294" value="2"> Socrates <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43294" checked="" value="3"> Andronicus <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43294" value="4"> Plato  <br> 

                                                                                                            <input type="hidden" value="ts11q43295" name="nextq">
                                                                                                            <input type="hidden" value="43294" name="ucid">
                                                                                                            <input type="hidden" value="1715" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43294" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43295">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 5 
                                                                                                        <a href="#ts11q43296" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43294" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Knowledge acquired in a flash or in a state of sub-consciousness is called ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43295" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43295" "="" value="1"> reasoning <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43295" value="2"> intuition <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43295" checked="" value="3"> unconscious knowledge <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43295" value="4"> conscious knowledge <br> 

                                                                                                            <input type="hidden" value="ts11q43296" name="nextq">
                                                                                                            <input type="hidden" value="43295" name="ucid">
                                                                                                            <input type="hidden" value="1631" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43295" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43296">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 6 
                                                                                                        <a href="#ts11q43297" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43295" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>A prominent disciple of Plato is ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43296" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43296" "="" value="1"> Julius Nyerere <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43296" value="2"> Aristotle <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43296" checked="" value="3"> Protagoras <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43296" value="4"> Socrates <br> 

                                                                                                            <input type="hidden" value="ts11q43297" name="nextq">
                                                                                                            <input type="hidden" value="43296" name="ucid">
                                                                                                            <input type="hidden" value="1621" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43296" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43297">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 7 
                                                                                                        <a href="#ts11q43298" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43296" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>In conjuction, it is possible to re-write p .  q  as  q  .  p</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43297" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43297" "="" value="1"> impossible <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43297" value="2"> probably <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43297" checked="" value="3"> correct <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43297" value="4"> incorrect <br> 

                                                                                                            <input type="hidden" value="ts11q43298" name="nextq">
                                                                                                            <input type="hidden" value="43297" name="ucid">
                                                                                                            <input type="hidden" value="1654" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43297" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43298">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 8 
                                                                                                        <a href="#ts11q43299" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43297" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>A situation whereby a proposition is true in all possible distribution is called ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43298" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43298" "="" value="1"> tautology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43298" value="2"> contradiction  <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43298" checked="" value="3"> enabled proposition <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43298" value="4"> error propositon <br> 

                                                                                                            <input type="hidden" value="ts11q43299" name="nextq">
                                                                                                            <input type="hidden" value="43298" name="ucid">
                                                                                                            <input type="hidden" value="1665" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43298" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43299">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 9 
                                                                                                        <a href="#ts11q43300" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43298" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Argumentum ad baculum' refers to ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43299" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43299" "="" value="1"> appeal to backers <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43299" value="2"> appeal to fallacy <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43299" checked="" value="3"> appeal to fiction <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43299" value="4"> appeal to force <br> 

                                                                                                            <input type="hidden" value="ts11q43300" name="nextq">
                                                                                                            <input type="hidden" value="43299" name="ucid">
                                                                                                            <input type="hidden" value="1711" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43299" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43300">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 10 
                                                                                                        <a href="#ts11q43301" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43299" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>________________.is also referred to as consequents</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43300" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43300" "="" value="1"> premises <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43300" value="2"> proposition <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43300" checked="" value="3"> conclusion <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43300" value="4"> premises <br> 

                                                                                                            <input type="hidden" value="ts11q43301" name="nextq">
                                                                                                            <input type="hidden" value="43300" name="ucid">
                                                                                                            <input type="hidden" value="1668" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43300" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43301">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 11 
                                                                                                        <a href="#ts11q43302" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43300" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>"Philo" is a Greek word meaning</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43301" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43301" "="" value="1"> philosophy <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43301" checked="" value="2"> wisdom <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43301" value="3"> love <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43301" value="4"> emotion <br> 

                                                                                                            <input type="hidden" value="ts11q43302" name="nextq">
                                                                                                            <input type="hidden" value="43301" name="ucid">
                                                                                                            <input type="hidden" value="1626" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43301" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43302">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 12 
                                                                                                        <a href="#ts11q43303" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43301" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Philosophy is applicable to which of these disciplines</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43302" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43302" "="" value="1"> religion <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43302" checked="" value="2"> politics <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43302" value="3"> business administration <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43302" value="4"> all of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43303" name="nextq">
                                                                                                            <input type="hidden" value="43302" name="ucid">
                                                                                                            <input type="hidden" value="1619" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43302" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43303">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 13 
                                                                                                        <a href="#ts11q43304" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43302" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>________________is the branch ofknowledge that deals with values, conducts, etiquettes in the society.</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43303" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43303" "="" value="1"> epistemology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43303" checked="" value="2"> axiology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43303" value="3"> metaphysics <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43303" value="4"> logic <br> 

                                                                                                            <input type="hidden" value="ts11q43304" name="nextq">
                                                                                                            <input type="hidden" value="43303" name="ucid">
                                                                                                            <input type="hidden" value="1632" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43303" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43304">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 14 
                                                                                                        <a href="#ts11q43305" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43303" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Inductive argument cannot have more than two premises</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43304" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43304" "="" value="1"> yes <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43304" value="2"> certain <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43304" checked="" value="3"> I don?t know <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43304" value="4"> no <br> 

                                                                                                            <input type="hidden" value="ts11q43305" name="nextq">
                                                                                                            <input type="hidden" value="43304" name="ucid">
                                                                                                            <input type="hidden" value="1702" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43304" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43305">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 15 
                                                                                                        <a href="#ts11q43306" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43304" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The school of thought which holds that ideas are the only reality is called ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43305" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43305" "="" value="1"> ideology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43305" value="2"> ideation <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43305" checked="" value="3"> truism <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43305" value="4"> idealism <br> 

                                                                                                            <input type="hidden" value="ts11q43306" name="nextq">
                                                                                                            <input type="hidden" value="43305" name="ucid">
                                                                                                            <input type="hidden" value="1647" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43305" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43306">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 16 
                                                                                                        <a href="#ts11q43307" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43305" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Syllogism is not a form of argument</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43306" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43306" "="" value="1"> yes <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43306" value="2"> no <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43306" checked="" value="3"> not sure <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43306" value="4"> I don?t know <br> 

                                                                                                            <input type="hidden" value="ts11q43307" name="nextq">
                                                                                                            <input type="hidden" value="43306" name="ucid">
                                                                                                            <input type="hidden" value="1673" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43306" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43307">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 17 
                                                                                                        <a href="#ts11q43308" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43306" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The branch of philosophy which preoccupies itself with the nature, scope and validity of knowledge is ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43307" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43307" "="" value="1"> episteme <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43307" value="2"> epistolary <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43307" checked="" value="3"> epistemology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43307" value="4"> epidemic <br> 

                                                                                                            <input type="hidden" value="ts11q43308" name="nextq">
                                                                                                            <input type="hidden" value="43307" name="ucid">
                                                                                                            <input type="hidden" value="1629" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43307" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43308">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 18 
                                                                                                        <a href="#ts11q43309" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43307" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Proposition can be primarily categorised into categorical and________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43308" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43308" "="" value="1"> sylogistical <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43308" value="2"> modal <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43308" checked="" value="3"> hypothetical <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43308" value="4"> all of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43309" name="nextq">
                                                                                                            <input type="hidden" value="43308" name="ucid">
                                                                                                            <input type="hidden" value="1672" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43308" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43309">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 19 
                                                                                                        <a href="#ts11q43310" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43308" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Which of the following is not an applied branch of philosophy?</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43309" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43309" "="" value="1"> philosophy of religion <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43309" checked="" value="2"> philosophy of law <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43309" value="3"> philosophy of education <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43309" value="4"> none of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43310" name="nextq">
                                                                                                            <input type="hidden" value="43309" name="ucid">
                                                                                                            <input type="hidden" value="1639" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43309" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43310">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 20 
                                                                                                        <a href="#ts11q43311" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43309" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>How many are the schools of thoughts in philosophy?</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43310" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43310" "="" value="1"> three <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43310" checked="" value="2"> numerous <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43310" value="3"> four <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43310" value="4"> scanty <br> 

                                                                                                            <input type="hidden" value="ts11q43311" name="nextq">
                                                                                                            <input type="hidden" value="43310" name="ucid">
                                                                                                            <input type="hidden" value="1644" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43310" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43311">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 21 
                                                                                                        <a href="#ts11q43312" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43310" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The predicate term of the conclusion is referred to as________________term</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43311" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43311" "="" value="1"> minors <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43311" checked="" value="2"> major <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43311" value="3"> majors <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43311" value="4"> minor <br> 

                                                                                                            <input type="hidden" value="ts11q43312" name="nextq">
                                                                                                            <input type="hidden" value="43311" name="ucid">
                                                                                                            <input type="hidden" value="1679" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43311" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43312">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 22 
                                                                                                        <a href="#ts11q43313" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43311" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>When an inductive argument moves from particular to general, the general indicator is</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43312" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43312" "="" value="1"> all <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43312" checked="" value="2"> many <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43312" value="3"> some <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43312" value="4"> few <br> 

                                                                                                            <input type="hidden" value="ts11q43313" name="nextq">
                                                                                                            <input type="hidden" value="43312" name="ucid">
                                                                                                            <input type="hidden" value="1701" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43312" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43313">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 23 
                                                                                                        <a href="#ts11q43314" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43312" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>One of these is the focus of philosophy</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43313" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43313" "="" value="1"> supernaturalism <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43313" checked="" value="2"> occultism <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43313" value="3"> reasoning <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43313" value="4"> none of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43314" name="nextq">
                                                                                                            <input type="hidden" value="43313" name="ucid">
                                                                                                            <input type="hidden" value="1618" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43313" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43314">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 24 
                                                                                                        <a href="#ts11q43315" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43313" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>"Sophia" is a Greek word meaning ______________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43314" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43314" "="" value="1"> sophistry <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43314" checked="" value="2"> wisdom <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43314" value="3"> sophistication <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43314" value="4"> love <br> 

                                                                                                            <input type="hidden" value="ts11q43315" name="nextq">
                                                                                                            <input type="hidden" value="43314" name="ucid">
                                                                                                            <input type="hidden" value="1634" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43314" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43315">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 25 
                                                                                                        <a href="#ts11q43316" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43314" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The branch of philosophy which deals with argument, analysis of thought patterns, and separation of correct forms of reasoning from incorrect ones is ______________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43315" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43315" "="" value="1"> analytical method <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43315" checked="" value="2"> symbol <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43315" value="3"> logic <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43315" value="4"> mathematics <br> 

                                                                                                            <input type="hidden" value="ts11q43316" name="nextq">
                                                                                                            <input type="hidden" value="43315" name="ucid">
                                                                                                            <input type="hidden" value="1640" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43315" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43316">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 26 
                                                                                                        <a href="#ts11q43317" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43315" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The subject term of the conclusion in a syllogism is the________________term</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43316" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43316" "="" value="1"> major <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43316" checked="" value="2"> minor <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43316" value="3"> minion <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43316" value="4"> None of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43317" name="nextq">
                                                                                                            <input type="hidden" value="43316" name="ucid">
                                                                                                            <input type="hidden" value="1677" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43316" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43317">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 27 
                                                                                                        <a href="#ts11q43318" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43316" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Alternation can appear in two senses, namely________________and ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43317" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43317" checked"="" value="1"> alternate &amp; inordinate <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43317" value="2"> inclusive &amp; exclusive <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43317" value="3"> conditional &amp; inclusive <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43317" value="4"> exclusive &amp; universal <br> 

                                                                                                            <input type="hidden" value="ts11q43318" name="nextq">
                                                                                                            <input type="hidden" value="43317" name="ucid">
                                                                                                            <input type="hidden" value="1660" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43317" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43318">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 28 
                                                                                                        <a href="#ts11q43319" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43317" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>________________is the expression of judgement in terms that are put together to convey an idea</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43318" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43318" "="" value="1"> conclusion <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43318" checked="" value="2"> proof <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43318" value="3"> proposition <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43318" value="4"> preposition <br> 

                                                                                                            <input type="hidden" value="ts11q43319" name="nextq">
                                                                                                            <input type="hidden" value="43318" name="ucid">
                                                                                                            <input type="hidden" value="1670" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43318" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43319">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 29 
                                                                                                        <a href="#ts11q43320" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43318" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>The acronym Ph. D is for ________________</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43319" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43319" "="" value="1"> degree in philosophy <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43319" checked="" value="2"> doctor of philosophy <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43319" value="3"> doctor of philology <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43319" value="4"> none of the above <br> 

                                                                                                            <input type="hidden" value="ts11q43320" name="nextq">
                                                                                                            <input type="hidden" value="43319" name="ucid">
                                                                                                            <input type="hidden" value="1623" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43319" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                 

                                                                                <div role="t1" class="tab-pane  fade in" id="ts11q43320">  
                                                                                    <div class="table">
                                                                                        <table class="table table-striped">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="h2">Question 30 
                                                                                                        <a href="#ts11q43321" data-toggle="tab"><button type="button" class="btn btn-primary next">Next</button></a>
                                                                                                        <a href="#ts11q43319" data-toggle="tab"><button type="button" class="btn btn-info next">Previous</button></a>                                                                                   

                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td><h3>Which of these is not a type of compound statement?</h4>                                            
                                                                                                </td></tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <form id="formts11q43320" method="post" action="_inc/process.php"> 
                                                                                                            <input type="radio" name="choice" data-value="ts11q43320" "="" value="1"> conjunction <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43320" checked="" value="2"> disjunction <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43320" value="3"> conditional <br>
                                                                                                            <input type="radio" name="choice" data-value="ts11q43320" value="4"> universal <br> 

                                                                                                            <input type="hidden" value="ts11q43321" name="nextq">
                                                                                                            <input type="hidden" value="43320" name="ucid">
                                                                                                            <input type="hidden" value="1659" name="queid">
                                                                                                            <input type="hidden" value="1447" name="user_test_id">
                                                                                                            <div id="respondts11q43320" style="min-height: 30px;"><div class="alert2 alert-success">Your Choice has been successfully submitted to the DataBase.</div></div>                                                
                                                                                                            </form></td> 
                                                                                                                                                                                                                                                                            
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>                               
                                                                                </div>

                                                                                
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div><!-- /.panel-body -->

                                                        <div class="panel-body ptop0">
                                                            <div class="well" id="pques">
                                                                <a href="#ts11q43291" data-toggle="tab"><button id="pts11q43291" type="button" class="btn btn-primary btnpg">1</button></a><a href="#ts11q43292" data-toggle="tab"><button id="pts11q43292" type="button" class="btn btn-primary btnpg">2</button></a><a href="#ts11q43293" data-toggle="tab"><button id="pts11q43293" type="button" class="btn btn-primary btnpg">3</button></a><a href="#ts11q43294" data-toggle="tab"><button id="pts11q43294" type="button" class="btn btn-primary btnpg">4</button></a><a href="#ts11q43295" data-toggle="tab"><button id="pts11q43295" type="button" class="btn btn-primary btnpg">5</button></a><a href="#ts11q43296" data-toggle="tab"><button id="pts11q43296" type="button" class="btn btn-primary btnpg">6</button></a><a href="#ts11q43297" data-toggle="tab"><button id="pts11q43297" type="button" class="btn btn-primary btnpg">7</button></a><a href="#ts11q43298" data-toggle="tab"><button id="pts11q43298" type="button" class="btn btn-primary btnpg">8</button></a><a href="#ts11q43299" data-toggle="tab"><button id="pts11q43299" type="button" class="btn btn-primary btnpg">9</button></a><a href="#ts11q43300" data-toggle="tab"><button id="pts11q43300" type="button" class="btn btn-primary btnpg">10</button></a><a href="#ts11q43301" data-toggle="tab"><button id="pts11q43301" type="button" class="btn btn-primary btnpg">11</button></a><a href="#ts11q43302" data-toggle="tab"><button id="pts11q43302" type="button" class="btn btn-primary btnpg">12</button></a><a href="#ts11q43303" data-toggle="tab"><button id="pts11q43303" type="button" class="btn btn-primary btnpg">13</button></a><a href="#ts11q43304" data-toggle="tab"><button id="pts11q43304" type="button" class="btn btn-primary btnpg">14</button></a><a href="#ts11q43305" data-toggle="tab"><button id="pts11q43305" type="button" class="btn btn-primary btnpg">15</button></a><a href="#ts11q43306" data-toggle="tab"><button id="pts11q43306" type="button" class="btn btn-primary btnpg">16</button></a><a href="#ts11q43307" data-toggle="tab"><button id="pts11q43307" type="button" class="btn btn-primary btnpg">17</button></a><a href="#ts11q43308" data-toggle="tab"><button id="pts11q43308" type="button" class="btn btn-primary btnpg">18</button></a><a href="#ts11q43309" data-toggle="tab"><button id="pts11q43309" type="button" class="btn btn-primary btnpg">19</button></a><a href="#ts11q43310" data-toggle="tab"><button id="pts11q43310" type="button" class="btn btn-primary btnpg">20</button></a><a href="#ts11q43311" data-toggle="tab"><button id="pts11q43311" type="button" class="btn btn-primary btnpg">21</button></a><a href="#ts11q43312" data-toggle="tab"><button id="pts11q43312" type="button" class="btn btn-primary btnpg">22</button></a><a href="#ts11q43313" data-toggle="tab"><button id="pts11q43313" type="button" class="btn btn-primary btnpg">23</button></a><a href="#ts11q43314" data-toggle="tab"><button id="pts11q43314" type="button" class="btn btn-primary btnpg">24</button></a><a href="#ts11q43315" data-toggle="tab"><button id="pts11q43315" type="button" class="btn btn-primary btnpg">25</button></a><a href="#ts11q43316" data-toggle="tab"><button id="pts11q43316" type="button" class="btn btn-primary btnpg">26</button></a><a href="#ts11q43317" data-toggle="tab"><button id="pts11q43317" type="button" class="btn btn-primary btnpg">27</button></a><a href="#ts11q43318" data-toggle="tab"><button id="pts11q43318" type="button" class="btn btn-primary btnpg">28</button></a><a href="#ts11q43319" data-toggle="tab"><button id="pts11q43319" type="button" class="btn btn-primary btnpg">29</button></a><a href="#ts11q43320" data-toggle="tab"><button id="pts11q43320" type="button" class="btn btn-primary btnpg">30</button></a>                                                 
                                                            </div>
                                                        </div>                   
                                                    </div><!-- /.panel -->
                                                </section>
                                            </div>
                                         </div>



                        <!-- //  time out modal --> 
                        <div class="modal pt100 fade" id="timeoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h2 class="text-center text-danger"> <span id="endmsg"></span> <span id="duration"> </span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //  modal end-->                         

                    </div>
                </div>
                                        <div>
                                            <a href="<?php echo base_url('readingarmy/test_result/1');?>" class="btn btn-primary mblock"><i class="fa fa-eye"></i> View Score!</a> 
                                            <a href="#" class="btn btn-info mblock"><i class="fa fa-eye"></i> View Rank</a>
                                        
                                        </div>
                                    </div>
                                </div>

                              </div>
                         </div>
                    </section>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>
</div>
<!-- /content -->

<?php include 'rarmy.php'; ?>
