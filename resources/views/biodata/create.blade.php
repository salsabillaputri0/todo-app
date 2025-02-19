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
    
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="btn btn-sm fw-bold fs-4 ">
                <i class="bi bi-arrow-left-short"></i>
               <h3> Kembali</h3>
            </a>
        <div class="card" data-tlit>
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
