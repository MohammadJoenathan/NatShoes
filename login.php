<?php
session_start();

// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $validUsername = "admin";
  $validPassword = "12345";

  if ($username === "" || $password === "") {
    echo "<script>alert('Isi semua data terlebih dahulu.');</script>";
  } elseif ($username === $validUsername && $password === $validPassword) {
    // Simpan username ke session
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), '/'); // Set cookie dengan nama 'username' dan nilai username pengguna
    echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
    exit();
  } else {
    echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NatShoes - Login</title>
  <link rel="stylesheet" href="./css/style_login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <nav>
    <div class="logo-container">
      <img src="./assets/images/logospt1.png" alt="Logo NatShoes" width="30%" class="logo"/>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </nav>

  <main>
    <div class="container-card"> 
      <div class="card text-center">
        <div class="card-header">
          <h3>Login</h3>
        </div>
        <div class="card-body">
          <form action="login.php" method="post">
            <div class="">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div><br>
            <div class="">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="card-footer">
          <p>Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <p>Copyright &copy; 2024 NatShoes</p>
      </div>
    </div>
  </footer>
</body>
</html>