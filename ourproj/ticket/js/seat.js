function TodoCtrl($scope) {
    
    $scope.change = function() {
        $scope.form.$setPristine();
    }
    
    $scope.cancel = function() {
        $scope.form.$setPristine();
    }
}

