


app.controller('myController', function ($scope, $http) {


$scope.insert = function() {

      var info = $http({
        method: "POST",
        url: URL + "insert_data.php",
        data: {
            name: $scope.name,
           email: $scope.email,
            age: $scope.age,
            
        } ); 
    }
}); 
