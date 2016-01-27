<!DOCTYPE html>
<html ng-app="app">
<head>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="bow/angular-material/angular-material.min.css">
  <script src="bow/angular/angular.min.js"></script>
  <script src="bow/angular-animate/angular-animate.min.js"></script>
  <script src="bow/angular-aria/angular-aria.min.js"></script>
  <script src="bow/angular-messages/angular-messages.min.js"></script>
  <script src="bow/angular-material/angular-material.min.js"></script>
  <script src="bow/angular-route/angular-route.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="all.min.js"></script>
  <title>Hire Ellen</title>
  <meta name="Website Author" content="Anthony Stabile">
</head>
<body>
<?php
if (isset($_POST['clientEmail'])) {
    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];

    $msg = "You have a new business inquiry from " . $clientName 
    . "\nTheir email address is: " . $clientEmail;

    mail("llngrmn@gmail.com","new hire-ellen.com client",$msg);
}
?>
<!-- FB PIXEL -->
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=442757292601442&ev=PageView&noscript=1" />
</noscript>
<!-- END FB PIXEL -->
  <div ng-controller="indexCtrl" layout-fill layout="column" layout-align="space-between center" ng-cloak>
    <home ng-if="active.label == 'home'" layout-margin></home>
    <services ng-if="active.label == 'serv'" layout-margin></services>
    <prices ng-if="active.label == 'price'" layout-margin></prices>
    <why ng-if="active.label == 'why'" layout-margin></why>
    <hire ng-if="active.label == 'hire'" layout-margin></hire>

  </div>
</body>
</html>