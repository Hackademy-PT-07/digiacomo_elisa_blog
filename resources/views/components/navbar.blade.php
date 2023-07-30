

<nav class="navbar navbar-expand-lg navbar-light bg-light mx-3">
  <a class="navbar-brand" href="{{route('homepage')}}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      @foreach($navbar as $el)
     
      <a class="nav-item nav-link" href="{{ $el['link'] }}">{{$el['name']}}</a>

     @endforeach
    </div>

    @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{route('account')}}">Articoli</a></li>
                <li><a class="dropdown-item" href="{{route('categories.index')}}">Categorie</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
        </ul>
        @endauth
  </div>

 

</nav>   
