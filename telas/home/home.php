<?php 
require_once '../../conexao.php';

try {	
	$id_catalogo = $_GET["id_catalogo"];

	$query = "SELECT * FROM filme WHERE filme.catalogo_idcatalogo = :id_catalogo";

	$stmt = $conexao->prepare($query);

	$stmt->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_INT);

	$stmt->execute();
	$filmes = $stmt->fetchAll();

} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/icons/video.svg" type="image/svg" />
    <link rel="stylesheet" href="./home.css" />
  
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <title>Cine Conselho | Home</title>
  </head>
  <body>
		<div class="container">
			<!-- starts header -->
			<header>	
				<img src="../assets/logo.png" alt="logo" />
				<a href="../../logout.php">Sair</a><br/>
				<a href="../new-film/new_film.html">Criar Filme</a>
			</header>
			<!-- end of header -->

			<h1>Filmes disponíveis</h1>
			<main><!-- starts main -->

				<ul>
					<?php 
					    foreach ($filmes as $filme) {
				    	echo '
					    <li>
							<a href="'.$filme["url_filme"].'">						
								<img src="'.$filme["imagem"].'">
								<aside>
								
									<label>Nome:</label>
									<strong class="title" >'.$filme["nome"].'</strong>
									
									<label>Descrição:</label>
									<span class="description">
										'.$filme["descricao"].'									
									</span><br/><br/>
								</aside>
								<a href="../../regras/excluirFilme.php?id='.$filme["idfilme"].'">Excluir</a><br/>
								<a href="../../regras/editarFilme.php?
									id='.$filme["idfilme"].'
									&url_filme='.$filme["url_filme"].'
									&imagem='.$filme["imagem"].'
									&nome='.$filme["nome"].'
									&descricao='.$filme["descricao"].'">Editar</a><br/>
							</a>
						</li>';
					    }
					?>
					
				</ul>
				
			</main>
			<!-- end of main -->
	
		</body>
		</div>
</html>
