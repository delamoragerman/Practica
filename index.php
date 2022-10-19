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
            
            <?php include 'header.view.php'; ?>
             
           <div class="container-fluid">
                <div class="row">
                    <section>
                        <div class="cont">
                            <h1>Bienvenido CopySchool!</h1>
                            <h3>Uno de los tantos sitios intentando hacer que la programación sea un poco más fácil de entender. </h3>
                            <br>

                        </div>
                    </section>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="cont tips">
                        <p>Esto que ves aquí debajo es un formulario. Y al hacer <a href="#cont_singUp">Click</a> en este hipervinculo te llevara al formulario de registro porque porque es a donde apunta el mismo.</p>
                        <p>Lo usaremos para poder ingresar nuestros datos y que queden almacenados en la base de datos, para más adelante poder manipular los mismos.</p>
                    </div>
                </div>
            </div>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="separator"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <section class="section">
                        <div>
                            <h3>Formulario 2</h3>
                        </div>
                        <div class="cont cont-form">
                            <form>
                                <input type="number" name="value1" placeholder="Cifra 1">
                                <button class="btn btn-danger">+</button>
                                <button class="btn btn-danger">-</button>
                                <button class="btn btn-danger">x</button>
                                <button class="btn btn-danger">/</button>
                                <input type="number" name="value2" placeholder="Cifra">
                                <br>
                                <button class="btn btn-success">=</button>
                                <br>
                                <textarea></textarea>
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
