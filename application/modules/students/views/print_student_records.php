			<?php //phpinfo(); ?>
			<section ng-app="angularTable">
				<div class="col-sm-12 text-center">
					<h4><b>STUDENT LIST</b></h4><br>
				</div>
				<!-- <div class="col-sm-12">
				<table class="table table-hover">
					<thead>
						<tr style="background:#D9EDF7">
							<th>Session:  <?php  print_r($ts_details['session_name']); ?></th>
							<th>Term:  <?php  print_r($ts_details['term_name']); ?></th>
							<th>Level:  <?php  print_r($level_details['class_name']); ?></th>
						</tr>
					</thead>
				</table>
				</div> -->
				<div class="col-sm-12">
	              <section class="panel panel-default" ng-controller="listdata">
		            <header class="panel-heading">
		              Student Records Table
		            </header>
		            <div class="table-responsive">
		              <table class="table table-striped b-t b-light" id="list">
		                <thead>
		                  <tr>
		                    <th class="th-sortable" data-toggle="class" ng-click="sort('user_id')">No.
							<span class="fa fa-caret-down sort-icon" ng-show="sortKey=='user_id'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></span></th>
		                    <th ng-click="sort('lname')">Surname
		                    <span class="fa sort-icon" ng-show="sortKey=='lname'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
		                    <th ng-click="sort('fname')">Firstname
		                    <span class="fa sort-icon" ng-show="sortKey=='fname'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
		                    <th ng-click="sort('gender')">Gender
		                    <span class="fa sort-icon" ng-show="sortKey=='gender'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
		                    <th ng-click="sort('class')">Class
		                    <span class="fa sort-icon" ng-show="sortKey=='class'" ng-class="{'fa-caret-up':reverse,'fa-caret-down':!reverse}"></th>
		                    <th></th>
		                  </tr>
		                </thead>
		                <tbody>
						<tr dir-paginate="user in users|orderBy:sortKey:reverse|filter:search|itemsPerPage:7">
								<td><a class="text-info" href="<?php echo base_url(); ?>students/edit/{{user.user_id}}">{{user.user_id}}</a></td>
								<td>{{user.lname}}</td>
								<td>{{user.fname}}</td>
								<td>{{user.gender}}</td>
								<td>{{user.class_details}}</td>
								<td></td>
							</tr>

		                </tbody>
		              </table>
		            </div>
	          	  </section>
	            </div>
			</section>
		</div>
		
	</body>

	 <script src="<?php echo base_url();?>lib/app.js"></script>
  <script src="<?php echo base_url();?>vendor/dirPagination.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/fuelux/fuelux.css">

  

  <!--- Date Picker -->
  <script src="<?php echo base_url();?>vendor/jquery/datepicker/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>vendor/jquery/datepicker/bootstrap-datepicker3.css">
  <script type="text/javascript">
    $('.app-content .date').datepicker({
      autoclose: true
    });
  </script>
</html>