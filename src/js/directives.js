app.directive('home', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/home.html'
    }
});
app.directive('cat', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/cat.html'
    }
});
app.directive('services', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/services.html'
    }
});
app.directive('prices', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/prices.html'
    }
});
app.directive('why', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/why.html'
    }
});
app.directive('hire', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/hire.html'
    }
});