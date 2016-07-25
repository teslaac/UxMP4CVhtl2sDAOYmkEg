<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>

<?php //echo lang('sales_giftcard_number')." <small> -  ".lang('sales_giftcard_number'); ?> 
 <!-- content -->
    <div class="app-content">
      <div ui-butterbar></div>
      <a href class="off-screen-toggle hide" data-toggle="class:off-screen" data-target=".app-aside" ></a>
      <div class="app-content-body fade-in-up">
        <!-- COPY the content from "tpl/" -->
       
        <div class="bg-light lter b-b wrapper-md">
          <span class="pull-right form-inline" >
            <button class="btn btn-info btn-addon"><i class="fa fa-gear"></i>Subject Settings </button>
          </span>
          <h1 class="m-n font-thin h3">Assign Multiple Student</h1>
          <small>Lorem ipsum dolor sit amet.. </small>
        </div>
        <div class="wrapper-md">

          

            <div class="row row-sm text-center">
              <div class="table-responsive">
                <table class="table panel panel-info">
                  <thead class="panel-heading">
                    <tr>
                      <th>Class</th>
                      <th>Term/Session</th>
                      <th>Student</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="panel-body">
                    <tr>
                      <form action="">
                        <td>
                          <div class="form-group">
                            <select name="" id="input" class="form-control" required="required">
                              <option value="">JSS 1</option>
                              <option value="">JSS 2</option>
                              <option value="">JSS 3</option>
                            </select>
                          </div>
                        </td>
                        <td>
                          <select name="" id="input" class="form-control" required="required">
                              <option value="">1st Term 2015/2016</option>
                              <option value="">2st Term 2015/2016</option>
                              <option value="">3st Term 2015/2016</option>
                            </select>
                        </td>
                        <td>
                          <div class="form-group">
                            <select name="" id="input" class="form-control" required="required">
                              <option value="">All</option>
                              <option value=""></option>
                              <option value=""></option>
                            </select>
                          </div>
                        </td>
                        
                        <td>
                          <button type="submit" class="btn btn-sm btn-info">Go</button>
                        </td>
                      </form>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            
        <section class="panel panel-info clearfix ">
          <div class="panel-heading">
             <h2 class="panel-title"><i class="fa fa-plus"></i> Student/Subject Registration</h2>
          </div>
          <div class="panel-body">
            <div class="col-sm-6">
              <div class="panel panel-info">
                 <div class="panel-heading">
                   <h2 class="panel-title"><i class="fa fa-book"></i>  Select Subjects for Students</h2>
                 </div>
                 <div>
                   <div class="table-responsive">
                     <table class="table table-striped b-t b-light">
                       <thead>
                         <tr>
                           <th>No</th>
                           <th>Subject</th>
                           <th> Select</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>1</td>
                           <td>mathematics</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>2</td>
                           <td>English</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>3</td>
                           <td>Yoruba</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>4</td>
                           <td>Economics</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
              </div>
             </div>
             <div class="col-sm-6">
               <div class="panel panel-info">
                 <div class="panel-heading">
                   <h2 class="panel-title"><i class="fa fa-book"></i> Register Students For Subjects</h2>
                 </div>
                 <div>
                   <div class="table-responsive">
                     <table class="table table-striped b-t b-light">
                       <thead>
                         <tr>
                           <th>No</th>
                           <th>Surname</th>
                           <th>Othernames</th>
                           <th>Register</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>1</td>
                           <td>Salako</td>
                           <td>Tozo</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>2</td>
                           <td>Salako</td>
                           <td>Tozo</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>3</td>
                           <td>Salako</td>
                           <td>Tozo</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                         <tr>
                           <td>4</td>
                           <td>Salako</td>
                           <td>Tozo</td>
                           <td><input type="checkbox" value=""></td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="panel-footer clearfix">
             <div class="pull-right">
               <button type="button" class="btn btn-info ">Save Records</button>
             </div>
           </div>
                    
        </section>
    </div>
  </div>
 </div>




