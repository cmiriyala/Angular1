 <!-- define angular app -->
    <html ng-app="App">

    <head>
        <!-- SCROLLS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

        <!-- SPELLS -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
        <script src="app.js"></script>
    </head>

    <!-- define angular controller -->
    <body ng-controller="mainController">
 
    <nav class="navbar navbar-default" ng-show="loginCtrl.showTouchID">
        <div class="container">
            <div class="navbar-header">
                <a href="#"><img src="assets/logo.png" alt ="GYM" style="height: 45px; width: 45px"></a>
            </div>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
            </ul>
           


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#login"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                <li><a href="#register"><i class="fa fa-user"></i> Register</a></li>
            </ul>
       
        </div>
    </nav>

    <div id="main">

        <!-- angular templating -->
        <!-- this is where content will be injected -->
        <div ng-view></div>

    </div>

    <footer class="text-center">
        &#169; 2018
    </footer>

    </body>

    </html>
