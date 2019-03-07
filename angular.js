var myApp = angular.module('myApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Function to get employee details from the database
getInfo();
function getInfo(){
// Sending request to organizationDetails.php files
$http.post('databaseFiles/orgDetails.php').success(function(data){
// Stored the returned data into scope
$scope.details = data;
});
}
