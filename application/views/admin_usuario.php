<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TravelProgra</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!-- Nav -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class=" glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL
                </a>
            </div>

           <!--Menu-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>

                     <!-- Mostrar esta parte solo si es Administrador-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administrar <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><a href="admin_aerolinea.php">Aerolineas</a></li>
                            <li><a href="admin_hotel.php">Hoteles</a></li>
                            <li><a href="admin_pais.php">Paises</a></li>
                            <li><a href="admin_reserva.php">Reservas</a></li>
                            <li><a href="admin_tarjeta.php">Tarjetas</a></li>
                            <li><a href="admin_usuario.php">Usuarios</a></li>
                            <li><a href="admin_vuelo.php">Vuelos</a></li>
                        </ul>
                    </li>
                    <!-- Aqui termina la opcion administrar-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Jonathan Romero <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><a href="perfil.php">Perfil</a></li>
                            <li><a href="reservaciones.php">Reservaciones</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#myModal"><span class="btn-estructurado">Iniciar Sesion</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Inicio de Sesion -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal-font" id="myModalLabel">Inicio de Sesion</h4>
                </div>
                <!-- Aqui esta el form de inicio de session -->
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputEmail1">Usuario:</label>
                            <input type="input" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputPassword1">Contraseña:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        <button type="button" class="btn btn-primary btn-block">Iniciar Sesion</button>
                        <a href="registro.php" class="btn btn-success  btn-block">Registrar</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO USUARIOS</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar USUARIOS. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>USUARIOS</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <form action="">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>apellido:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="apellido">
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label>Usuario:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
                    </div>
                    
                        <label>Tipo:</label>
                        <select class="form-control">
                    <option>1</option>
                    </select>
                                                  
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                </form>
            </div>
             <div class="rows listar">
                <div class="col-md-12">
                    <h4>Listado:</h4>
                    <div id="mantenimiento-tabla">
                        <form action="procesos/adminU.php" method="post" enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID Vuelo</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Apellido</strong></th>
                                        <th><strong>Correo</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Contraseña</strong></th>
                                        <th><strong>Tipo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Nombre"></td>
                                        <td><input class="form-control" placeholder="apellido" value="Apellido"></td>
                                        <td><input class="form-control" placeholder="Correo" value="Correo"></td>
                                        <td><input class="form-control" placeholder="usuario" value="Usuario"></td>
                                        <td><input class="form-control" placeholder="contraseña" value="Contraseña"></td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-danger'>Eliminar</button></td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="rows">
                <div class="col-md-4">
                    <h4><u>CONTACTENOS</u></h4>
                    <p><span class="glyphicon glyphicon-phone"></span>  Telefono: (+503) 2233-5564</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>  Correo: info@progratravel.com</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>  Direccion: Av. Olimpica #132, San Salvador, El Salvador</p>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-right">
                    <h4><u>Redes Sociales</u></h4>
                    <a href="#"><img class="socialintro" src="img/facebook.png"></a>
                    <a href="#"><img class="socialintro" src="img/twitter.png"></a>
                    <a href="#"><img class="socialintro" src="img/youtube.png"></a>
                </div>
            </div>
        </div>
        <div class="rows">
           <div class="container text-center">
            <p>Copyright &copy; Programacion IV - Kohana Framework</p>
        </div> 
        </div>
        
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/viaje.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
