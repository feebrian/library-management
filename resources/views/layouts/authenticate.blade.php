<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="auth-bg">
    <div class="container mx-auto h-screen items-center flex">
        @yield('container')
    </div>
</body>

</html>
