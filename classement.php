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

require_once 'credentials.php';
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nbr_votes = $bdd->prepare("SELECT sum(nb_votes) as sumVotes FROM photos");
$nbr_votes->execute();

$nombre = $nbr_votes->fetch(PDO::FETCH_OBJ);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="container" align="center">
	<h3>Photos classées selon les <code><?php echo $nombre->sumVotes; ?></code> votes</h3>
<hr>
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