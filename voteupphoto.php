<?php
session_start();
$id = $_GET['id'];
require_once 'credentials.php';
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req = $bdd->prepare("UPDATE photos set nb_votes = nb_votes +1 WHERE id = :id");
$req->bindValue(':id', $id, PDO::PARAM_INT);
$req->execute();




header('Location:home.php');

 ?>
 <?php 
$bdd = null;
 ?>