<?php
session_start();
include 'service/database.php';

$pesan = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['pw'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: beranda.php");
            exit;
        } else {
            $pesan = "Password salah bro!";
        }
    } else {
        $pesan = "Username gak ada!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #00ff15 100%);
            min-height: 100vh;
        }

        .card-login {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100 p-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-12">
                <?php if ($pesan): ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <?= $pesan ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <div class="card card-login p-4 p-md-5 rounded-4 shadow-lg">
                    <div class="text-center mb-4">
                        <i class="bi bi-lock-fill fs-1 text-primary mb-3"></i>
                        <h2 class="fw-bold mb-0">LOGIN</h2>
                    </div>

                    <form method="post">
                        <div class="mb-4">
                            <label class="form-label fw-semibold mb-2">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold mb-2">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <button type="submit" name="login" class="btn btn-primary w-100 py-3 fw-semibold mb-3 rounded-3">
                            <i class="bi bi-box-arrow-in-right me-2"></i>MASUK
                        </button>
                    </form>

                    <div class="text-center">
                        <a href="registrasi.php" class="btn btn-link p-0 fw-semibold">Belum punya akun? Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>