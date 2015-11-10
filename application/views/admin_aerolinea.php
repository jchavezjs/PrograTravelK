


    <!--  Este es el header -->
    <header class="intro-aerolinea intro-admin">
        <div class="container">
            <div class="rows">
                <div class="col-md-3 intro-buscar">
                    <form>
                        <h3>Buscar:</h3>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre:</label>
                            <input class="form-control" placeholder="Buscar">
                        </div>
                        <div class="form-group">
                            <label>Buscar por:</label>
                            <select class="form-control">
                                <option>ID Aerolinea</option>
                                <option>Nombre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ordenar por:</label>
                            <select class="form-control">
                                <option>ID Aerolinea</option>
                                <option>Nombre [A - Z]</option>
                                <option>Nombre [Z - A]</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                    </form>
                </div>
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Aerolinea</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="admin-mantenimientos">
        <div class="container">
            <div class="rows text-center">
                <h2 class="titulo-admin"><u>Administracion</u></h2>
            </div>
            <div class="rows">
                <div class="col-md-12 agregar">
                    <h4><u>Agregar</u></h4>
                    <form action="">
                        <div class="form-group">
                            <span>Nombre</span>
                            <input type="input" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <span>Logo:</span>
                            <input type="file">
                        </div>
                        <button type="button" class="btn btn-info">Agregar</button>
                    </form>
                </div>
            </div>
            <div class="rows listar">
                <div class="col-md-12">
                    <h4>Litado:</h4>
                    <div id="mantenimiento-tabla">
                        <form action="procesos/adminU.php" method="post" enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID Aerolinea</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Logo</strong></th>
                                        <th><strong>Cambiar Logo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                    </tr>
                                    <?php foreach($aerolineas as $aerolinea){?>
                                    <tr>
                                        <td><?=$aerolinea->idaerolinea?></td>
                                        <td><input class="form-control" placeholder="Nombre" value="<?=$aerolinea->nombre?>"></td>
                                        <td><img src="<?=url::base()?><?=$aerolinea->ruta_logo?>" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                    </tr>
                                    <?php }?>
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

 
</body>

</html>