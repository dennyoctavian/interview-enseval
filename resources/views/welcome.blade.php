<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="https://www.wika-beton.co.id/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>

<body>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" id="btn-submit" class="btn btn-primary">
            Logout
        </button>
    </form>
    <div class="container">
        <div>
            Hello,
            {{ $name }}
        </div>

        <div>
            Selamat {{ $salam }}
        </div>

        <div>
           {{ $datetime }}
        </div>
    </div>
</body>
</html>