<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Admin NatShoes | Transaction</title>
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
          <a href="../admin.pho">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../production/production.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Production</span>
          </a>
        </li>
        <li>
            <a href="transaction.php" class="active">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">Transaction</span>
            </a>
          </li>
        <li class="log_out">
          <a href="../index.php">
            <i class='bx bx-log-out'></i>
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
        <span class="admin_name">Administrator</span>
      </div>
    </nav>
     <div class="home-content">
        <h3>Trasaction</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="transaction-entry.html">Tambah Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 13%">Nama Pembeli</th>
			  <th style="width: 13%">Nama Sepatu</th>
        <th style="width: 13%">Ukuran Sepatu</th>
			  <th style="width: 13%">Harga</th>
        <th style="width: 13%">Jumlah Sepatu</th>
			  <th style="width: 15%">Tanggal Transaksi</th>
			  <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Natan</td>
			   <td>Sneakers High Denim</td>
			   <td>33</td>
         <td>270000</td>
         <td>2</td>
			   <td>03-23-2024</td>
			   <td>
          <button type="button" class="btn btn-edit">
            <a href="#">Edit</a>
          </button>
          <button type="button" class="btn btn-delete" onclick="konfirHapus()">
            <a href="transaction.html">Hapus</a>
          </button>
        </td>
			</tr>
		   </tbody>
		</table>
	   </div>
    </div>
    <script>
      function konfirHapus() {
        if (confirm("Apakah Anda yakin menghapus data ini?")) {
          alert("Data berhasil dihapus.");
          // Kode untuk menghapus data
        } else {
          alert("Penghapusan data dibatalkan.");
        }
      }

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