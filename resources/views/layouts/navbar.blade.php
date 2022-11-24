 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="color: white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{url('/')}}" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <strong>{{ Auth::user()->name }}  ({{ Auth::user()->role }}) <span class="caret"></span></strong> 
        </a>
        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
          {{-- @if (Auth::user()->role==("Admin")) --}}
            <button type="button" class="dropdown-item btn btn-default" data-toggle="modal" data-target="#modal-user">
              <i class="fa fa-user"></i> Profil
            </button>
          {{-- @endif --}}
            <a class="dropdown-item btn btn-default" href="{{ route('logout') }}"  id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>
  <!-- /.navbar -->