<?php 
	global $pageTitle;
	$pageTitle = "Home";
	include('parts/header.php'); 
?>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-camera-retro"></span></div>
							<h2>Persuhn Fotografia</h2>
							<?php
								if(isset($_SESSION['u_id'])):?>
									<p id="myDiv" contenteditable="true" onblur="myFunction()"><?php include("myText.txt"); ?></p>
								<?php else: ?>
									<p><?php include("myText.txt"); ?></p>
								<?php endif; ?>
							
							
						</div>
					</section>


                    <!-- Descrição -->
                    <div class="wrapper alt style3">
                        <div class="inner">

                            <h2 class="major">Sobre mim</h2>
                            <p><span class="image left"><img src="images/main.jpeg" alt="" /></span>Formada no Ensino Médio em uma cidade próxima à Blumenau, Ibirama. Santa Catarina – Brasil. Cindy cursou Ciências Biológicas por dois semestres na Fundação Universidade Regional de Blumenau – FURB. Por problemas de saúde, decidiu focar no seu mais amado hobby, a fotografia. A paixão pelo momento perfeito, o “click” que salva para sempre um momento na vida de alguém. </p>

                            <p>Não fazemos uma foto apenas com uma câmera; <br>
								ao ato de fotografar trazemos todos os livros que lemos, <br>
								os filmes que vimos, a música que ouvimos, <br>
								as pessoas que amamos. <br><br>
								- Ansel Adams
							</p><br>

                            <div class="box alt">
								<div class="row gtr-uniform">
									<div class="col-12"><span class="image fit"><img src="images/home/one.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/two.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/three.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/four.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/five.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/six.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/seven.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/eight.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/nine.jpeg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/home/ten.jpeg" alt="" /></span></div>
								</div>
							</div>

                        </div>
                    </div>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="images/ensaio-thalita/perfil_thalita.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Thalita Koide</h2>
										<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/ensaio-vini/perfil_vini.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Vinícius Da Silva</h2>
										<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/ensaio-amanda/perfil_amanda.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Amanda Da Silva</h2>
										<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
									</div>
								</div>
							</section>
					</section>

<?php include('parts/footer.php'); ?>