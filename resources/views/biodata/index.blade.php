{{-- <!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1> Biodata</h1>
    <a href="{{ route('biodata.create') }}">Tambah Biodata</a>
    
        @foreach ($biodatas as $biodata)
        <tr>
            <td>{{ $biodata->nama }}</td>
            <td>{{ $biodata->alamat }}</td>
            <td>{{ $biodata->email }}</td>
            <td>{{ $biodata->telepon }}</td>
            <td>{{ $biodata->deskripsi }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html> --}}