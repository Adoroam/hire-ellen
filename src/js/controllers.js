
app.controller('indexCtrl', function($scope) {
    $scope.categories = [
        {
            name: 'HIRE ME',
            label: 'hire',
            avail: false
        },
        {
            name: 'SERVICES',
            label: 'serv',
            avail: true
        },
        {
            name: 'PRICES',
            label: 'price',
            avail: true
        },
        {
            name: 'WHY ME?',
            label: 'why',
            avail: true
        }
    ];
    $scope.active = {label: 'home'};
    $scope.change = function(index) {
        for (x in $scope.categories) {
            $scope.categories[x].avail = true;
        };
        $scope.categories[index].avail = false;
        $scope.active = $scope.categories[index];
    };
    $scope.clientName= "";
    $scope.clientEmail= "";
    $scope.valid = {email: '', name: ''};
    $scope.validate = function(x){  
        if (x == "email") {
            if (validateEmail(this.clientEmail)){
                this.valid.email = 'good';
            }   else if (this.clientEmail == "") {
                 this.valid.email = '';
            }   else {this.valid.email = 'bad';}            
        };
        if (x == "name") {
            if (this.clientName === "") {
                this.valid.name = '';
            }   else if (this.clientName.length < 3) {
                this.valid.name = 'bad';
            }   else if (this.clientName.length >= 50) {
                this.valid.name = 'bad';
            }   else {this.valid.name = 'good';}
        };
    };
    $scope.submitStatus = function() {
        if (this.valid.email == 'good' && this.valid.name == 'good') {
            return true;
        }   else {return false;}
    };
});
