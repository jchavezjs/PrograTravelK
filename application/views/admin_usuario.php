
    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO USUARIOS</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar USUARIOS. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>USUARIOS</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <?=form::open('home/agregarAerolineas')?>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>apellido:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" nombre="apellido" placeholder="apellido">
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" nombre="correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label>Usuario:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" nombre="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="input" class="form-control" id="exampleInputEmail1" nombre="clave"  placeholder="Contraseña">
                    </div>
                    
                        <label>Tipo:</label>
                        <select class="form-control" name="tipo">
                    <option value="0">Cliente</option>
                    <option value="1">Administrador</option>
                    </select>
                                                  
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                <?=form::close()?>
            </div>
             <div class="rows listar">
                <div class="col-md-12">
                    <h4>Listado:</h4>
                    <div id="mantenimiento-tabla">
                        
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Apellido</strong></th>
                                        <th><strong>Correo</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Contraseña</strong></th>
                                        <th><strong>Tipo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Eliminar</th>
                                    </tr>
                                    <?php foreach($usuarios as $usuario){?>
                                    1
                                    <tr>
                                        <?=form::open('home/editarUsuario')?>
                                        <td><input class="form-control" placeholder="Nombre" value="fdsfs" readonly></td>
                                        <td><input class="form-control" placeholder="Nombre" value="<?=$usuario->nombre?>"></td>
                                        <td><input class="form-control" placeholder="apellido" value="<?=$usuario->apellido?>"></td>
                                        <td><input class="form-control" placeholder="Correo" value="<?=$usuario->correo?>"></td>
                                        <td><input class="form-control" placeholder="usuario" value="<?=$usuario->usuario?>"></td>
                                        <td><input class="form-control" placeholder="contraseña" value="<?=$usuario->clave?>"></td>
                                        <td><input class="form-control" placeholder="tipo" value="<?=$usuario->tipo?>"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><?=html::anchor('home/borrarUsuario/'.$usuario->id,'Borrar')?></td>
                                        <?=form::close()?>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
