<!-- Modal untuk menambah List -->
<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Form untuk menambahkan List -->
        <form action="{{ route('lists.store') }}" method="POST" class="modal-content">
            @method('POST')
            @csrf
            <div class="modal-header bg-primary">
             <h1 class="modal-title fs-5" id="addListModalLabel">Tambah List</h1>                                           {{-- Digunakan untuk menambah daftar tugas baru dengan input nama list.
                Tombol untuk menutup modal dan tombol untuk menyimpan list ditampilkan di bagian footer modal. --}}
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Input field untuk nama list -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama list">
                </div>
            </div>
            <div class="modal-footer">
                <!-- Tombol untuk membatalkan dan menutup modal -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Tombol untuk menyimpan List -->
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal untuk menambah Task -->
{{-- Digunakan untuk menambah tugas ke dalam list tertentu, termasuk input nama tugas, deskripsi, dan prioritas. --}}
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Form untuk menambahkan Task -->
        <form action="{{ route('tasks.store') }}" method="POST" class="modal-content">
            @method('POST')
            @csrf
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="addTaskModalLabel">Tambah Task</h1>
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Input field untuk menyimpan ID List (hidden) -->
                {{-- Field list_id disembunyikan (hidden) untuk menghubungkan tugas dengan list yang dipilih. --}}
                <input type="text" id="taskListId" name="list_id" hidden>
                
                <!-- Input field untuk nama task -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama task">
                </div>
                
                <!-- Input field untuk deskripsi task -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                        placeholder="Masukkan deskripsi task">
                </div>

                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                      <strong class="text-gray-dark">{{$task->title}} | {{$task->deadline}}</strong>
                      <a href="{{route('task.status.update', $task->id)}}" 
                        class="btn btn-success"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                      </a>

                <!-- Dropdown untuk memilih prioritas task -->
                {{-- Dropdown untuk memilih prioritas tugas (low, medium, atau high). --}}
                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select name="priority" class="form-select" aria-label="priority" id="priority">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
            </div>
            {{-- Tombol di footer modal digunakan untuk membatalkan tindakan atau mengirim data ke server. --}}
            <div class="modal-footer">
                <!-- Tombol untuk membatalkan dan menutup modal -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Tombol untuk menyimpan task -->
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
{{-- Setiap modal memiliki struktur yang serupa, tetapi satu untuk menambah daftar tugas (addListModal) dan satu lagi untuk menambah tugas (addTaskModal). --}}