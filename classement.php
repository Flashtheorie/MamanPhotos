<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Classement</title>
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
</head>
<style>
	img {
		width: 500px;
	}
</style>
<body>

<?php include 'navbar.php'; ?>
<?php 
require_once 'credentials.php';
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req = $bdd->prepare("SELECT * FROM photos ORDER BY nb_votes DESC");
$req->execute();
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="container" align="center">
<div class="row">
<?php 

while ($photos = $req->fetch(PDO::FETCH_OBJ)) {
	echo "<div class='col-sm>'>";

if ($photos->nb_votes > 1) {
	$s = "s";
}
else
{
	$s = "";
}

echo "<a href='".$photos->source."'><img src='".$photos->source."' class='img-thumbnail'></a>
<br>
".$photos->nb_votes." vote".$s." <hr>

	







	</div>";
}

?>
</div>


</div>




</body>
</html>