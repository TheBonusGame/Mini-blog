<doctype html>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Blog</title>
	</head>
	<body>
		<header>
			<div class="branding">
				<div class="logo">
					<img src=""
						 alt="">
				</div>
			</div>
		</header>
	<main>	
		<h1>Mon blog</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
				<tr>
					<div class="form-group">
						<td>
							<label for="titre">Titre:</label>
						</td>
						<td>
							<input  type="text"
							   	 	name="titre"
							   		id="titre">
						</td>
					</div>	
				</tr>
				<tr>			
					<div class="form-group">
						<td>
							<label for="categorie">Categorie:</label>
						</td>
						<td>
								<select name="categorie" id="categorie">
					    				<?php foreach($categories as $categorie): ?>
								       	 <option value="<?php echo $categorie['id']; ?>">
								         	<?php echo $categorie["name"]; ?>
								         </option> 
										<?php endforeach; ?>
								</select>
						</td>
				</tr>
				<tr>
					<div class="form-group"> 
						<td>
							<label for="description" class="control-label">Description:</label>
						</td>
						<td>
							<textarea name="description"
									  id="description"
									  cols="30"
									  rows="10">
							</textarea>
						</td>
					</div>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Envoyer">
					</td>
				</tr>
			</table>
		</form>
	</main>
	<div class="messages">
				<footer class="article">
					<?php foreach ($articles as $article):?>
						<div class="article">
							<footer class="article"> </footer>
								<p>
									<?php echo $article ["titre"] ?>
									- <?php echo $article ["category_id"] ?>
									- <?php echo $article ["date"] ?>
								</p>
							</footer>
							<div class="article">
								<?php echo $article["body"]; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</footer>
	<footer>
		<p></p>
	</footer>
	</body>
</html>