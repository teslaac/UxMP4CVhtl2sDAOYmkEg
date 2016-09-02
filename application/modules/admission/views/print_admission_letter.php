<style type="text/css">
	h1	{font:bold 1.2em/1.6em arial;margin:4px 0;padding:4px 0;}
	h2	{font:normal 1.1em/1.5em arial;margin:14px 0 0 0;padding:4px 0;}
div, p {font: normal 1em/1.3em arial;}
textarea.terms {
	width:830px;
	height:500px;
	border:1px solid #ccc;
	background:#f2f2f2;
	font:normal 11px/15px arial;
	padding:6px;
	color:#333;
}
div.terms {
	width:600px;
	height:200px;
	border:1px solid #ccc;
	background:#f2f2f2;
	padding:6px;
	overflow:auto;
}
div.terms p,
div.terms li {font:normal 11px/15px arial;color:#333;}
div.terms h3 {font:bold 14px/19px arial;color:#000;}
div.terms h4 {font:bold 12px/17px arial;color:#000;}
div.terms strong {color:#000;}
</style>
<div class="col-xs-10 col-xs-offset-4 text-info"> <h3>ADMISSION LETTER</h3></div>
<!-- Page content -->
<div class="page-content">
	<div class="widget">
		
		<div class="panel-body">
			<div class="col-xs-12">
				<div class="widget">
					<div class="panel panel-default">
					  <?php //print_r($view_letter); ?>

						<!-- 										<div class="panel-heading"><h6 class="panel-title"> TERMS AND CONDITIONS </h6></div>
						-->
						<?php foreach ($view_letter as $letter); ?>
						<div class="panel-body">
							<div class="col-xs-12">
								<?php echo $letter['content']; ?>
							</div>
							
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>