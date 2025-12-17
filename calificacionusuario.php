<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    
    <link rel="stylesheet" href="sastrerias.css">
    
    
</head>
<body>
  <br><br>
<h1 style="color: white; position: absolute; top: 0; left: 0; width: 100%; text-align: center;">Reseñas</h1>


<a href="administracion.php" id="atras-btn">Atrás</a>
<style>
  

      
body{
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url('administrador/fondocalificacion.jpg'); /* Agrega la URL de tu imagen */
  background-size: cover; /* Ajusta el tamaño de la imagen para cubrir toda la página */
  background-repeat: no-repeat; /* Evita que la imagen se repita */
  background-attachment: fixed; /* Fija la imagen en la ventana del navegador */
}

  #atras-btn {
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
        }

        #atras-btn:hover {
            background-color: #ff8c00;
        }
</style>
  <section>

    
    
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">




      <?php
                                //visualizacion
$versastrerias = "select * from reseñas";
$queryresultado = mysqli_query($servidor,$versastrerias);
  
while ($regsastrerias = mysqli_fetch_array($queryresultado)){ 
  
$idrese=$regsastrerias['idsastreria'];


  
                                ?>
                                
                                  
                                    

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
             <img src="logoempresa.jpg" alt=""> 
            </div>
            
            <div class="media-icons">
            </div>

            <div class="name-profession">
              <span class="name">
                <?php 
                $versastreriasid = "select * from registrosastreria where id='$idrese'";
                $queryresultadoid = mysqli_query($servidor,$versastreriasid);
                  
                while ($regsastreriasid = mysqli_fetch_array($queryresultadoid)){ 
                  
                  
                
                
                echo $regsastreriasid['nombresastreria'];
              
                }
              ?>
              
              </span>
              <span class="profession">Reseña: <?php echo $regsastrerias['nombre'];?></span>
            </div>

            <div class="rating">
            </div>

            <div class="button">
              <p><?php echo $regsastrerias['comentario'];?></p>
            </div>
          </div>
        </div>


        <?php
}

                                  ?>









        
       

              
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>

  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>
</html>