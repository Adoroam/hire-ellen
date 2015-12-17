<!DOCTYPE html>
<html ng-app="ang">
<head>
	<title>Hire Ellen</title>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-animate.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="libs/zero.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="libs/style.css">
	<meta name="Website Author" content="Anthony Stabile">
</head>
<body ng-controller="MainController">
	<div id="alertBox"> 
<?php
	if (isset($_POST['clientEmail'])) {
	$clientName = $_POST['clientName'];
	$clientEmail = $_POST['clientEmail'];
	$clientProject = $_POST['clientProject'];
	$clientStage = $_POST['clientStage'];
	$clientDeadline = $_POST['clientDeadline'];


	$msg = "You have a new business inquiry from " . $clientName 
		. "\nTheir email address is: " . $clientEmail
		."\nThe project type is: " . $clientProject
		."\nThe stage is: " . $clientStage
		."\nThe deadline is: " . $clientDeadline;

	mail("llngrmn@gmail.com","new hire-ellen.com client",$msg);
	}
?></div>
	<div class="container-fluid scooch">
		<div class="row beige ">
			<div class="row top-spacer"></div>
<!-- CONTENT -->
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<div class="row content">
					<div id="afix2" class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">				
						<h3 class="heading visible-xs-block">Hello. I'm Ellen. I make books <span class="ital">happen</span>.</h3>
						<h3 class="heading hidden-xs" >Hello. I'm Ellen. <br>I make books <span class="ital">happen</span>.</h3>

						<div ng-repeat="x in cList">
							<div class="list-group">
								<button type="button" class="list-group-item" ng-click="setActive($index);">{{ x.title }}<span class="caret pull-right"></span></button>
								<div ng-include="x.page" class="list-group-item well dropContent"  ng-if="active == x">
									
								</div>
							</div>
						</div>
<!-- MODAL BUTTON -->
						<div type="button" class="btn btn-default modalButton" data-toggle="modal" data-target="#sliderModal">
                        				Let's Talk
                    				</div>
					</div>	<!-- end afix2 -->
<!-- IMAGE -->
					<div id="afix1" class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-xs-12 ">
						<img  title="Office vector designed by Freepik" class="img-responsive" src="http://i.imgur.com/nKWQnh7.png" />
					</div>
<!-- END IMAGE -->					
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
<!-- FORM -->
				<form id="wholeForm" class="" action="" method="POST">

				<div ng-repeat="x in lists | filter: 'input' " class="form-group {{x.valid}}" id="{{ x.id }}">
					<label class="control-label sr-only" for="{{x.name}}">Input group with success</label>
						<div class="input-group">
							<div class="input-group-addon">{{x.obj}}</div>
							<input type="text" class="form-control" id="{{x.name}}"  name="{{x.name}}" 
							aria-describedby="{{x.desc}}" placeholder="{{x.placeholder}}" ng-model="x.sel" ng-change="validate(x);">
							<span id="{{x.desc}}" class="sr-only">(success)</span>
						</div>
					</div> 

					<div ng-repeat="x in lists | filter: 'dropdown' " class="form-group {{x.valid}}" id="{{ x.id }}">
						<label class="control-label sr-only" for="{{x.name}}">Input group with success</label>
						<div class="input-group">					
							<div class="input-group-addon">{{x.obj}}</div>
								<select class="form-control" name="{{x.name}}" 
								aria-describedby="{{x.desc}}" ng-model="x.sel" ng-change="validate(x);">
									<option selected hidden>{{x.sel}}</option>
									<option ng-repeat="y in x.option" >{{y}}</option>					
								</select>
								<span id="{{x.desc}}" class="sr-only">(success)</span>
						  </div>					  
					</div>

					<div class="insideBox">
						<p class="small center">When I receive this information I will reach out within 48 hours. I will send you a simple hand written email with a few questions about your project.</p>	
						<p class="small center">I promise never to spam you, annoy you, copy/paste generic responses, or send you silly chain emails.</p>	
						<p class="small center ital">Note: I cannot currently take on projects where I must begin writing/editing before Jan 16th. I am booked solid. All spots after Jan 16th are still open if you wish to grab yours in advance.</p>							
					</div>	
					<div class="center">
						<button id="scoot" class="btn btn-default {{submitStatus()}}" type="submit">Submit</button>		
									
					</div>			

				</form>	
      			</div>
    		</div>
	</div>
</div>
<!-- END MODAL -->
</body>
</html>