<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NatShoes - Registrasi</title>
  <link rel="stylesheet" href="./css/style_register.css">
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
        <li><a href="login.php">Login</a></li>
        <li><a class="active" href="register.php">Register</a></li>
      </ul>
    </nav>
  <main>
    <div class="container-card"> 
      <div class="card text-center">
        <div class="card-header">
          <h3>Register</h3>
        </div>
          <div class="card-body">
            <form action="login.php">
              <div class="">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div><br>
              <div class="">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div><br>
              <div class="">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div><br>
              <div class="">
                <label for="konfirmasiPassword" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" required>
              </div>
                <button type="submit" class="btn btn-primary" onclick="RegisterForm()">Register</button>
              </form>
              </div>
              <div class="card-footer text-muted">
                  <p>Sudah punya akun? <a href="login.php">Login Sekarang</a></p>
              </div>
            </form>
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
<script>
  function RegisterForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var konfirmasiPassword = document.getElementById("konfirmasiPassword").value;

    if (username === "" || email === "" || password === "" || konfirmasiPassword === "") {
      alert("Isi semua data terlebih dahulu.");
      return false;
    }

    if (password !== konfirmasiPassword) {
      alert("Password dan konfirmasi password harus sama.");
      return false;
    }

    alert("Register berhasil! Silahkan login.");

    return true;
  }
</script>
</body>
</ph>