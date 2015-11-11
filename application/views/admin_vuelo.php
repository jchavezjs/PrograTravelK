

    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO VUELOS</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar Vuelos. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>VUELOS</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <form action="">
                    
                    <label>País:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <label>Aerolinea:</label>
                    <select class="form-control">
                    <option>1</option>
                    </select>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Precio">
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
                                        <th><strong>ID Vuelo</strong></th>
                                        <th><strong>Pais</strong></th>
                                        <th><strong>Aerolinea</strong></th>
                                        <th><strong>Precio</strong></th>
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
                                        <td><input class="form-control" placeholder="Precio" value="Precio"></td>
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
 