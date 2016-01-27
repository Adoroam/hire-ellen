app.directive('cat', function() {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: 'templates/cat.html'
    }
});
