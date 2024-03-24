<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cake Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="d-flex flex-column justify-content-between vh-100">
        <x-nav.bar />
        <main class="container py-3 mb-auto">
            {{ $slot }}
        </main>
        <footer class="py-3 bg-primary">
            <div class="container text-center">
                <span class="text-white">Copyright &copy; 2024 Cake Hub</span>
            </div>
            <nav class="navbar navbar-expand-lg gx-3">
                <ul class="navbar-nav mx-auto flex-row">
                    <li class="nav-item">
                        <x-nav.link href="/about">About</x-nav.link>
                    </li>
                    <li class="nav-item ms-3">
                        <x-nav.link href="/contact">Contact</x-nav.link>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>
    <x-flash />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

