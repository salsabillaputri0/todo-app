<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Profile</h1>
        <table class="table">
            <tr>
                <th>Nama</th>
                <td>{{ $biodata['nama'] }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $biodata['alamat'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $biodata['email'] }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $biodata['telepon'] }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $biodata['tanggal_lahir'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
