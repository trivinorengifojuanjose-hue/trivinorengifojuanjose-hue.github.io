<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>

 
    

    <link rel="stylesheet" href="Principalinicio.css">
    <script src="https://kit-staging.fontawesome.com/45c424d65e.js" crossorigin="anonymous"></script>
</head>
<style>
    
     #quienes-somos,
#redes-sociales {
    top: 1%; /* Ajusta este valor según tus necesidades */
}



body {
    background: #ffffff; /* Cambia el color de fondo a blanco */
}
          body {
           
            padding: 0;
            font-family: Arial, sans-serif;
        }

        section#inicio {
            position: relative;
            overflow: hidden;
            height: 100vh; 
        }

        #content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }

    

     
        video {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }

        img {
            width: 27%;
            height: auto;
            float: right;
            shape-outside: rectangle(0, 0, 0, 100%);
        }
        /* Importing Google font - Open Sans */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

* {
    
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body {
    background: #ecececdb;
}

.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    max-width: 1250px;
    margin: 100px auto;
    padding: 20px;
    gap: 20px;
}

.card-list .card-item {
    background: #fff;
    padding: 26px;
    border-radius: 8px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
    list-style: none;
    cursor: pointer;
    text-decoration: none;
    border: 2px solid transparent;
    transition: border 0.5s ease;
}

.card-list .card-item:hover {
    border: 2px solid #000;
}

.card-list .card-item img {
    width: 100%;
    aspect-ratio: 16/9;
    border-radius: 8px;
    object-fit: cover;
}

.card-list span {
    display: inline-block;
    background: #F7DFF5;
    margin-top: 32px;
    padding: 8px 15px;
    font-size: 0.75rem;
    border-radius: 50px;
    font-weight: 600;
}

.card-list .developer {
    background-color: #F7DFF5; 
    color: #B22485;
}   

.card-list .designer {
    background-color: #d1e8ff;
    color: #2968a8;
}

.card-list .editor {
    background-color: #d6f8d6; 
    color: #205c20;
}

.card-item h3 {
    color: #000;
    font-size: 1.438rem;
    margin-top: 28px;
    font-weight: 600;
}

.card-item .arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(-35deg);
    height: 40px;
    width: 40px;
    color: #000;
    border: 1px solid #000;
    border-radius: 50%;
    margin-top: 40px;
    transition: 0.2s ease;
}

.card-list .card-item:hover .arrow  {
    background: #000;
    color: #fff; 
}

@media (max-width: 1200px) {
    .card-list .card-item {
        padding: 15px;
    }
}

@media screen and (max-width: 980px) {
    .card-list {
        margin: 0 auto;
    }
}


        #servicios {
            background-color: white; 
       
        }

       
        #quienes-somos {
    height: 11s0vh; /* Ajusta la altura según tus necesidades */
    margin-top: 20px; /* Ajusta el margen superior según tus necesidades */
}
</style>

<body>
    <div class="vent" id="body"></div>
    <header class="header">
        <div class="nombre">
            <a href="#home" class="logo"> Stich Works </a>
        </div>
        <nav class="main-nav">
     <div class="logo">
        
        <span></span>
    </div>
    <ul>
    
     <li><a href="#Servicios">servicios</a></li>
     <li><a href="#quienes_somos">Quienes Somos?</a></li>
     <li><a href="#redes">Redes sociales</a></li>
     <li><a href="iniciodesesion.php">inicio sesion</a></li>

    
    </ul>

      
    
    
   
    
    
  
    
    
    </header>
    
       </header>
  
       <main> 
     
    <div class="boxtitu">
      
    </div>
   <br><br><br>  <br><br><br>
    <video id="miVideo" autoplay muted loop>
    <source src="fondoindex1.mp4" type="video/mp4">

