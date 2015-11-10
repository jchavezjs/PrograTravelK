

    <!--  Este es el header -->
    <header class="intro-usuario intro-admin">
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
                                <option>Nombre</option>
                                <option>Apellido</option>
                                <option>Correo</option>
                                <option>Usuario</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                    </form>
                </div>
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Usuario</h1>
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
                            <label>Nombre:</label>
                            <input type="input" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="input" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <label>Correo:</label>
                            <input type="input" class="form-control" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input type="input" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Clave:</label>
                            <input type="password" class="form-control" placeholder="Clave">
                        </div>
                        <div class="form-group">
                            <label>Foto:</label>
                            <input type="file">
                        </div>
                        <div class="form-group">
                            <label>Tipo Usuario:</label>
                            <select class="form-control">
                                <option>Usuario</option>
                                <option>Administrador</option>
                                <option>SAdministrador</option>
                            </select>
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
                                        <th><strong>ID Usuario</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Apellido</strong></th>
                                        <th><strong>Correo</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Clave</strong></th>
                                        <th><strong>Foto</strong></th>
                                        <th><strong>Modificar Foto</strong></th>
                                        <th><strong>Tipo Usuario</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="input" class="form-control" placeholder="Nombre" value="Jelmy"></td>
                                        <td><input type="input" class="form-control" placeholder="Apellido" value="Hernandez"></td>
                                        <td><input type="input" class="form-control" placeholder="Correo" value="jelmy@progratravel.com"></td>
                                        <td><input type="input" class="form-control" placeholder="Usuario" value="Jelmy"></td>
                                        <td><input type="password" class="form-control" placeholder="Clave" value="1234"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Usuario</option>
                                                <option>Administrador</option>
                                                <option>SAdministrador</option>
                                            </select>
                                        </td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="input" class="form-control" placeholder="Nombre" value="Jelmy"></td>
                                        <td><input type="input" class="form-control" placeholder="Apellido" value="Hernandez"></td>
                                        <td><input type="input" class="form-control" placeholder="Correo" value="jelmy@progratravel.com"></td>
                                        <td><input type="input" class="form-control" placeholder="Usuario" value="Jelmy"></td>
                                        <td><input type="password" class="form-control" placeholder="Clave" value="1234"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Usuario</option>
                                                <option>Administrador</option>
                                                <option>SAdministrador</option>
                                            </select>
                                        </td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="input" class="form-control" placeholder="Nombre" value="Jelmy"></td>
                                        <td><input type="input" class="form-control" placeholder="Apellido" value="Hernandez"></td>
                                        <td><input type="input" class="form-control" placeholder="Correo" value="jelmy@progratravel.com"></td>
                                        <td><input type="input" class="form-control" placeholder="Usuario" value="Jelmy"></td>
                                        <td><input type="password" class="form-control" placeholder="Clave" value="1234"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Usuario</option>
                                                <option>Administrador</option>
                                                <option>SAdministrador</option>
                                            </select>
                                        </td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="input" class="form-control" placeholder="Nombre" value="Jelmy"></td>
                                        <td><input type="input" class="form-control" placeholder="Apellido" value="Hernandez"></td>
                                        <td><input type="input" class="form-control" placeholder="Correo" value="jelmy@progratravel.com"></td>
                                        <td><input type="input" class="form-control" placeholder="Usuario" value="Jelmy"></td>
                                        <td><input type="password" class="form-control" placeholder="Clave" value="1234"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Usuario</option>
                                                <option>Administrador</option>
                                                <option>SAdministrador</option>
                                            </select>
                                        </td>
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