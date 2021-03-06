

    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO HOTELES</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar hoteles. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>Hoteles</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <form action="">
                    <div class="form-group">
                        <label>Nombre hotel:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Nombre hotel">
                    </div>
                    <div class="form-group">
                        <label>Precio:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Precio hotel">
                    </div>
                    <div class="form-group">
                        <label>Logo:</label>
                        <input type="file">
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
                                        <th><strong>ID Hotel</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Precio</strong></th>
                                        <th><strong>Logo</strong></th>
                                        <th><strong>Cambiar Logo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="hotel"></td>
                                        <td><input class="form-control" placeholder="Precio" value="30"></td>
                                        <td><img src="img/avianca.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
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
 