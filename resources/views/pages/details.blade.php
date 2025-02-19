 {{-- Menggunakan layout app yang ada di folder resources/views/layouts. Layout ini mungkin berisi struktur HTML dasar, seperti header, footer, dan elemen lainnya yang digunakan di seluruh halaman. --}}
@extends('layouts.app')

{{-- Mendefinisikan bagian content yang akan menggantikan placeholder di layout utama. container adalah kelas dari Bootstrap yang memberikan margin otomatis dan pengaturan lebar, dan pb-3 memberikan padding bawah untuk jarak. --}}
@section('content')
<div id ="content" class="container pb-3">
    {{-- Bagian ini menampilkan tombol "Kembali" yang akan mengarahkan pengguna ke halaman utama (home) ketika diklik. Tombol menggunakan ikon panah kiri (bi bi-arrow-left-short) dari Bootstrap Icons. Dengan menggunakan kelas d-flex, elemen ini ditempatkan di tengah. --}}
    <div class="d-flex align-items-center justify-content center">
        <a href="{{route('home')}}" class="btn btn-sm fw-bold fs-4">
            <i class="bi bi-arrow-left-square"></i>
            Kembali
        </a>
    </div>
    @session('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endsession

    {{-- Menggunakan sistem grid dari Bootstrap, kolom pertama (col-8) akan mengambil 8 bagian dari total 12 kolom, yang berarti akan mengambil lebih banyak ruang daripada kolom kedua. --}}
    <div class="row my-3">
        <div class="col-8">
            <div class="card bg-secondary" style="height: 80vh; max-height: 80vh;">
                {{-- Menampilkan nama tugas ($task->name) dengan kelas text-truncate agar teks yang panjang tetap dipotong. Ada juga tombol dengan ikon pensil yang belum berfungsi (tombol edit). --}}
                <div class="card-header d-flex align-items-center justify-content-between overflow-hidden bg-success">
                    <h3 class=" fw-bold fs-4 text-truncate" style="max-width: 80%">{{$task->name}}
                        <span class="fs-6 fw-medium ">
                            di {{$task->list->name}}
                        </span>
                    </h3>
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal"
                            data-bs-target="#editTaskModal">
                            <i class="bi bi-pencil-square"></i>
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
            <div class="card bg-secondary" style="height: 80vh;">
                <div class="card-header d-flex align-items-center justify-content-between overflow-hidden bg-success">
                    <h3 class="fw-bold fs-4 text-truncate mb-0" style="width: 80%">Details</h3>
                </div>
                        @csrf
                        @method('PATCH')
                        <select class="form-select bg-secondary" name="list_id" onchange="this.form.submit()">
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

    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="modal-content">
                @method('PUT')
                @csrf
                <div class="modal-header bg-secondary">
                    <h1 class="modal-title fs-5" id="editTaskModalLabel">Edit Task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" value="{{ $task->list_id }}" name="list_id" hidden>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $task->name }}" placeholder="Masukkan nama list">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Masukkan deskripsi">{{ $task->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select class="form-control" name="priority" id="priority">
                            <option value="low" @selected($task->priority == 'low')>Low</option>
                            <option value="medium" @selected($task->priority == 'medium')>Medium</option>
                            <option value="high" @selected($task->priority == 'high')>High</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Menutup bagian content yang telah dimulai sebelumnya dengan @section. Bagian ini menandakan akhir dari konten yang ingin ditampilkan pada layout app. --}}
@endsection