<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item">
        <img src="{{ asset('imgs/logo.png') }}" alt="Sysmonitor logo">
      </a>
      <a href="{{ route('sites.index') }}" class="nav-item is-tab is-hidden-mobile ">Sites</a>
      <a class="nav-item is-tab is-hidden-mobile is-active">Hosts</a>

    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
      <a class="nav-item is-tab is-hidden-tablet">Features</a>
      <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
      <a class="nav-item is-tab is-hidden-tablet">About</a>
      <a class="nav-item is-tab">Log out</a>
    </div>
  </div>
</nav>

