<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa Kampung Anyar')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body class="bg-gray-50 font-sans">

    @include('partials.navbar')

    <div>
        @yield('content')
    </div>

    {{-- Footer? Bisa di-include juga jika ingin global --}}
</body>
</html>
