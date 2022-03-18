<?php 

// Pour ceux qui se demandent ce qu'est ce fichier, c'était le fichier qui m'a permis d'afficher la commande SQL me permettant d'ajouter les 93 photos dans PHPmyADMIN 😄

for ($i=1000; $i <= 1093; $i++) { 
?>
INSERT INTO `photos`(`id`, `source`, `id_photo`, `nb_votes`) VALUES ('[value-1]','img/<?php echo $i; ?>.jpg','<?php echo $i; ?>','[value-4]');
<br>
<?php
}

 ?>