<?php
include "../controllers/ProduitController.php";

$controller = new ProduitController();
$controller->ajouter($_POST['nom'], $_POST['prix']);
?>
