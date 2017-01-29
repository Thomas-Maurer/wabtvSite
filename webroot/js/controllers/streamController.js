app.controller('streamController', ['$scope', '$http', '$q', function($scope, $http, $q) {
  $scope.activeTheater = false;

  $scope.theaterOn = function () {
    $scope.activeTheater = !$scope.activeTheater;
    console.log('test');
  }
}]);
