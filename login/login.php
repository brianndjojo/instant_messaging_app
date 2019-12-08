<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Logins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main/style.css" />
    
    <script src="process.php"></script>
</head>
<body>
    <div id="login">
        <form action = "process.php" id = "loginForm" method = "POST">
           
            <div class = "container">
                <div class = "row">
                    <div class = "col-xs-3">
                        <h1>User Login</h1>

                        <hr class = "mb-3">

                        <label><b>Username</b></label>
                        <input class = "form-control" id = "userText" type = "text" name = "username" required>

                        <label><b>Password</b></label>
                        <input class = "form-control" id = "passwordText" type = "password" name = "password" required>
                        
                        <hr class = "mb-3">

                        <input type = "submit" class="btn btn-outline-dark" id = "submitButton" value = "Login" />
                    </div>
                    
                </div>
            </div>
        </form>
        <a href = "http://localhost/register/registration.php"><input type = "submit" class="btn btn-outline-dark" id = "registerButton" value = "Register"  /></a>
    </div>    
</body>
</html>