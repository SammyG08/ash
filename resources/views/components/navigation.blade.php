<header id="header" class="header fixed-top d-flex align-items-center navHeader">
    <div class="d-flex align-items-center justify-content-between">
        <a href="@guest
{{ route('landingPage') }} @endguest" class="logo d-flex align-items-center">
            <img src="favicon.png" alt="" class="logoImg">
            <span class="d-none d-lg-block companyName">Africa Skills Hub</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn icon"></i>
    </div><!-- End Logo -->
    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword" class="rounded-5">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <button class="displayModeToggle border-0 bg-transparent">
        <i class="bi bi-brightness-high-fill text-secondary modeIcon"></i>
    </button>

</header><!-- End Header -->
<aside id="sidebar" class="sidebar sideBar">
    <ul class="sidebar-nav" id="sidebar-nav ">
        <li class="nav-item mb-5 shadow-sm item">
            <a class="nav-link collapsed text-muted link {{ request()->routeIs('dashboard') ? ' fs-6 fw-bold' : '' }}"
                href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span class="iniName">Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Initiatives</li>
        <li class="nav-item shadow-sm">
            <a class="nav-link collapsed text-muted {{ request()->routeIs('ABLE') ? ' fs-6 fw-bold' : '' }}"
                href="{{ route('ABLE') }}">
                <i class="bi bi-unlock"></i>
                <span class="iniName">ABLE</span>
            </a>
        </li><!-- End ABLE Nav -->
        <li class="nav-item shadow-sm">
            <a class="nav-link collapsed text-muted{{ request()->routeIs('AgriFood') ? 'fs-6 fw-bold' : '' }}"
                href="{{ route('AgriFood') }}">
                <i class="bi bi-flower2"></i><span class="iniName">AgriFood</span>
            </a>
        </li><!-- End AgriFood Nav -->
        <li class="nav-item shadow-sm item">
            <a class="nav-link collapsed text-muted {{ request()->routeIs('CLIMATECARE') ? 'fs-6 fw-bold' : '' }}"
                href="{{ route('CLIMATECARE') }}">
                <i class="bi bi-tropical-storm"></i><span class="iniName">Climate Care</span>
            </a>
        </li><!-- End Climate Care Nav -->
        <li class="nav-item shadow-sm">
            <a class="nav-link collapsed text-muted {{ request()->routeIs('DigiSME') ? 'fs-6 fw-bold' : '' }}"
                href="{{ route('DigiSME') }}">
                <i class="bi bi-slack"></i><span class="iniName">DigiSME</span>
            </a>
        </li><!-- End DigiSME Nav -->
        <li class="nav-item shadow-sm">
            <a class="nav-link collapsed text-muted {{ request()->routeIs('DSKILLS') ? 'fs-6 fw-bold' : '' }}"
                href="{{ route('DSKILLS') }}">
                <i class="bi bi-unity"></i><span class="iniName">District Skills and Entrepreneurship
                    Roadshow</span>
            </a>
        </li><!-- End DSKILLS Nav -->
        <li class="nav-item shadow-sm">
            <a class="nav-link collapsed text-muted {{ request()->routeIs('GREENOVATE') ? 'fs-6 fw-bold' : '' }}"
                href="{{ route('GREENOVATE') }}">
                <i class="bi bi-rainbow"></i><span class="iniName">Greenovate</span>
            </a>
        </li><!-- End GREENOVATE Nav -->
        <li class="nav-heading mt-5">Controls</li>
        <li class="nav-item">
            <a class="nav-link collapsed text-muted" href="#">
                <i class="bi bi-box-arrow-left"></i><span class="iniName">Logout</span>
            </a>
        </li>

        {{-- <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="bi bi-question-circle"></i>
                  <span>F.A.Q</span>
              </a>
          </li><!-- End F.A.Q Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="bi bi-envelope"></i>
                  <span>Contact</span>
              </a>
          </li><!-- End Contact Page Nav --> --}}




    </ul>

</aside><!-- End Sidebar-->
