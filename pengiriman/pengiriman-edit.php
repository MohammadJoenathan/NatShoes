<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'pengiriman.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM pengiriman WHERE id = '$id'";
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
    <title> Edit Data Pengiriman </title>
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
          <a href="../produksi/produksi.php" class="active">
            <i class='bx bx-archive' ></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="pengiriman.php">
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
      <h3>Edit Data Pengiriman</h3>
      <div class="form-login">
        <form action="pengiriman-proses.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">

          <label for="id_produksi">ID Produksi</label>
          <input class="input" type="text" name="id_produksi" id="id_produksi" value="<?= $data['id_produksi'] ?>" />

          <label for="penerima">Penerima</label>
          <input class="input" type="text" name="penerima" id="penerima" value="<?= $data['penerima'] ?>" />

          <label for="jumlah_barang">Jumlah Barang</label>
          <input class="input" type="number" name="jumlah_barang" id="jumlah_barang" value="<?= $data['jumlah_barang'] ?>" />

          <label for="alamat_tujuan">Alamat Tujuan</label>
          <textarea class="input" name="alamat_tujuan" id="alamat_tujuan"><?= $data['alamat_tujuan'] ?></textarea>

          <label for="status_pengiriman">Status Pengiriman</label>
          <select class="input" name="status_pengiriman" id="status_pengiriman">
            <option value="Diproses" <?= ($data['status_pengiriman'] == 'Diproses') ? 'selected' : '' ?>>Diproses</option>
            <option value="Dikirim" <?= ($data['status_pengiriman'] == 'Dikirim') ? 'selected' : '' ?>>Dikirim</option>
            <option value="Diterima" <?= ($data['status_pengiriman'] == 'Diterima') ? 'selected' : '' ?>>Diterima</option>
          </select>

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
