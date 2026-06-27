<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <h1>Dashboard Admin</h1>

    <hr>

    <p>Selamat Datang, {{ auth()->user()->name }}</p>

    <p>Role : {{ auth()->user()->role }}</p>

</body>
</html>