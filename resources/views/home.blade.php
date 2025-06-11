<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                <a class="nav-link" href="{{ route('history') }}">History</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h1 class="display-4 mb-4">Welcome to Our Website</h1>
                        <p class="lead">This is a simple home page for our application. We're excited to show you what we've been working on!</p>
                        <hr class="my-4">
                        <p class="text-muted">Explore our website to learn more about our services and history.</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('contact') }}" role="button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>