<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="description"
			content="Restaurant traditionel italien à Vert le Petit"
		/>
		<title>La Casa di Antonio</title>

		<link rel="icon" href="img/vesuvio.png" />

		<!--           STYLES         -->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link rel="stylesheet" href="jqueryui/jquery-ui.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css" integrity="sha512-GgUcFJ5lgRdt/8m5A0d0qEnsoi8cDoF0d6q+RirBPtL423Qsj5cI9OxQ5hWvPi5jjvTLM/YhaaFuIeWCLi6lyQ==" crossorigin="anonymous" />
		<!-- <link rel="stylesheet" href="css/snow.css" /> -->

		<script
			src="https://kit.fontawesome.com/babf6c6ed5.js"
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<!--            LOADER          -->	
		<div class="pizza">
			<canvas id="pizza" class="loader"></canvas>
			<h1>La Casa di Antonio</h1>
		</div>

		<!-- 		<div class="xmas">
			<div class="popup">
				<i class="far fa-times-circle close-xmas"></i>
				<img src="img/xmas.jpg" alt="Repas de noel" />
				<div class="xmas-text">
					<h1>Menu de Noël à emporter</h1>
					<h4>
						Decouvrez notre menu à emporter pour les fêtes. <br />
						Vous pouvez le reserver jusqu'au 22 décembre.
					</h4>
					<a href="docs/noel.pdf"
						><button>Telecharger la carte</button></a
					>
					<p>
						Appelez-nous pour effectuer votre réservation <br />
						au <a href="tel:+39988419659">09 88 41 96 59</a>
					</p>
				</div>
			</div>
		</div> -->

		<!-- 		<div class="snowcontainer">
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
			<div class="snowflake"></div>
		</div> -->

		<header class="navbar">
			<div class="container">
				<nav>
					<div class="logo">
						<a href="index.html">La Casa Di Antonio</a>
					</div>
					<div class="nav-links">
						<ul class="links">
							<li><a href="#home">Accueil</a></li>
							<li><a href="#menu">Menu</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
					<div class="nav-cta">
						<a href="tel:0988419659" class="phone">
							<i class="fas fa-phone-alt" aria-hidden="true"></i>
							09 88 41 96 59</a
						>
						<a href="#reservation"
							><button class="cant">Reservez</button></a
						>
						<a
							href="https://www.facebook.com/La-Casa-Di-Antonio-103770127923608"
							target="_blank"
							class="fb-icon"
							><i
								class="fab fa-facebook-square"
								aria-hidden="true"
							></i
						></a>
					</div>
					<div class="burger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
					</div>

					<div class="for-mobile">
						<ul class="moblink">
							<li class="linko"><a href="#home">Accueil</a></li>
							<li class="linko"><a href="#menu">Menu</a></li>
							<li class="linko">
								<a href="#contact">Contact</a>
							</li>
						</ul>
						<div class="mob-cta">
							<a href="tel:0988419659" class="phone">
								<i
									class="fas fa-phone-alt"
									aria-hidden="true"
								></i>
								09 88 41 96 59</a
							>
							<a href="#reservation"
								><button class="cant">Reservez</button></a
							>
							<a
								href="https://www.facebook.com/La-Casa-Di-Antonio-103770127923608"
								target="_blank"
								class="fb-icon"
								><i
									class="fab fa-facebook-square"
									aria-hidden="true"
								></i>
								Facebook</a
							>
						</div>
					</div>
				</nav>
			</div>
			<p>Nous serons exeptionnellement fermés ce Mardi 01 et Mercredi 02 février 2022.</p>
			<div class="valentine">
				<button>
					<div id="hearts-alpaca" class="hearts">
						<div class="heart"></div>
						<div class="heart"></div>
						<div class="heart"></div>
						<div class="heart"></div>
					</div>
					MENU ST VALENTIN <i class="far fa-heart"></i>
				</button>
			</div>
		</header>

		<section id="home">
			<div class="dark-filter"></div>
			<div class="container">
				<div class="home-text">
					<div class="first-text">
						<h3>VENEZ GOUTER L'ITALIE</h3>
						<!-- <img src="img/vesuvio.png" alt="Vesuvio" /> -->
					</div>
					<h1>
						Une ambiance familiale qui vous accueillera avec le
						sourire et la passion pour ce qui est simple mais
						véritable, comme notre traditionnelle cuisine italienne.
					</h1>
					
				</div>
			</div>
		</section>

		<section id="menu">
			<img src="img/pizza.png" alt="Pizza">
			<div class="container">
				<div class="menu-title">
					<h1>Nos Plats, Pizzas et Desserts</h1>
					<h4>
						Vous pouvez telecharger nos cartes sur place et à
						emporter en cliquant sur les buttons ci-dessous.
					</h4>
					<div class="pdfs">
						<a href="docs/emporter.pdf" class="carte"
							><button>CARTE À EMPORTER</button></a
						>
						<a href="docs/sur-place.pdf" class="carte"
							><button>CARTE SUR PLACE</button></a
						>
					</div>
				</div>
			</div>

			<div class="interactive-menu">
				<div class="tab">
					<button
						class="tablinks"
						onclick="opentab(event, 'Antipasti')"
						id="defaultOpen"
					>
						Antipasti
					</button>
					<button class="tablinks" onclick="opentab(event, 'Pasta')">
						Pasta
					</button>
					<button class="tablinks" onclick="opentab(event, 'Carne')">
						Carne
					</button>
					<button class="tablinks" onclick="opentab(event, 'Pizze')">
						Pizze
					</button>
					<button class="tablinks" onclick="opentab(event, 'Dolci')">
						Dolci
					</button>
				</div>

				<div id="Antipasti" class="tabcontent">
					<div class="menu-items">
						<div class="menu-item">
							<div class="item-text">
								<h2>La Classica</h2>
								<p>
									Jambon cru italien, Mozzarella di Bufala et
									Melon
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Tarantella</h2>
								<p>
									Assortiment composé de Mozzarella di Bufala,
									Burrata et Bocconcini
								</p>
							</div>
							<span class="item-price"> 12.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>La Burrata</h2>
								<p>
									Burrata di Bufala 125gr servie tiède avec
									tomates cerises à l'huile d'olive vierge
									extra
								</p>
							</div>
							<span class="item-price"> 12.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Delizia dell’orto</h2>
								<p>
									Bruschette de pain grillé, parfumées à l’ail
									frais et tomates cerises et basilic.
								</p>
							</div>
							<span class="item-price"> 8.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Fantasia del Vesuvio</h2>
								<p>
									Aubergines grillées, poivrons grillés,
									courgettes grillées, sur un lit de roquette
									avec mozzarella de bufflonne.
								</p>
							</div>
							<span class="item-price"> 14.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>La Capri</h2>
								<p>
									Mozzarella de bufflonne et tomates garnis
									avec huile d’olive et basilic.
								</p>
							</div>
							<span class="item-price"> 11.50 € </span>
						</div>
					</div>
				</div>
				<div id="Pasta" class="tabcontent">
					<div class="menu-items">
						<div class="menu-item">
							<div class="item-text">
								<h2>Carbonara</h2>
								<p>
									Spaghetti de semoule de blé dur italienne
									avec poitrine de porc, oeuf, poivre noir.
								</p>
							</div>
							<span class="item-price"> 14.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Tagliatelles à la crème de truffe</h2>
								<p>
									Préparé avec fromage blanc et copeaux de
									Grana Padano.
								</p>
							</div>
							<span class="item-price"> 15.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Gnocchi al sugo napoletano</h2>
								<p>
									Gnocchi de pomme de terre, sauce tomate
									traditionnelle napolitaine, mozzarella,
									Grana Padano et basilic gratiné au four.
								</p>
							</div>
							<span class="item-price"> 13.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Lasagna alla bolognese</h2>
								<p>
									Lasagnes aux oeufs, mozzarella, viande
									hachée de boeuf et de porc, sauce béchamel,
									Grana Padano et gratiné au four.
								</p>
							</div>
							<span class="item-price"> 14.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Parmigiana</h2>
								<p>Gratin d’aubergines à la sicilienne.</p>
							</div>
							<span class="item-price"> 13.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Gnocchi ai quattro formaggi</h2>
								<p>
									Gnocchi de pomme de terre aux 4 fromages,
									taleggio, gorgonzola, scamorza et Grana
									Padano.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Paccheri ai frutti di mare</h2>
								<p>
									Pâtes aux fruits de mer, palourdes, moules,
									calamars, crevettes, tomates cerises, ail et
									persil.
								</p>
							</div>
							<span class="item-price"> 15.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Mezze maniche alla norma</h2>
								<p>
									Sauce tomate, aubergines frites, ricotta et
									basilic.
								</p>
							</div>
							<span class="item-price"> 13.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Malefatti al salmone</h2>
								<p>
									Pâte fraîche farcie au saumon fumé avec
									burrata.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Pappardelle alla boscaiola</h2>
								<p>
									Pâtes à la sauce tomate avec crème fraîche,
									lardons, cèpes et champignons, parfumé de
									persil et ail.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Orecchiette zucchine e gamberetti</h2>
								<p>
									Orecchiette, base crème, courgettes et
									crevettes roses et burrata.
								</p>
							</div>
							<span class="item-price"> 15.00 € </span>
						</div>
					</div>
				</div>
				<div id="Carne" class="tabcontent">
					<div class="menu-items">
						<div class="menu-item">
							<div class="item-text">
								<h2>Tagliata di manzo</h2>
								<p>
									Pièce de boeuf en fine tranches, tomates cerises, copeaux de parmesan, vinaigre balsamique, accompagnée de pommes grenailles sautées.
								</p>
							</div>
							<span class="item-price"> 18.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Scaloppina alla sorrentina</h2>
								<p>
									Noix de veau, jambon blanc, mozzarella, sauce tomate et basilic accompagné de spaghetti (crème ou sauce tomate).
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Cotoletta alla milanese</h2>
								<p>
									Escalope de veau panée, accompagnée de spaghetti (crème ou sauce tomate).
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Saltimbocca alla romana</h2>
								<p>
									Escalope de veau, sauges et jambon cru italien, accompagnée de pâtes ou frites.
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Spezzatino al ragù napoletano</h2>
								<p>
									Mixte de viande de boeuf et de porc, mijoté à la sauce tomate napolitaine accompagné de pâtes sauce tomate.
								</p>
							</div>
							<span class="item-price"> 15.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Carpaccio de boeuf</h2>
								<p>
									Fines trânches de boeuf avec mozzarella de bouflonne, huile d'olive, coupeaux de parmesan accompagnés de roquette ou frites.
								</p>
							</div>
							<span class="item-price"> 15.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Scaloppina alla valdostana</h2>
								<p>
									Escalope de veau, jambon blanc, épinards à la crème, bèchamelle, fromage rapé gratiné au four.
								</p>
							</div>
							<span class="item-price"> 17.50 € </span>
						</div>

					</div>
				</div>
				<div id="Pizze" class="tabcontent">
					<div class="menu-items">
						<div class="menu-item">
							<div class="item-text">
								<h2>A' regina margherita</h2>
								<p>
									Sauce tomate, Mozzarella de bufflonne, basilic et huile d’olive.
								</p>
							</div>
							<span class="item-price"> 12.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Profumata</h2>
								<p>
									Mozzarella, gorgonzola, taleggio, ricotta et copeaux de parmesan.
								</p>
							</div>
							<span class="item-price"> 16.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>O' calzone</h2>
								<p>
									Sauce Tomate, Mozzarella, oeuf et jambon blanc.
								</p>
							</div>
							<span class="item-price"> 16.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Don' Antonio</h2>
								<p>
									Sauce tomate, Mozzarella, viande hachée pur boeuf d'origine française, champinons et oeuf.
								</p>
							</div>
							<span class="item-price"> 15.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Parma</h2>
								<p>
									Tomates cerises au four, roquette, jambon de parme, Mozzarella de bufflonne.
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>O' sarracino</h2>
								<p>
									Sauce tomate, Mozzarella, jambon blanc, champignons.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Maruzzella</h2>
								<p>
									Saumon fumé, tomate ou crème frâiche, burrata, ciboulette et zestes de citron.
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Masaniello</h2>
								<p>
									Sauce tomate, Mozzarella et salame piccante.
								</p>
							</div>
							<span class="item-price"> 13.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Il capitano</h2>
								<p>
									Filets de tomates, tomates cerises, thôn, onions, huile d’olive et zestes de citron.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Monte Bianco</h2>
								<p>
									Base crème fraîche, Mozzarella, jambon de Parme, oeuf.
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Campagnola</h2>
								<p>
									Sauce tomate, Mozzarella, légumes grillés, huile d’olive et basilic.
								</p>
							</div>
							<span class="item-price"> 14.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Napoletana</h2>
								<p>
									Sauce tomate, Mozzarella, anchois et câpres.
								</p>
							</div>
							<span class="item-price"> 13.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Pizza fritta</h2>
								<p>
									Pizza frite avec Sauce tomate, Mozzarella, Scamorza et Jambon blanc.
								</p>
							</div>
							<span class="item-price"> 15.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>O' pescatore</h2>
								<p>
									Sauce tomate, cocktail de fruits de mer persillé et crevettes.
								</p>
							</div>
							<span class="item-price"> 15.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Sfiziosa</h2>
								<p>
									Base crème, mozzarella, jambon blanc et maïs et parmesan.
								</p>
							</div>
							<span class="item-price"> 14.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Pulecenella</h2>
								<p>
									Base crème, mozzarella, friarielli (grelos) et salsiccia (saucisse) et parmesan.
								</p>
							</div>
							<span class="item-price"> 17.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Scugnizza</h2>
								<p>
									Sauce tomate, mozzarella, jambon blanc, champignons, artichauds et olives noires et parmesan.
								</p>
							</div>
							<span class="item-price"> 16.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Stracciatella</h2>
								<p>
									Sauce pesto genovese, burrata, tomates cerises, roquette et pancietta.
								</p>
							</div>
							<span class="item-price"> 17.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>A' Fungitiello</h2>
								<p>
									Sauces tomate, mozarella, aubergines à la tomate napolitaine et parmesan.
								</p>
							</div>
							<span class="item-price"> 16.00 € </span>
						</div>

					</div>
				</div>
				<div id="Dolci" class="tabcontent">
					<div class="menu-items">
						<div class="menu-item">
							<div class="item-text">
								<h2>Tiramisù</h2>
								<p>
									Biscuits à cuillière, crème italienne mascarpone faite maison, poudre de cacao et café.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Pannacotta</h2>
								<p>
									Fruits rouges, caramel, chocolat ou café.
								</p>
							</div>
							<span class="item-price"> 7.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Parfait nougat</h2>
								<p>
									Glace au nougat, décor d’éclats de pistache pralinés.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Framboise mascarpone</h2>
								<p>
									Génoise, morceaux de framboise, crème au mascarpone, décor de pistache.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>3 Chocolats</h2>
								<p>
									Couches de chocolat fondant, au lait et blanc.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Ricotta e pera</h2>
								<p>
									Deux couches de biscuits moelleux à la noisette, crème à la ricotta avec morceaux de poires.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Cannolo siciliano</h2>
								<p>
									Gauffre croustillante garnis de crème de ricotta, fruits confits et pepites de chocolat.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Chocomeliga</h2>
								<p>
									Mousse de chocolat, biscuit de beurre crème de mascarpone, granelle de pistache et cacao.
								</p>
							</div>
							<span class="item-price"> 8.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Coppa all'amaretto</h2>
								<p>
									Crème au mascarpone avec chocolat et granelles d’amaretto.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Torta della nonna</h2>
								<p>
									Pâtes brisées garnies de créme pâtissière délicatement parfumé au citron recouverte de pignons de pin et amandes, décor de sucre glace.
								</p>
							</div>
							<span class="item-price"> 7.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Pastiera</h2>
								<p>
									Gâteau traditionnel napolitain, à base de ricotta, grains de blé bouilli et zestes d’orange.
								</p>
							</div>
							<span class="item-price"> 8.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Pistacchio e cioccolato</h2>
								<p>
									Biscuit à la noisette et gènoise au chocolat, crème de pistache avec pepites de chocolat.
								</p>
							</div>
							<span class="item-price"> 7.00 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Torta frutti di bosco</h2>
								<p>
									Pâte brisée garnie de crème parfumée à la vanille et recouverte de petites fraises.
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Chocolat temptation</h2>
								<p>
									Génoise au cacao recouverte de crème au chocolat fondant (cacao de l’Ecuador) de crème à la noisette. 
								</p>
							</div>
							<span class="item-price"> 7.50 € </span>
						</div>
						<div class="menu-item">
							<div class="item-text">
								<h2>Misto di formaggi</h2>
								<p>
									Assiete mixte de fromages italiens du moment.
								</p>
							</div>
							<span class="item-price"> 10.50 € </span>
						</div>

					</div>
				</div>
			</div>

		</section>
		
		<section id="images">
			<div class="container">
				<div class="image-container">
					<div class="img-all">
						<img src="img/menu-image1.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>A' Regina Margherita</h2>
							<h5>
								Sauce tomate, Mozzarella de bufflonne, basilic et
								huile d’olive.
							</h5>
						</div>
					</div>
					<div class="img-all">
						<img src="img/menu-image2.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>Spaghetti alla Carbonara</h2>
							<h5>
								Spaghetti de semoule de blé dur italienne avec
								poitrine de porc, oeuf et poivre noir.
							</h5>
						</div>
					</div>
					<div class="img-all">
						<img src="img/menu-image3.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>La Burrata</h2>
							<h5>
								Burrata de bufflonne 125gr servie tiède avec tomates
								cerises à l’huile d’olive vierge extra.
							</h5>
						</div>
					</div>
					<div class="img-all img-small">
						<img src="img/menu-image4.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>Cannolo Siciliano</h2>
							<h5>
								Gauffre croustillante enrobée de chocolat, garni de
								créme à la ricotta avec pepites de chocolat.
							</h5>
						</div>
					</div>
					<div class="img-all">
						<img src="img/menu-image5.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>Lasagna alla Bolognese</h2>
							<h5>
								Lasagnes aux oeufs,fior di latte, viande hachée de
								boeuf et de porc,sauce béchamel, Grana Padano et
								gratiné au four.
							</h5>
						</div>
					</div>
					<div class="img-all">
						<img src="img/menu-image6.jpg" alt="A' Regina Margherita" />
						<div class="img-text">
							<h2>Tiramisù</h2>
							<h5>
								Biscuits à cuillière, créme italienne mascarpone
								faite maison,poudre de cacao et café.
							</h5>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="reservation">
			<div class="container">
				<div class="res-container">

					<div class="res-form">
						<img src="img/pasta.png" alt="Pasta">
						<form method="POST" id='form-res'>
							<h1>Reservation</h1>
							<h3>Pour des grandes reservations, ou reserver pour le jour même, veuillez appeler.</h3>

							<div class="form-group">
								<label for="nom">Nom</label>
								<input name="nom" type="text" required placeholder="Nom" autocomplete="off">
							</div>
							<div class="form-group-2">
								<div class="form-group email-group">
									
									<label for="email">Email</label>
									<input name="email" type="email" required placeholder="Email"  autocomplete="off">
								</div>
								<div class="form-group tel-group">
									<label for="tel">Téléphone</label>
									<input name="tel" type="tel" required placeholder="Téléphone" autocomplete="off">
								</div>
							</div>
							<div class="form-group-3">
								<div class="form-group">
									
									<label for="date">Date</label>
									<input name="date" type="text" id='dateinput' required placeholder="Date" autocomplete="off">
								</div>
								<div class="form-group">
									
									<label for="time">Horaire</label>
									<input name="time" type="text" id='timeinput' required placeholder="Horaire" autocomplete="off">
								</div>
							</div>
							<div class="form-group-3">
								<div class="form-group">
									
									<label for="people">Personnes</label>
									<input name="people" type="number" min='2' max="6" required placeholder="N° d'adultes" autocomplete="off">
								</div>
								<div class="form-group">
									
									<label for="enfant">Enfants</label>
									<input name="enfant" type="number" min='0' max="6" required placeholder="Enfant en plus des adultes" autocomplete="off">
								</div>
							</div>
							<div class="res-errors">
								<p class="res-error"></p>
							</div>
							<button type="submit" name="submit" class="res-status">reserver</button>
						</form>
					</div>
					<div class="res-image">
						<img src="img/form-bg.jpg" alt="Reservation">
							<div class="res-info">
							<h2>Horaires d'ouverture</h2>
							<div class="res-info-container">

								<div class="res-info-salle">
								<h3>Horaires salle</h3>	
									<div>
										<h4>Mardi au Samedi</h4>
										<p><i class="fas fa-clock"></i> 12:00 - 14:00</p>
										<p><i class="fas fa-clock"></i> 19:00 - 21:00</p>
									</div>
									<div>
										<h4>Dimanche et Lundi</h4>
										<p>Fermé</p>
									</div>
								</div>
							</div>
						</div>
					</div>		

				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<div class="mapsandform">
					<div class="map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1570.4318593120888!2d2.367119924142194!3d48.549690877080835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5dd8ec4583d45%3A0xa0ae93407d4fc1e2!2sLa%20Casa%20Di%20Antonio!5e0!3m2!1sen!2sfr!4v1615203978722!5m2!1sen!2sfr"
							allowfullscreen=""
							loading="lazy"
						></iframe>
					</div>
					<div class="form-container">
						<form action="#" method="POST" id="myForm">
							<h1>
								Contactez-nous <i class="fas fa-envelope"></i>
							</h1>

							<input
								type="text"
								id="name"
								name="nom"
								placeholder="Nom"
								required
							/>

							<input
								type="email"
								id="email"
								name="email"
								placeholder="Email"
								required
							/>

							<input
								type="tel"
								id="tel"
								name="tel"
								placeholder="Téléphone"
								required
							/>

							<input
								type="text"
								class="sujet"
								id="sujet"
								name="sujet"
								placeholder="Sujet"
								required
							/>

							<textarea
								name="message"
								id="messag"
								class="textarea"
								placeholder="Message"
								required
							></textarea>

							<span class="form-status">Envoi en cours</span>

							<button
								type="submit"
								class="submit"
								name="submit"
								id="disable"
							>
								Envoyer
							</button>
						</form>
					</div>
				</div>
			</div>
			<footer>
				<div class="container">
					<div class="foot-contact">
						<h3>Nos infos</h3>
						<span
							><i class="fas fa-map-marked-alt"></i>
							<p>
								8 Place de la Mairie, 91710 Vert-le-Petit
							</p></span
						>
						<span
							><i class="fas fa-envelope"></i>
							<p>
								<a href="mailto:contact@lacasadiantonio.com"
									>contact@lacasadiantonio.com</a
								>
							</p></span
						>
						<span
							><i class="fas fa-phone-alt"></i>
							<p>
								<a href="tel:0988419659">09 88 41 96 59</a>
							</p></span
						>
					</div>
					<div class="horaires">
						<div class="horaires-text">
							<h3>Nos horaires</h3>
							<h5>Mardi au Samedi</h5>
							<p>12:00 - 14:00</p>
							<p>19:00 - 21:00</p>
							<br />
							<p>Dimanche et Lundi : Fermé</p>
						</div>
					</div>
				</div>
			</footer>
			<div class="legal">
				<p>
					Copyright © 2021 La Casa Di antonio |
					<a href="terms.html">Mentions légales</a>
				</p>
			</div>
		</section>

		<!--           SCRIPTS         -->

		<script
			src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			crossorigin="anonymous"
		></script>
		<script src="jqueryui/jquery-ui.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js" integrity="sha512-WHnaxy6FscGMvbIB5EgmjW71v5BCQyz5kQTcZ5iMxann3HczLlBHH5PQk7030XmmK5siar66qzY+EJxKHZTPEQ==" crossorigin="anonymous"></script>
		<script src="js/custom.js"></script>
		<script src="js/loader.js"></script>
		<script src="js/mobile.js"></script>
	</body>
</html>
