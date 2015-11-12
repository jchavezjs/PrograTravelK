
    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO PAISES</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar Paises. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>PAISES</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <?=form::open('home/adminPais')?>
                    <div class="form-group">
                        <label>Nombre país:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre país">
                    </div>
                    <div class="form-group">
                        <label>Logo:</label>
                        <input type="file" name="foto">
                    </div>                                   
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                <?form::close()?>
            </div>
             <div class="rows listar">
                <div class="col-md-12">
                    <h4>Litado:</h4>
                    <div id="mantenimiento-tabla">
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID País</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Logo</strong></th>
                                        <th><strong>Cambiar Logo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Nombre País"></td>
                                        <td><img src="img/avianca.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-danger'>Eliminar</button></td>
                                    </tr>
                                    
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
 