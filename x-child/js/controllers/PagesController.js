app.controller('PagesController', ['$scope', 'PagesApi', function($scope, PagesApi) {
    PagesApi.get();
}]);