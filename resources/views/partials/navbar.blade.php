<!-- Navbar dengan background warna abu-abu dan teks berwarna putih 
  - Menggunakan kelas navbar-expand-lg untuk membuat navbar responsif di berbagai ukuran layar. 
  - Memiliki warna latar belakang abu-abu (bg-secondary) dan teks putih. -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">  
      <!-- Logo aplikasi, diambil dari konfigurasi 'app.name' 
        Nama aplikasi diambil dari konfigurasi Laravel (config('app.name')), dan akan ditampilkan sebagai nama brand di navbar.-->
        <div class="d-flex align-items-center justify-content-between">
        <a href="https://github.com/salsabillaputri0/" class="nav-link">
          <a href="https://www.instagram.com/evolvesalsabilla/" class="nav-link">
          <span class="d-none d-lg-inline-flex text-white"> 
            <i class="bi bi-github gap-2 px-2"></i>
            <i class="bi bi-instagram"></i>
            </span>
      </a>
    </div>
      <a class="navbar-brand fw-bolder text-white" href="#">{{ config('app.name') }}
      </a>
        <a href="{{route('biodata.create')}}" class="nav-link">
            <span class="d-none d-lg-inline-flex text-white">
              <i class="bi bi-person px-2"></i>
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
