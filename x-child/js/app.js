var app = angular.module("appController", ["firebase"]);

app.filter('unsafe', function($sce) {
    return function(val) {
      return $sce.trustAsHtml(val);  
    };
});