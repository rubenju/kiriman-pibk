<aside id="sidebar" class="sidebar">

  <div class="header-logo mx-auto" >
    <a href="#" class="logo">
      <img src="/assets/img/posindonesia-logo.png" alt="logo">
      {{-- <span class="ms-2 align-self-center text-black">AKI - PIBK</span> --}}
    </a>
  </div>

  <ul class="sidebar-nav" id="sidebar-nav">
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>PIBK</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/entry">
            <i class="bi bi-plus-circle"></i><span>Entry Data</span>
          </a>
        </li>
        <li>
          <a href="/browse">
            <i class="bi bi-list-ul"></i><span>Browse Data</span>
          </a>
        </li>
      </ul>
    </li> --}}
    <div class="nav-item">
      <a href="/entry" class="nav-link collapsed {{ request()->is('entry', 'entry/*') ? 'active' : '' }}">
        <i class="ps-1 bi bi-plus-circle"></i><span>Entry Data</span>
      </a>
    </div>
    <div class="nav-item">
      <a href="/browse" class="nav-link collapsed {{ request()->is('browse') ? 'active' : '' }}">
        <i class="ps-1 bi bi-list-ul"></i><span>Browse Data</span>
      </a>
    </div>

  </ul>

</aside>