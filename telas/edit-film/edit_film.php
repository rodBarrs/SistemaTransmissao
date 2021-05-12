<?php 
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$imagem = $_GET['imagem'];
$url_filme = $_GET['url_filme'];
$idfilme = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/icons/video.svg" type="image/svg" />
    <link rel="stylesheet" href="./edit_film.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <title>Cine Conselho | Editar</title>
  </head>
  <body>
		<div class="container">
			<header>
				<!-- starts header -->	
				<img src="../assets/logo.png" alt="logo" />
				<a href="../../logout.php">Sair</a>
			</header>
			<!-- end of header -->
	
			<main><!-- starts main -->

				<form name="register" action="../../regras/editarFilme.php?id=<?php echo $_GET['id']; ?>" method="post">
					<div class="form-content">

						<label for="name">Nome do filme:</label>
						<input
							value="<?php echo $_GET['nome']; ?>"
							required
							name="name"
							type="text" 
							placeholder="Digite o nome do filme"
						>

						<label for="description">Descrição:</label>
						<input
							value="<?php echo $_GET['descricao']; ?>"
							required
							name="description"
							type="text" 
							placeholder="Descrição do filme"
						>

						<label for="image">Imagem:</label>
						<input
							value="<?php echo $_GET['imagem']; ?>"
							required
							name="image"
				
						 >

						 <label for="url">URL:</label>
							<input
							value="<?php echo $_GET['url_filme']; ?>"
								required					
								name="url"
								type="text" 
								placeholder="URL"
							>
						
						<div class="buttons">
							<button type="submit">
								Salvar
							</button>		
							
							<a href="../login/login.html">
								Voltar
							</a>
						</div>
					
					</div>
				</form>
				
			</main>
			<!-- end of main -->

		</body>
		</div>
</html>
