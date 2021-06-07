<header>

<section class="navbar">
  <div class="container">
    <a class="navbar__logo-wrapper brand">
      <img src="@asset('images/ocelot-logo.svg')" alt="{{ get_bloginfo('name', 'display') }}" class="navbar__logo">
    </a>
    
    <nav class="nav-primary main-menu d-none d-lg-block">
      @if ( has_nav_menu('primary_navigation') )
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled d-flex']) !!}
      @endif
    </nav>

    <div id="menu-toggle" class="d-lg-none">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</section>

<nav id="menu-mobile">
  @if ( has_nav_menu('primary_navigation') )
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']) !!}
  @endif
</nav>

</header>