<?php 

require_once "credentials.php";

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req1 = $bdd->prepare("SELECT * FROM photos ORDER by RAND() LIMIT 1");
$req1->execute();
$photos1 = $req1->fetch(PDO::FETCH_OBJ);







echo '<img src="'.$photos1->source.'">';
echo "<input type='hidden' id='value_photos_1' value='".$photos1->id."'>";


?>

