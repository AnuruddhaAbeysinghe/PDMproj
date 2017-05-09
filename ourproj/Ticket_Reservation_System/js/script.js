// Code goes here
angular.module('myApp', ['ngMaterial', 'jkAngularRatingStars'])

.controller('MyCtrl', function($scope) {
	$scope.stars = 0;
    $scope.firstRate = 0;
    $scope.secondRate = 3;
    $scope.readOnly = true;
    $scope.onItemRating = function(rating){
      alert('On Rating: ' + rating);
    };
	
	$scope.setStars = function(value){
        $scope.stars = value;
    };
	
    $scope.litStars = function(value){
        if($scope.stars>=value){
           return { "background-color" : "yellow" };
        }
        else {
           return { "background-color" : "white" };
        }
    };
});


var simpleText = firstRate;
var finalSplitText = simpleText.split("_");
var splitText = finalSplitText[0];

function insertText(){
    document.getElementById('someId').InnerHTML = splitText;}

