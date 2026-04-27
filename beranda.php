<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #00ff15 100%);
            min-height: 100vh;
        }
        .card-beranda {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
        }
    </style>
</head>
<body class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="card card-beranda p-4 p-md-5 rounded-4 shadow-lg text-center">
                    <div class="mb-4">
                        <i class="bi bi-person-circle fs-1 text-success mb-3"></i>
                        <h1 class="fw-bold fs-2 mb-2">HALO, <?= strtoupper($_SESSION['username']) ?>!</h1>
                        <p class="lead text-muted">Selamat datang di beranda</p>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <i class="bi bi-check-circle-fill fs-1 text-success mb-3"></i>
                                    <h5 class="fw-bold">LOGIN SUKSES</h5>
                                    <p class="text-success fw-semibold fs-5">Akun aktif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
                                    <h5 class="fw-bold">SECURITY OK</h5>
                                    <p class="text-primary fw-semibold fs-5">Password aman</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-3 d-md-block">
                        <a href="logout.php" class="btn btn-danger btn-lg px-5 py-3 fw-semibold rounded-3 mb-3 mb-md-0 me-md-3">
                            <i class="bi bi-box-arrow-right me-2"></i>LOGOUT
                        </a>
                        <a href="index.php" class="btn btn-outline-primary btn-lg px-5 py-3 fw-semibold rounded-3">
                            <i class="bi bi-house me-2"></i>HOME
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>