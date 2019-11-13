<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="process.php"></script>
</head>
<body>
    <div id="login">
        <form action = "process.php" id = "loginForm" method = "POST">
            <p>
                <label>Username:</label>
                <input type = "text" id = "userText" name = "username" />
            </p>

            <p>
                <label>Password:</label>
                <input type = "password" id = "passwordText" name = "password" />
            </p>

            <input type = "submit" id = "submitButton" value = "Login" />
            
            <input type = "submit" id = "registerButton" value = "Register" />
            

        </form>
    </div>    
</body>
</html>