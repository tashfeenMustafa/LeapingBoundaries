app.controller('TeamController', ['$scope', 'TeamPosts', function($scope, TeamPosts) {
    TeamPosts.get();
    
    $scope.members = [];
    
    $scope.$applyAsync(function() {
        $scope.members = TeamPosts.info;
    });
    
    var jsOb = JSON.stringify($scope.members, null, "\t");
    console.log(jsOb);
    
}]);