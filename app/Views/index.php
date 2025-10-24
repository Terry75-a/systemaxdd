<!DOCTYPE html>
<html lang="es">

<link rel="shortcut icon" href="<?= base_url('images/logo_3.1.png')?>"> 
<body>

  

  <!-- Mobile Dropdown Menu -->
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
        <span class="material-icons">arrow_forward</span>
      </button>
      
      <button class="mobile-login-btn">
        <span class="login-text">Login</span>
        <span class="material-icons arrow-icon">arrow_forward</span>
      </button>
    </div>
  </div>

  <!------------------>
  <!-- Hero Section -->
  <!------------------>
  <section class="hero-section">
    <div class="hero-content">
      <!-- Left Column Container -->
      <div class="hero-left-column">
        <!-- Badge outside the card -->
        <div class="hero-badge">
          <span>Tecnología de vanguardia</span>
        </div>
        
        <!-- Main Content Card -->
        <div class="hero-main">
          <h1 class="hero-title">
            Revoluciona tu <span class="highlight">Negocio</span><br>
            con Software<br>
            Inteligente
          </h1>
          
          <p class="hero-description">
            Soluciones tecnológicas especializadas para restaurantes,<br>
            boticas, minimarkets y más. Automatiza procesos, optimiza<br>
            operaciones y acelera el crecimiento de tu empresa.
          </p>
        </div>
      </div>
      
      <!-- Right Column - Floating Stats -->
      <div class="hero-stats-column">
        <!-- Mobile Stats Grid Container -->
        <div class="mobile-stats-grid">
          <!-- Green pill stat -->
          <div class="stat-pill green">
            <div class="stat-number">500+</div>
            <div class="stat-label">Empresas Atendidas</div>
          </div>
          
          <!-- Light card stat -->
          <div class="stat-card light">
            <div class="stat-number">15+</div>
            <div class="stat-label">Años de Experiencia</div>
          </div>
          
          <!-- Dark card stat -->
          <div class="stat-card dark">
            <div class="stat-number">99.9%</div>
            <div class="stat-label">Uptime Garantizado</div>
          </div>
        </div>
        
        <!-- Bottom buttons container -->
        <div class="buttons-container">
          <div class="stats-actions">
            <button class="stats-btn demo-btn">
              <span>Demo</span>
              <span class="material-icons">arrow_forward</span>
            </button>
            
            <button class="stats-btn services-btn">
              <span>Servicios</span>
              <span class="material-icons">arrow_forward</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---------------------->
  <!-- Services Section -->
  <!---------------------->
  <section class="services-section">
    <div class="services-container">
      <!-- Services Card Container -->
      <div class="services-main-card">
        <!-- Section Header -->
        <div class="services-header">
          <span class="services-badge">Servicios Populares</span>
          <h2 class="services-title">Soluciones Especializadas para cada Industria</h2>
          <p class="services-description">
            Desarrollamos software a medida que se adapta<br>
            perfectamente a las necesidades específicas de tu<br>
            sector.
          </p>
        </div>

        <!-- Services Content -->
        <div class="services-content">
          <!-- Left Column - Video -->
          <div class="services-video-column">
            <div class="video-container" data-video-url="<?= base_url('videos/videoooo.mp4')?>">
              <video src=<?= base_url('videos/videoooo.mp4')?> 
                     style="width: 100%; height: 100%; object-fit: cover; border-radius: 45px; background: transparent;"
                     controls 
                     autoplay 
                     muted 
                     loop>
              </video>
            </div>
            <div class="video-info">
              <p class="video-label">Atendemos a nivel nacional</p>
              <button class="services-cta-btn">
                <span>Ver todos los servicios</span>
                <span class="material-icons">arrow_forward</span>
              </button>
            </div>
          </div>

          <!-- Right Column - Service Cards -->
          <div class="services-cards-column">
            <!-- Restaurant System Card -->
            <div class="service-card restaurant-card">
              <div class="card-image">
                <img src="<?= base_url('images/restaurant.png')?>" alt="Sistema para Restaurante">
              </div>
              <div class="card-content">
                <h3 class="card-title">SISTEMA PARA RESTAURANTE</h3>
                <p class="card-subtitle">Con Facturación Electrónica</p>
                <div class="card-features">
                  <div class="feature-item">
                    <span class="material-icons">restaurant</span>
                    Facturación
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">inventory</span>
                    Control de Inventario
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">table_restaurant</span>
                    Gestión de Mesas
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">analytics</span>
                    Reportes en Tiempo Real
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">delivery_dining</span>
                    Integración con Delivery
                  </div>
                </div>
                <div class="card-actions">
                  <button class="card-btn demo-btn">
                    <span>Demo</span>
                    <span class="material-icons">play_arrow</span>
                  </button>

                      <a href="https://wa.me/51903148583?text=%C2%A1Hola!%20👋%20Estoy%20interesado(a)%20en%20los%20servicios%20de%20DSG%20Per%C3%BA%20Technology%20SRL.%20Me%20gustar%C3%ADa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20soluciones%20de%20facturaci%C3%B3n%20electr%C3%B3nica,%20alquiler%20de%20sistemas%20inform%C3%A1ticos,%20consultor%C3%ADa%20TI,%20outsourcing%20o%20desarrollo%20de%20software%20a%20medida.%20%C2%A1Gracias!" target="_blank">
                        <button class="card-btn contact-btn">
                    <span>Contactanos</span>
                    <span class="material-icons">phone</span>
                    
                  </button>
                    </a>
                </div>
              </div>
            </div>

            <!-- Pharmacy System Card -->
            <div class="service-card pharmacy-card">
              <div class="card-image">
                <img src="<?= base_url('images/botica.png')?>" alt="Sistema para Botica/Farmacia">
              </div>
              <div class="card-content">
                <h3 class="card-title">SISTEMA PARA BOTICA/FARMACIA</h3>
                <p class="card-subtitle">Con Facturación Electrónica</p>
                <div class="card-features">
                  <div class="feature-item">
                    <span class="material-icons">medication</span>
                    Módulo de Ventas
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">vaccines</span>
                    Control de Medicamentos
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">receipt_long</span>
                    Gestión de Recetas
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">schedule</span>
                    Control de Vencimientos
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">biotech</span>
                    Reportes Farmacéuticos
                  </div>
                </div>
                <div class="card-actions">
                  <button class="card-btn demo-btn">
                    <span>Demo</span>
                    <span class="material-icons">play_arrow</span>
                  </button>
                  <a href="https://wa.me/51903148583?text=%C2%A1Hola!%20👋%20Estoy%20interesado(a)%20en%20los%20servicios%20de%20DSG%20Per%C3%BA%20Technology%20SRL.%20Me%20gustar%C3%ADa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20soluciones%20de%20facturaci%C3%B3n%20electr%C3%B3nica,%20alquiler%20de%20sistemas%20inform%C3%A1ticos,%20consultor%C3%ADa%20TI,%20outsourcing%20o%20desarrollo%20de%20software%20a%20medida.%20%C2%A1Gracias!" target="_blank"> 
                    <button class="card-btn contact-btn">
                    <span>Contactanos</span>
                    <span class="material-icons">phone</span>
                  </button>
                  </a>
                  
                </div>
              </div>
            </div>

            <!-- Minimarket System Card -->
            <div class="service-card minimarket-card">
              <div class="card-image">
                <img src="<?= base_url('images/minimark.png')?>" alt="Sistema para Minimarket">
              </div>
              <div class="card-content">
                <h3 class="card-title">SISTEMA PARA MINIMARKET</h3>
                <p class="card-subtitle">Con Facturación Electrónica</p>
                <div class="card-features">
                  <div class="feature-item">
                    <span class="material-icons">point_of_sale</span>
                    Punto de Venta
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">inventory_2</span>
                    Control de Stock
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">local_shipping</span>
                    Gestión de Proveedores
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">qr_code</span>
                    Código de Barras
                  </div>
                  <div class="feature-item">
                    <span class="material-icons">trending_up</span>
                    Análisis de Ventas
                  </div>
                </div>
                <div class="card-actions">
                  <button class="card-btn demo-btn">
                    <span>Demo</span>
                    <span class="material-icons">play_arrow</span>
                  </button>
                  <a href="https://wa.me/51903148583?text=%C2%A1Hola!%20👋%20Estoy%20interesado(a)%20en%20los%20servicios%20de%20DSG%20Per%C3%BA%20Technology%20SRL.%20Me%20gustar%C3%ADa%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20soluciones%20de%20facturaci%C3%B3n%20electr%C3%B3nica,%20alquiler%20de%20sistemas%20inform%C3%A1ticos,%20consultor%C3%ADa%20TI,%20outsourcing%20o%20desarrollo%20de%20software%20a%20medida.%20%C2%A1Gracias!" target="_blank"> 
                     <button class="card-btn contact-btn">
                    <span>Contactanos</span>
                    <span class="material-icons">phone</span>
                  </button>

                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---------------------->
  <!-- Features Section -->
  <!---------------------->
  <section class="features-section">
      <div class="features-header">
          <h3 class="section-title">Características</h3>
      </div>
      <div class="features-container">
          <div class="features-content">
              <h2 class="features-title">¿Por qué elegir DSG PERU?</h2>
              <ul class="features-list">
                  <li class="features-item">
                      <div class="features-icon security"></div>
                      <div class="features-text">
                          <h3 class="features-heading">Seguridad Garantizada</h3>
                          <p class="features-description">Protección de datos con encriptación de nivel bancario y copias de seguridad automáticas.</p>
                      </div>
                  </li>
                  <li class="features-item">
                      <div class="features-icon mobile"></div>
                      <div class="features-text">
                          <h3 class="features-heading">Acceso Móvil</h3>
                          <p class="features-description">Controla tu negocio desde cualquier lugar con nuestras aplicaciones móviles nativas.</p>
                      </div>
                  </li>
                  <li class="features-item">
                      <div class="features-icon support"></div>
                      <div class="features-text">
                          <h3 class="features-heading">Soporte 24/7</h3>
                          <p class="features-description">Equipo técnico especializado disponible las 24 horas para resolver cualquier inconveniente.</p>
                      </div>
                  </li>
                  <li class="features-item">
                      <div class="features-icon implementation"></div>
                      <div class="features-text">
                          <h3 class="features-heading">Implementación Rápida</h3>
                          <p class="features-description">Puesta en marcha en menos de 48 horas con capacitación completa incluida.</p>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="features-image">
              <img src="<?= base_url('images/features.png')?>" alt="DSG Peru Dashboard">
          </div>
      </div>
  </section>

  <!-- Testimonial Carousel Section -->
  <section class="testimonial-section">
    <div class="container">
      <div class="section-header">
        <h2>Lo que dicen nuestros clientes</h2>
        <p>Testimonios de empresas que han transformado su negocio con nosotros</p>
      </div>
      
      <div class="carousel-multi" id="testimonial-carousel-multi">
        <div class="carousel-track">
          <!-- Slide 1 -->
          <div class="carousel-slide">
            <div class="testimonial-card">
              <img src="<?= base_url('images/pollos.png?')?>" alt="Juan" class="testimonial-logo">
              <p class="testimonial-text">"DSG Perú nos ayudó a crecer rápido. ¡Excelente equipo!"</p>
              <div class="testimonial-name">Juan Pérez</div>
            </div>
            <div class="testimonial-card">
              <img src="<?= base_url('images/vifarma.png')?>" alt="María" class="testimonial-logo">
              <p class="testimonial-text">"El soporte es inmediato y muy profesional."</p>
              <div class="testimonial-name">María López</div>
            </div>
            <div class="testimonial-card">
              <img src="<?= base_url('images/farma.png')?>" alt="Carlos" class="testimonial-logo">
              <p class="testimonial-text">"La solución personalizada fue perfecta para mi negocio."</p>
              <div class="testimonial-name">Carlos Ruiz</div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-slide">
            <div class="testimonial-card">
              <img src="<?= base_url('images/drogueria.png')?>" alt="Ana" class="testimonial-logo">
              <p class="testimonial-text">"Muy recomendados para cualquier empresa."</p>
              <div class="testimonial-name">Ana Torres</div>
            </div>
            <div class="testimonial-card">
              <img src="<?= base_url('images/market.png')?>" alt="Luis" class="testimonial-logo">
              <p class="testimonial-text">"El sistema es fácil de usar y muy completo."</p>
              <div class="testimonial-name">Luis Mendoza</div>
            </div>
            <div class="testimonial-card">
              <img src="<?= base_url('images/huellitas.png')?>" alt="Sofía" class="testimonial-logo">
              <p class="testimonial-text">"La capacitación fue clara y rápida."</p>
              <div class="testimonial-name">Sofía Ramírez</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contactos -->
  <section class="contact-section" id="contact">
  <!-- Píldora superior -->
  <div class="contact-badge">Información de contacto</div>

  <!-- Texto introductorio -->
  <p class="contact-intro">
    Contáctanos hoy y descubre cómo podemos ayudarte a optimizar tus operaciones y aumentar tus ventas.
  </p>

  <!-- Formulario -->
  <div class="contact-card glass">
    <h2>Contáctanos</h2>
    <p class="contact-sub">
      ¿Tienes alguna pregunta o comentario? Estamos aquí para ayudarte. Completa el formulario y nos pondremos en contacto contigo lo antes posible.
    </p>

    <form class="contact-form" action="<?= base_url('enviar') ?>" method="post">
  <div class="form-row">
    <input type="text" placeholder="Nombre Completo *" name="nombre" required>
    <input type="email" placeholder="Correo Electrónico *" name="correo" required>
  </div>
  <div class="form-row">
    <input type="text" placeholder="Empresa" name="empresa">
    <input type="number" maxlength="9" placeholder="Teléfono" name="telefono">
  </div>
  <input type="text" placeholder="Asunto *" required name="asunto">
  <textarea placeholder="Mensaje *" name="mensaje" required></textarea>

  <button type="submit" class="btn-submit">
    Enviar <span class="arrow">→</span>
  </button>
