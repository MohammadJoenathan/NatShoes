<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    var_dump($jenis, $jumlah, $harga);

    $sql = "INSERT INTO bahan_baku VALUES(NULL, '$jenis', '$jumlah', '$harga')";

    if(empty($jenis) || empty($jumlah)|| empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'bahanbaku-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Baku Berhasil Ditambahkan');
                window.location = 'bahanbaku.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'bahanbaku-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id    = $_POST['id'];
    $jenis = $_POST['jenis'];
    $jumlah= $_POST['jumlah'];
    $harga = $_POST['harga'];

    $sql = "UPDATE bahan_baku SET 
            jenis = '$jenis',
            jumlah = '$jumlah',
            harga = '$harga'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Baku Berhasil Diubah');
                window.location = 'bahanbaku.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'bahanbaku-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM bahan_baku WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "DELETE FROM bahan_baku WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Baku Berhasil Dihapus');
                window.location = 'bahanbaku.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Bahan Baku Gagal Dihapus');
                window.location = 'bahanbaku.php';
            </script>
        ";
    }
}else {
    header('location: bahanbaku.php');
}