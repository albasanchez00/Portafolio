<?php
include_once 'header.php';
include_once 'lectura.php';
?>

<section class="section-body">
    <section class="section-form">
        <form action="lectura.php" method="post" autocomplete="on">
            <h1>Contacto</h1>
            <div class="group-form">
                <div class="form-group">
                    <label>Nombre *</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="required">
                </div>

                <div class="col-form">
                    <label>Email *</label>
                    <input type="email" id="email" name="email" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label>Asunto *</label>
                    <input type="text" id="subject" name="subject" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <label>Mensaje *</label>
                    <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar" />
                </div>
            </div>
        </form>
    </section>
</section>
<?php
include_once 'footer.php';
?>
