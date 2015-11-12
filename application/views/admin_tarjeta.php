<style>
table a{
    color: red;
}
</style>
    <!--  Este es el header -->
    <header class="intro-perfil">
        <h1 class="intro-admin-h1"><span class="light">MANTENIMIENTO TARJETAS DE CREDITO</span></h1>
        <h3 class="intro-h3 "><em>"Insertar, modificar y eliminar Tarjetas de credito. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>TARJETAS DE CREDITO</h1>
                <h4>Modificacion de datos.</h4>
            </div>
        </div>
        <div class="container formulario">
            <div class="rows">
                <?=form::open('home/agregarTarjeta')?>
                    <label>Usuario:</label>
                    
                    <select class="form-control" name="usuario">
                    <?php foreach($usuarios as $usuario){?>
                    <option value="<?=$usuario->id?>"><?=$usuario->nombre?></option>
                    <?php }?>
                    </select>
                    <div class="form-group">
                        <label>Numero de Tarjeta:</label>
                        <input type="input" class="form-control" name="nTarjeta" id="exampleInputEmail1" placeholder="Numero de Tarjeta">
                    </div>
                                                  
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                <?form::close()?>
            </div>
             <div class="rows listar">
                <div class="col-md-12">
                    <h4>Listado:</h4>
                    <div id="mantenimiento-tabla">
                        <form action="procesos/adminU.php" method="post" enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID Tarjeta</strong></th>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Numero Tarjeta</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Eliminar</strong></th>
                                    </tr>
                                    <?php foreach($tarjetas as $tarjeta){?>
                                    <tr>
                                    <?=form::open('home/editarTarjeta')?>
                                        <td><input class="form-control" placeholder="Numero de Tarjeta" name="id" value="<?=$tarjeta->id?>" readonly></td>
    

                                        <td><input class="form-control" placeholder="Numero de Tarjeta" name="idUsario" value="<?=$tarjeta->idUsario?>" ></td>
                                        
                                    
                                        <td><input class="form-control" placeholder="Numero de Tarjeta" name="nTarjeta"value="<?=$tarjeta->nTarjeta?>"></td>
                                   
                                        
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><?=html::anchor('home/borrarTarjeta/'.$tarjeta->id,'Borrar')?></td>
                                    <?=form::close()?>
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
 