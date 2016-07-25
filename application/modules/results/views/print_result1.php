<!DOCTYPE html>
<html lang="en">
	<head>
  <meta charset="" />
  <title>Acadah  | Smart School </title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/font.css" type="text/css" />
  <style>
  	html,body{
  		background: #444;
  		color: #000;
  	}
  	body{
  		font-size: 12px !important;
  		font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;

  	}
  	h1,h2,h3,h4,h5,h6{
  		margin-bottom: -2px;
  	}
	.cont {
	width: 820px;
	padding: 0 20px;
	background-color: #FFF;
	margin: 10px auto; 
	min-height: 960px;
	position: relative;
	}
	header{
		width: 100%;
		padding-top: 20px;
	}
	header img{
		width: 115px;
		height: 115px;
		margin-top: 10px;
	}
	table{
		border: 1px solid #31708f;
		border-collapse: none !important;
		margin-bottom: 12px !important;
	}
	td,th{
		font: 12px !important;
		padding: 1px 5px !important;
		border: 1px solid #31708f !important;
	}

	td:last-child, th:last-child{
		border-right: none;
	}
	.rotate_text
      {
        -moz-transform:rotate(-90deg); 
        -webkit-transform: rotate(-90deg);
        -webkit-transform-origin: top left;
        -o-transform: rotate(-90deg);
        -o-transform-origin:  top left;
        position:relative;
        top:0px;
/*      	padding: 2px 0;
*/      	}
      	.rotated_cell{
         height:120px;
         max-width: 20px !important;
         vertical-align:bottom
      }
	   #avg{
	            width: 30px;
	            position: relative;
	            left: -10px;
	            top: 0px;
	  }
	  h2{
	  	font-weight: 700;
	  }
  </style>
</head>
	<body>
		<div class="cont">
			<header class=" text-center clearfix">
				<div class="col-sm-1 ">
					<img src="<?php echo base_url(); ?>img/cc.png" class="img-rounded" alt="">
				</div>
				<div class="col-sm-10 text-center">
					<h2>COOLCHI COLLEGE</h2>
					<h4>CONSISTENCY AND TRUST IN GOD</h4>
					<h4></h4>
					<p class="text-primary">Email: coolchicollege15@gmail.com Web: www.coolchicollege.com Phone: 07038917937</p>
				</div>
				<div class="col-sm-1 ">
				</div>
			</header>
			<section>
				<div class="col-sm-12 text-center">
					<h4>STUDENTS REPORT SHEET</h4><br>
				</div>
				<div class="col-sm-12">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>Session:  2014/2015</td>
							<td>term:  1st Term</td>
							<td>Class  JSS 1</td>
							<td>No In Class:  22</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td>Position:  2nd</td>
							<td>Total:  33</td>
							<td>Overall Position:  23</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td>Name: ABIODUN ABISOYE OLAWALE</td>
							<td>Admission No: 01234567</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover">
					<tbody>
						<tr>
							<td>Weight: 0</td>
							<td>Height: 0</td>
							<td>Cleanliness Rate: 5</td>
							<td>Sport House: Red</td>
						</tr>
					</tbody>
				</table>
				</div>
				<!-- <div class="col-sm-12">
					<table class="table table-hover">
						<tbody>
							<tr class="text-center">
								<td><span class="text-danger">NOTE: NO RECORD FOUND FOR THE SELECTED TERM !</span></td>
							</tr>
						</tbody>
					</table>
				</div> -->
				<div class="col-sm-12">
					<table class="table table-hover">
						<thead>
							<tr style="background:#D9EDF7">
								<th valign="bottom" >Subjects</th>
								<th valign="bottom"> Max</th>
								<th class="rotated_cell"><div class="rotate_text">ENGLISH</div></th>
								<th class="rotated_cell"><div class="rotate_text">INTRO.TECH</div></th>
								<th class="rotated_cell"><div class="rotate_text">COMPUTER</div></th>
								<th class="rotated_cell"><div class="rotate_text">H.ECONS</div></th>
								<th class="rotated_cell"><div class="rotate_text">YORUBA</div></th>
								<th class="rotated_cell"><div class="rotate_text">MATHS</div></th>
								<th class="rotated_cell"><div class="rotate_text">CCA</div></th>
								<th class="rotated_cell"><div class="rotate_text">MUSIC</div></th>
								<th class="rotated_cell"><div class="rotate_text">FRENCH</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.SCI</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.TECH</div></th>
								<th class="rotated_cell"><div class="rotate_text">P.H.E</div></th>
								<th class="rotated_cell"><div class="rotate_text">AGRIC</div></th>
								<th class="rotated_cell"><div class="rotate_text">B.STUDIES</div></th>
								<th class="rotated_cell"><div class="rotate_text">SOS</div></th>
								<th class="rotated_cell"><div class="rotate_text">LIT.IN.ENG</div></th>
								<th class="rotated_cell"><div class="rotate_text">CIVIC</div></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Test 1</td>
								<td>21</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Test 2</td>
								<td>0</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Test 3</td>
								<td>0</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Exam</td>
								<td>70</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Total Score</td>
								<td>21</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Grade</td>
								<td>21</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td>1st Term Score</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>2nd Term Score</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>3rd Term Score</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Annual Average</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover">
						<tbody>
							<tr>
								<td>Max. Score</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>Min. Score</td>
								<td>100</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover">
						<tr>
							<td>No of times school opened: 112</td>
							<td>No of times present: 110</td>
							<td>No of times Absent: 2</td>
						</tr>
					</table>
					<table class="table table-hover">
						<tr>
							<td>Next term begins: <b>13th February 2013</b></td>
							<td>Next term ends: <b>23rd June 2013</b></td>
						</tr>
					</table>
				</div>
				<div class="col-sm-10">
					<table class="table table-hover">
						<tr>
							<td>Principal's Comment: <em>Fair performance try to improve on your studies</em></td>
						</tr>
						<tr>
							<td>Class teacher's Comment: <em>is a responsible student</em></td>
						</tr>
					</table>
				</div>
				<div class="col-sm-2">
					<table class="table table-hover">
						<tr>
							<td>Principal's Signature:</td>
						</tr>
						<tr>
							<td><em>crown s.o</em></td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		
	</body>
</html>