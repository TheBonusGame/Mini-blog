<?php
function createArticle($dbConnexion, $titre, $description, $categorie)
{
	$sql = 'INSERT INTO articles(titre, body, category_id) VALUES(:titre, :description, :categorie)'; 
	try{
		$pdost = $dbConnexion->prepare($sql);
		$pdost->execute([':titre'=>$titre, ':description'=>$description, ':categorie'=>$categorie]);
	}catch(PDOException $e){
		die($e->getArticles());
	}
}

function getArticles($dbConnection)
{	
	$sql = 'SELECT * FROM articles';
	$pdost = $dbConnection->query($sql);
	return $pdost->fetchall();
}



function createList($dbConnection)
{
	$sql = 'SELECT * FROM categories ORDER BY categories.id ASC';
	$pdost = $dbConnection->query($sql);
	return $pdost->fetchall();
}
