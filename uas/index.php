<?php include 'config.php'; ?>
<!DOCTYPE html>


<html lang"en">
<head>

<meta charset="UTF-8">
<title>Artikel Komen</title>
</head>
<body>
<?php
$sql="SELECT * FROM artikel";
$que= mysql_query($sql);
while ($res=mysql_fetch_array($que)) { ?>

<td><a href="detail.php?detail=<?php echo $res['id_artikel']; ?>"></td>
 <h4><?php echo $res['judul']?></h4>
</a>

<h4><?php echo substr($res['isi'], 0,30);?></h4>
<h4>Read More </h4>


<?php }?>

</body>
</html>