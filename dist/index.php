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
  <meta name="viewport" content="width=device-width">
  <meta name="Website Author" content="Anthony Stabile">
</head>
<body ng-controller="indexCtrl">
<?php
if (isset($_POST['clientEmail'])) {
    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];
    $msg = "You have a new business inquiry from ".$clientName.
    "\nTheir email address is: ".$clientEmail;
    mail("llngrmn@gmail.com","new hire-ellen.com client",$msg);
};
?>
<!-- FB PIXEL -->
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=442757292601442&ev=PageView&noscript=1" />
</noscript>
 <!-- END FB PIXEL -->
  <div layout="column" layout-align="space-between center" ng-cloak ng-controller="ScrollCtrl">
    <cat></cat>
    <!-- HOME -->
    <div layout-margin>
      <span class="anchor" id="home"></span>
      <div class="title-box" layout="column" layout-align="start center">
          <img class="ellen" src="img/ellen.jpg" alt="ellen">
          <h1 class="title-text center">Hello. I'm Ellen.</h1>
          <div class="divider"></div>
          <h2 class="subtitle-text center">I make books happen.</h2>
      </div>
      <div class="hire" layout-padding layout-fill layout="column" layout-gt-sm="row" layout-align="space-between center">
        <img class="home-fil" src="img/filLeft.png" alt="swirl" hide show-gt-sm>
        <a class="category hire-text" ng-click="gotoElement('hire-me')">HIRE ME</a>
        <img class="home-fil" src="img/filRight.png" alt="swirl" hide show-gt-sm>
      </div>
    </div>
    <!-- SERVICES -->
    <div layout-margin>
      <span class="anchor" id="services"></span>
      <div class="title-box" layout="column" layout-align="start center">
          <div class="page-div"></div>
          <h1 class="page-title-text">SERVICES</h1>
          <div class="page-div"></div>
      </div>
      <div class="serif page-text">
          <p class="page-subtitle-text center">I ghostwrite and edit books in conjunction with authors (or potential authors) like you.
          <br>My specialties include...</p>
          <ul>
              <li class="service">Writing <em>original content</em> based on outlines, or one-on-one imaginative discussion.</li>
              <li class="service">Solving problems with <em>structure and flow</em>.</li>
              <li class="service">Finding and <em>closing holes in plot</em>.</li>
              <li class="service">Giving <em>constructive feedback</em> on manuscripts before they are sent to publishers.</li>
              <li class="service">Sharp-eyed <em>grammatical editing</em>.</li>
          </ul>
      </div>

    </div>
    <!-- PRICES -->
    <div layout-margin>
      <span class="anchor" id="prices"></span>
      <div class="title-box" layout="column" layout-align="start center">
          <div class="page-div"></div>
          <h1 class="page-title-text">PRICES</h1>
          <div class="page-div"></div>
      </div>
      <div class="serif page-text">
          <p class="page-subtitle-text center">Your price depends on how many words you need written, edited, or critiqued.</p>
          <div layout="row" layout-align="space-around center" layout-fill>
              <dl class="center">
                  <dt>For projects <em>less</em> than 40,000 words...</dt>
                  <dd>Writing ...<span hide show-gt-sm>................</span> $.05/word</dd>
                  <dd>Editing ......<span hide show-gt-sm>................</span> $.03/word</dd>
                  <dd>Critique .....<span hide show-gt-sm>................</span> $.02/word</dd>
              </dl>
              <div layout="row" layout-align="space-around center" hide show-gt-md >
                   <img class="price-fil" src="img/filLeft.png" alt="swirl">
                   <img class="price-fil" src="img/filRight.png" alt="swirl">
              </div>
              <dl class="center" >
                  <dt>For projects <em>more</em> than 40,000 words...</dt>
                  <dd>Writing ...<span hide show-gt-sm>................</span> $.03/word</dd>
                  <dd>Editing .....<span hide show-gt-sm>................</span> $.02/word</dd>
                  <dd>Critique .....<span hide show-gt-sm>................</span> $.01/word</dd>
              </dl>
          </div>
           <div layout="row" layout-align="space-around center">
               <p class="center">For reference...
               <br>A standard novel is <span class="bold">40,000 words</span>.
               <br>A standard page is <span class="bold">500 words</span>.</p>
           </div>
      </div>
    </div>
    <!-- WHY ME -->
    <div layout-margin>
      <span class="anchor" id="why-me"></span>
      <div class="title-box" layout="column" layout-align="start center">
          <div class="page-div"></div>
          <h1 class="page-title-text">WHY ME?</h1>
          <div class="page-div"></div>
      </div>
      <div class="serif page-text">
          <p class="page-subtitle-text center">The advantages I offer are simple.</p>
           <div layout="row" layout-align="space-around center">
               <p class="center why-text">I'm an honest freelancer with a good work ethic. I have a track record of success, with references to prove it.  I keep my work load extremely small and exclusive. Every client I take on must first pass a thorough one-on-one vetting interview and discussion. If your project isn't a good fit, <span class="ital">I won't take it</span> - I'll just recommend someone more appropriate.</p>
           </div>
      </div>
    </div>
    <!-- HIRE ME -->
    <div layout-margin>
      <span class="anchor" id="hire-me"></span>
      <div class="title-box" layout="column" layout-align="start center" >
          <div class="page-div"></div>
          <h1 class="page-title-text">HIRE ME</h1>
          <div class="page-div"></div>
      </div>
      <div class="serif page-text">
          <p class="page-subtitle-text center">I personally respond to info submitted here in less than 24 hours.</p>
          <form id="wholeForm" action="" method="POST">
           <div layout="row" layout-align="center center">
               <img class="price-fil" src="img/filLeft.png" alt="swirl" hide show-gt-md>
               <input type="text" class="category center {{valid.name}}" 
               placeholder="NAME" name="clientName"
               ng-model="clientName" ng-change="validate('name');">
               <img class="price-fil" src="img/filRight.png" alt="swirl" hide show-gt-md>
           </div>
           <div layout="row" layout-align="center center">
               <img class="price-fil" src="img/filLeft.png" alt="swirl" hide show-gt-md>
               <input type="text" class="category center {{valid.email}}" 
               placeholder="EMAIL" name="clientEmail"
               ng-model="clientEmail" ng-change="validate('email');">
               <img class="price-fil" src="img/filRight.png" alt="swirl" hide show-gt-md>
           </div>
           <div layout="row" layout-align="center center">
              <img class="price-fil" src="img/filLeft.png" alt="swirl">
              <button type="submit" class="submit">SUBMIT</button>
              <img class="price-fil" src="img/filRight.png" alt="swirl">
           </div>
          </form>
          <p class="center">I promise never to spam you, annoy you, copy/paste generic responses, or send you silly chain emails.</p>
      </div>
    </div>
  </div>
</body>
</html>