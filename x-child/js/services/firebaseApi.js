app.factory('FireBaseApi', ['$http', function($http) {
    
    var firebase = {};
    
    firebase.bidPosts = [];
    firebase.bidPostCount = 0;
    
    
    firebase.setData = function(data) {
        var getRef = new Firebase('https://leapingboundaries.firebaseio.com/bid/bids/second-auction/' + data.databaseBranch);
        
        var bidsRef = getRef;
        
        var newBidsRef = bidsRef.push(data);
        
        firebase.key = newBidsRef.key();
        
        console.log(data);
        console.log(firebase.key);
    };
    
    return firebase;
    
}]);