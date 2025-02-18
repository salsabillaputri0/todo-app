<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="bootsrap_templats/dist/css/bootstrap.min.css">
    
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

.container {
    width: 100%;
    height: 100vh;
    background-image: url('{{ asset('images/background.jpeg') }}');
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;

}

.card {
    width: 90%;
    max-width: 440px;
    color: #fff;
    text-align: center;
    padding: 50px 35px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.2);
    border-radius: 36px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
}

.card img {
    width: 140px;
    border-radius: 50%;
}

.card h2 {
    font-size: 40px;
    font-weight: 600;
    margin-top: 20px;
}

.card p{
    font-size: 18px;
    margin: 10px auto;
    max-width: 330px;
}

.card .links img{
    width: 40px;
    border-radius: 50%;
    margin: 10px 5px;
    transition: background 0.5;
}

.card .links imh:hover{
    background: beige;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card" data-tlit>
            <img src="/assets/img/salsa.JPG">
           <b> <h3>PROFILE</h3></b>
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
                    <p>KELAS: XII - RPL</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>TTL: SUABANG, 09-01-2007 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>JURUSAN: REKAYASA PERANGKAT LUNAK </p>
                </td>
            </tr>
            
        </div>
     </div>
     <script src="bootsrap_templats/dist/js/bootstrap.min.js"></script> 
    </body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}

.container {
    width: 100%;
    height: 100vh;
    background-image: url('{{ asset('images/background3.jpeg') }}');
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card {
    width: 90%;
    height: 440px;
    color: #fff;
    text-align: center;
    padding: 50px 35px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.2);
    border-radius: 360x;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
}

.card img {
    width: 140px;
    border-radius: 50%;
}

.card h2 {
    font-size: 40px;
    font-weight: 400;
    margin-top: 20px;
}

.card p {
    font-size: 18px;
    margin: 10px auto;
    max-width: 330px;
}

    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <a class="nav-link">
            <img class="rounded-circle me-lg-2" src="/assets/img/salsa.JPG" alt=""
                style="width: 200px; height: 180px" />
            <span class="d-none d-lg-inline-flex"></span>
        </a>
        <div className="flex items-center">
            <table border="4" class="d-flex align-items-center justify-content center" >
                <tbody>
                    <tr>
                    <td>NAMA : SALSABILLA PUTRI RANESTI</td>
                    </tr>
                    <tr>
                    <td>NIT : 2223612</td>
                    </tr>
                    <tr>
                    <td>TTL : SUBANG, 09-JANUARI-2007</td>
                    </tr>
                    <tr>
                    <td>KELAS : XII</td>
                    </tr>
                    <tr>
                    <td>JURUSAN : REKAYASA PERANGKAT LUNAK</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
    
</body>


</html>
{{-- <div>
    <p><span className="font-bold">NAMA</span> : Salsabilla Putri Ranesti</p>
    <p><span className="font-bold">NIT</span> : 2223612</p>
    <p><span className="font-bold">TTL</span> : Subang, 09-Januari-2007</p>
    <p><span className="font-bold">ALAMAT</span> : Kalijati Barat</p>
    <p><span className="font-bold">KELAS</span> : XII</p>
    <p><span className="font-bold">JURUSAN</span> : Rekayasa Perangkat Lunak</p>
</div> --}} --}}