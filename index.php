<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stich Works</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mapageneral.css">
    <link rel="stylesheet" href="mapageneral2.css">

</head>
<body>
    <style>  
    .Maps{
    position: relative;
    width: 600px;
    height: 500px;
    background: #fff;
}

.Maps iframe{
    width: 100%;
    height: 100%;
}
  .caja#rayita {
        text-align: center;
    }

    .icons {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
    }

    .icons li {
        margin: 0 10px; /* Espaciado entre los íconos */
    }

    .icons img {
        width: 30px;
        height: auto;
        transition: filter 0.3s ease; /* Agregamos una transición al filtro */
    }

    .icons a:hover img {
        filter: invert(1); /* Cambiamos el color al hacer hover */
    }


       .grupo-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
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
background: #ffffff;
margin-top: 32px;
padding: 8px 15px;
font-size: 0.75rem;
border-radius: 50px;
font-weight: 600;
}

.card-list .developer {
background-color: #ffffff; 
color: #B22485;
}   

.card-list .designer {
background-color: #ffffff;
color: #2968a8;
}

.card-list .editor {
background-color: #ffffff; 
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

ul{
	
    display: flex;
    margin-right: 10px;
    }
    ul li a{
    
    display: inline-block;	
    padding: 20px 40px;
    font-size: 1.3rem;
    color: #black;
    }
    ul li a:hover{
        background: #ee9d1b ;
        border: 2px solid #fff;
        padding: 17px 35px;
    }
    .miVideo{
    position: relative;
    top: -30px
}
.text-1,
        .text-3 {
            color: #fff; /* Texto blanco */
        }
       
        .icons img {
                            width: 30px; /* Ajusta el tamaño según tus preferencias */
                            height: auto; /* Esto permite que la altura se ajuste automáticamente manteniendo la proporción original */
                        }
                        .caja {
            color: white; /* Color de texto blanco */
        }

        #redes,
        #c {
            color: black; /* Color de texto blanco */
        }
     
        .white-footer {
        background-color: white;
    }
    .menu a {
        color: black;
    }
    </style>
 
  
     


          

    <nav class="navbar">
          
    
    <div class="max-width">
   
 <div class="logo"><a href="#">Stich<span>Works.</span></a></div>
            <ul class="menu">
            <li><a href="iniciosesionadmi.php">Resgitro Administrador</a>
           
                <li><a href="#about" class="menu-btn">Mapa</a></li>
                <li><a href="#services" class="menu-btn">Servicios</a></li>
               
                <li><a href="#teams" class="menu-btn">¿Quienes somos?</a></li>
                <li><a href="#contact" class="menu-btn">Contactanos</a></li>
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
    </div>
</nav>

            
         
    
<section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hola este es Stich Works</div>
                <div class="text-2"></div>
                <div class="text-3">Inicia sesion  <span class="typing"></span></div>
                <a href="iniciodesesion.php">Inicia sesion</a>
            </div>
        </div>
    </section>
    <!-- home section start -->
    
  
    <video id="miVideo" autoplay muted loop>
    <source src="fondoindex1.mp4" type="video/mp4">

</video>
<style>
    .title {
        color: black;
    }
</style></style>
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Servicios</h2>
    <div class="card-list">
        <a  class="card-item">
            <img src="productos.jfif" alt="Card Image">
            <span class="developer">Productos</span>
            <h3>Prendas confeccionadas a medida: trajes, pantalones, camisas, chaquetas, faldas,vestidos, estampados etc..</h3>
           
        </a>
        <a class="card-item">
            <img src="servicios.jpg" alt="Card Image">
            <span class="designer">Servicios sasteria</span>
            <h3>Todos los afiliados a nuestra pagina tendran servicios variados pero entre los mas detacados estan:arreglo de ropa,confeccion de ropa,creacion de ropa, estampados. etc</h3>
            
        <a  class="card-item">
            <img src="arreglos.jfif" alt="Card Image">
            <span class="editor">Arreglos de ropa</span>
            <h3>Arreglos de trajes, pantalones, camisas, chaquetas, faldas, vestidos, . </h3>
            
        </a>
    </div>
</section>
   <!-- skills section start -->
   <section class="about" id="about">
    <div class="max-width">
        <h2 class="title">Mapa </h2>
        <div class="about-content">
            <div class="column Maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16289433.401729723!2d-83.39814111764278!3d4.609691158847657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e15a43aae1594a3%3A0x9a0d9a04eff2a340!2sColombia!5e0!3m2!1ses!2sco!4v1666581552646!5m2!1ses!2sco" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
            <div class="column Form">
                <main>
                    <div class="contact-form" style="max-width: 300px; margin-left: auto;">
              
                        <form action="iniciodesesion.php">
                            <input type="text" name="subject" id="subject" class="contact-form-txt" required placeholder="Subject" style="width: 100%;">
                            <input type="text" name="nombre" id="name" class="contact-form-txt" require placeholder="Name" style="width: 100%;">
                            <input type="email" name="correo" id="email" class="contact-form-txt" required placeholder="Email" style="width: 100%;">
                            <textarea placeholder="Direccion" name="direccion" id="direccion" class="contact-form-txtarea" style="width: 100%;"></textarea>
                            <button  type="submit" class="contact-form-btn">Enviar</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
</section>

<br><br>



    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Equipó</h2>
            <div class="tarjetas">
    
        
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
            
                
            
            </main>
<br><br><br><br><br><br><br><br>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contactanos</h2>
            <div class="contact-content">
                <footer class="white-footer">
    
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
                    <p  style="color: white;">3053796931</p>
                        </div>
                    </div>
                    
                    
                    
                    </footer>
    <!-- footer section start -->
    

    <script src="script2.js"></script>
</body>
</html>
