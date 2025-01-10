<?php
include_once 'header.php';
include_once 'lectura.php';
?>

<section class="section-body">
    <section class="section-form">
        <form action="lectura.php" method="post" autocomplete="on">
            <h1>Contacto</h1>
            <div class="group-form">
                <p class="col-form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </p>
                <p class="col-form">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="example@dominio.com">
                </p>
                <p class="col-form">
                    <label for="tlfn">Asunto:</label>
                    <input type="text" name="tlfn" id="tlfn">
                </p>
            </div>
            <p class="col-form-contact">
                <label for="mensaje"></label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Motivo de mensaje"></textarea>
            </p>
            <input type="submit" value="Enviar" id="btn-enviar" class="btn-proyectos">
        </form>
    </section>
</section>
<?php
include_once 'footer.php';
?>
