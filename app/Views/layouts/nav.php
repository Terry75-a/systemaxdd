<!------------>
  <!-- navbar -->
  <!------------>
  
    <link rel="stylesheet" href="<?= base_url('css/index/components/navbar.css') ?>">
  
  
  
  <nav class="navbar">
    <a href="" class="logo">
      <div class="logo-circle">
        <img src="<?= base_url('images/logo_3.1.png') ?>" alt="DSG Logo">
      </div>
      <span class="logo-text">DSG PERU TECHNOLOGY</span>
    </a>
    
    <ul class="nav-links" id="navLinks">
      <li><a href="<?= base_url('/')?>" class="nav-link" onclick="closeMenu()">Inicio</a></li>
      <li><a href="<?= base_url('dsg')?>" style="text-decoration:" class="nav-link">DSG</a></li>
      <li><a href="#servicios" class="nav-link services" onclick="closeMenu()">Servicios</a></li>
      <li><a href="<?= base_url('precio')?>" class="nav-link" onclick="closeMenu()">Precios</a></li>
    </ul>

    <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
      <span class="material-icons theme-icon">wb_sunny</span>
    </button>

    <button class="demo-btn">
        <span class="demo-text">Demo</span>
        
    </button>
    

    <button class="login-btn">
      <div class="login-text">
        <p class="login-text-1">Login</p>
      </div>
  
    </button>

    <!-- Mobile Menu Toggle - Positioned correctly with CSS -->
    <button class="mobile-menu-toggle" id="mobile-menu-toggle">
      <span class="material-icons">menu</span>
    </button>
  </nav>