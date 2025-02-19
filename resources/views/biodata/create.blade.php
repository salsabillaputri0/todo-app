<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="bootsrap_templats/dist/css/bootstrap.min.css">
    
    <style>
 {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}


    /* Mengatur gambar latar belakang untuk elemen dengan ID 'content' */
    #content {
    
        background-size: cover;
        /* Memastikan gambar menutupi seluruh area */
        background-position: center;
        /* Memposisikan gambar di tengah */
        color: black;
        /* Mengubah warna teks menjadi putih untuk kontras yang lebih baik */
        min-height: 100vh;
        /* Memastikan konten memenuhi tinggi layar */

    }
.container {
    width: 100%;
    height: 100vh;
    background-image: url('{{ asset('images/greenwal.jpeg') }}');
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;

}

.card {
    width: 220%;
    max-width: 440px;
    color: #fff;
    text-align: center;
    padding: 50px 35px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.2);
    border-radius: 36px;
    box-shadow: 0 4px 30px rgb(0, 0, 0);
    backdrop-filter: blur(5px);
}

.card img {
    width: 140px;
    border-radius: 50%;
   
}

.card p{
    font-size: 18px;
    margin: 10px auto;
    max-width: 330px;
    text-align: left;
    text-shadow: 0 4px 30px rgb(0, 0, 0);
}

.card:hover {
    transform: scale(1.02);
    /* Efek zoom saat hover */
    }

.btn:hover {
    transform: scale(1.02);
    /* Efek zoom saat hover pada tombol */
    }
.container h3 {
    text-align: center;
    text-shadow: 0 4px 30px rgb(0, 0, 0);
}

.container h4 {
    min-height: 100vh;
    text-align: left;
}

    </style>
</head>
<body>

    <div class="container">
        <div class="d-flex align-items-center justify-content center">
            <a href="{{route('home')}}" class="btn btn-sm fw-bold fs-4">
                <i class="bi bi-arrow-left"></i>
               <h4>Kembali</h4> 
            </a>
        </div>
    {{-- Bagian ini menampilkan tombol "Kembali" yang akan mengarahkan pengguna ke halaman utama (home) ketika diklik. Tombol menggunakan ikon panah kiri (bi bi-arrow-left-short) dari Bootstrap Icons. Dengan menggunakan kelas d-flex, elemen ini ditempatkan di tengah. --}}
   
        <div class="card">
            <b> <h3>PROFILE</h3></b> <br>
            <img src="/assets/img/salsa1.jpg">
           
            <tr>
                <td>
            <p>NAMA: SALSABILLA PUTRI RANESTI</p>
                </td>
            </tr>
            <tr>
                <td>
            <p>NIT: 2223612</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>KELAS: XII</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TTL: SUBANG, 09-01-2007 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>JURUSAN: RPL</p>
                </td>
            </tr>
            
        </div>
     </div>
     <script src="bootsrap_templats/dist/js/bootstrap.min.js"></script> 
    </body>
</html>
