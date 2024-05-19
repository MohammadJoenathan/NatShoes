<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'bahanbaku.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM bahan_baku WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Hapus Bahan Baku </title>
    <link rel="stylesheet" href="../css/style_admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="../assets/images/logospt1.png" alt="Logo NatShoes" class="logo"/>
    </div>
      <ul class="nav-links">
      <li>
          <a href="../admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="bahanbaku.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Bahan Baku</span>
          </a>
        </li>
        <li>
          <a href="./produksi/produksi.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="./pengiriman/pengiriman.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Pengiriman</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
           <i class='bx bx-log-out-circle'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
      <div class="profile-details">
        <img src="../assets/images/admin.png" alt="Logo Administrator">
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
      </div>
    </nav>
	<div class="home-content">
	  <h3>Hapus Bahan Baku</h3>
	  <div class="form-login">
      <h4>Apakah Ingin Menghapus Data ?</h4>
            <form action="bahanbaku-proses.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn btn-danger" name="hapus" style="margin-top: 50px;"> Yes </button>
		          <button type="submit" class="btn btn-danger" name="tidak"> No </button>
            </form>
	   </div>
	</div>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
  </script>
</body>
</html>