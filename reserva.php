
<?php
error_reporting(0);
$idestampado=$_GET['numero'];
$servicio=$_GET['servicio'];

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
?>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="reserva.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <style>.icons {
        display: flex;
        flex-direction: column;
    }

    .row {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .row i {
        margin-right: 10px;
        color: orange; /* Establece el color naranja para los iconos */
    }

    .info {
        display: flex;
        flex-direction: column;
    }

    /* Estilos adicionales según tus necesidades */
    .head {
        font-weight: bold;
    }

    .sub-title {
        color: #333; /* Puedes ajustar el color del texto según tus preferencias */
        
    }
    body{
  margin: 0;
      padding: 0;
      background-image: url('asis.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
        }
        .max-width {
        color: #fff; 
    }
    .head {
        color: #fff;
    }
    .sub-title {
        color: #fff;
    }
  
.form-group.gender select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: #fff;
    color: #333;
}


.form-group.gender label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
</style>
    <section class="contact" id="contact">
        <img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
      
        <div class="max-width">
            <br><br>
            <h2 class="title">Reserva</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">¿Comó puedo reservar?</div>
                    <p>¡FACIL!, En la tabla debes registrar la informacion de la modisteria en la que estas interesad@, en el apartado de abajo tienes el contacto de soporte tecnico en caso de una duda o problema que presentes.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nombre</div>
                                <div class="sub-title">Stich works</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Ubicacón</div>
                                <div class="sub-title">Colombia</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">InnovationSystem1j@gmail.com</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Reserva</div>
                    <form action="insertarreservas.php" method="post">
                        <div class="fields">
                        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
                          <script>
                            function verestampados(){
                                var servicioelegido=document.getElementById('servicios').value;
                                if (servicioelegido=="Estampados") {
                                   
                            location.href ='administrador/Pagina de Estampados22.php';
 
                                }
                         
                      

                            }
                            $(document).ready(function(){
                                var servicio="<?php echo $servicio; ?>";
                                if(servicio=="Estampados"){ 
                                    $('#servicios > option[value="Estampados"]').attr('selected', 'selected');
                                }
                            });                            
                          </script>


                           
                                <br>
                                <div class="form-group gender">
                                    <label for="gender"></label>
                                    <select id="servicios" name="idservicios" onchange="verestampados()">
                                      <option value="" selected disabled>Que necesitas?</option>
                                      <option value="areglos">Arreglos de ropa</option>
                                      <option value="Estampados">Estampados</option>
                                      <option value="creacion de ropa">Creacion de ropa</option>
                                    </select>
                              
                                    </div>
                                    <br>
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

                                   </div>
                                      <br>
                        </div>
                        <div class="field">
                            <input type="text" name="idtipoprenda" placeholder="Producto" required value="<?php

echo $idestampado;


?>">
                        </div>
                        <div class="field">
                            <input type="number" name="celular" placeholder="Numero de telefono" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" name="descripcion" rows="10" placeholder="Descripción del producto" required></textarea>
                        </div>
                        <div class="input-box">
                    <label></label>
                    <div class="input-box">
    <label></label>
    <input type="date" name="calendario" placeholder="Ingresa una fecha" required class="field" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
</div>
                        <div class="button-area">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    <script>
        // Función para mostrar u ocultar los campos adicionales según el texto ingresado en el campo "Nombre"
        function mostrarCampos() {
            var nombreInput = document.getElementById("nombreInput");
            var camposAdicionales = document.getElementById("camposAdicionales");

            // Verifica si el campo "Nombre" tiene texto ingresado
            if (nombreInput.value.trim() !== "") {
                camposAdicionales.style.display = "block"; // Muestra los campos adicionales
            } else {
                camposAdicionales.style.display = "none"; // Oculta los campos adicionales
            }
        }
    </script>
    </section>
    <a href="administracion.php" id="atras-btn">atras</a>
    <style>
       .fields {
        display: flex;
        flex-direction: column;
    }

    .field {
        margin-bottom: 10px;
    }

    .additional-fields {
        display: none;
    } #atras-btn {
               position: fixed;
               bottom: 20px;
               right: 50px;
               background-color: coral;
               color: white;
               border: none;
               border-radius: 5px;
               padding: 10px 20px;
               font-size: 18px;
               cursor: pointer;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
             }  #atras-btn:hover {
               background-color: #ff8c00;
             }
    </style>
    <script src="script.js"></script>
</body>
</html>