<?php
include(‘config.php');
//di buat oleh enterprise2605
//afian2605@ymail.com
if($_GET['action']== ‘delete’){
mysql_query(“delete from comment where induk=’”.mysql_real_escape_string($_GET['DEL']).”‘”);
}
$tampil = mysql_query(“SELECT * FROM comment WHERE 1″);
echo “<table border=1 align=center width=500>
<tr><th>INDUK</th><th>NAMA LENGKAP</th><th>EMAIL</th><th>KOMENTAR</th><th>AKSI</th>”;
while ($tampil2 = mysql_fetch_array($tampil)){
echo ‘<tr><td>’.$tampil2['induk'].’</td>’;
echo ‘<td>’.$tampil2['nama'].’</td>’;
echo ‘<td>’.$tampil2['email'].’</td>’;
echo  ‘<td>’.$tampil2['komentar'].’</td>’;
echo ‘<td><a href=”tampil.php?DEL=’.$tampil2['induk'].’&action=delete”>hapus</a></td></tr>’;
}
echo “</table>”;
?>