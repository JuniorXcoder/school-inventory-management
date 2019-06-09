<?php
$koneksi = new mysqli ("localhost", "root", "", "db_alat");
date_default_timezone_set('Asia/jakarta');
$tanggal = date('d/m/Y');
$hari = date('d-m-Y');
$tanggal2 = date('d_M_Y');
$content = '<html><head>
<style type="text/javascript">
.table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;

}
.table td, .table th{
    border: 1px solid #ddd;
    padding: 5px; 
}
.table tr:nth-child(even){
background-color: #f2f2f2;
}
.table tr:hover {
    background-color: #ddd;
}
.table th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style></head>
';

$content .='
<body>
<img src="../../../asset/img/logo_smk.png" alt="logo Smk" width="110" height="110" align="left">
    <h5 style="text-align: center;"><strong>PEMERINTAH DAERAH PROVINSI JAWABARAT</strong><br>
        <strong>DINAS PENDIDIKAN</strong><br>
        <strong>SMK NEGRI 1 CILEUNGSI</strong><br>
        Jl. Raya Narogong Km 16.5 - Limusnunggal<br>
        Website: <u>www.smkn1cileungsi.sch.id</u> Email: <u>smk@smkn1cileungsi.sch.id</u><br>
        Cileungsi - 16820
    </h5>
<hr>
    <br>
    <br>
    <br><p><strong>Report Transaksi</strong><br>
    <br><strong>Tanggal Report:</strong> '.$tanggal.'</p>
    <br>
    <br>
    <br>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama Peminjam</th>
        <th>Kelas Peminjam</th>
        <th>Jenis Kelamin</th>
        <th>Alat</th>
        <th>status</th>
        <th>Jam Keluar</th>
        <th>Jam Kembali</th>
        <th>Nama Pengembali</th>
        <th>Kelas Pengembali</th>
        <th>Jenis Kelamin</th>
    </tr>';    
    $no = 1;
    $sql = $koneksi->query("SELECT * FROM transaksi");
    while ($data=$sql -> fetch_assoc()){
$content .='
        <tr>
            <td>'.$no++.'</td>
            <td>'.$data['n_peminjam'].'</td>
            <td>'.$data['k_peminjam'].'</td>
            <td>'.$data['jk_peminjam'].'</td>
            <td>'.$data['alat'].'</td>
            <td>'.$data['status'].'</td>
            <td>'.$data['jam_keluar'].'</td>
            <td>'.$data['jam_kembali'].'</td>
            <td>'.$data['n_pengembali'].'</td>
            <td>'.$data['k_pengembali'].'</td>
            <td>'.$data['jk_pengembali'].'</td>
        </tr>';
    }
$content .='</table></body></html>';

require_once '../../../asset/dompdf/autoload.inc.php';
require_once '../../../asset/dompdf/lib/html5lib/Parser.php';
require_once '../../../asset/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once '../../../asset/dompdf/lib/php-svg-lib/src/autoload.php';
require_once '../../../asset/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($content);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('B4', 'Landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('laporan_transaksi_semua.pdf');
?>