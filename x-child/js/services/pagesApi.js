app.factory('PagesApi', ['$http', function($http) {
    
    var api = '/wp-json/wp/v2/pages';
    
    var pages = {};
    
    pages.get = function() {
        return $http.get(api)
        .success(function(data) {
            var jsOb = JSON.stringify(data, null, "\t");
            console.log(jsOb);
        })
        .error(function(err) {
            console.log(err);
        });
        
    };
    
    return pages;
}]);