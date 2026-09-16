<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Agenda Siswa</title>
<style>
body { font-family: Arial, sans-serif; padding: 30px; background-color:
#f4f7f6; }
.table-container { max-width: 800px; margin: 0 auto; background: white;
padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
table { width: 100%; border-collapse: collapse; margin-top: 15px; }
th, td { border-bottom: 1px solid #ddd; padding: 12px; text-align: left; }
th { background-color: #2c7a7b; color: white; }
.btn-tambah { display: inline-block; padding: 8px 15px; background:
#1a365d; color: white; text-decoration: none; border-radius: 4px; }
</style>
</head>
<body>
<div class="table-container">
<h2>Daftar Riwayat Agenda</h2>
<a href="index.html" class="btn-tambah">+ Tambah Agenda Baru</a>
<table>
<thead>
<tr>
<th>No</th>
<th>Tanggal</th>
<th>Aktivitas</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php
// Mengambil data dari database diurutkan dari tanggal terbaru
$result = mysqli_query($koneksi, "SELECT * FROM tbl_agenda ORDER
BY tanggal DESC");
$no = 1;
// Melakukan looping untuk menampilkan setiap baris data
while ($data = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $no++ . "</td>";
echo "<td>" . $data['tanggal'] . "</td>";
echo "<td>" . $data['aktivitas'] . "</td>";
echo "<td>" . $data['keterangan'] . "</td>";
echo "</tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>