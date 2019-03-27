<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Basket of users order of games">
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
    
        
    <div class="container col-offset-1"> 
        
        <header>
        <h2>Your Order</h2>
        </header>

        <div>
            
            <?php
            //If any games are in the basket then show them, otherwise inform user that there are currently no items in the basket.
            if (isset($_SESSION['order'])){
            ?>
                      
            <!--Remove all games from bakset-->
            <p><a href=clearBasket.php>Clear basket</a></p>
            
            <!--Table showing the games in the basket based off the gameID saved in the order session-->
            <table class="grid table table-bordered table-sortable">
            <tr>
                <th>GameID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            
            <?php
            //Connect to database
            include('connect.php');      
                
            //Convert order session array to string    
            $order = implode("','", $_SESSION['order']);
        
            //Select games from database where the gameID is equal to the gameID(s) saved in the order session as a string
            $sql = "SELECT * FROM games WHERE gameID IN('" . $order ."')";

            //Display the gameID, gameName and price of games saved in the session as these are in the basket
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $row["gameID"]; ?></td>
                <td><?php echo $row["gameName"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
            </tr>
            
            <?php
            }
            ?>
            
            <!--Close table after all games needed have been added
            Checkout button so that payment methods could be added-->
            </table>
            <button class="btn btn-dark form-control">Checkout</button>
                
            <?php
            } else {
                echo "No items in basket.";
            }
            ?>

            
        </div>    
    </div>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>
