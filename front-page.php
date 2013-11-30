<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>idealize</title>

   <!-- Bootstrap core CSS -->
   <link href="wp-content/themes/wpbootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="wp-content/themes/wpbootstrap/bootstrap/css/landing.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
     <script src="../../assets/js/html5shiv.js"></script>
     <script src="../../assets/js/respond.min.js"></script>
   <![endif]-->
   <?php wp_enqueue_script("jquery"); ?>
   <?php wp_head(); ?>
 </head>
	<body>
	<center>
		<div class="container">
			<div class="row">
				<img src="wp-content/themes/wpbootstrap/img/landing.png" width="750px" height="250px" />
			</div>
			<div class="row msg">
				<h2>Better Performance. Better Talent. Better Relationship.</h2>
			</div>
			<br>
			<div class="row msg">
			<h3>Ready to take your organization to the next level?</h3>
			</div>

			<div class="row msg">
			<em>We provide Gender and Development (GAD) training for consistency and equality in the workplace.</em>
			</div>
			<br><br>
			<div class="row">
			<div class="col-md-2 col-md-offset-4">
			<a href="?page_id=27"><button type="button" class="btn"><div class="msgBtn">Proceed to the Website</div></button></a>
			</div>

			<div class="col-md-2">
			<a data-toggle="modal" href="#signUp"><button type="button" class="btn"><div class="msgBtn">Sign Up for a Newsletter</div></button></a>
			</div>
			</div>
			<br>
			<div class="row wedpro">
			<img src="wp-content/themes/wpbootstrap/img/wedpro.png" width="120px">
			<p><em>An initiative of WedPro</p>
			</div>

			
		</div>	
	</center>
	<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <center><h4 class="modal-title" style="color: black">Newsletter Sign up</h4></center>
	        </div>
	        <div class="modal-body">
	          <form class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputName1" class="col-lg-2 control-label" style="color: black">Name</label>
				    <div class="col-lg-10">
				      <input type="text" class="form-control" id="inputName1" placeholder="Full Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail1" class="col-lg-2 control-label" style="color: black">Email</label>
				    <div class="col-lg-10">
				      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				    </div>
				  </div>
				</form>
				<center><h5 style="color: black"><em>*You'll receive a pdf copy our brochure after signing up.</em></h5></center>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default">Sign Up</button>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	</body>
</html>