</form>

  </div>
   <!-- Map Modal -->
  <div id="map-modal" class="modal-overlay">
    <div class="map-modal-content">
      <span class="close-map-modal">&times;</span>
      <iframe id="map-iframe" src="" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <!-- dialog 1 -->
  <div class="dialog-overlay"></div>
  <dialog>
    <button id="close">close</button>
    <p><a href="#">51+ 999 999 999</a></p>
    <p><a href="#">51+ 999 999 999 </a></p>
    <span>Lunes a Sábado: 9:00 AM - 6:00 PM</span>
  </dialog>
  <button class="show" id="show">Telefono</button>

  <!-- dialog 2 -->
  <div class="dialog-overlay dialog-2-overlay"></div>
  <dialog id="dialog-2">
    <!-- selva -->
    <h1>Pucallpa</h1>
    <p>Av. Tupac Amaru 211, Pucallpa, Perú</p>
    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0019371229296!2d-74.55919533199062!3d-8.372769560522263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bd22a238dd3f%3A0xdb55cc6384f0f0e9!2sDSG%20Peru%20Technology!5e0!3m2!1ses-419!2spe!4v1754667384753!5m2!1ses-419!2spe" class="map-link" target="_blank" rel="noopener noreferrer">Ver</a>
    <button class="close-dialog-2">close</button>

    <!-- costa -->
     <h1>Lima</h1>
     <p>Av. Ejército Cdra. 4, Miraflores, Lima</p>
     <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.955607543134!2d-77.05114360321042!3d-12.115189999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c830bf7ffb31%3A0xf66e12ebb4f2e969!2sAvenida%20Del%20Ej%C3%A9rcito!5e0!3m2!1ses-419!2spe!4v1755616153605!5m2!1ses-419!2spe" class="map-link" target="_blank" rel="noopener noreferrer">Ver</a>

  </dialog>
  <button class="show-dialog-2" id="show-dialog-2">Ubiquenos</button>

  <!-- dialog-3 -->
  <div class="dialog-overlay dialog-3-overlay"></div>
  <dialog id="dialog-3">
    <button class="close-dialog-3">close</button>
    <h2>Contacto por Correo</h2>
    <div class="email-links">
      <a href="mailto:info@example.com" class="email-link">info@example.com</a>
      <a href="mailto:support@example.com" class="email-link">support@example.com</a>
    </div>
  </dialog>
  <button class="show-dialog-3" id="show-dialog-3">Correo</button>

  
  </section>

   <!-- Footer -->
    

  <!--------------------->
  <!-- WhatsApp Button -->
  <!--------------------->
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
  <script src="<?= base_url('js/carrusel.js')?>"></script>
  <script src="<?= base_url('js/counter.js')?>"></script>
  <script src="<?= base_url('js/menu.js')?>"></script>
  <script src="<?= base_url('js/navbar-scroll.js')?>"></script>
  <script src="<?= base_url('js/theme.js')?>"></script>
  <script src="<?= base_url('js/init.js')?>"></script>
  <script src="<?= base_url('js/contact_infor.js')?>"></script>
  <script src="<?= base_url('js/dialog.js')?>"></script>
  <script src="<?= base_url('js/home_dark.js')?>"></script>
  <script>
    // Initialize navbar text color on page load
    document.addEventListener('DOMContentLoaded', function() {
      updateNavbarTextColor();
    });
  </script>
  
</body>
</html>