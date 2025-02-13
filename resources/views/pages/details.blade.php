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
    <div class="row my-3">
        <div class="col-8">
            <div class="card" style="height: 80vh; max-height: 80vh;">
                {{-- Menampilkan nama tugas ($task->name) dengan kelas text-truncate agar teks yang panjang tetap dipotong. Ada juga tombol dengan ikon pensil yang belum berfungsi (tombol edit). --}}
                <div class="card-header d-flex align-items-center justify-content-between overflow-hidden">
                    <h3 class=" fw-bold fs-4 text-truncate" style="max-width: 80%">{{$task->name}}
                        <span class="fs-6 fw-medium ">
                            di {{$task->list->name}}
                        </span>
                    </h3>
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
                    <form action="{{route('tasks.destroy', $task->id)}}" 
                        method="POST">
                        @csrf
                        @method('DELETE')
                   
                    <button type="submit" class="btn btn-outline-danger w-100">
                        Hapus
                    </button>
                </form>
                </div>
            </div>
        </div>
        {{-- Kolom kedua (col-4) yang akan menampilkan elemen lainnya, seperti gambar atau konten terkait tugas, dengan lebar 4 bagian dari 12 kolom. --}}
        <div class="col-4">
            {{-- Menampilkan gambar dari path yang telah disesuaikan menggunakan asset('storage/app/public/images/Spider-Man_ Homecoming.jpg'). Gambar ini diambil dari direktori storage publik dan dipastikan dapat diakses melalui link. --}}
            <div class="card" style="height: 80vh;">
                <div class="card-header d-flex align-items-center justify-content-between overflow-hidden">
                    <h3 class="fw-bold fs-4 text-truncate mb-0" style="width: 80%">Details</h3>
                </div>
                <div class="card-body d-flex flex-column gap-2">
                    <form action="{{ route('tasks.changeList', $task->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select class="form-select" name="list_id" onchange="this.form.submit()">
                            @foreach ($lists as $list)
                                <option value="{{ $list->id }}" {{ $list->id == $task->list_id ? 'selected' : '' }}>
                                    {{ $list->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                    <h6 class="fs-6">
                        Priotitas:
                        <span class="badge text-bg-{{ $task->priorityClass }} badge-pill" style="width: fit-content">
                            {{ $task->priority }}
                        </span>
                    </h6>
                </div>
                  {{-- Menutup kolom, baris, dan kontainer, menyelesaikan struktur layout untuk halaman ini. --}}
             </div>
        </div>
    </div>
</div>
{{-- Menutup bagian content yang telah dimulai sebelumnya dengan @section. Bagian ini menandakan akhir dari konten yang ingin ditampilkan pada layout app. --}}
@endsection