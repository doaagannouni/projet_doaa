<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD Website by Doua Gannouni for Azure</title>
    
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include your other CSS files here -->
</head>
<body>
    <div class="container-fluid bg-primary text-white p-3 text-center">
        <h1>Simple CRUD Website by Doua Gannouni for Azure</h1>
    </div>

    @yield('content')

    <!-- Include Bootstrap JS and other JS files here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
