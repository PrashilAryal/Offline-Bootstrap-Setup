<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    @vite(['resources/js/app.js'])
</head>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">Dashboard</li>
            <li class="nav-item">Login</li>
        </ul>
    </nav>
    <button class="btn btn-primary">Save</button>
    <!-- Dynamic content -->
    @yield('content')

</body>

</html>