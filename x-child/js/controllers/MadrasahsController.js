app.controller('MadrasahsController', ['$scope', function($scope) {
    $scope.title = 'Madrasahs';
    
    $scope.description = 'We only collaborate with Madrasahs that are Alia madrasahs, are registered with the government and then go through their internal contacts. These madrasahs must also have a female section';
    
    $scope.madrasahs = [
        {
            name: 'Nibras International Madrasah',
            details: 'Nibras International Madrasah was established by the Nibras Foundation Bangladesh in 2007. The madrasah aims to build citizens who are rich in moral education as well as worldly knowledge by undertaking activities which are durable and can actively benefit the society in the long run.',
            class: 'nibras',
            bgImg: 'nibras-bg'
        },
        {
            name: 'Madinatul Ulum Model International Women\'s Kamil Madrasa',
            details: 'Madinatul Ulum Model International Women’s Kamil Madrasah is the first women’s Kamil madrasah of the country. It was established by the Rahmate Alam Islam Mission. The organization targets orphans and underprivileged girls who would have otherwise been deprived of education.',
            class: 'madinatul-ulum',
            bgImg: 'madinatul-bg'
        }
    ];
}]);