

    <!--  Este es el header -->
    <header class="intro-tarjetausuario intro-admin">
        <div class="container">
            <div class="rows">
                <div class="col-md-3 intro-buscar">
                    <form>
                        <h3>Buscar:</h3>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Busqueda:</label>
                            <input class="form-control" placeholder="Buscar">
                        </div>
                        <div class="form-group">
                            <label>Buscar por:</label>
                            <select class="form-control">
                                <option>ID Usuario</option>
                                <option>ID Tarjeta</option>
                                <option>Numero de Tarjeta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ordenar por:</label>
                            <select class="form-control">
                                <option>ID Tarjeta</option>
                                <option>Nuemero de tarjeta [Menor - Mayor]</option>
                                <option>Nuemero de tarjeta [Mayor - Menor]</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                    </form>
                </div>
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Tarjeta Usuario</h1>
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
                            <label>Usuario</label>
                            <input type="input" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Numero Tarjeta:</label>
                            <input type="input" class="form-control" placeholder="Numero Tarjeta">
                        </div>
                        <div class="form-group">
                            <label>Activo:</label>
                            <select class="form-control">
                                <option>Si</option>
                                <option>No</option>
                            </select>
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
                                        <th><strong>ID Tarjeta</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Numero Tarjeta</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="JaimeChavez"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="2560 2544 2312 2545"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="JaimeChavez"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="2560 2544 2312 2545"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="JaimeChavez"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="2560 2544 2312 2545"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="JaimeChavez"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="2560 2544 2312 2545"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="JaimeChavez"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="2560 2544 2312 2545"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
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


</body>

</html>