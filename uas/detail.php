<?php include 'config.php'; ?>
<!DOCTYPE html>


<html lang"en">
<head>

<meta charset="UTF-8">
<title>detail</title>
</head>
<body>
<?php
	$id = $_GET['detail'];
	if (isset($_GET['detail'])) {
	$sql="SELECT * FROM artikel WHERE id_artikel = '$id'";
	$que= mysql_query($sql);
	while ($res=mysql_fetch_array($que)) { ?>


<h1><?php echo $res['judul']?></h1>

<h2><?php echo substr($res['isi'], 0,100);?></h2>
<?php include 'komen.php'; ?>


	<?php } }?>

</body>
</html>