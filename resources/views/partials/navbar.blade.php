<!-- Navbar dengan background warna abu-abu dan teks berwarna putih 
  - Menggunakan kelas navbar-expand-lg untuk membuat navbar responsif di berbagai ukuran layar. 
  - Memiliki warna latar belakang abu-abu (bg-secondary) dan teks putih. -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark ">
    <div class="container d-flex justify-content-between">

        <!-- Formulir pencarian untuk mencari data -->
        {{-- <form class="d-flex" action="{{route('search')}}" method="GET" role="search">
            <!-- Input pencarian dengan id "search-input" -->
            <input id="search-input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <!-- Tombol untuk melakukan pencarian atau refresh hasil pencarian 
             Formulir dengan input untuk mencari data, yang memungkinkan pengguna untuk mencari dan kemudian menampilkan hasil pencarian. Tombol bertuliskan "Refresh" digunakan untuk menyegarkan pencarian.-->
            <button class="btn btn-outline-black" type="submit">Refresh</button>
        </form> --}}
        
        <!-- Logo aplikasi, diambil dari konfigurasi 'app.name' 
        Nama aplikasi diambil dari konfigurasi Laravel (config('app.name')), dan akan ditampilkan sebagai nama brand di navbar.-->
        <a class="navbar-brand fw-bolder" href="#">{{ config('app.name') }}</a>

        <!-- Tombol untuk membuka modal tambah list -->
        <button type="button" class="btn btn-outline-dark flex-shrink-0 bg-dark text-white" style="width: 18rem; height: fit-content;"
        {{-- Tombol untuk membuka modal yang memungkinkan pengguna menambahkan list baru ke aplikasi. Tombol ini memiliki ikon plus dan menggunakan modal dengan id #addListModal. --}}
                data-bs-toggle="modal" data-bs-target="#addListModal">
                <span class="d-flex align-items-center justify-content-center">
                    <!-- Ikon tambah (plus) -->
                    <i class="bi bi-plus fs-5"></i>
                    Tambah
                </span>
                
        </button>
    </div>
</nav>

<!-- Keterangan:
    1. Navbar menggunakan `bg-secondary` untuk warna latar belakang dan `navbar-dark` untuk teks yang terang (putih).
    2. Terdapat form pencarian yang memungkinkan pengguna mencari dan menyegarkan data.
    3. Nama aplikasi diambil dari konfigurasi Laravel menggunakan `config('app.name')`.
    4. Tombol "Tambah" membuka modal untuk menambah list, dengan tombol ini memunculkan modal `#addListModal`.
-->
