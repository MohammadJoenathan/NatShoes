<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $id_bahan_baku = $_POST['id_bahan_baku'];
    $nama_sepatu = $_POST['nama_sepatu'];
    $jumlah_produksi = $_POST['jumlah_produksi'];
    $tanggal_produksi = $_POST['tanggal_produksi'];
    $durasi_produksi = $_POST['durasi_produksi'];
    $pembuatan_ke = $_POST['pembuatan_ke'];
    
    $sql = "INSERT INTO produksi VALUES(NULL, '$id_bahan_baku', '$nama_sepatu', '$jumlah_produksi', '$tanggal_produksi', '$durasi_produksi', '$pembuatan_ke')";

    if(empty($id_bahan_baku) || empty($nama_sepatu) || empty($jumlah_produksi) || empty($tanggal_produksi) || empty($durasi_produksi) || empty($pembuatan_ke)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'produksi-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Ditambahkan');
                window.location = 'produksi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_bahan_baku = $_POST['id_bahan_baku'];
    $nama_sepatu = $_POST['nama_sepatu'];
    $jumlah_produksi = $_POST['jumlah_produksi'];
    $tanggal_produksi = $_POST['tanggal_produksi'];
    $durasi_produksi = $_POST['durasi_produksi'];
    $pembuatan_ke = $_POST['pembuatan_ke'];

    $sql = "UPDATE produksi SET 
            id_bahan_baku = '$id_bahan_baku',
            nama_sepatu = '$nama_sepatu',
            jumlah_produksi = '$jumlah_produksi',
            tanggal_produksi = '$tanggal_produksi',
            durasi_produksi = '$durasi_produksi',
            pembuatan_ke = '$pembuatan_ke'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Diubah');
                window.location = 'produksi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-edit.php';
            </script>
        ";
    }
}
// Proses hapus data produksi
elseif (isset($_GET['hapus']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi apakah id telah diisi
    if (empty($id)) {
        echo "<script>
                alert('Pilih Data Produksi yang Ingin Dihapus');
                window.location = 'produksi.php';
              </script>";
        return;
    }

    // Delete data dari tb_produksi
    $sql = "DELETE FROM produksi WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data Produksi Berhasil Dihapus');
                window.location = 'produksi.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi.php';
              </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    header('location: produksi.php');
    exit;
}