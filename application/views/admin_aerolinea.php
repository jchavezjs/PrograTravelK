


    <!--  Este es el header -->
    <header class="intro-aerolinea intro-admin">
        <div class="container">
            <div class="rows">
               <!-- <div class="col-md-3 intro-buscar">
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
                </div>-->
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
                    <?=form::open('home/agregarAerolineas')?>
                        <div class="form-group">
                            <span>Nombre</span>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <input type="submit" class="btn btn-info" value="Agregar">
                    <?=form::close()?>
                </div>
            </div>
            <div class="rows listar">
                <div class="col-md-12">
                    <h4>Litado:</h4>
                    <div id="mantenimiento-tabla">
                        
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID Aerolinea</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Borrar</strong></th>
                                    </tr>
                                    <?php foreach($aerolineas as $aerolinea){?>
                                    <tr>
                                        <?=form::open('home/editarAerolineas')?>
                                        <td><input type="text" name="id" class="form-control" value="<?=$aerolinea->id?>" readonly></td>
                                        <td><input type="text" name="nombre" class="form-control" value="<?=$aerolinea->nombre?>"></td>

                                        <td><input type="submit" class="btn btn-info" value="Modificar"> </td>
                                        <td><?=html::anchor('home/borrarAerolineas/'.$aerolinea->id,'Borrar')?></td>
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

  