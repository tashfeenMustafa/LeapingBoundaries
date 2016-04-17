app.controller('BidFormController', ['$scope', 'FireBaseApi', 'PostsApi', function($scope, FireBaseApi, PostsApi) {
    $scope.bid = {};
    $scope.errorMessage = '';
    
    $scope.options = [
        {value: 'drowning-in-sorrow', name: 'Drowning in Sorrow', id: '1', prevBid: '0'},
        {value: 'superpower-love', name: 'SuperPower: Love', id: '2', prevBid: '0'},
        {value: 'trapped', name: 'Trapped', id: '3', prevBid: '0'},
        {value: 'the-gardner', name: 'The Gardner', id: '4', prevBid: '0'},
        {value: 'the-seven-forms-of-nature', name: 'The Seven Forms of Nature', id: '5', prevBid: '0'},
        {value: 'many-different-things', name: 'Many Different Things', id: '6', prevBid: '0'},
        {value: 'the-star-in-the-rainbow', name: 'The Star in the Rainbow', id: '7', prevBid: '0'},
        {value: 'the-little-red-rose', name: 'The Little Red Rose', id: '8', prevBid: '0'},
        {value: 'the-freeflowing-waterfall', name: 'The Freeflowing Waterfall', id: '9', prevBid: '0'},
        {value: 'god-is-within', name: 'God is Within', id: '10', prevBid: '0'},
        {value: 'the-cage', name: 'The Cage', id: '11', prevBid: '0'},
        {value: 'desire', name: 'Desire', id: '12', prevBid: '0'},
        {value: 'the-moon-in-the-dark', name: 'The Moon in the Dark', id: '13', prevBid: '0'},
        {value: 'the-tree-of-life', name: 'The Tree of Life', id: '14', prevBid: '0'},
        {value: 'star-gazing', name: 'Star Gazing', id: '15', prevBid: '0'},
    ];
    
    $scope.slant = [
        {
            artName: 'Drowning in Sorrow',
            artDetails: '“Just as the fish live in lakes, I see myself living in water, surrounded by sadness. I live in sadness. I want Allah to take away my sadness.”- Sadika, Grade: 8, Age:13',
            artImageHTML: 'drowning-in-sorrow.jpg',
            value: 'drowning-in-sorrow',
            prevBid: 0
        },
        {
            artName: 'SuperPower: Love',
            artDetails: '“I want to pull everyone closer to me and I have that ability that is why I drew this picture.”- Sumaiya, Grade:8, Age:12',
            artImageHTML: 'superpower-love.jpg',
            value: 'superpower-love',
            prevBid: 0
        },
        {
            artName: 'Trapped',
            artDetails: '“I see myself as a bird trapped in a cage because I cannot find my freedom, I can’t go anywhere, do anything, I feel like a trapped bird all the time. In reality I want to fly, I want to get out of the cage but no one lets me out.”- Ishrat, Grade:9, Age: 14',
            artImageHTML: 'trapped.jpg',
            value: 'trapped',
            prevBid: 0

        },
        {
            artName: 'The Gardner',
            artDetails: 'I see myself as a gardener because I love flowers.- Khadija Moni, Grade:8, Age:12',
            artImageHTML: 'the-gardner.jpg',
            value: 'the-gardner',
            prevBid: 0
        },
        {
            artName: 'The Seven Forms of Nature',
            artDetails: 'Just as the nature has seven forms I have such forms too. The nature changes and I change too so I see myself as the nature. – Khadija, Grade: 8, Age: 15',
            artImageHTML: 'the-seven-forms-of-nature.jpg',
            value: 'the-seven-forms-of-nature',
            prevBid: 0
        },
        {
            artName: 'Many Different Things',
            artDetails: 'A half filled glass: I see myself as a half filled class because I can’t do anything properly. - Arefa, Grade:9, Age: 14',
            artImageHTML: 'many-different-things.jpg',
            value: 'many-different-things',
            prevBid: 0
        },
        {
            artName: 'The Star in the Rainbow',
            artDetails: 'I find myself in the star within the rainbow because I find everyone’s love in the star within the rainbow.-  Irin, Grade: 9, Age:14',
            artImageHTML: 'the-star-in-the-rainbow.jpg',
            value: 'the-star-in-the-rainbow',
            prevBid: 0 
        },
        {
            artName: 'The Little Red Rose',
            artDetails: 'I see myself as a little rose because everyone takes rose as a flower of love so I want people to think of me as flower of love.- Shahida, Grade: 6, Age:12',
            artImageHTML: 'the-little-red-rose.jpg',
            value: 'the-little-red-rose',
            prevBid: 0
        },
        {
            artName: 'The Free Flowing Waterfall',
            artDetails: 'I see myself as a free flowing waterfall because I want to move freely just like a waterfall. This is my free thinking.-  Zakia, Grade: 8, Age:13',
            artImageHTML: 'the-freeflowing-waterfall.jpg',
            value: 'the-freeflowing-waterfall',
            prevBid: 0
        },
        {
            artName: 'God is Within',
            artDetails: 'I am fond of Allah because He is our creator and we are His followers. He is within us and all His 99 virtues reflect within us that is why I love and admire Allah.- Khadija, Grade: 5, Age:11',
            artImageHTML: 'god-is-within.jpg',
            value: 'god-is-within',
            prevBid: 0
        },
        {
            artName: 'The Cage',
            artDetails: 'I see myself as a bird trapped in a cage because I cannot find my freedom; I am always stuck inside the Madrasa.-  Afroza, Grade: 7, Age:13',
            artImageHTML: 'the-cage.jpg',
            value: 'the-cage',
            prevBid: 0
        },
        {
            artName: 'Desire',
            artDetails: 'I have a lot of love to give. I wish to pull others close to me.- Tabassum, Grade:8, Age:13',
            artImageHTML: 'desire.jpg',
            value: 'desire',
            prevBid: 0
        },
        {
            artName: 'The Moon in the Dark',
            artDetails: 'I see myself as the moon in the dark because just as the moon gives light in the dark that’s how no matter how much darkness I face, I wish to fill that darkness with light.- Sabina, Grade:8, Age: 13',
            artImageHTML: 'the-moon-in-the-dark.jpg',
            value: 'the-moon-in-the-dark',
            prevBid: 0
        },
        {
            artName: 'The Tree of Life',
            artDetails: 'I love trees. Trees help us in many ways. Such as, if trees don’t provide us with oxygen then we will not be able to live. I see myself like a tree because I want to help others like a tree does and be free like a tree.- Zakia, Grade: 9, Age:15',
            artImageHTML: 'the-tree-of-life.jpg',
            value: 'the-tree-of-life',
            prevBid: 0
        },
        {
            artName: 'Star Gazing',
            artDetails: 'I find myself in the star because everyone loves watching stars.-Sharmin, Grade:8, Age:13',
            artImageHTML: 'star-gazing.jpg',
            value: 'star-gazing',
            prevBid: 0
        }
        
    ];
    
    
    var getLastBid = function(data) {
        
            
            
            var getLastBidRef = new Firebase("https://leapingboundaries.firebaseio.com/bid/bids/second-auction/" + data.value);
        getLastBidRef.orderByChild("amount").limitToLast(1).on("child_added",
                                                     function(snapshot) {
            // This isn't going to show up in the DOM immediately, because
            // Angular does not know we have changed this in memory.
            // $scope.data = snapshot.val();
            // To fix this, we can use $scope.$apply() to notify Angular that a change occurred.
            $scope.$applyAsync(function() {
                if(snapshot) {
                    console.log("Loading previous bid from: " + data.value)
                    data.prevBid = snapshot.val().amount;
                    console.log(typeof(snapshot.val().amount));
                }
                else {
                    data.prevBid = 0;
                }
                $scope.counter = PostsApi.dataSent.content.rendered;
                console.log($scope.counter);
            });
        });
            
        
        
    };
    
    $scope.initialize = function() {
        PostsApi.getPost();
        
        for(var i = 0; i <= 14; i++) {
            getLastBid($scope.slant[i]);
        }
    };
    
    $scope.sendToFireBase = function(bidObject, slant) {
        
        
        if(bidObject.amount <= 2500 || bidObject.amount === undefined)
            {
                $scope.errorMessage = 'Your Bidding Amount must be greater than BDT 2500. Please try again.';
                console.log($scope.errorMessage);
                
                $scope.error = true;
            }
        else if(bidObject.amount) {
            for(var i = 0; i <= 14; i++) {
                if(bidObject.databaseBranch == slant[i].value && bidObject.amount <=  slant[i].prevBid)
                {
                    $scope.errorMessage = 'Your Bidding Amount must be greater than the highest bid made for ' + slant[i].artName + '. Please try again.';
                    console.log($scope.errorMessage);

                    $scope.error = true;
                }
                else if(bidObject.databaseBranch == slant[i].value && bidObject.amount >  slant[i].prevBid)
                {
                    FireBaseApi.setData(bidObject);
                    getLastBid(slant[i])
                    console.log("Sending data to FireBase");

                    $scope.error = false;

                    $scope.errorMessage = 'Your bid has been recorded successfully. Thank you.';
                }

            }
        }
       
    };
    
}]);