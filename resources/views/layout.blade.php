<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragigs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            module.exports = {
                prefix: 'tw-',
            }
        }
    </script>
</head>
<body>
    <header>
        @include('partials._mainNav')
    </header>

    <x-flashMessage />

    <main class="container">
        @yield('content')
    </main>
    
    <footer>
        site developed by vithu_jr <br>
        &copy; Laragigs 2023
    </footer>    
</body>
</html>