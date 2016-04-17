app.factory('PostsApi',['$http', function($http) {
    
    var api = '/wp-json/wp/v2/posts';
    
    var posts = {};
    
    posts.dataSent = {};
    
    posts.getPost = function() {
        return $http.get(api)
        .success(function(data) {
            
            console.log("Pulling posts..");
            var jsOb = JSON.stringify(data, null, "\t");
            console.log(jsOb);
            
            for(var i = 0; i < data.length; i++) {
                if(data[i].slug === "bidding-countdown") {
                    posts.dataSent = data[i];
                    console.log(posts.dataSent.content.rendered);
                }
            }
            
            return posts.dataSent;
        })
        .error(function(err) {
            console.log(err);
            return err;
        });
    };
    
    return posts;
}]);