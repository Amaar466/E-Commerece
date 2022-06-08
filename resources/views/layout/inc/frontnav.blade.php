<nav class="navbar navbar-expand-lg navbar-light bg-dark  text-white">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item fs-3 ">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item fs-3">
          <a class="nav-link text-white" href="#">Features</a>
        </li>
        <li class="nav-item fs-3">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
        <li class="nav-item fs-3">
          <a class="nav-link text-white" href="{{ route('register') }}" tabindex="-1" aria-disabled="true">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>