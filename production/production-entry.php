<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Admin NatShoes | Production Entry</title>
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
          <a href="production.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Production</span>
          </a>
        </li>
        <li>
            <a href="../transaction/transaction.php">
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
	  <h3>Input Production</h3>
	  <div class="form-login">
		<form action="">
	  	    <label for="nama_sepatu">Nama Sepatu</label>
			<input class="input" type="text" name="nama_sepatu" id="nama_sepatu" placeholder="Nama Sepatu"/>
 		    <label for="jumlah_sepatu">Jumlah Sepatu</label>
			<input class="input" type="number" name="jumlah_sepatu" id="jumlah_sepatu" placeholder="Jumlah Sepatu" />
            <label for="durasi_produksi">Durasi Produksi</label>
			<input class="input" type="number" name="durasi_produksi" id="durasi_produksi" placeholder="Durasi Produksi" />
            <label for="buat_ke">Pembuatan Ke</label>
			<input class="input" type="number" name="buat_ke" id="buat_ke" placeholder="Pembuatan Ke" style="margin-bottom: 20px"/>
		   <button type="submit" class="btn btn-simpan" name="simpan" onclick="SimpanData()"> Simpan </button>
		</form>
	   </div>
	</div>
  <script>
    function SimpanData() {
      alert("Data Berhasil Disimpan");
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