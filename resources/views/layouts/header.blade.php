
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">SumbarBTS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/dashboard" class="@yield('navbar')">Beranda<br></a></li>
          <li><a href="/peta" class="@yield('navbar')">Peta</a></li>
          <li><a href="/data" class="@yield('navbar')">Data BTS</a></li>
          <li><a href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
