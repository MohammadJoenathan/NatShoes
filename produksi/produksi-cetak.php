<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM produksi");
$html = '<center><h3>Data Produksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>ID Bahan Baku</th>
                <th>Nama Sepatu</th>
                <th>Jumlah Produksi</th>
                <th>Tanggal Produksi</th>
                <th>Durasi Produksi</th>
                <th>Pembuatan Ke</th>
            </tr>';
$no = 1;
while ($produksi = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $produksi['id_bahan_baku'] . "</td>
                <td>" . $produksi['nama_sepatu'] . "</td>
                <td>" . $produksi['jumlah_produksi'] . "</td>
                <td>" . $produksi['tanggal_produksi'] . "</td>
                <td>" . $produksi['durasi_produksi'] . "</td>
                <td>" . $produksi['pembuatan_ke'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-produksi.pdf');
?>
