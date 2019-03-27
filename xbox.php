<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Selling Xbox games">
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
    
    
    <header class="header">
      <h2>XboxOne Games</h2> 
                 
        <div class="container-fluid bg-light ">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
                    <h4>Filter</h4>
                </div>
                
                <!--Set filter by genre-->
                <form name="filter" method="post"> 
                <div class="form-group col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <select id="inputState " class="form-control" name="genre">
                        <option selected>Genre</option>
                        <option>Adventure</option>
                        <option>Racing</option>
                        <option>Horror</option>
                        <option>Party</option>
                        <option>Sports</option>
                        <option>Family</option>
                        <option>Simulation</option>
                    </select>
                </div>
                <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <button name="apply" type="submit" class="btn btn-dark btn-block">Apply</button>
                </div>
                </form>
                
                <!--Remove filter-->
                <form method="post">
                <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <button name="removeFilter" type="submit" class="btn btn-dark btn-block">Remove Filter</button>
                </div>
                </form>
                
            </div>
        </div>
    </header>
    
    
    <div class="container col-offset-1">
        
        <?php
        //Connect to databse
        include('connect.php');
        
        //When the filter bar hasnt been used or if remove filter button is clicked,
        //then show all XboxOne games
        if(isset($_POST['removeFilter']) or empty($_POST['genre'])){
            $sql = "SELECT * FROM games WHERE consoleName='XboxOne'";
        //Else, this means that the form has been used so filter the XboxOne games by genre as well    
        }else {  
            //Set value from form to genre so it can be used in the sql query
            $genre = $_POST['genre'];
            $sql = "SELECT * FROM games WHERE consoleName='XboxOne' AND genre='$genre'";     
        }
        
        //Display results of the query 
        $result = $conn->query($sql);
        //If results is greater than 0, display them
        if ($result->num_rows > 0) {
            //Output each row of database in format given by the html
            //Call each php result from in the html
            while($row = $result->fetch_assoc()) {
        ?>

                    <section class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="padding: 20px 0;">
                        <img style="height: 200px" class="img-fluid" src="<?php echo $row['imageName'] ?>" alt="image">
                        <h4><?php echo  $row['gameName']; ?></h4>                       
                        <p>
                        Price:    £<?php echo $row['price']; ?><br>
                        Genre:    <?php echo $row['genre'];?><br>
                        Age Rating:    <?php echo $row['ageRating'];?><br>
                        <?php echo $row['gameID'];?>
                        </p>
                        <a class="btn btn-dark" href="addToBasket.php?gameID=<?=$row["gameID"];?>">Add to Basket</a>
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