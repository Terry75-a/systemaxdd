<!DOCTYPE html>
<html lang="en">

<body>

    <!-------------------->
    <!------ Navbar ------>
    <!-------------------->
    

  <!-------------------------->
  <!-- Mobile Dropdown Menu -->
  <!-------------------------->
  <div class="mobile-container" id="mobile-container">
    <a href="#inicio" class="mobile-menu-item" onclick="toggleMobileModal()">Inicio</a>
    <a href="#dsg" class="mobile-menu-item" onclick="toggleMobileModal()">DSG</a>
    <a href="#servicios" class="mobile-menu-item" onclick="toggleMobileModal()">Servicios</a>
    <a href="#precios" class="mobile-menu-item" onclick="toggleMobileModal()">Precios</a>
    
    <!-- Bottom Action Bar -->
    <div class="mobile-bottom-bar">
      <button class="mobile-theme-btn" id="mobile-theme-toggle" onclick="toggleTheme()">
        <span class="material-icons theme-icon">wb_sunny</span>
      </button>
      
      <button class="mobile-demo-btn">
        <span>Demo</span>
        
      </button>
      
      <button class="mobile-login-btn">
        <span class="login-text">Login</span>
      </button>
    </div>
  </div>

  <!---------------------->
  <!-------- Hero -------->
  <!---------------------->
  <section class="hero-principal" id="inicio">

    <div class="hero-container"> 
        <div class="hero-glass">
            <h3 class="hero-glass-text">Nuestra Historia</h3>
        </div>
        <div class="hero-content-dsg">
            <h1 class="hero-text-dsg-h1">DSG PERU TECHNOLOGY</h1>
            <p class="hero-text-dsg-p">Pioneros en soluciones tecnológicas empresariales en Per&uacute;</p>
            <p class="hero-text-dsg-p-2">Desde 2009, hemos transformado la manera en que las empresas peruanas gestionan sus</p>
            <p class="hero-text-dsg-p-3">operaciones, brindando software especializado que impulsa el crecimiento y la eficiencia.</p>
        </div>
        <video class="hero-video" width="400px" autoplay  loop muted style="border-radius: 15px;">
            <source src="<?= base_url('/videos/videoprueba.mp4')?> " type="video/mp4
            ">
        </video>

    </div>
  </section>

  <!----------------------------->
  <!-------- Hero-vision -------->
  <!----------------------------->
  <section class="hero-vision">

    <div class="hero-vision-glass">
        <h3 class="hero-vision-glass-text">Nuestra visión</h3>
        <p class="hero-text-vision-p-1">Ser la empresa líder en soluciones tecnológicas empresariales en Perú y Latinoamérica, reconocida por nuestra innovación, calidad de servicio y compromiso con el éxito de nuestros clientes.</p>
        
    </div>

    <div class="hero-mision-glass">
        <h3 class="hero-mision-glass-text">Nuestra misión</h3>
        <p class="hero-text-mision-p">Democratizar el acceso a la tecnología empresarial en Perú, proporcionando soluciones de software accesibles, potentes y fáciles de usar que permitan a las empresas de todos los tamaños competir en la era digital.</p>
    </div>

  </section>

  <!----------------------->
  <!----- HistoriaDSG ----->
  <!----------------------->
  <section class="historia-dsg" id="dsg">

    
      <!-- texto -->
    <div class="texto-historia-dsg">
        <h2 class="texto-historia-dsg-h2">Nuestro recorrido</h2>
    </div>

    <div class="glass-container-dsg">

        <div class="container-historia-dsg">
          <!-- card-1 -->
        <div class="card-glas-1">
            <h4 class="text-card-glas-1">Los Inicios</h4>
            <p class="text-cards-glass-1-p">DSG PERU TECHNOLOGY nace con la visión de transformar la gestión empresarial en Perú a través de la tecnología.</p>
        </div>
        <!-- card-btn(fecha)-1 -->
          <div class="glass-fecha-1">
            <h4 class="text-card-glas-fecha-1">2009</h4>
          </div>


          <!-- card-2 -->
          <div class="card-glas-2">
            <h4 class="text-card-glas-2">Expansión de Servicios</h4>
            <p class="text-cards-glass-2-p">Lanzamos nuestro primer sistema especializado para restaurantes, revolucionando la industria gastronómica peruana.</p>
          </div>
        <!-- card-btn(fecha)-2 -->
          <div class="glass-fecha-2">
            <h4 class="text-card-glas-fecha-2">2012</h4>
          </div>

          <!-- card-3 -->
          <div class="card-glas-3">
            <h4 class="text-card-glas-3">Sector Farmacéutico</h4>
            <p class="text-cards-glass-3-p">Desarrollamos soluciones especializadas para boticas y farmacias, cumpliendo con todas las normativas DIGEMID.</p>
          </div>
        <!-- card-btn(fecha)-3 -->
          <div class="glass-fecha-3">
            <h4 class="text-card-glas-fecha-3">2015</h4>
          </div>


          <!-- card-4-->
          <div class="card-glas-4">
            <h4 class="text-card-glas-4">Tecnología en la Nube</h4>
            <p class="text-cards-glass-4-p">Migramos a soluciones cloud, ofreciendo mayor seguridad, escalabilidad y acceso remoto a nuestros clientes.</p>
          </div>
        <!-- card-btn(fecha)-4 -->
          <div class="glass-fecha-4">
            <h4 class="text-card-glas-fecha-4">2018</h4>
          </div>

          <!-- card-5-->
          <div class="card-glas-5">
            <h4 class="text-card-glas-5">Inteligencia Artificial</h4>
            <p class="text-cards-glass-5-p">Incorporamos IA y machine learning para ofrecer analytics predictivos y automatización inteligente.</p>
          </div>
        <!-- card-btn(fecha)-5 -->
          <div class="glass-fecha-5">
            <h4 class="text-card-glas-fecha-5">2024</h4>
          </div>

        </div>

    </div>

  </section>


  <!------------------------------------------------------->
  <!--------------------- Carrusel ------------------------>
  <!------------------------------------------------------->

  <section class="container-carrusel">
          <!-- carrusel-1 -->
        <div class="carousel-basic">
          <div class="carousel-track">
          <div class="carousel-slide">
            <div class="card-minimal">
              <div class="glass-img">
                <img class="img" src="<?= base_url('/images/carrusel/imagen1.jpg')?>">
              </div>
            </div>
          </div>
          <div class="carousel-slide">
            <div class="card-minimal">
              <img class="img-2" src="<?= base_url('/images/carrusel/imagen2.jpg')?>">
            </div>
          </div>
          <div class="carousel-slide">
            <div class="card-minimal">
              <img class="img-3" src="<?= base_url('/images/carrusel/imagen3.jpg')?>">
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="glass-section-qizz">
    <div class="container-text">
      <h1 class="tex-quizz">¿Por qué DSG PERU TECHNOLOGY?</h1>
    </div>

    <div class="glass-quizz">
      <div class="text-quizz">
        <h1 class="p-quizz">Conocimiento Local</h1>
        <h3 class="h3-quizz">Entendemos profundamente el mercado peruano, sus regulaciones, necesidades específicas y desafíos Únicos de cada industria.</h3>
      </div>
    </div>
  </section>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('css/index/components/whatsapp-button.css') ?>">
  <div class="whatsapp-float">
    <a href="https://wa.me/51903148583?text=%C2%A1Hola!%20👋%20Estoy%20interesado(a)%20en%20los%20servicios%20de%20DSG%20Per%C3%BA%20Technology%20SRL.%20Me%20gustar%C3%ADa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20soluciones%20de%20facturaci%C3%B3n%20electr%C3%B3nica,%20alquiler%20de%20sistemas%20inform%C3%A1ticos,%20consultor%C3%ADa%20TI,%20outsourcing%20o%20desarrollo%20de%20software%20a%20medida.%20%C2%A1Gracias!" 
    class="whatsapp-button" 
    target="_blank" 
    rel="noopener noreferrer"
    aria-label="Chatea con nosotros por WhatsApp">
      <i class="fab fa-whatsapp whatsapp-icon"></i>
      <span class="whatsapp-badge">1</span>
      <span class="whatsapp-tooltip">¿Necesitas ayuda?</span>
    </a>
  </div>

  <!--------------------->
  <!-- Facebook Button -->
  <!--------------------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <div class="facebook-float">
    <a href="https://www.facebook.com/dsgperu/?locale=es_LA" 
      class="facebook-button" 
      target="_blank" 
      rel="noopener noreferrer"
      aria-label="Visita nuestra página de Facebook">
      <i class="fab fa-facebook-f facebook-icon"></i>
      <span class="facebook-badge">1</span>
      <span class="facebook-tooltip">¡Síguenos en Facebook!</span>
    </a>
  </div>




  <!--------------------->
  <!------ Scripts ------>
  <!--------------------->
  <script src="js/menu.js"></script>
  <script src="js/navbar-scroll.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/init.js"></script>
  <script src="js/home_dark.js"></script>
  <!-- carrusel -->
   <script src="js/dsg_carrusel/carrusel.js"></script>
</body>
</html>