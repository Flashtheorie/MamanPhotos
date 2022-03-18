<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Classement</title>
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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