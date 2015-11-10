

    <!--  Este es el header -->
    <header class="intro">
        <h1 class="intro-h1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL</h1>
        <h3 class="intro-h3 "><em>"Te acompañamos a cumplir tu sueño. KOHANA Framework, Programacion IV"</em></h3>
    </header>
    
    <!--Aqui comienza el section de paises-->
    <section class="sec-destinos">
        <div class="rows">
            <div class="col-md-12 text-center div-destino-a">
                <h1>DESTINOS</h1>
                <h4>Explora los mejores destinos que tenemos para ti. Cada pais es una aventura diferente que debes alcanzar.</h4>
            </div>
        </div>
        <div class="rows">
            <?php foreach($paises as $pais){?>
            <div class="col-md-6 text-center div-destino" style="background: url(<?=url::base()?>/<?=$pais->ruta_foto?>) no-repeat bottom center scroll;">
                <h2><?=$pais->nombre?></h2>
                <a href="hotel.php"><span class="btn-estructurado">VIAJAR</span></a>
            </div>
            <?php }?>
        </div>
    </section>

