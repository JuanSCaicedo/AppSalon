<h1 class="nombre-pagina">Actualizar Servicio</h1>
<p class="descripcion-pagina">Modifica los valores del formulario</p>

<?php
    include __DIR__ . '/../templates/barra.php';
    include __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php
        include __DIR__ . '/formulario.php';
    ?>
    <input type="submit" class="boton" value="Actualizar Servicio">
</form>