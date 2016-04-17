app.controller("OurComponentsController", ['$scope',  function($scope) {
    $scope.title = "Our Components";
    
    $scope.description = "These are the tools we are using to build the capacity of these children to make them ready for competing on social platforms. These components introduce the children to English and ICT, and also giving them emotional and psychological support.";
    
    $scope.components = [
        {
            name: 'English Language Development Activities',
            details: 'Leaping Boundaries Trainers, after receiving training, facilitate sessions during English Class hours as per need of the madrasah. The trainers follow government curriculum set by the Bangladesh Madrasah Education Board (BMEB) but use a workshop style method to ensure effective learning. Supplementary lectures are divided into 6 topics i.e. Introduction to Vocabulary Learning, Introduction to Sentence Construction, Introduction to Poetry and arts, Introduction to Creative Writing, Introduction to Presentation, and Writing and Debate.',
            class: 'demo-icon icon-users',
            code: '<i class="demo-icon icon-sort-alphabet">&#xe803;</i>'
        },
        {
            name: 'Counselling Support',
            details: 'Psychosocial support for 120 girls is provided through group counselling for mental health issues as well as for academic issues. Given that a vast majority of students report feeling no sense of purpose, issues such as such as future studies and career path, developing learner motivation, maximizing individual potentials, developing study skills will be addressed under career guidance counseling. Various kinds of learners in the classrooms will be identified including learners with learning disabilities and their needs catered to. Given that the culture in these institutions is such that physical abuse is a commonly reported problem, victims of abuse will be identified and referred to specialists as necessary. Students will be counselled in groups of four to six, formed based on needs.',
            class: 'demo-icon icon-users',
            code: '<i class="demo-icon icon-users">&#xe800;</i>'
        },
        {
            name: 'Soft Skills Development',
            details: 'Given that the rote learning methods employed in these madrasahs cripple the students\' soft skills, this component aims to build on these skills in order to prepare them better for real life challenges. The students receive training on soft skills development focused on the following: Effective Communication Skills: To prepare the students to communicate effectively, both verbally and non-verbally with people in general. Emotional Intelligence and Change Management: Emotional Intelligence is the skill of being aware of one’s emotional responses to the various situations and at various times. This topic will help them to identify what stimulates their reactions and how to deal with unprecedented situations and cope with changes. Moreover, it helps to recognize others’ emotional needs and how they should be appropriately dealt with. Critical Thinking and Problem Solving: Critical thinking is the method of thinking- about any subject or problem where the thinker improves his quality of thinking and impose intellectual standards on them. Problems Solving Skills include tools that are useful to solve everyday problems in more efficient ways.',
            code: '<i class="demo-icon icon-heart">&#xe804;</i>'
        },
        {
            name: 'Collaborative Tech Reasoning',
            details: 'Under this component, the girls studying in madrasahs will be trained in computer programming to enhance their logical reasoning and turn them into real life problem solvers. The core knowledge and skills to compose Educational Games (e.g. Typing master, etc.), Internet Browsing and Social Networking Sites. A needs assessment will be conducted to gauge the level of the students and the intervention will be designed accordingly. The initiative is run in partnership with the Tech Academy to train them to engineer software, web-based applications, and game development. Along with critical thinking and problem solving, they will be acquiring valuable skills that they can later use to make a livelihood from.',
            code: '<i class="demo-icon icon-laptop">&#xe802;</i>'
        }
    ];
    
    
}]);