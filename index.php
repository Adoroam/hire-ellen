<!DOCTYPE html>
<html>
<head>
	<title>Hire Ellen</title>
	<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="libs/zero.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="libs/style.css">
	<meta name="Website Author" content="Anthony Stabile">
</head>
<body>
	<div id="alertBox"> <?php
	if (isset($_POST['clientEmail'])) {
		$clientEmail = $_POST['clientEmail'];
		$clientName = $_POST['clientName'];
		if ($clientName == "") { $clientName = "No Name Provided"};
		$data = $clientName . " - " . $clientEmail . "\n";
		$ret = file_put_contents('clientlist.txt', $data, FILE_APPEND | LOCK_EX);
			if($ret === false) {
				echo '<div id="emailAlertLose" class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong> Uh Oh!</strong>Something went wrong. Check your email and try again.</div>';
			}
			else {
				echo '<div id="emailAlertWin" class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Thanks!</strong> I will be in contact with you soon.</div>';
			}
}
?>	</div>
	<div class="container-fluid scooch">
		<div class="row beige ">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<div class="row content">
					<div id="afix2" class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">				
						<h3>Hello. I'm Ellen. I make beautiful content.</h3>
						<p>I am a passionate freelancer located in Austin, Texas. I specialize in writing/designing stunning eBooks and blog posts. I created this website as an open invitation to collaborate with awesome new clients like you. To see if we'd be a good fit, I am happy to send you a custom written sample or my portfolio of great work. All I need is your name and email address below. I promise never to spam you, annoy you, or send you silly chain emails.</p>
						<form id="wholeForm" class="form-horizontal" action="" method="POST">
							<div id="formEmail" class="form-group has-feedback">
							  	<label class="control-label sr-only" for="clientEmail">Input group with success</label>
							  	<div class="input-group">								  	
							    		<input type="text" class="form-control" id="clientName" name="clientName" aria-describedby="inputGroupSuccess3Status" placeholder="type name here"><!-- name input -->
							    		<input type="text" class="form-control" id="clientEmail" name="clientEmail" aria-describedby="clientEmailStatus" placeholder="type email here"><!-- email input -->
							    		<span id="clientEmailStatus" class="sr-only">(success)</span>				    	
							  	
							  		<button id="scoot" class="btn btn-default form-control" type="submit" disabled="disabled">Email Me</button>
							  	</div>				
							</div>	
						</form>					
					</div>	<!-- end afix2 -->
					<div id="afix1" class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-xs-12 ">		
						<img  title="Office vector designed by Freepik" class="img-responsive" src="http://i.imgur.com/nKWQnh7.png" />
					</div><!-- testing commits -->
					
				</div> <!--end internal row-->
			</div>		
		</div>
	</div>
</body>
</html>