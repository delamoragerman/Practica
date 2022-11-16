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
            <!--///////////////////////////        START FORM LOGIN         ///////////////////////////>-->
            <div class="container-fluid cont-index">
                <div class="row cont-login">
                    <div class="cont-form">
                        <form id="form_login" method="POST" action="login.php">
                            <div class="input-group">
                                <span><i class="fa fa-user"></i></span>
                                <label>User</label>
                                <input type="text" name="userName" maxlength="18" placeholder="Write here your username" autocomplete="off" required>
                            </div>
                            <div class="input-group">
                                <span><i class="fa fa-key"></i></span>
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Write here your password" required>
                            </div>
                            <input type="submit" class="btn btn-success btn-login" value="Log In">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-register">
                                Sing Up
                            </button>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--///////////////////////////        START FORM SINGUP         ///////////////////////////>-->
                                    <div>
                                        <form id="form_register" class="cont-form" method="POST" action="Apps/singUp.php">
                                            <div class="input-group">
                                                <span><i class="fa fa-user"></i></span>
                                                <label for="name">Name</label>
                                                <input type="text" name="name" placeholder="Write here your name" autocomplete="off" required>
                                            </div>
                                            <div class="input-group">
                                                <span><i class="fa fa-user"></i></span>
                                                <label for="lastName">Sourname</label>
                                                <input type="text" name="lastName" placeholder="Write here your lastname" autocomplete="off" required>
                                            </div>
                                            <div class="input-group">
                                                <span><i class="fa fa-at"></i></span>
                                                <label for="email">Email</label>
                                                <input type="email" name="email" placeholder="Write here your email" autocomplete="off" required>
                                            </div>
                                            <div class="input-group">
                                                <span><i class="fa fa-user"></i></span>
                                                <label for="userName">User</label>
                                                <input type="text" name="userName" maxlength="18" placeholder="Write here your username" autocomplete="off" required>
                                            </div>
                                            <div class="input-group">
                                                <span><i class="fa fa-key"></i></span>
                                                <label for="password">Password</label>
                                                <input type="password" name="password" placeholder="Write here your password" required>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Sing Up">
                                        </form>
                                    </div>
                                    <!--///////////////////////////        END FORM SINGUP         ///////////////////////////>-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--///////////////////////////        END FORM LOGIN         ///////////////////////////>-->
            <footer>
                <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
                <script src="https://kit.fontawesome.com/f2b0511bd2.js" crossorigin="anonymous"></script>>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/general.js" type="text/javascript"></script>
            </footer>
        </div>
    </body>
</html>
