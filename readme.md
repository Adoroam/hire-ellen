##hire-ellen repo

###technologies used
- node.js (simple back-end for local testing)
- express.js (improves node's performance)
- bower (loads front-end packages)
    - angular
    - angular-animate
    - angular-aria
    - angular-material (made use of the layout systems)
    - angular-messages
- gulp (task runner to automate minifiying js, css, and starting the server)

###folder stucture
- dist (this folder is the only folder actually housing the webiste)
    - bow (bower modules)
    - img (image locations)
    - templates (html templates for angular)
    - index.html.bak (rename to index.html for testing)
    - index.php (the page that runs on the server, should mirror index.html with included php code)
    - all.min.js/style.css (minified code from the /src directory)
- src
    - css (put all css files in here)
    - js (put all js files in here)
        - analytics.js (fb pixel and google analytics)
        - app.js (defines angular app and includes email validation script)
        - controllers.js (angular controllers)
        - directives.js (angular directives)
        -scroller.js (code for smooth scrolling)
- package.json/bower.json (defines packages for node/bower)
- .gitignore (tells git which files to leave out)
- .bowerrc (tells bower to install into the dist/bow directory)
- favicon.ico (green kitty tab icon)
- server.js (node/express to start the server)
- gulpfile.js (minifies and concats js and css, starts server)

###how to use
- make sure you have git and node installed
- install gulp ```npm install -g gulp``` and bower ```npm install -g bower``` globally 
- clone it ```git clone https://github.com/Adoroam/hire-ellen.git```
- rename dist/index.html.bak to index.html
- open your terminal and cd to the base directory (where server.js is located)
- run ```npm install```
- run ```bower install```
- run ```gulp```
> note the server it usually runs on is php. Running it this way will do nothing when the form is submitted. Ideally I would be on a node instance but this way works for now and since I'm the only one maintaining the code so it hasn't become too much of a problem.