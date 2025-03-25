<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- link css --}}
    @vite(['./resources/css/header.css'])
</head>

<body>
    @include("partials.header")

    {{-- contenuto della pagina --}}
    @yield("contenuto")

    @include("partials.footer")
</body>

</html>