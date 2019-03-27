<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Account to edit games on site">
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
    
    <?php session_start();?>
    
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
    
    <?php
    //Only access page when logged in
    if (isset($_SESSION['username'])){
    ?>
    
    <div class="container col-offset-1">
        
        <header>
        <h2>Account</h2>
        
        <!--Logout ends session-->
        <p><a href="logout.php">logout</a></p>    
        
        <p>From this page you can add new games as well as view, update and delete the current games. Please note that the scrollbar for the game records on smaller screens may be difficult to navigate so it is advised to use a PC or laptop when editing game data. As an employee, it is your responsibility to ensure all games are added and edited appropriately.
        <br>Additionally, you can add new users as required. When doing this, allow the user to type their own password for security reasons. 
        </p>
        </header>
        
    <div>
        <!--Method to add a new game to the database, uses add.php script-->
        <h3>Add new game</h3>
        <h4>Enter new record</h4>
        <form action="add.php" method="post">
            
            <table class="grid table table-bordered table-sortable">
                <tr>
                    <th>Heading</th>
                    <th>Input</th>
                </tr>
                <tr>
                    <td>gameID</td>
                    <td><input class="form-control" type="text" name="gameID" placeholder="<6numbers>_<console>_a" required/></td>
                </tr>
                <tr>
                    <td>Console Name</td>
                    <td><input class="form-control" type="text" name="consoleName" required/></td>
                </tr>
                <tr>
                    <td>Game Name</td>
                    <td><input class="form-control" type="text" name="gameName" required/></td>
                </tr>
                <tr>
                    <td>Image Name</td>
                    <td><input class="form-control" type="text" name="imageName" placeholder="gameImages/<gameID>.<extension>" required/></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input class="form-control" type="number" name="price" required/></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td><input class="form-control" type="text" name="genre" required/></td>
                </tr>
                <tr>
                    <td>Age Rating</td>
                    <td><input class="form-control" type="number" name="ageRating" required/></td>
                </tr>       
            </table>

            <input class="btn btn-dark" type="submit" /><br><br>

        </form>
    </div>    
    
    <div>
    <?php
    //Connect to databse 
    include('connect.php');
         
    //Edit button to auto fill boxes, reducing human error
    if(isset($_GET["gameID"])){
        //Gets the gameID of the game where the edit button was clicked in order to fetch other information about this game
        $sql="SELECT * FROM games WHERE gameID='" . $_GET["gameID"] . "'";
        $result = $conn->query($sql);
        //Save results to variables so that they can be viewed in the update game form
        while($row =$result->fetch_assoc()){
            $gameID = $row["gameID"];
            $consoleName = $row["consoleName"];
            $gameName = $row["gameName"];
            $imageName = $row["imageName"];
            $price = $row["price"];
            $genre = $row["genre"];
            $ageRating = $row["ageRating"];
            $amountInStock = $row["amountInStock"];
        }
    }?>
    
    <!--Form to update information about games to the databse-->
    <h3>Update game</h3>
    <h4>Enter updated record</h4>
    <p>Use the edit button next to the game being updated to auto fill. Otherwise, ensure gameID is entered correctly.</p>
        <form action="update.php" method="post">
            
            <table class="grid table table-bordered table-sortable">
                <tr>
                    <th>Heading</th>
                    <th>Input</th>
                </tr>
                <tr>
                    <td>gameID</td>
                    <td><input class="form-control" type="text" name="gameID" value="<?php echo @$gameID?>" placeholder="<6numbers>_<console>_a" required/></td>
                </tr>
                <tr>
                    <td>Console Name</td>
                    <td><input class="form-control" type="text" name="consoleName" value="<?php echo @$consoleName?>"/></td>
                </tr>
                <tr>
                    <td>Game Name</td>
                    <td><input class="form-control" type="text" name="gameName" value="<?php echo @$gameName?>"/></td>
                </tr>
                <tr>
                    <td>Image Name</td>
                    <td><input class="form-control" type="text" name="imageName" value="<?php echo @$imageName?>" placeholder="gameImages/<gameID>.<extension>"/></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input class="form-control" type="number" name="price" value="<?php echo @$price?>"/></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td><input class="form-control" type="text" name="genre" value="<?php echo @$genre?>"/></td>
                </tr>
                <tr>
                    <td>Age Rating</td>
                    <td><input class="form-control" type="number" name="ageRating" value="<?php echo @$ageRating?>"/></td>
                </tr>       
                <tr>
            </table>

            <input class="btn btn-dark" type="submit" /><br><br>

        </form>
    </div>
    
        
    <!--Adds scrollbar so that table can be seen on smaller screen sizes-->
    <div style="overflow-x:auto">
    <h3>Game Records</h3>
    <?php
        //Display all games in a table                    
        $sql = "SELECT * FROM games";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    ?>
    <table  class="grid table table-bordered table-sortable">
        <tr>
            <th>gameID</th>
            <th>gameName</th>
            <th>imageName</th>
            <th>price</th>
            <th>ageRating</th>
            <th>genre</th>
        </tr>
        <?php
        while($row =$result->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row["gameID"];?></td>
            <td><?= $row["gameName"];?></td>
            <td><?= $row["imageName"];?></td> 
            <td><?= $row["price"];?></td>
            <td><?= $row["ageRating"];?></td>
            <td><?= $row["genre"];?></td>
            <!--Options to delete a game or to edit it for each game-->
            <td><a href="delete.php?gameID=<?=$row["gameID"];?>">Delete</a></td>
            <td><a href="account.php?gameID=<?=$row["gameID"];?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
    </table> 
    <?php
    } else {
    ?>
    <p>0 results</p>
   <?php
    }
    $conn->close();
    ?>

    </div>
        
    <div>
        <!--Method to add a new employee to the database.
        Inside of account page so that only employees can create other employees. 
        This is done to prevent customers of the website from creating accounts-->
        <h3>Add new employee</h3>
        <p>Enter firstname, username and password, then submit to create new user.</p>
        <form action="newUser.php" method="post">
            <table class="grid table table-bordered table-sortable">
                <tr>
                    <th>Name</th>
                    <td><input class="form-control" type="text"  name="name" required></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input class="form-control" type="number"  name="username" placeholder="Unique set of up to 10 numbers" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input class="form-control"  type="password" name="password" required></td>
                </tr>
            </table>
            
            <input class="btn btn-dark" type="submit" />
            
        </form>
    </div>
                
    <?php
    } else {
        echo "You need to be a valid user to access this page. Please go back and log in";
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

