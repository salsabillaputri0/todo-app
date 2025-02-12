<nav class="navbar navbar-expand-lg bg-primary navbar-dark ">
    <div class="container d-flex justify-content-between">
        <form class="d-flex" action="{{route('search')}}" method="GET" role="search">
            <input id="search-input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-black" type="submit">Refresh</button>
        </form>
        <a class="navbar-brand fw-bolder" href="#">{{ config('app.name') }}</a>
        <button type="button" class="btn btn-outline-dark flex-shrink-0 bg-dark text-white" style="width: 18rem; height: fit-content;"
                data-bs-toggle="modal" data-bs-target="#addListModal">
                <span class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-plus fs-5"></i>
                    Tambah
                </span>
        </button>
    </div>
</nav>

  

<!-- Kode ini membuat navbar yang berpusat dengan warna biru , dan menampilkan nama aplikasi yang diambil dari konfigurasi Laravel.-->
