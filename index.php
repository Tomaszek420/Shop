<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>R3MAKE - Sklep Internetowy</title>
</head>
<body>
	<main>
		<?php
		include 'init.php'; // Umożliwi zarządzanie sesją
		include 'header.php'; // Włącz nagłówek
		?>
		
		<img src="grafika1.png" alt="grafika" class="logo">
	</main>
	<section class="hoodie">
		<table id="hoodie">
			<tr>
				<td>
					 <div class="product">
						<h3>Gray hoodie</h3>
						<a href="product.php?id=1"><img src="sz2.png" class="photo"></a>
						<p>Cena: 100zł</p>
						<a href="product.php?id=1" class="info-product">Z0BACZ W13C3J</a>
					</div>
				</td>
				<td>
					<div class="product">
						<h3>Blue hoodie</h3>
						<a href="product.php?id=2"><img src="b.png" class="photo"></a>
						<p>Cena: 120zł</p>
						<a href="product.php?id=2" class="info-product">Z0BACZ W13C3J</a>
					</div>
				</td>
				<td>
					<div class="product">
						<h3>Red hoodie</h3>
						<a href="product.php?id=3"><img src="r1.png" class="photo"></a>
						<p>Cena: 150zł</p>
						<a href="product.php?id=3" class="info-product">Z0BACZ W13C3J</a>
					</div>
				</td>
				<td>
					<div class="product">
						<h3>Black hoodie</h3>
						<a href="product.php?id=4"><img src="cz2.png" class="photo"></a>
						<p>Cena: 200zł</p>
						<a href="product.php?id=4" class="info-product">Z0BACZ W13C3J</a>
					</div>
				</td>
			</tr>
		</table>
	</section>
	
	<br><br><br><br><br><br><br>
	
	<footer>
		<?php 
			include 'footer.php';
		?>
	</footer>
</body>
</html>