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
                <!--<a class="navbar-brand page-scroll" href="index.php">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL
                </a>-->
                <?=html::anchor('','<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL')?>
            </div>

           <!--Menu-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="explorar.php">Explorar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="destinos.php">Destinos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hoteles.php">Hoteles</a>
                    </li>
                    
                     <!-- Mostrar esta parte solo si es Administrador-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administrar <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><?=html::anchor('home/adminAerolineas','Aerolineas')?></li>
                            <li><?=html::anchor('home/categoriaVuelo','Categoria Vuelo')?></li>
                            <li><?=html::anchor('home/destino','Destino')?></li>
                            <li><?=html::anchor('home/destinoHotel','Destino Hotel')?></li>
                            <li><?=html::anchor('home/galeria','Galeria')?></li>
                            <li><?=html::anchor('home/hotel','Hotel')?></li>
                            <li><?=html::anchor('home/adminPais','Pais')?></li>
                            <li><?=html::anchor('home/adminTarjeta','Tarjetas de usuario')?></li>
                            <li><?=html::anchor('home/tipoTarjeta','Tipos de tarjeta')?></li>
                            <li><?=html::anchor('home/adminUsuario','Usuario')?></li>
                            <li><?=html::anchor('home/viaje','Viaje')?></li>
                            <li><?=html::anchor('home/vuelo','Vuelos')?></li>
                        </ul>
                    </li>
                    <!-- Aqui termina la opcion administrar-->
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#myModal"><span class="btn-estructurado">Iniciar Session</span></a>
                    </li>
                    <!-- Para cuando el usuario ya este logeado quitar la parte de arriba y dejar esta-->
                    <!-- 
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Jonathan Romero <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Mis Tarjetas</a></li>
                            <li><a href="#">Reservaciones</a></li>
                            <li><a href="#">Mis Viajes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Cerrar Session</a></li>
                        </ul>
                    </li>
                    -->
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
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputEmail1">Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?=$content?>

   

