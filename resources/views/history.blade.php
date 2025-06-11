<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                <a class="nav-link active" href="{{ route('history') }}">History</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="text-center display-4 mb-4">Our History</h1>
                        <p class="text-center lead mb-5">Discover our journey through time</p>
                        
                        <div class="timeline">
                            <div class="row mb-4">
                                <div class="col-md-4 text-center">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h3 class="mb-0">2023</h3>
                                        </div>
                                    </div>
                                    <p class="mt-3">Founded our company with a vision for the future.</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h3 class="mb-0">2024</h3>
                                        </div>
                                    </div>
                                    <p class="mt-3">Expanded our services and reached new milestones.</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h3 class="mb-0">2025</h3>
                                        </div>
                                    </div>
                                    <p class="mt-3">Continuing to grow and innovate in our field.</p>
                                </div>
                            </div>
                        </div>
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