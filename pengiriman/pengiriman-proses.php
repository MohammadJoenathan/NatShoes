<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_produksi = $_POST['id_produksi'];
    $penerima = $_POST['penerima'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $status_pengiriman = $_POST['status_pengiriman'];

    $sql = "INSERT INTO pengiriman VALUES(NULL, '$id_produksi', '$penerima', '$jumlah_barang', '$alamat_tujuan', '$status_pengiriman')";

    if (empty($id_produksi) || empty($penerima) || empty($jumlah_barang) || empty($alamat_tujuan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'pengiriman-entry.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Pengiriman Berhasil Ditambahkan');
                window.location = 'pengiriman.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'pengiriman-entry.php'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_produksi = $_POST['id_produksi'];
    $penerima = $_POST['penerima'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $alamat_tujuan = $_POST['alamat_tujuan'];
    $status_pengiriman = $_POST['status_pengiriman'];

    $sql = "UPDATE pengiriman SET
            id_produksi = '$id_produksi',
            penerima = '$penerima',
            jumlah_barang = '$jumlah_barang',
            alamat_tujuan = '$alamat_tujuan',
            status_pengiriman = '$status_pengiriman'
            WHERE id = $id
            ";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Pengiriman Berhasil Diubah');
                window.location = 'pengiriman.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'pengiriman-edit.php';
            </script>
        ";
    }
} 
elseif (isset($_GET['hapus']) && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Validasi apakah id telah diisi
    if (empty($id)) {
        echo "<script>
                alert('Pilih Data Pengiriman yang Ingin Dihapus');
                window.location = 'pengiriman.php';
              </script>";
        return;
    }

    // Delete data dari tb_pengiriman
    $sql = "DELETE FROM pengiriman WHERE id = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data Pengiriman Berhasil Dihapus');
                window.location = 'pengiriman.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location = 'pengiriman.php';
              </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    header('location: pengiriman.php');
    exit;
}