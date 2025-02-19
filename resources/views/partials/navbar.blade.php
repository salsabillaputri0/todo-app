<!-- Navbar dengan background warna abu-abu dan teks berwarna putih 
  - Menggunakan kelas navbar-expand-lg untuk membuat navbar responsif di berbagai ukuran layar. 
  - Memiliki warna latar belakang abu-abu (bg-secondary) dan teks putih. -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form> --}}
      
      <!-- Logo aplikasi, diambil dari konfigurasi 'app.name' 
        Nama aplikasi diambil dari konfigurasi Laravel (config('app.name')), dan akan ditampilkan sebagai nama brand di navbar.-->
        
      <a class="navbar-brand fw-bolder bi bi-card-list text-white" href="#">{{ config('app.name') }}
      </a>
        <a href="{{route('biodata.create')}}" class="nav-link">
            <img class="rounded-circle me-lg-2" src="/assets/img/salsa1.jpg" alt=""
                style="width: 50px; height: 40px" />
            <span class="d-none d-lg-inline-flex text-white">
              <i class="bi bi-person-circle"></i>
              <b>PROFILE</b></span>
            
        </a>
        </div>
    </div>
</nav>

      {{-- <a class="navbar-brand" href="#">Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      
            
            
    
    </div>
  </nav>
  
        <!-- Formulir pencarian untuk mencari data -->
    
        

        
        
                
        </button>
    </div>
</nav>

<!-- Keterangan:
    1. Navbar menggunakan `bg-secondary` untuk warna latar belakang dan `navbar-dark` untuk teks yang terang (putih).
    2. Terdapat form pencarian yang memungkinkan pengguna mencari dan menyegarkan data.
    3. Nama aplikasi diambil dari konfigurasi Laravel menggunakan `config('app.name')`.
    4. Tombol "Tambah" membuka modal untuk menambah list, dengan tombol ini memunculkan modal `#addListModal`.
-->
