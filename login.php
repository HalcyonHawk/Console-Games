<?php  
//Start user session
session_start();

//Connect to databse 
include('connect.php');

//If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
    
    //check if the username entered matches 1 in the database and if it also matches 1 of the encoded passwords in the database 
    $sql = "SELECT * FROM employees WHERE username = ".$_POST['username']." AND password = '".md5($_POST['password'])."' ";  
 
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    //If the posted values are equal to the database values, then session will be created for the user.
    if ($count == 1){
        $_SESSION['username'] = $username;
    } else{
        //If the login credentials doesn't match, he will be shown with an error message.
        $fmsg = "Invalid Login";
    }
}

//If user is logged in, they go to account page
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    header('Location: account.php');
    
} else{
    //Login page 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Employee login">
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
      
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1 style="padding: 100px 0 0 0">Employee Login</h1><br>
            <!--login page, POST as more secure than GET.
            Go to account.php once logged in-->
                <form name="login" method="POST">
                   <input type="text" name="username" placeholder="Username">
                    <!--password as type so text typed isn't seen-->
                   <input type="password" name="password" placeholder="Password">
                   <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                </form> 
            <p><br>This page is for admin use to keep the webstie updated</p>
        </div>
    </div>
    
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php } ?>