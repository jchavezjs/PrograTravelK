

    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO RESERVAS</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar Reservas. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>RESERVAS</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <form action="">
                    <label>tarjeta:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <label>Usuario:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <label>País:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <label>Vuelo</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <label>Hotel:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <div class="form-group">
                        <label>Numero de personas:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                        <label>Numero de Días:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label>Total:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Contraseña">
                    </div>
                                                  
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
                                        <th><strong>ID Reserva</strong></th>
                                        <th><strong>Tarjeta</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Pais</strong></th>
                                        <th><strong>Vuelo</strong></th>
                                        <th><strong>Hotel</strong></th>
                                        <th><strong>Numero de Personas</strong></th>
                                        <th><strong>Numero de Dias</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><select class="form-control">
                                        <option>1</option>
                                        </select></td>
                                        <td><input class="form-control" placeholder="Personas" value="Personas"></td>
                                        <td><input class="form-control" placeholder="Dias" value="Dias"></td>
                                        
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
 