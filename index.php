<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NatShoes - Produksi Sepatu Berkualitas</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>
    <div class="hero">
      <h1>NatShoes</h1>
      <h2>Produksi Sepatu Berkualitas</h2>
      <p>Kami memproduksi berbagai macam sepatu berkualitas tinggi untuk kebutuhan Anda.</p>
      <a href="#">Lihat Produk</a>
    </div>
    <div class="unggulan">
      <h3>Produk Terbaru Kami</h3>
    </div>
    <div class="slides">
      <div class="slide">
        <img src="./assets/images/sneaker2.png" alt="Gambar Sneakers1">
      </div>
      <div class="slide">
        <img src="./assets/images/sneaker3.png" alt="Gambar Sneakers2">
      </div>
      <div class="slide">
        <img src="./assets/images/sneaker4.png" alt="Gambar Sneakers3">
      </div>
      <div class="slide">
        <img src="./assets/images/sneaker5.png" alt="Gambar Sneakers4">
      </div>
      <div class="slide">
        <img src="./assets/images/sneaker6.png" alt="Gambar Sneakers5">
      </div>
      <div class="navigation">
        <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
        <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
      </div>
    </div>
    <div class="produksi">
      <h2>Kenapa Percaya Kami?</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/images/prospt.jpg" class="card-img-top" alt="Pembuatan Sepatu">
            <div class="card-body">
              <h5 class="card-title">Pembuatan Sepatu</h5>
              <p class="card-text">Setiap sepatu NatShoes dirancang dengan teliti untuk memberikan kenyamanan dan gaya kepada penggunanya.</p>
              <a href="#" style="color:white;">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/images/teknologi.jpg" class="card-img-top" alt="Teknologi Pembuatan">
            <div class="card-body">
              <h5 class="card-title">Teknologi Pembuatan</h5>
              <p class="card-text">Kami menggunakan teknologi canggih dalam setiap tahap pembuatan sepatu untuk memastikan kualitas optimal.</p>
              <a href="#" style="color:white;">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/images/desain.jpg" class="card-img-top" alt="Desain Sepatu">
            <div class="card-body">
              <h5 class="card-title">Desain Sepatu NatShoes</h5>
              <p class="card-text">Desain sepatu kami selalu mengikuti tren generasi muda dengan menggunakan warna cerah dan desain yang stylish.</p>
              <a href="#" style="color:white;">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tentang-kami">
      <h2>Tentang Kami</h2>
      <p>NatShoes adalah perusahaan yang bergerak di bidang produksi sepatu berkualitas tinggi. Kami telah
        <p>berpengalaman selama lebih dari 10 tahun dalam menyediakan sepatu untuk berbagai macam kebutuhan.</p>
        <p>Kami berkomitmen untuk memberikan produk terbaik bagi pelanggan kami dengan 
        <p>menggunakan bahan berkualitas tinggi dan desain yang inovatif.</p>
        <a href="#">Lebih Lanjut</a>
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
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length)
        {
          slideIndex = 1;
        }
        if (n < 1)
        {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++)
        {
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
    </script>
  </body>
  </html> 
  