</video>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    
    <h1 class="heading" id="Servicios">  </h1>
  
    <div class="card-list">
        <a  class="card-item">
            <img src="productos.jfif" alt="Card Image">
            <span class="developer">Productos</span>
            <h3>Prendas confeccionadas a medida: trajes, pantalones, camisas, chaquetas, faldas,vestidos,etc..</h3>
           
        </a>
        <a class="card-item">
            <img src="servicios.jpg" alt="Card Image">
            <span class="designer">Servicios sasteria</span>
            <h3>Todos los afiliados a nuestra pagina tendran servicios variados pero entre los mas detacados estan:arreglo de ropa,confeccion de ropa,creacion de ropa etc</h3>
            
        <a  class="card-item">
            <img src="arreglos.jfif" alt="Card Image">
            <span class="editor">Arreglos de ropa</span>
            <h3>Arreglos de trajes, pantalones, camisas, chaquetas, faldas, vestidos, etc. </h3>
            
        </a>
    </div>

    
    <h1 class="heading" id="quienes_somos"> ¿Quienes Somos?  </h1>
    <div class="tarjetas">
    
        <div class="card">
            <div class="face front">
                <img src="descarga (1).jfif" alt="">
                <h3>Warner David Mosquera</h3>
            </div>
            <div class="face back">
                <h3> Asistente tecnico</h3><br>
                <p>Se va a encargar de apoyar a los demás compañeros con sus diferentes objetivos para realizar y completar las metas de la empresa más rápido.</p>
             
            </div>
        </div>
        <!--CARD 1-->
    
        <div class="card">
            <div class="face front">
                <img src="83960092-hombre-sin-rostro-icono-de-perfil-ilustración-vectorial-diseño-gráfico.jpg" alt="">
                <h3>Juan Jose Triviño</h3>
            </div>
            <div class="face back">
                <h3>Programador</h3><br>
                <p>Se va a encargar de realizar la programación en las diferentes aplicaciones para crear la página web y también la aplicación.  </p><br>
               
            </div>
        </div>
        <!--CARD 2-->
    
        <div class="card">
            <div class="face front">
                <img src="descarga.jfif " alt="">
                <h3>Justin Jacob Meza</h3>
            </div>
            <div class="face back">
                <h3>Marketing Digital y comercial</h3><br>
                <p>Se va a encargar de hablar dar ideas y diferentes formas para obtener marketing en la empresa tanto como comercial y digital.</p><br>
               
            </div>
            
            
        </div>
        <!--CARD 3-->
    
        <div class="card">
            <div class="face front">
                <img src="descarga (2).jfif" alt="">
                <h3>Jhosep David Henado</h3>
            </div>
            <div class="face back">
                <h3>Diseñador grafico</h3><br>
                <p>Se va a dedicar a realizar y crear diferentes logotipos y también prototipos relacionados a la empresa y también a la ambientación de la página.
     </p><br>
               
            </div>
        </div>
    
    </div>
    
    </main>


        
       

   
<footer>
    
    <div class="animated">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
      
    </div>
    
    <div class="grupo-1">
        <div class="caja">
            <figure>
                <img src="logo aplicacion.png" alt="logo">
            </figure>
        </div>
        
        <style>
        .icons img {
            width: 30px; /* Ajusta el tamaño según tus preferencias */
            height: auto; /* Esto permite que la altura se ajuste automáticamente manteniendo la proporción original */
        }
    </style>
    
    <div class="caja" id="rayita">
        <p class="foot" id="redes">REDES SOCIALES</p>
    
        <ul class="icons">
            <li>
                <a href="https://www.tiktok.com/@innovation.system?_t=8hiY9wzp1Nu&_r=1" class="tiktok"> <!-- Reemplaza "your_username" con tu nombre de usuario de TikTok -->
                    <img src="tik tok.png" alt="TikTok"> <!-- Asegúrate de tener un archivo de imagen para TikTok (tiktok.png) -->
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/system_inovattion/" class="instagram">
                    <img src="ig.png" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/Systeminovation" class="twitter">
                    <img src="twiter.png" alt="Twitter">
                </a>
            </li>
        </ul>
    </div>
    
    
    
    <div class="caja" id="cajacontac">
        <p class="foot" id="c">CONTACTO</p>
        <div class="contacto">
            <br>
        <ul class="icons">
            <li>
                <a href="https://api.whatsapp.com/send/?phone=3053796931&text&type=phone_number&app_absent=0" class="whatsapp">
                    <img src="what.png" alt="WhatsApp">
                </a>
            </li>
    </ul><br>
            <p>3053796931</p>
        </div>
    </div>
    
    
    
    </footer>

</body>

</html>