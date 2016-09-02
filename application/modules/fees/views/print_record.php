			<section>
				<div class="col-sm-12 text-center">
					<h4>STUDENT PAYMENT SUMMARY (ALL RECORDS)</h4><br>
				</div>
				<div class="col-sm-12">
				<table class="table table-hover">
					<thead>
						<tr style="background:#D9EDF7">
							<th>Session:  <?php  print_r($ts_details['session_name']); ?></th>
							<th>Term:  <?php  print_r($ts_details['term_name']); ?></th>
							<th>Level:  <?php  print_r($level_details['class_name']); ?></th>
						</tr>
					</thead>
				</table>
				</div>
				<div class="col-sm-12">
	              <table class="table table-striped" id="list">
	                <thead>
	                  <tr style="background:#D9EDF7">
	                    <th>No.</th>
	                    <th>Fullname </th>
	                    <th>Class</th>
	                    <th>Main Bill</th>
	                    <th>Outstanding</th>
	                    <th>Extra Bill</th>
	                    <th>Total</th>
	                    <th>Paid</th>
	                    <th>Balance</th>
	                    <th>Credit</th>
	                    <!-- <th>Credit</th> -->
	                    <!-- <th colspan="2">Action</th> -->
	                  </tr>
	                </thead>
	                <tbody>
						<?php
						foreach($students as $student) {
							if(empty($i)){
								$i = 1;
							}
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo strtoupper($student['lname']); ?> <?php echo strtoupper($student['fname']); ?></td>
								<td><?php echo strtoupper($student['class_details']); ?></td>
								<td><?php echo number_format($student['amount']); ?></td>
								<td><?php echo number_format($student['payment_balance']); ?></td>
								<td><?php echo number_format($student['sum_bill']); ?></td>
								<td><?php echo number_format($student['total_payable']); ?></td>
								<td><?php echo number_format($student['trans_amount_paid']); ?></td>
								<td><?php echo number_format($student['total_payable'] - $student['trans_amount_paid']); ?></td>
								<td><?php echo number_format($student['balance']); ?></td>
								<!--<td><?php echo number_format($student['balance']); ?></td>-->
								
							</tr>
							<?php
								$i++;
						}
						?>
	                </tbody>
	              </table>
	            </div>
			</section>
		</div>
		
	</body>
</html>