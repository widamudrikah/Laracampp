<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Surah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Surah</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Asma</th>
                            <th scope="col">Jumlah Ayat</th>
                            <th scope="col">Type</th>
                            <th scope="col">Audio</th>
                            <th scope="col">Rukuk</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_surah as $row)
                        <tr>
                            <td>{{$row -> nomor}}</td>
                            <td>{{$row -> asma}}</td>
                            <td>{{$row -> ayat}}</td>
                            <td>{{$row -> type}}</td>
                            <td>
                               <a href="{{$row -> audio}}">Klik</a> 
                            </td>
                            <td>{{$row -> rukuk}}</td>
                            <td>{{$row -> keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>