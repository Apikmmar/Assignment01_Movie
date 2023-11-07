<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- specify favicon for a web page --}}
    <link rel="shortcut icon" href="@yield('icon')" type="image/jpg">
    {{-- include bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- import css file --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components/navbar')

    {{-- container or division that is used to group other HTML elements --}}
    <div class="container mt-3 mb-3">
      @yield('content')
    </div>

    @include('components/footer')
        
    {{-- include bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>