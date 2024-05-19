<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if(!$photo) {
        return false;
    }
    var_dump($photo, $categories, $price, $description);

    $sql = "INSERT INTO tb_categories VALUES(NULL, '$photo', '$categories', '$price', '$description')";

    if(empty($categories) || empty($price)|| empty($description)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'categories-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = 'categories.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $categories = $_POST['categories'];
    $price      = $_POST['price'];
    $description = $_POST['description'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak

    $sql = "UPDATE tb_categories SET 
            photo = '$photo',
            categories = '$categories',
            price = '$price',
            description = '$description'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = 'categories.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_categories WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('../img_categories/' . $photo);
    

    $sql = "DELETE FROM tb_categories WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = 'categories.php';
            </script>
        ";
    }
}else {
    header('location: categories.php');
}