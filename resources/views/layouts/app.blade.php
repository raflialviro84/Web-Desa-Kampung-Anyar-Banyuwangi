<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa Kampung Anyar')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('gambar-icon/logo-desa.png') }}">
    @yield('css')
</head>
<body class="bg-gray-50 font-sans">

    @include('partials.navbar')

    <div>
        @yield('content')
    </div>
</body>
</html>
