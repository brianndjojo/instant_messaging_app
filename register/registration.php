<<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main/main.css" />
    
    <!--Bootstrap CDN-    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

</head>

<body>
    <div>
        <form action = "config.php" method = "post">    
            <div class = "container">
                <div class = "row">
                    <div class = "col-xs-3">
                        <h1>User Registration</h1>

                        <hr class = "mb-3">

                        <label><b>Username</b></label>
                        <input class = "form-control" type = "text" name = "username" required>

                        <label><b>Password</b></label>
                        <input class = "form-control" type = "password" name = "password" required>
                        
                        <label><b>Confirm Password</b></label>
                        <input class = "form-control" type = "password" name = "confirmPassword" required>

                        <label><b>Email</b></label>
                        <input class = "form-control" type = "text" name = "email" required>

                        <hr class = "mb-3">

                        <input class="btn btn-outline-dark" type = "submit" id = "createButton" value = "Sign Up">
                    </div>
                </div>
            </div>
    </div>
</body>

</html>
