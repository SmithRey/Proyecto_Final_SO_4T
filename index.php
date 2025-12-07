<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>

<body class="bg-light">

<?php
    $nombre = "Profe Jose";
    $fecha  = date("d/m/Y");
?>


<div class="modal fade" id="saludoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">👋 Hey!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <p class="fs-5">
          Hola <strong><?php echo $nombre; ?></strong>, qué bueno verte por aquí 😄
        </p>
        <p>
          Son las <strong id="horaActual"></strong> y el sistema está listo 🚀
        </p>
        <p class="text-muted small">
          Ponte cómodo y disfruta el recorrido
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-outline-primary" data-bs-dismiss="modal">
          ¡Vamos!
        </button>
      </div>
    </div>
  </div>
</div>


<div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
        <div class="text-center">
            <h1 class="display-5 mb-3 text-primary">
                Hola, <?php echo $nombre; ?>
            </h1>

            <p class="lead">Bienvenido este sitio web</p>

            <hr>

            <p class="text-muted mb-0">
                📅 <?php echo $fecha; ?><br>
                ⏰ <span id="horaCard"></span>
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {

    
    const ahora = new Date();
    const hora = ahora.toLocaleTimeString('es-CO', {
        hour: '2-digit',
        minute: '2-digit'
    });

    document.getElementById("horaActual").textContent = hora;
    document.getElementById("horaCard").textContent = hora;

    
    const modal = new bootstrap.Modal(document.getElementById('saludoModal'));
    modal.show();
});
</script>

</body>
</html>