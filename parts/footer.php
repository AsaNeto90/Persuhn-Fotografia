				<!-- Footer -->
                <section id="footer">
					<div class="inner">
							<div class="row">
								<div class="col-6 col-12-medium">
								<h2 class="major"><a href="index.php">Persuhn Fotografia</a></h2>
								<ul class="contact">
									<li class="fa-phone">(047) 99663-8556</li>
									<li class="fa-instagram"><a href="https://www.instagram.com/phpersuhn/" target="blank">Instagram</a></li>
									<li class="fa-facebook"><a href="https://www.facebook.com/cyluana" target="blank">Facebook</a></li>
									<li class="fa-twitter"><a href="https://twitter.com/cipersuhn?lang=pt" target="blank">Twitter</a></li>
									<li class="fa-envelope">luana.persuhn@gmail.com</li>
								</ul>
								</div>
								<div class="col-6 col-12-medium">
								<h2 class="major">Links</h2>
									<ul class="contact">
										<li class="fa-home"><a href="index.php">Home</a></li>
										<li class="fa-book"><a href="portfolio.php">Portfolio</a></li>
										<li class="fa-phone"><a href="contato.php">Contato</a></li>
									</ul>
								</div>
							</div>
							<ul class="copyright">
								<li>© <?php echo date('Y') ?> - Persuhn Fotografia. Todos os direitos reservados.</li><li>Design: <a href="http://vieirascode.com/" target="blank">Vieira's Code</a></li><li><a href="login.php">Login administrativo</a></li>
								<?php
									if(isset($_SESSION['u_id'])){
										echo '<li><a href="signup.php">Sign Up administrativo</a></li>';
									}
								?>
								
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.validate.min.js"></script>
			<script src="node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
			<script src="assets/js/test.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			

	</body>
</html>