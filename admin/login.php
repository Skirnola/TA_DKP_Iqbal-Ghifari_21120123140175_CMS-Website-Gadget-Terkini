<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username == "admin" && $password == "pass") {
       session_start();
       $_SESSION["user"] = "admin";
       header("Location:index.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" id="" placeholder="Username" required>
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" id="" placeholder="Password" required>
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary w-100" type="submit" value="Login" name="login">
                </div>

                <div>
                    <p>MANIBAS</p>

                    <h2>COMIT</h2>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
