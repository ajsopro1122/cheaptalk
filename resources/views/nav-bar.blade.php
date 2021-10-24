
    
<nav class="navbar navbar-expand-lg navbar-dark bg-black ">
    <div class="container">
      <a class="navbar-brand mb-0 h1" href="/"><i class="fa fa-headphones" aria-hidden="true"></i> CHEAPTALK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="justify-content-center float-md-right" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
          </li>
          @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>

            <div class="nav-item dropdown">
                <a class="nav-link text-white-50 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list" aria-hidden="true"></i> Category
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <ul>
                        @foreach(App\Models\Category::all() as $c)
                        <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <li class="nav-item">
                <a href="/authors" class="nav-link"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a> 
            </li>
              
          @else

          <li class="nav-item">
            <a class="nav-link" href="/register"><i class="fa fa-registered" aria-hidden="true"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          </li>
              
          @endif
        </ul>
      </div>
    </div>
  </nav>