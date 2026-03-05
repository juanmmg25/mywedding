<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitación intro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>



<a href="#" id="openBtn" class="fondo-link"></a>

  <!-- Contenedor centrado -->
  <div class="center-container">
    <div id="videoContainer" class="video-hidden">
       <!-- Video escritorio -->
  <video id="videoDesktop" autoplay muted playsinline>
    <source src="../video/intro.mp4" type="video/mp4">
    Tu navegador no soporta videos.
  </video>

  <!-- Video móvil -->
  <video id="videoMobile" autoplay muted playsinline>
    <source src="../video/intro_vertical.mp4" type="video/mp4">
    Tu navegador no soporta videos.
  </video>
    </div>
  </div>

  <script>
  const btn = document.getElementById("openBtn");
  const videoContainer = document.getElementById("videoContainer");

  // Detectar si es móvil
  const esMovil = window.matchMedia("(max-width: 768px)").matches;

  // Seleccionar el video correcto
  const video = esMovil
    ? document.getElementById("videoMobile")
    : document.getElementById("videoDesktop");

  // Evita que se abra el menú contextual (clic derecho) en la página.  
  document.addEventListener("contextmenu", e => e.preventDefault());

  // Cuando se hace clic en el botón de apertura:
  btn.addEventListener("click", () => {
    // Añade una clase para la animación visual ("flash").
    btn.classList.add("flash");
    // Espera 800 ms para dejar que termine la animación.
    setTimeout(() => {
      // Oculta el botón (ya no es necesario).
      btn.style.display = "none";
      // Muestra el contenedor del video: quita la clase que lo oculta...
      videoContainer.classList.remove("video-hidden");
      / ...y añade la clase que lo muestra (probablemente aplica estilo/animación).
      videoContainer.classList.add("video-show");
      // Inicia la reproducción del video seleccionado.
      video.play();
    }, 800);
  });
// Cuando el video termina de reproducirse:
  video.addEventListener("ended", () => {
    // Quita la clase que muestra el video.
    videoContainer.classList.remove("video-show");
    // Añade una clase de efecto (por ejemplo un "flash" o transición de salida).
    videoContainer.classList.add("flash");
    // Tras 800 ms (dar tiempo a la animación), redirige a la carpeta de la invitación.
    setTimeout(() => {
      window.location.href = "../invitacion/";
    }, 800);
  });
</script>



<script>
document.getElementById("openBtn").addEventListener("click", function() {
    document.getElementById("musicFrame").contentWindow.postMessage('playMusic', '*');
});
</script>


</body>
</html>
