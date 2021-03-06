<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{asset('https://demos.creative-tim.com/material-dashboard/pages/dashboard')}} " target="_blank">
        <img src="{{asset('admin/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">{{ config('app.name', 'Laravel') }}</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="{{asset('admin/assets/img/team-2.jpg')}}" class="navbar-brand-img h-100 rounded-circle" alt="main_logo">
        <span class="ms-1 text-white">{{ Auth::user()->name }}</span>
      </a>
    </li>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="/">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dasbor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/meeting">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">calendar_month</i>
            </div>
            <span class="nav-link-text ms-1">Ruang Meeting</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/pengumuman">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Pengumuman</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/modul">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">bookmark</i>
            </div>
            <span class="nav-link-text ms-1">Modul Saya</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/tugas">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">note</i>
            </div>
            <span class="nav-link-text ms-1">Tugas Saya</span>
          </a>
        </li>
        @if (auth()->user()->level=="admin")
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Halaman Admin</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/siswa">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">emoji_people</i>
              </div>
              <span class="nav-link-text ms-1">Daftar Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/guru">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">group</i>
              </div>
              <span class="nav-link-text ms-1">Daftar Guru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/pegawai">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">people</i>
              </div>
              <span class="nav-link-text ms-1">Daftar Pegawai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/register">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person_add</i>
              </div>
              <span class="nav-link-text ms-1">Register User/Admin</span>
            </a>
          </li>
        @endif
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Halaman Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/profile/{{auth()->user()->id}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">manage_accounts</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-light mt-4 w-100 text-capitalize" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" type="button">Logout <i class="material-icons opacity-10">logout</i></a>
        <form action="{{route('logout')}}" id="logout-form" method="POST">
          @csrf
        </form>
      </div>
    </div>
  </aside>