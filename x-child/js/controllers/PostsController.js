app.controller('PostsController', ['$scope', 'PostsApi', function($scope, PostsApi) {
    PostsApi.get();
}]);