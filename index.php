<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Featured games">
    <meta name="author" content="Tilly Davies">
    <link rel="icon" href="../../favicon.ico">

    <title>Console Games</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link href="bootstrap/css/styles.css" rel="stylesheet">
    
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Console Games</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="playstation.php">Playstation</a></li>
                    <li><a href="xbox.php">Xbox</a></li>
                    <li><a href="nintendo.php">Nintendo</a></li>
                    <li><a href="login.php">Account</a></li>
                    <li><a href="basket.php">Basket</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="searchResults.php" method="GET">
                    <input name="query" type="text" class="form-control" placeholder="Search...">
                    <button class="form-control btn-dark" type="submit">Go</button>
                </form>
            </div>
        </div>
    </nav>
    
    <!--Small amount of padding around whole page-->
    <div class="container col-offset-1">
        
        <header>
        <h2>Home</h2>
        <h3>Featured Games</h3>
        </header>
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item active">
                    <img src="images/SpyroBanner.jpg" alt="Spyro Reignited" style="width:100%; height: 40%;">
                    <div class="carousel-caption">
                        <p>Bring your childhood back with remasters of the first Spyro series</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/redDeadRedemption2.jpg" alt="Red dead Redemption 2" style="width:100%; height: 40%;">
                    <div class="carousel-caption">
                        <h3>Red dead Redemption 2</h3>
                        <p>Explore an open wolrd on PS4 or Xbox One</p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/pokemonLetsGoBanner.png" alt="Pokemon Lets Go" style="width:100%; height: 40%;">
                </div>
        
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    <div style="padding: 20px">
        <p>Buy the latest games for your favourite consoles here. Select the logo of your console to view games for it. If theres a certain game you want, then search for it by its name and see if it's in stock. Games are updated regularly to provide you with the newest games. Hope you find some games you like. </p>    
    </div>
        
    <div class="header">
        <div class="row">
        <div class="panel-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    <a href="playstation.php"><div class="pandel-body">
                    <img class="icon" src="images/psLogo.jpg" alt="Playsation logo">
                    </div></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    <a href="xbox.php"><div class="pandel-body">
                    <img class="icon" src="images/xboxLogo.png" alt="XBox logo">
                    </div></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    <a href="nintendo.php"><div class="pandel-body">
                    <img class="icon" src="images/nintendoLogo.jpg" alt="Nintendo logo">
                    </div></a>
                </div>
            </div>
        </div>
        </div>
    </div>   
       
    <div>
    <h3>Comming Soon</h3>
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"><img src="images/controller.png" alt="Controller icon"></div>
    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
        <p>Consoles and game accessories will be sold soon. This includes controllers, headphones and lots of mechandise for your favourite games. Consoles will only consist of PS4, XboxOne and Switch to begin with. We may also sell retro consoles later on so keep an eye out.</p></div>
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"><img src="images/game.png" alt="Handheld console icon"></div>
    </div>    
        
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>
