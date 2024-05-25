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
}
elseif (isset($_GET['hapus']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi apakah id telah diisi
    if (empty($id)) {
        echo "<script>
                alert('Pilih Data Bahan Baku yang Ingin Dihapus');
                window.location = 'bahanbaku.php';
              </script>";
        return;
    }

    // Delete data dari tb_bahan_baku
    $sql = "DELETE FROM bahan_baku WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data Bahan Baku Berhasil Dihapus');
                window.location = 'bahanbaku.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'bahanbaku.php';
              </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    header('location: bahanbaku.php');
    exit;
}