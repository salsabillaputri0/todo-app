<!-- Navbar dengan background warna abu-abu dan teks berwarna putih 
  - Menggunakan kelas navbar-expand-lg untuk membuat navbar responsif di berbagai ukuran layar. 
  - Memiliki warna latar belakang abu-abu (bg-secondary) dan teks putih. -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
          <a class="navbar-brand fw-bolder" href="#">{{ config('app.name') }}</a>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
        <!-- Formulir pencarian untuk mencari data -->
    
        <!-- Logo aplikasi, diambil dari konfigurasi 'app.name' 
        Nama aplikasi diambil dari konfigurasi Laravel (config('app.name')), dan akan ditampilkan sebagai nama brand di navbar.-->
        

        
        
                
        </button>
    </div>
</nav>

<!-- Keterangan:
    1. Navbar menggunakan `bg-secondary` untuk warna latar belakang dan `navbar-dark` untuk teks yang terang (putih).
    2. Terdapat form pencarian yang memungkinkan pengguna mencari dan menyegarkan data.
    3. Nama aplikasi diambil dari konfigurasi Laravel menggunakan `config('app.name')`.
    4. Tombol "Tambah" membuka modal untuk menambah list, dengan tombol ini memunculkan modal `#addListModal`.
-->
