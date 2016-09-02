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
<div class="col-xs-10 col-xs-offset-4 text-info"> <h3> SUREVILLE Terms and Conditions </h3></div>
<h4>The Terms and Conditions vary according to the country where your billing address is located. Please choose your billing country below to view the appropriate Terms and Conditions.</h4>
<!-- Page content -->
<div class="page-content">
	<div class="widget">
		<div class="panel-body">
			<div class="col-xs-12">
				<div class="widget">
					<div class="panel panel-default">
						<div class="panel-heading"><h6 class="panel-title"> TERMS AND CONDITIONS </h6></div>
						<div class="panel-body">
							<div class="col-xs-12">
								<?php foreach ($view_terms as $terms_condition); ?>
								<p class="terms" readonly="readonly"><?php echo $terms_condition['content']; ?></p>
								<br/>
								<br/>
								<br/>
								<div class="form-line jf-required" data-type="control_checkbox" id="id_7">
									<label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
										Terms
										<span class="form-required">
											*
										</span>
									</label>
									<div id="cid_7" class="form-input jf-required">
										<div class="form-single-column">
											<span class="form-checkbox-item" style="clear:left;">
												<span class="dragger-item">
												</span>
												<input class="form-checkbox validate[required]" id="input_7_0" name="q7_terms[]" value="I agree to the terms and agreement." type="checkbox">
												<label id="label_input_7_0" for="input_7_0"> I agree to the Terms and Conditions. </label>
											</span>
										</div>
									</div>
								</div>
								<div class="line line-dashed b-b line-lg pull-in"></div>
								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-4">
										<button type="submit" class="btn btn-success">I Agree</button>
										<button type="submit" class="btn btn-danger">Disagree</button>
									</div>
								</div>
							</form>
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