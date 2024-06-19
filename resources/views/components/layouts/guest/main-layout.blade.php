<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body>

    <x-partials.guest.navigation-bar/>

    {{$slot}}

    <x-partials.guest.footer/>

    @livewireScripts
</body>
</html>