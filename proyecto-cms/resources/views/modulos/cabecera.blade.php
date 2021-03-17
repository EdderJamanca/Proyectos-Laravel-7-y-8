<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">

            <a href="{{url('data')}}" class="nav-link">
                {{auth()->user()->name }}
               
            </a>
         
        </li>
        <li class="nav-item">

            <a href="#" class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <i class="fas fa-sign-out-alt"></i>
            </a>
            <form method="POST" id="logout-form" action="{{route('logout')}}">
                @csrf
            </form>
         
        </li>
    </ul>
  </nav>