<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #00ff15 100%);
            min-height: 100vh;
        }
        .card-home {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
        }
    </style>
</head>
<body class="d-flex align-items-center min-vh-100 p-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card card-home p-4 p-md-5 rounded-4 shadow-lg">
                    <div class="text-center mb-4">
                        <i class="bi bi-house-heart-fill fs-1 text-primary mb-3"></i>
                        <h1 class="fw-bold fs-1 text-dark mb-2">HALO!</h1>
                        <p class="lead text-muted mb-0">Mau ngapain nih?</p>
                    </div>
                    
                    <div class="d-grid gap-3">
                        <a href="registrasi.php" class="btn btn-primary btn-lg py-3 fw-semibold rounded-3">
                            <i class="bi bi-person-plus me-2"></i>DAFTAR
                        </a>
                        <a href="login.php" class="btn btn-outline-primary btn-lg py-3 fw-semibold rounded-3">
                            <i class="bi bi-box-arrow-in-right me-2"></i>LOGIN
                        </a>
                    </div>
                    
                    <div class="text-center mt-4">
                        <small class="text-muted">Simple Login System - PPLG 2024</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>