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
				<a href="../login/login.html">Sair</a>
			</header>
			<!-- end of header -->

			<h1>Filmes disponíveis</h1>
			<main><!-- starts main -->

				<ul>
					<?php 
					    foreach ($filmes as $filme) {
				    	echo `
					    <li>
							<a href="`.$filme["url_filme"].`">						
								<img src="https://cdn.shopify.com/s/files/1/0057/3728/3618/products/108b520c55e3c9760f77a06110d6a73b_e97cf224-d57f-44e3-8477-4f5479cd746b_480x.progressive.jpg?v=1573616089" alt="avengers">
								<aside>
								
									<label>Nome:</label>
									<strong class="title" >`.$filme["nome"].`</strong>
									
									<label>Descrição:</label>
									<span class="description">
										`.$filme["descricao"].`									
									</span>

								</aside>
							</a>
						</li>`;
					    }
					?>
					
				</ul>
				
			</main>
			<!-- end of main -->
	
		</body>
		</div>
</html>