<style>
table a{
    color: red;
}
</style>
    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO AEROLINEAS</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar aerolineas. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>AEROLINEAS</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <?=form::open('home/agregarAerolineas')?>
                    <div class="form-group">
                        <label>Nombre aerolinea:</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>                                  
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
                                        <th><strong>ID Aerolinea</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Eliminar</strong></th>
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

