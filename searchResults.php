<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Searched for game results">
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

    <nav class="navbar navbar-inverse navbar-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
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
      
      
    <header>
    <h2>Search Results</h2>
    </header>
      
    <div class="container col-offset-1">
            
        <?php
        //Connect to databse 
        include('connect.php');
          
        //Get values from search
        $query = $_GET['query'];

        //Check if input was empty
        if (empty($_REQUEST['query'])) {
            echo "Please enter the title of the game you are searching for <br><br>";
            exit;
        }   

        //Select everything where the game name matches or is simular to the query given
        $sql = "SELECT * FROM games WHERE gameName LIKE '%".$query."%'"; 
        $result = $conn->query($sql);

        //If results is greater than 0, display them
        if ($result->num_rows > 0) {
            //Output each row of database in format given by the html
            //Call each php result from in the html
            while($row = $result->fetch_assoc()) {
        ?>

                <section class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="padding: 20px 0;">
                    <img src="<?php echo $row ['imageName'] ?>" alt="image">
                    <h4><?php echo  $row ['gameName']; ?></h4>                       
                    <p>
                    Price:    £<?php echo $row ['price']; ?><br>
                    Genre:    <?php echo $row ['genre'];?><br>
                    Age Rating:    <?php echo $row ['ageRating'];?><br>
                    Console: <?php echo $row ['consoleName'];?>
                    <?php echo $row['gameID'];?>
                    </p>
                    <button name="addBasket" class="btn btn-dark" type="submit">Add to Basket</button>
                </section>

        <?php
            //Close while loop after iterating through all results in format given by html and bootstrap
                }
            //If no results from database echo "no results"
            } else {
                echo "no results";
            }
        ?>
 
    </div>
      
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
  </body>
</html>
