<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TravelProgra</title>

    <link href="<?=url::base()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=url::base()?>/css/estilo.css" rel="stylesheet">
    <script src="<?=url::base()?>/js/jquery.js"></script>
    <script src="<?=url::base()?>/js/jquery.easing.min.js"></script>
    <script src="<?=url::base()?>/js/bootstrap.min.js"></script>
    <script src="<?=url::base()?>/js/viaje.js"></script>
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
                    
                <?=html::anchor('/','<span class="navbar-brand page-scroll"></span><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL</span>')?>
                
            </div>

           <!--Menu-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <?=html::anchor('','')?>
                    </li>

                     <!-- Mostrar esta parte solo si es Administrador-->
                     
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administrar <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><?=html::anchor('home/adminAerolineas','Aerolineas')?></li>
                            <li><?=html::anchor('home/adminHotel','Hotel')?></li>
                            <li><?=html::anchor('home/adminPais','Paises')?></li>
                            <li><?=html::anchor('home/adminReserva','Reservas')?></li>
                            <li><?=html::anchor('home/adminTarjeta','Tarjetas de usuario')?></li>
                            <li><?=html::anchor('home/adminUsuario','Usuario')?></li>
                            <li><?=html::anchor('home/adminVuelo','Vuelos')?></li>
                        </ul>
                    </li>
                    <!-- Aqui termina la opcion administrar-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Jonathan Romero <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><?=html::anchor('home/usuario','Mi Perfil')?></li>
                            <li><?=html::anchor('home/reservaUsuario','Mis Reservas')?></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#myModal"><span class="btn-estructurado">Iniciar Sesion</span></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#myModal2"><span class="btn-estructurado">Registrarse</span></a>
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
                    <h4 class="modal-title modal-font" id="myModalLabel">Inicio de Session</h4>
                </div>
                <!-- Aqui esta el form de inicio de session -->
                <?=form::open('home/auth')?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputEmail1">Usuario:</label>
                            <input type="input" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputPassword1">Contraseña:</label>
                            <input type="password" class="form-control" name="clave" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        <input type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        
                    </div>
                <?=form::close()?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal-font" id="myModalLabel">Registrarse</h4>
                </div>
                <!-- Aqui esta el form de inicio de session -->
                <?=form::open('home/registrar')?>
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Nombre:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellido:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="correo">
                    </div>
                    <div class="form-group">
                        <label>Usuario:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Contraseña" name="clave">
                    </div>
                    
                                    
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  OK</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        
                    </div>
                <?=form::close()?>
            </div>
        </div>
    </div>

<?=$content?>

   
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
                    <a href="#"><img class="socialintro" src="<?=url::base()?>/img/facebook.png"></a>
                    <a href="#"><img class="socialintro" src="<?=url::base()?>/img/twitter.png"></a>
                    <a href="#"><img class="socialintro" src="<?=url::base()?>/img/youtube.png"></a>
                </div>
            </div>
        </div>
        <div class="rows">
           <div class="container text-center">
            <p>Copyright &copy; Programacion IV - Kohana Framework</p>
        </div> 
        </div>
        
    </footer>

 
</body>

</html>
