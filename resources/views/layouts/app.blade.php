<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <livewire:styles/>
    <livewire:scripts/>
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body class="flex flex-wrap justify-center">
    <div class="flex w-full justify-left px-4 bg-purple-900 text-white">
        <a href="/" class="mx-3 py-4">Home</a>
        <a href="/login" class="mx-3 py-4">Login</a>
    </div>
    <div class="my-10 flex justify-center">
        @yield('content')
    </div>
</body>
</html>

