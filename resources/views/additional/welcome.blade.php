<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung bangkrut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Welcome</title>
  </head>
  <body>

    <h3 class="text-center mt-5 mb-4">Welcome {{$data->data->name}}</h3>
    <div class=" d-flex justify-content-center">
      <div>
        <div class="card">
          <div class="card-body">
            <p>Nama: {{$data->data->name}} </p>
            <a href="#">Edit Profile |</a>
            <a href="#">Ganti Password</a>
          </div>
        </div>
      </div>
    </div>
   


    @if(Session::get('ok'))
    <div class="alert alert-ok" role="alert">
        {{Session::get('ok')}}
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>