<!doctype html>

<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Anti Nyeker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    


    <link href="css/home.css" rel="stylesheet">

  </head>
  <body>
    

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">A N</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/new_arrival">New Arrival</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Pria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Wanita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Anak - anak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Icons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">masuk/daftar</a>
          </li>
        </ul>

            

        <form class="d-flex" role="search">

          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

    @yield('container')

</main>

    <div class="row row-cols-4 ">
        <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Tentang</h5>
              <ul class="list-group list-group-flush">
                <a href="" class="list-group-item">Tentang kami</a>
                <a href="" class="list-group-item">Syarat dan ketentuan</a>
                <a href="" class="list-group-item">Kebijakan Privasi</a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Layanan Pelanggan</h5>
              <ul class="list-group list-group-flush">
                <a href="" class="list-group-item">FAQs</a>
                <a href="" class="list-group-item">Pengembalian</a>
                <a href="" class="list-group-item">Kontak Kami</li>
                <a href="" class="list-group-item">Peta Situs</a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Link Populer</h5>
              <ul class="list-group list-group-flush">
                <a href="" class="list-group-item" href="">Sepatu Pria</a>
                <a href="" class="list-group-item">Sepatu Wanita</a>
                <a href="" class="list-group-item">Sneakers Wanita</a>
                <a href="" class="list-group-item">Sepatu Anak</a>
                <a href="" class="list-group-item">Pakaian</a>
                <a href="" class="list-group-item">Aksesoris</a>
              </ul>
            </div>
          </div>
        </div>
        {{-- Card untuk  --}}
        {{-- <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div> --}}
      </div>
      
    


      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>
