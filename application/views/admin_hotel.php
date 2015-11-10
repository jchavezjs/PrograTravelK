
    <!--  Este es el header -->
    <header class="intro-hotel intro-admin">
        <div class="container">
            <div class="rows">
                <div class="col-md-3 intro-buscar">
                    <form>
                        <h3>Buscar:</h3>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hotel:</label>
                            <input class="form-control" placeholder="Buscar">
                        </div>
                        <div class="form-group">
                            <label>Ordenar por:</label>
                            <select class="form-control">
                                <option>ID Hotel</option>
                                <option>Hotel [A - Z]</option>
                                <option>Hotel [Z - A]</option>
                                <option>Precio [Mayor - Menor]</option>
                                <option>Precio [Menor - Mayor]</option>
                                <option>Estrellas [Mayor - Menor]</option>
                                <option>Estrellas [Menor - Mayor]</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                    </form>
                </div>
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Hotel</h1>
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
                            <label>Nombre Hotel:</label>
                            <input type="input" class="form-control" placeholder="Nombre Hotel">
                        </div>
                        <div class="form-group">
                            <label>Precio por noche:</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio por noche">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto:</label>
                            <input type="file">
                        </div>
                        <div class="form-group">
                            <label>Estrellas:</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Descripcion:</label>
                            <input type="input" class="form-control" placeholder="Descripcion">
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
                                        <th><strong>ID Hotel</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Precio Noche</strong></th>
                                        <th><strong>Estrellas</strong></th>
                                        <th><strong>Descripcion</strong></th>
                                        <th><strong>Foto</strong></th>
                                        <th><strong>Cambiar foto</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Hotel Hilton"></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio por noche" value="30.00">
                                            </div>
                                        </td>
                                        <td><input class="form-control" placeholder="Nombre" value="3"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="Ambiente tranquilo, cerca de la ciudad"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Hotel Hilton"></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio por noche" value="30.00">
                                            </div>
                                        </td>
                                        <td><input class="form-control" placeholder="Nombre" value="3"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="Ambiente tranquilo, cerca de la ciudad"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Hotel Hilton"></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio por noche" value="30.00">
                                            </div>
                                        </td>
                                        <td><input class="form-control" placeholder="Nombre" value="3"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="Ambiente tranquilo, cerca de la ciudad"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Hotel Hilton"></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio por noche" value="30.00">
                                            </div>
                                        </td>
                                        <td><input class="form-control" placeholder="Nombre" value="3"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="Ambiente tranquilo, cerca de la ciudad"></td>
                                        <td><img src="img/sansalvador.jpg" alt='San Salvador' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
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

    <!-- JavaScript -->

</body>

</html>