<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Exercise</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/general.css" rel="stylesheet">
    </head>
    <body>
        <div class="main-container">
            <div class="container">
                <div class="row cont-index">
                    <div class="cont-form">
                        <form id="form_login" method="POST" action="login.php">
                            <label for="userName">User</label>
                            <input type="text" name="userName" maxlength="18" placeholder="Write here your username" autocomplete="off" required>
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Write here your password" required>
                            <input type="submit" class="btn btn-success" value="Login">
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row cont-index">
                    <div class="cont-form">
                        <form id="form_register" method="POST" action="Apps/singUp.php">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Write here your name" autocomplete="off" required>
                            <label for="lastName">Sourname</label>
                            <input type="text" name="lastName" placeholder="Write here your lastname" autocomplete="off" required>
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Write here your email" autocomplete="off" required>
                            <label for="userName">User</label>
                            <input type="text" name="userName" maxlength="18" placeholder="Write here your username" autocomplete="off" required>
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Write here your password" required>
                            <input type="submit" class="btn btn-primary" value="SingUp">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
