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
    <title> Produksi</title>
    <link rel="stylesheet" href="../css/style_bahan.css">
    <link rel="stylesheet" href="../css/style_btn.css">
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
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
      </div>
    </nav>
  <div class="home-content">
    <h2>Data Produksi</h2>
    <button class= "btn btn-tambah">
      <i class="bx bx-plus"></i><a href="produksi-entry.php"> Tambah Data </a>
		</button>
    <button class="btn btn-cetak">
      <i class="bx bx-printer"></i><a href="produksi-cetak.php"> Cetak PDF </a>
		</button>
		<table class="table-data">
		   <thead>
          <tr>
            <th style="width: 10%">ID Bahan Baku</th>
            <th style="width: 10%">Nama Sepatu</th>
            <th style="width: 10%">Jumlah Produksi</th>
            <th style="width: 10%">Tanggal Produksi</th>
            <th style="width: 10%">Durasi Produksi</th>
            <th style="width: 10%">Pembuatan Ke</th>
            <th style="width: 15%">Action</th>
			    </tr>
		   </thead>
		    <tbody>
        <?php
            include '../koneksi.php';
            $sql = "SELECT * FROM produksi";
            $result = mysqli_query($koneksi, $sql);
            if (mysqli_num_rows($result) == 0) {
              echo "
          <tr>
            <td colspan='8' align='center'>
                Data Kosong
            </td>
          </tr>
          ";
            }
            while ($data = mysqli_fetch_assoc($result)) {
              echo "
                      <tr>
                        <td>$data[id_bahan_baku]</td>
                        <td>$data[nama_sepatu]</td>
                        <td>$data[jumlah_produksi]</td>
                        <td>$data[tanggal_produksi]</td>
                        <td>$data[durasi_produksi]</td>
                        <td>$data[pembuatan_ke]</td>
                        <td>
                          <button class= 'btn btn-edit'>
		                          <a href='produksi-edit.php?id=$data[id]'><i class='bx bx-edit'></i> Edit </a>
		                      </button>
                          <button class= 'btn btn-delete'>
		                          <a href='produksi-proses.php?hapus&id=$data[id]' onclick='return confirm('Apakah anda yakin menghapus data ini?')'>
                              <i class='bx bx-trash'></i> Hapus </a>
		                      </button>
                        </td>
                      </tr>
                    "; } ?>
		   </tbody>
		</table>
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