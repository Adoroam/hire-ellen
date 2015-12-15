//angular

var app = angular.module("ang", ['ngAnimate']);

app.controller('MainController', ['$scope', function($scope) {
//list of content pages
	$scope.cList = [
		{title: "What do you do?", id: "one", page: "pages/what.html"},
		{title: "What are your prices?", id: "two", page: "pages/prices.html"},
		{title: "Why should I choose you?", id: "three", page: "pages/why.html"}
	];
	$scope.active = $scope.cList[0];
//set active content item
	$scope.setActive = function(index) {
    		if ($scope.active == $scope.cList[index]) {
    			$scope.active = false;
    		}	else { $scope.active = $scope.cList[index]; }
    	};
//dropdown lists
    	$scope.lists = [
    		{	
    			type: "input",
    			obj: "Name",
    			id: "formName",
    			name: "clientName",
    			desc: "clientNameStatus",
    			sel:  "",
    			placeholder: "What should I call you?",
    			valid: "has-feedback"
    		},
    		{	
    			type: "input",
    			obj: "Email",
    			id: "formEmail",
    			name: "clientEmail",
    			desc: "clientEmailStatus",
    			sel:  "",
    			placeholder: "Where can I talk to you?",
    			valid: "has-feedback"
    		},
    		{	
    			type: "dropdown",
    			obj: "Project",
    			id: "formProject",
    			name: "clientProject",
    			desc: "clientProjectStatus",
    			sel:  "Fiction/Non-Fiction | Ghostwriting/Editing",
    			option: [
    				"Fiction Ghostwriting",
    				"Non-Fiction Ghostwriting",
    				"Fiction Editing",
    				"Non-Fiction Editing"
    			],
    			valid: "has-feedback"
    		},
    		{	
    			type: "dropdown",
    			obj: "Stage",
    			id: "formStage",
    			name: "clientStage",
    			desc: "clientStageStatus",
    			sel:  "How much progress have you made?",
    			option: [
    				"I haven't got an idea yet, just a general feeling.",
    				"I've got a pretty good idea of what I want, but haven't written anything.",
    				"I've written a small bit and given up, or I'm overwhelmed and need direction.",
    				"I've written most or all of it, but it still needs major work to get it where I want it to be.",
    				"I've written all of it and I'm looking for a second opinion or editor."
    			],
    			valid: "has-feedback"
    		},
    		{	
    			type: "dropdown",
    			obj: "Deadline",
    			id: "formDeadline",
    			name: "clientDeadline",
    			desc: "clientDeadlineStatus",
    			sel:  "How soon do you need this project done?",
    			option: [
    				"I don't really have any set deadline in mind.",
    				"I'd like this done in a couple of months.",
    				"I need this done in a month.",
    				"I need this done in two weeks.",
    				"I need this done yesterday."
    			],
    			valid: "has-feedback"
    		}
    	];
	
	function validateEmail(email) {
	    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	    return re.test(email);
	}
	$scope.validate = function(x){	
		if (x.obj == "Email") {
			if (validateEmail(x.sel)){
				x.valid = "has-success";
			}	else if (x.sel == "") {
				 x.valid = "has-feedback";
			}	else {x.valid = "has-error";}
			
		}
		if (x.obj == "Name") {
			if (x.sel == "") {
				x.valid = "has-feedback";
			}	else if (x.sel.length < 3) {
				x.valid = "has-error";
			}	else if (x.sel.length >= 50) {
				x.valid = "has-error";
			}	else {x.valid = "has-success";}
		}
		if (x.type == 'dropdown') {
			for (y in x.option) {
				if (x.sel == x.option[y]) {
					x.valid = "has-success";
				}	
			}			
		}
   	}
   	$scope.submitStatus = function() {
   		var status = [];
   		for (x in $scope.lists) {
   			status[x] = $scope.lists[x].valid;
   		}
   		var key = 0;
   		for (x in status) {
   			if (status[x] == "has-success") {
   				key += 1;
   			}
   		}
   		if (key == 5) {
   			return "";
   		}	else {return "disabled";}
   	} 
   
}]);