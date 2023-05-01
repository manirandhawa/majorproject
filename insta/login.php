<?php
session_start(); // start session

// check if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php"); // redirect to welcome page
    exit;
}

// include database connection file
require_once "config.php";

// define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// process form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }

    // check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // validate credentials
    if(empty($email_err) && empty($password_err)){
        // prepare a select statement
        $sql = "SELECT `id`, `username`, `email`, `number`, `password` FROM `user` WHERE ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // set parameters
            $param_email = $email;

            // attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // store result
                mysqli_stmt_store_result($stmt);

                // check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // password is correct, start a new session
                            session_start();

                            // store data in session variables
                            $_SESSION["email"] = true;
                            $_SESSION["email"] = $id;
                            $_SESSION["email"] = $email;

                            // redirect to welcome page
                            header("location: welcome.php");
                        } else{
                            // display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // close statement
            mysqli_stmt_close($stmt);
        }
    }

    // close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instagram</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="css/bootstrap1.min.css" rel="stylesheet" >
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="form">
        <div>
             <img src="img/logo4.png" class="logoclone">
        </div>
                <div class="container">
                <div class="row">
                    <div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Login via site</h3>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" action="homepage.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="email" name="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                        </label>
                                    </div>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                </fieldset>
                                </form>
                                <hr/>
                                <center><h4>OR</h4></center>
                                <a href="register.php">
                                <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Create Account">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
</body>
</html>