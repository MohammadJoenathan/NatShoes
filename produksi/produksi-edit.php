<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'produksi.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM produksi WHERE id = '$id'";
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
    <title> Edit Data Produksi </title>
    <link rel="stylesheet" href="../css/style_bahan.css">
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
            <i class='bx bx-palette' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../bahanbaku/bahanbaku.php">
            <i class='bx bx-cube-alt' ></i>
            <span class="links_name">Bahan Baku</span>
          </a>
        </li>
        <li>
          <a href="produksi.php" class="active">
            <i class='bx bx-archive' ></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="../pengiriman/pengiriman.php">
            <i class='bx bx-package' ></i>
            <span class="links_name">Pengiriman</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../logout.php">
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
          <span class="admin_name"><?php echo $_SESSION['username'];?></span>
      </div>
    </nav>
    <div class="home-content">
  <h3>Edit Data Produksi</h3>
  <div class="form-login">
    <form action="produksi-proses.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $data['id'] ?>">
      <label for="id_bahan_baku">ID Bahan Baku</label>
      <input class="input" type="text" name="id_bahan_baku" id="id_bahan_baku" value="<?= $data['id_bahan_baku'] ?>" />
      <label for="nama_sepatu">Nama Sepatu</label>
      <input class="input" type="text" name="nama_sepatu" id="nama_sepatu" value="<?= $data['nama_sepatu'] ?>" />
      <label for="jumlah_produksi">Jumlah Produksi</label>
      <input class="input" type="number" name="jumlah_produksi" id="jumlah_produksi" value="<?= $data['jumlah_produksi'] ?>" />
      <label for="tanggal_produksi">Tanggal Produksi</label>
      <input class="input" type="date" name="tanggal_produksi" id="tanggal_produksi" value="<?= $data['tanggal_produksi'] ?>" />
      <label for="durasi_produksi">Durasi Produksi</label>
      <input class="input" type="text" name="durasi_produksi" id="durasi_produksi" value="<?= $data['durasi_produksi'] ?>" />
      <label for="pembuatan_ke">Pembuatan Ke</label>
      <input class="input" type="number" name="pembuatan_ke" id="pembuatan_ke" value="<?= $data['pembuatan_ke'] ?>" />
      <div align="center">
        <button type="submit" class="btn btn-simpan" name="edit"> Ubah </button>
        <button type="reset" class="btn btn-reset" name="reset"> Reset </button>
      </div>
    </form>
  </div>
</div>
</div>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	   sidebarBtn.onclick = function () {
		sidebar.classList.toggle("active");
		   if (sidebar.classList.contains("active")) {
			sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
  </script>
</body>
</php>
