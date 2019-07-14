  <?php
  /**
   * Peaked home page template.
   *
   */
  get_header(); ?>

  <body>
    <!-- Navigation -->
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/"><span id="peak">Peaked</span> Gaming</a>
        <div class="" id="navbarNav">
          <ul class="navbar-nav">
           <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
           <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
      	   <li class="nav-item"><a class="nav-link" href="/partner">Partners</a></li>
           <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
      	   <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          </ul>
        </div>

        <ul class="navbar-nav ml-auto">
          <li><a class="nav-link" href="#"><i class="fas fa-user"></i> Register </a></li>
          <li><a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login </a></li>
        </ul>
      </nav>
    </div>
    <?php get_footer(); ?>
  </body>
