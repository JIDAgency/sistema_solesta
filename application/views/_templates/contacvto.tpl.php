<html>
    <body>
        <h1></h1>
        <?php if (isset($titulo)): ?>
            <h2>Has recibido una nueva solicitud de contacto en <?php echo $titulo; ?></h2>
        <?php else: ?>
            <h2>Has recibido una nueva solicitud de contacto</h2>
        <?php endif; ?>
        <br>
        <p><strong>Nombre: </strong><?php echo $contacto_nombre;?></p>
        <p><strong>Correo electrónico: </strong><?php echo $contacto_correo_electronico;?></p>
        <p><strong>Número de contacto: </strong><?php echo $contacto_no_telefono;?></p>
        <p><strong>Asunto: </strong><?php echo $contacto_asunto;?></p>
        <p><strong>Mensaje: </strong><?php echo $contacto_mensaje;?></p>
        <p><strong>Dirección IP: </strong><?php echo $contacto_ip;?></p>
        <p><strong>Fecha y hora: </strong><?php echo $contacto_date;?></p>
        <br>
        <p><small><em></em></small></p>
    </body>
</html>