<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
      <use xlink:href="#bootstrap"></use>
    </svg>
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Главная</a></li>
    <li><a href="{{ route('about') }}" class="nav-link px-2 link-dark">О нас</a></li>
    <li><a href="{{ route('contact') }}" class="nav-link px-2 link-dark">Контакты</a></li>
    <li><a href="{{ route('contact-data') }}" class="nav-link px-2 link-dark">Сообщения</a></li>
  </ul>

  <div class="col-md-3 text-end">
    @guest
    <a href="{{ route('login') }}"> <button type="button" class="btn btn-outline-primary me-2">Войти</button></a>
    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Регистрация</button></a>
    @else
   

      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
      </a>

      
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
    
  
    @endguest
  </div>
</header>