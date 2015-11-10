<header class="intro-destino intro-admin">
        <div class="container">
            <div class="rows">
                
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Destino</h1>
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
                    <?=form::open('home/agregarDestino')?>
                        <div class="form-group">
                            <span>Nombre Ciudad:</span>
                            <input type="input" class="form-control" name="nombre"placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <span>Descripcion:</span>
                            <input type="input" class="form-control" name="descripcion"placeholder="Descripcion">
                        </div>
                        <div class="form-group">
                            <label>Pais:</label>
                            <select class="form-control" name="idpais">
                                <?php foreach($paises as $pais){?>
                                <option value="<?=$pais->id?>"><?=$pais->nombre?></option>
                                <?php }?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Agregar</button>
                    <?=form::close()?>
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
                                        <th><strong>ID Destino</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Pais</strong></th>
                                        <th><strong>Descripcion</strong></th>
                                        <th><strong>Modificar</strong></th>
                                    </tr>
                                    <?php foreach($destinos as $destino){?>
                                    <tr>
                                        <td><?=$destino->id

                                        ?></td>
                                        <td><input class="form-control" placeholder="Nombre" value="<?=$destino->nombreCiudad?>"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="<?=$destino->idpais?>"></td>
                                        <td><input class="form-control" placeholder="Nombre" value="<?=$destino->descripcion?>"></td>
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