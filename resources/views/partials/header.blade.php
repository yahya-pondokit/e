<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-4 shadow-sm">
  <a class="navbar-brand" href="#">ATLAS<sup>II</sup></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOptions" aria-controls="navbarOptions" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarOptions">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Categories <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        @auth
          <form action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-outline-light" type="submit">Logout</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="btn btn-outline-light">
            Login
          </a>
        @endauth
      </li>
    </ul>
  </div>
</nav>