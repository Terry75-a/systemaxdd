<!DOCTYPE html>
<html lang="en">

<body>
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

  

    <section class="hero-section" id="precios">
 

  <div class="pricing-grid">
    <!-- Plan Básico -->
    <div class="price-card">
      <h3 class="plan-title">Básico</h3>
      <p class="plan-subtitle">Ideal para emprendedores</p>
      <div class="price-value">
        <span class="currency">$</span>299<span class="period">/mes</span>
      </div>
      <ul class="plan-features">
        <li>✅ Sitio web responsivo (hasta 5 páginas)</li>
        <li>✅ Optimización SEO básica</li>
        <li>✅ Hosting por 1 año</li>
        <li>✅ Formulario de contacto</li>
        <li>❌ E-commerce</li>
      </ul>
      <a href="" class="btn-outline">Empezar</a>
    </div>

    <!-- Plan Profesional -->
    <div class="price-card featured">
      <div class="badge">Más popular</div>
      <h3 class="plan-title">Profesional</h3>
      <p class="plan-subtitle">Perfecto para pequeñas empresas</p>
      <div class="price-value">
        <span class="currency">$</span>599<span class="period">/mes</span>
      </div>
      <ul class="plan-features">
        <li>✅ Diseño premium</li>
        <li>✅ E-commerce básico</li>
        <li>✅ Panel de administración</li>
        <li>✅ Soporte prioritario</li>
        <li>✅ Certificado SSL</li>
      </ul>
      <a href="" class="btn-primary">Contratar</a>
    </div>

    <!-- Plan Empresarial -->
    <div class="price-card">
      <h3 class="plan-title">Empresarial</h3>
      <p class="plan-subtitle">Para empresas en expansión</p>
      <div class="price-value">
        <span class="currency">$</span>1299<span class="period">/mes</span>
      </div>
      <ul class="plan-features">
        <li>✅ E-commerce avanzado</li>
        <li>✅ CRM y ERP integrados</li>
        <li>✅ App móvil básica</li>
        <li>✅ Soporte 24/7</li>
        <li>✅ Multilenguaje</li>
      </ul>
      <a href="" class="btn-outline">Contactar</a>
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


<script src="js/menu.js"></script>
  <script src="js/navbar-scroll.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/init.js"></script>
  <script src="js/home_dark.js"></script>
</body>
</html>
