<?php

include 'configs/db.php';

include 'models/message.php';

try{
	$connexion = new PDO(DSN, USERNAME, PASSWORD, $options);  
	$connexion->query('SET CHARACTER SET UTF8');
	$connexion->query('SET NAMES UTF8');
}catch(PDOException $e){
	die($e->getArticles());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$errors=[];
	if(!empty($_POST['titre'])){
		$titre = $_POST['titre'];
	}else{
		$errors['titre'] = true;
	}

	if(!empty($_POST['description'])){
		$description = $_POST['description'];
	}else{
		$errors['description'] = true;
	}

	if(!empty($_POST['categorie'])){
		$categorie = $_POST['categorie'];
	}else{
		$errors['categorie'] = true;
	}

	if(!$errors){
		createArticle($connexion, $titre, $description, $categorie);
	}

}

$articles = getArticles($connexion);
$categories = createList($connexion);

include 'view/golden.php';




