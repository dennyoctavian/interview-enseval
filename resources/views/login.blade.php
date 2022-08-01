<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="https://www.wika-beton.co.id/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">

        @if (isset($message))
            {{ $message }}
        @endif
        <div class="form-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-3" id="username" placeholder="contoh@gmail.com"
                        name="email" required />
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-3" id="password" placeholder="Nama Unit Kerja"
                        name="password" required />
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" id="btn-submit" class="btn btn-primary">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>