<?php 
include_once '../../listarFilmes.php';
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
					    while($filme = $filmes) {
					        print_r($filme);
					    }
					?>
					<li>
						<a href="#">						
							<img src="https://cdn.shopify.com/s/files/1/0057/3728/3618/products/108b520c55e3c9760f77a06110d6a73b_e97cf224-d57f-44e3-8477-4f5479cd746b_480x.progressive.jpg?v=1573616089" alt="avengers">
							<aside>
							
								<label>Nome:</label>
								<strong class="title" >Avengers: Endgame</strong>
								
								<label>Descrição:</label>
								<span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius odio, cum eos iste cumque inventore sint, deserunt molestiae similique ad beatae corporis minus dolorum error facere qui reiciendis dignissimos eaque.
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aperiam molestiae quibusdam aliquam porro culpa alias id eligendi! Odit velit eaque quos illum architecto earum illo debitis odio voluptates eligendi.									
								</span>

							</aside>
						</a>
					</li>

					<li>
						<a href="../film/film.html">						
							<img src="https://cdn.shopify.com/s/files/1/0057/3728/3618/products/108b520c55e3c9760f77a06110d6a73b_e97cf224-d57f-44e3-8477-4f5479cd746b_480x.progressive.jpg?v=1573616089" alt="avengers">
							<aside>
							
								<label>Nome:</label>
								<strong class="title" >Avengers: Endgame</strong>
								
								<label>Descrição:</label>
								<span class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius odio, cum eos iste cumque inventore sint, deserunt molestiae similique ad beatae corporis minus dolorum error facere qui reiciendis dignissimos eaque.
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aperiam molestiae quibusdam aliquam porro culpa alias id eligendi! Odit velit eaque quos illum architecto earum illo debitis odio voluptates eligendi.									
								</span>

							</aside>
						</a>
					</li>
					
				</ul>
				
			</main>
			<!-- end of main -->
	
		</body>
		</div>
</html>
