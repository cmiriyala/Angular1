	// create the module and name it scotchApp
	var App = angular.module('App', ['ngRoute']);

	// configure our routes
	App.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'Home/home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/about', {
				templateUrl : 'Home/about.html',
				controller  : 'aboutController'
			})

			// route for the contact page
			.when('/contact', {
				templateUrl : 'Home/contact.html',
				controller  : 'contactController'
			})

            .when('/login', {
				templateUrl : 'Home/Auth/login.html',
				controller  : 'loginController'
			})
            .when('/register', {
				templateUrl : 'Home/Auth/registration.html',
				controller  : 'registrationController'
			})
            .when('/dashboard', {
				templateUrl : 'Home/User/index.php',
				controller  : 'dashboardController'
			})
            .when('/logout', {
				templateUrl : 'Home/User/logout.php',
			});
	});

	// create the controller and inject Angular's $scope
	App.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!';
        $scope.loginCtrl = {showTouchID: true};
	});

	App.controller('aboutController', function($scope) {
		$scope.message = 'Look! I am an about page.';
	});

	App.controller('contactController', function($scope) {
		$scope.message = 'Contact us!.';
	});
    App.controller('loginController', function($scope,$http,$window) {
		$scope.message = 'login.';
        $scope.loginCtrl = {showTouchID: false};
        
        $scope.processLogin = function() {
                console.log($scope.login.userid);
                console.log("in login");
                $http({
			        method  : 'POST',
			        url     : 'serverfiles/processlogin.php',
			        data    : $scope.login, // pass in data as strings
			        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			    })
                .success(function(data) {
			       console.log(data);     
                if(data == "accessAllowed")
                {
                     $window.location='#dashboard';
                }
            

    }).error(function(err,status){
        alert('No access available.');      
    });
			            	        

            }
	});
        
    
    App.controller('registrationController', function($scope,$http,$window) {
        
			
			$scope.processForm = function() {
                console.log($scope.user);
                console.log("in here");
                $http({
			        method  : 'POST',
			        url     : 'serverfiles/processregister.php',
			        data    : $scope.user, // pass in data as strings
			        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			    })
                .success(function(data) {
			      // console.log(data);     
       alert("Registration success");
                $window.location='#login';
            

    }).error(function(err,status){
        alert('No access available.');      
    });
			            
			        

            }
	});

     