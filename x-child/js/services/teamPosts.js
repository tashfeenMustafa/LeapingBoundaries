app.factory('TeamPosts', ['$http', function($http) {
    
    var api = '/wp-json/wp/v2/pages/839';
    
    var teamMembers = {};
    
    teamMembers.info = [];
    
    teamMembers.get = function() {
        var teamData = [];
        return $http.get(api)
        .success(function(data) {
            
            teamData = data.acf.team_member;
            
            angular.forEach(teamData, function(val, key) {
                teamMembers.info.push({imgsrc: val.member_image, name: val.member_name, role: val.member_role});
            }, teamMembers.info);
            
            var jsOb = JSON.stringify(teamMembers.info, null, "\t");
    console.log(jsOb);
            
            return teamMembers.info;
            
        }).error(function(err) {
            console.log(err);
            return err;
        });
    }
    
    return teamMembers;
    
}]);