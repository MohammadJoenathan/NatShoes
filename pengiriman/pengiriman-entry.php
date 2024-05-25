<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Tambah Data Pengiriman </title>
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
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
      </div>
    </nav>
      <div class="home-content">
      <h3>Tambah Data Pengiriman</h3>
      <div class="form-login">
        <form action="pengiriman-proses.php" method="post" enctype="multipart/form-data">
          <label for="id_produksi">ID Produksi</label>
          <input class="input" type="text" name="id_produksi" id="id_produksi" placeholder="ID Produksi" />
          
          <label for="penerima">Penerima</label>
          <input class="input" type="text" name="penerima" id="penerima" placeholder="Penerima" />

          <label for="jumlah_barang">Jumlah Barang</label>
          <input class="input" type="number" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang" />

          <label for="alamat_tujuan">Alamat Tujuan</label>
          <textarea class="input" name="alamat_tujuan" id="alamat_tujuan" placeholder="Alamat Tujuan"></textarea>

          <label for="status_pengiriman">Status Pengiriman</label>
          <select class="input" name="status_pengiriman" id="status_pengiriman">
            <option value="Diproses">Diproses</option>
            <option value="Dikirim">Dikirim</option>
            <option value="Diterima">Diterima</option>
          </select>

          <div align="center">
            <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
            <button type="reset" class="btn btn-reset" name="reset"> Reset </button>
          </div>
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