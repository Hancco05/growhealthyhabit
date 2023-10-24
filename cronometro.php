<?php 
//include('security.php');
session_start();

include('includes/header.php'); 
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Cronómetro</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>

  <body>
    <!-- CSS (Efectos visuales) -->
    <style>
      * {
          transition: all 0.3s;
      }

      .marco {
        border-radius: 50px;
          background: black;
          padding: 42px;
          border: 30px solid white;
          font-size: 100px;
          font-family: calibri;
      }

      .botones-contenedor {
          display: flex;
          justify-content: space-around;
          
      }

      .btn {
          cursor: pointer;
          display: inline-block;
          font-size: 150%;
          padding: 20px;
      }
    </style>

    <!-- HTML (Estructura) -->

    <div class="marco">
      <div class="tiempo" id="tiempo">00:00:00.000</div>
      <div class="botones-contenedor">
        <div class="btn" onclick="iniciar()">
          <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
          <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
          <i class="fas fa-undo-alt"></i>
        </div>
      </div>
    </div>

    <!-- JS (Parte Lógica) -->
    <script>

      let tiempoRef = Date.now()
      let cronometrar = false
      let acumulado = 0

      function iniciar() {
          cronometrar = true
      }

      function pausar() {
          cronometrar = false
      }

      function reiniciar() {
          acumulado = 0
      }

      setInterval(() => {
          let tiempo = document.getElementById("tiempo")
          if (cronometrar) {
              acumulado += Date.now() - tiempoRef
          }
          tiempoRef = Date.now()
          tiempo.innerHTML = formatearMS(acumulado)
      }, 1000 / 60);

      function formatearMS(tiempo_ms) {
          let MS = tiempo_ms % 1000
          
          //Agregué la variable St para solucionar el problema de contar los minutos y horas.
          
          let St = Math.floor(((tiempo_ms - MS) / 1000))
          
          let S = St%60
          let M = Math.floor((St / 60) % 60)
          let H = Math.floor((St/60 / 60))
          Number.prototype.ceros = function (n) {
              return (this + "").padStart(n, 0)
          }

          return H.ceros(2) + ":" + M.ceros(2) + ":" + S.ceros(2)
              + "." + MS.ceros(3)
      }
    </script>
  </body>
</html>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>
