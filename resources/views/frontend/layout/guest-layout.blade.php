<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepalgunj Living</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="80x80" href="{{ setting()->logo2 ?? '' }}">

</head>


<body class="font-manrope">
    <x-frontend.nav />


    {{ $slot }}

    @include('frontend.layout.footer')

</body>


</html>
