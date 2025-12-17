<?php
error_reporting(0);
$idestampado=$_GET['numero'];
$servicio=$_GET['servicio'];

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" href="Calificacion.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
      
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Redes sociales</div>
            <div class="text-one">Tik Tok :innovation.system</div>
            <div class="text-two">Instragram: system_inovattion</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Celular</div>
            <div class="text-one">305 3796931</div>
          
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">InnovationSystem1j@gmail.com</div>
          
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Envia tu reseña</div>
          <p> Envia tu reseña a la sastreria a la que fuiste</p>
          <form action="insertarreseñas.php" method="post">
            <div class="input-box">
              <input type="text" name="nombre" placeholder="Coloca Tu Nombre" />
            </div>
            <div class="fields">
              <div class="form-group gender">
                  <label for="gender"></label>
                  <select id="gender" name="idsastreria">
                    <option value="" selected disabled>Elije tu sastreria</option>
               
                    <?php
                                //visualizacion
$versastrerias = "select * from registrosastreria";
$queryresultado = mysqli_query($servidor,$versastrerias);
  
while ($regsastrerias = mysqli_fetch_array($queryresultado)){ 

  
                                ?>
                                
                                  
                                  <option value="<?php echo $regsastrerias['id'];?>"><?php echo $regsastrerias['nombresastreria'];?></option>
                                  <?php
}

                                  ?>
                  </select>
            <div class="input-box message-box">
            <textarea cols="30" name="comentario" rows="10" placeholder="comentario" required></textarea>
            </div>
            <div class="button">
        <input type="submit" value="Envía reseña" />
    </div>
          </form>
          
        </div>
      </div>
    </div>
    <style>
           .button {
            text-align: center;
            margin-top: 20px; /* Ajusta el margen según sea necesario */
        }

        /* Estilo para el botón */
        .button input[type="submit"] {
            background-color: orange; /* Color de fondo del botón */
            color: white; /* Color de texto del botón */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Quita el borde del botón */
            border-radius: 5px; /* Añade bordes redondeados al botón */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
            font-size: 16px; /* Tamaño de la fuente del botón */
            transition: background-color 0.3s ease; /* Transición suave para el cambio de color de fondo */
        }

        /* Estilo para el botón al pasar el cursor sobre él */
        .button input[type="submit"]:hover {
            background-color: orange; /* Cambia el color de fondo al pasar el cursor */
        }
       body {
      margin: 0;
      padding: 0;
      background-image: url('fondoreseñas.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    </style>
    <a href="administracion.php" id="atras-btn">atras</a>
  </body>
</html>