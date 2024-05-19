<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Admin NatShoes | Production</title>
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
        <h3>Production</h3>
 	   <button type="button" class="btn btn-tambah">
 	      <a href="production-entry.html">Tambah Data</a>
	   </button>
	   <table class="table-data">
		<thead>
		   <tr>
			<th scope="col" style="width: 20%">Nama Sepatu</th>
			<th scope="col" style="width: 20%">Jumlah Sepatu</th>
            <th scope="col" style="width: 20%">Durasi Produksi</th>
            <th scope="col" style="width: 20%">Pembuatan Ke</th>
			<th scope="col" style="width: 20%">Aksi</th>
		   </tr>
		</thead>
		<tbody>
    <?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_categories";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>
                        <img src='../img_categories/$data[photo]' width='200px'>
                      </td>
                      <td>$data[categories]</td>
					  <td>$data[description]</td>
                      <td>$data[price]</td>
                      <td >
                        <a class='btn-edit' href=categories-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=categories-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
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