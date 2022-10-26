<!DOCTYPE html>
<html>
    <head>
        <title>Exercises</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/general.css" rel="stylesheet">
        <link href="css/header-navs-menus.css" rel="stylesheet">
    </head>
    <body>
        <div class="main-container">

            <div class="container">
                <div class="row">
                    <section class="section" id="cont_singUp">
                        <div class="cont">
                            <h3>Formulario</h3>
                        </div>
                        <div class="cont cont-form">
                            <span><h6>Completa el siguiente formulario para poder interactuar mejor con nuetro sitio</h6></span>
                            <form id="signUp">
                                <input type="text" name="name" placeholder="Nombre" autocomplete="off" required>
                                <input type="text" name="lastName" placeholder="Apellido" autocomplete="off" required>
                                <input type="number" name="age" min="16" min="18" max="110" placeholder="Edad" autocomplete="off" required>
                                <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                                <input type="text" name="userName" placeholder="Usuario" autocomplete="off" required>
                                <input type="password" name="password" placeholder="Password" maxlength="10" required>
                                <input type="submit" value="Registrarme">
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer>
            <script src="/js/jquery-3.6.0.min.js"></script>
            <script src="https://kit.fontawesome.com/c2d935188e.js" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>            
            <script src="js/general.js" type="text/javascript"></script>
        </footer>
    </body>
</html>
