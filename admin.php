<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard Admin NatShoes </title>
    <link rel="stylesheet" href="./css/style_admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="./assets/images/logospt1.png" alt="Logo NatShoes" class="logo"/>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./production/production.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Production</span>
          </a>
        </li>
        <li>
          <a href="./transaction/transaction.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Transaction</span>
          </a>
        </li>
        <li class="log_out">
          <a href="index.php">
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="./assets/images/admin.png" alt="Logo Administrator">
        <span class="admin_name">Administrator</span>
      </div>
    </nav>
     <div class="home-content">
       <div class="overview-boxes">
          <h2>Selamat Datang Administrator!</h2>
          <div id="clock"></div>
          <div id="date"></div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function currentTime() {
      let date = new Date();
      let hh = date.getHours();
      let mm = date.getMinutes();
      let ss = date.getSeconds();
      let day = date.getDay();
      let days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      let month = date.getMonth();
      let months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      let year = date.getFullYear();
      let session = "AM";
      if (hh > 12) {
        session = "PM";
        hh = hh - 12;
      }
      hh = hh < 10 ? "0" + hh : hh;
      mm = mm < 10 ? "0" + mm : mm;
      ss = ss < 10 ? "0" + ss : ss;
      let time = hh + ":" + mm + ":" + ss + " " + session;
      let formattedDate =
        days[day] + ", " + date.getDate() + " " + months[month] + " " + year;
      document.getElementById("clock").innerText = time;
      document.getElementById("date").innerText = formattedDate;
      var t = setTimeout(function () {
        currentTime();
      }, 1000);
    }
    currentTime();

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