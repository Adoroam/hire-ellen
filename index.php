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
<body ng-app="ang" ng-controller="MainController">
	<div id="alertBox"> <?php
		if (isset($_POST['clientEmail'])) {
		$clientEmail = $_POST['clientEmail'];
		$clientName = $_POST['clientName'];
		if ($clientName == "") { 
		   $clientName = "No Name Provided";
		}
		$msg = "You have a new business inquiry from " . $clientName . "\nTheir email address is: " . $clientEmail;
		mail("llngrmn@gmail.com","new hire-ellen.com client",$msg);
		}
?></div>
	<div class="container-fluid scooch">
		<div class="row beige ">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<div class="row content">
					<div id="afix2" class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">				
						<h3>Hello. I'm Ellen. I make beautiful content.</h3>
						<div type="button" class="btn btn-default modalButton" data-toggle="modal" data-target="#sliderModal">
                        				Let's Talk
                    				</div>
					</div>	<!-- end afix2 -->
					<div id="afix1" class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-xs-12 ">		
						<img  title="Office vector designed by Freepik" class="img-responsive" src="http://i.imgur.com/nKWQnh7.png" />
					</div>
					
				</div> <!--end internal row-->
			</div>		
		</div>
	</div>
<!-- MODAL -->               
	<div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="sliderModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title center" id="sliderModal">Let's Talk</h4>
	      </div>
	      <div class="modal-body">
	      	<p class="center">I need five small pieces of information to get started.</p>
			<form id="wholeForm" class="" action="" method="POST">
				<div id="formEmail" class="form-group has-feedback">
				  	<label class="control-label sr-only" for="clientEmail">Input group with success</label>
					<div class="input-group">
						<div class="input-group-addon">Name:</div>
						<input type="text" class="form-control" id="clientName" name="clientName" aria-describedby="inputGroupSuccess3Status" placeholder="What should I call you?"><!-- name input -->
					</div>
					<div class="input-group">
						<div class="input-group-addon">Email:</div>
						<input type="text" class="form-control" id="clientEmail" name="clientEmail" aria-describedby="clientEmailStatus" placeholder="Where can I talk to you?"><!-- email input -->
				    		<span id="clientEmailStatus" class="sr-only">(success)</span>				    	
					</div>
					<div class="input-group">
						<div class="input-group-addon">Project:</div>
						<input type="text" class="form-control" name="clientProject" aria-describedby="clientEmailStatus" placeholder="Fiction/Non-Fiction | Ghostwriting/Editing"><!-- project input -->
					</div>
					<div class="input-group">
						<div class="input-group-addon">Stage:</div>
						<select class="form-control" name="clientStage">
							<option disabled selected hidden>Where is the project at?</option>
							<option>I haven't got an idea yet, just a general feeling.</option>
							<option>I've got a pretty good idea of what I want, but haven't written anything.</option>
							<option>I've written a small bit and given up, or I'm overwhelmed and need direction.</option>
							<option>I've written most or all of it, but it still needs major work to get it where I want it to be</option>
							<option>I've written all of it and I'm looking for a second opinion or editor.</option>
						</select>
					</div>
					<div class="input-group">
						<div class="input-group-addon">Deadline:</div>
						<select class="form-control" name="clientStage">
							<option disabled selected hidden>How soon do you need this project done?</option>
							<option>I don't really have any set deadline in mind.</option>
							<option>I'd like this done in a couple of months.</option>
							<option>I need this done in a month.</option>
							<option>I need this done in two weeks.</option>
							<option>I need this done yesterday.</option>
						</select>
					</div>
				</div>	
				<div class="insideBox">
					<p class="small center">When I receive this information I will reach out within 48 hours. I will send you a simple hand written email with a few questions about your project.</p>	
					<p class="small center">I promise never to spam you, annoy you, copy/paste generic responses, or send you silly chain emails.</p>	
					<p class="small center ital">Note: I cannot currently take on projects where I must begin writing/editing before Jan 16th. I am booked solid. All spots after Jan 16th are still open if you wish to grab yours in advance.</p>							
				</div>
	  			<button id="scoot" class="btn btn-default form-control" type="submit">Submit</button>
			</form>	
	      </div>
	    </div>
	  </div>
	</div>
<!-- END MODAL -->
				<!-- <p class="small center">*I am comfortable writing about any non-adult subject. Some subjects take longer to write about than others. I provide exact timelines with my project quotes.</p> -->
</body>
</html>