<!doctype html>
<html>
<head>
    <x-seo></x-seo>
</head>
<body class="min-h-screen">
    <header>
        <x-navbar></x-navbar>
    </header>
    <main class="min-h-44">
        {{$slot}}
    </main>

        <x-footer> </x-footer>

</body>

</html>
