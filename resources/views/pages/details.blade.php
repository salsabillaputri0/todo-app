 {{-- Menggunakan layout app yang ada di folder resources/views/layouts. Layout ini mungkin berisi struktur HTML dasar, seperti header, footer, dan elemen lainnya yang digunakan di seluruh halaman. --}}
@extends('layouts.app')

{{-- Mendefinisikan bagian content yang akan menggantikan placeholder di layout utama. container adalah kelas dari Bootstrap yang memberikan margin otomatis dan pengaturan lebar, dan pb-3 memberikan padding bawah untuk jarak. --}}
@section('content')
<div id ="content" class="container pb-3">
    {{-- Bagian ini menampilkan tombol "Kembali" yang akan mengarahkan pengguna ke halaman utama (home) ketika diklik. Tombol menggunakan ikon panah kiri (bi bi-arrow-left-short) dari Bootstrap Icons. Dengan menggunakan kelas d-flex, elemen ini ditempatkan di tengah. --}}
    <div class="d-flex align-items-center justify-content center">
        <a href="{{route('home')}}" class="btn btn-sm fw-bold fs-4">
            <i class="bi bi-arrow-left-short"></i>
            Kembali
        </a>
    </div>

    {{-- Menggunakan sistem grid dari Bootstrap, kolom pertama (col-8) akan mengambil 8 bagian dari total 12 kolom, yang berarti akan mengambil lebih banyak ruang daripada kolom kedua. --}}
    <div class="row">
        <div class="col-8">
            <div class="card" style="height: 80vh; max-height: 80vh;">
                {{-- Menampilkan nama tugas ($task->name) dengan kelas text-truncate agar teks yang panjang tetap dipotong. Ada juga tombol dengan ikon pensil yang belum berfungsi (tombol edit). --}}
                <div class="card-header d-flex align-items-center justify-content-between overflow-hidden">
                    <h3 class=" fw-bold fs-4 text-truncate" style="max-width: 80%">{{$task->name}}</h3>
                    <button class="btn btn-sm">
                    <i class="bi bi-pencil-square fs-4"></i>
                </button>
                </div>
                {{-- Card Body: Menampilkan deskripsi tugas dengan menggunakan $task->description. --}}
                <div class="card-body">
                    <p>
                        {{$task->description}}
                    </p>
                </div>
                {{-- Card Footer: Menampilkan tombol untuk menghapus tugas. Anda dapat menghubungkan tombol ini ke fungsionalitas penghapusan (misalnya, dengan form DELETE di controller). --}}
                <div class="card-footer">
                    <button class="btn btn-outline-danger w-100">
                        Hapus
                    </button>
                </div>
                
                {{-- <button class="btn btn-sm" 
                data-bs-toggle="modal" 
                data-bs-target="#addListModal">
                <i class="bi bi-pencil-square"></i>
                </button>  --}}
            </div>
        </div>
        {{-- Kolom kedua (col-4) yang akan menampilkan elemen lainnya, seperti gambar atau konten terkait tugas, dengan lebar 4 bagian dari 12 kolom. --}}
        <div class="col-4">
            {{-- Menampilkan gambar dari path yang telah disesuaikan menggunakan asset('storage/app/public/images/Spider-Man_ Homecoming.jpg'). Gambar ini diambil dari direktori storage publik dan dipastikan dapat diakses melalui link. --}}
            <div class="card" style="height: 80vh; max-height: 80vh;">
             <div class="card">
                {{-- <div class="container mt-5">
                    <div style="width: 18rem;">
                      <img src="{{asset('storage/app/public/images/Spider-Man_ Homecoming.jpg')}}" class="card-img-top" alt="images">
                      <div class="card-body">
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div> --}}
                  {{-- Menutup kolom, baris, dan kontainer, menyelesaikan struktur layout untuk halaman ini. --}}
             </div>
        </div>
    </div>
</div>
{{-- Menutup bagian content yang telah dimulai sebelumnya dengan @section. Bagian ini menandakan akhir dari konten yang ingin ditampilkan pada layout app. --}}
@endsection