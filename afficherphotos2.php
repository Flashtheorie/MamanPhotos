<?php 

require_once "credentials.php";

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req1 = $bdd->prepare("SELECT * FROM photos ORDER by RAND() LIMIT 1");
$req1->execute();
$photos2 = $req1->fetch(PDO::FETCH_OBJ);







echo '<img src="'.$photos2->source.'">';
echo "<input type='hidden' id='value_photos_2' value='".$photos2->id."'>";


?>

