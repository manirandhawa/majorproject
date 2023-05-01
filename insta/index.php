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
                                <form accept-charset="UTF-8" role="form" action="login_check.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text">
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