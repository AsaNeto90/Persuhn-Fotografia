<?php 
	global $pageTitle;
	$pageTitle = "Log in";
	include('parts/header.php'); 
?>
                    <!-- Wrapper -->
                    <section id="wrapper">
						<header>
							<div class="inner">
								<h2>Log in</h2>
								<p>Phasellus non pulvinar erat. Fusce tincidunt nisl eget ipsum.</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
									<h2 class="major">Entre com seus dados</h2>
                                    <form action="includes/login.inc.php" method="POST">
                                        <div class="fields">
                                            <div class="field">
                                                <label for="uid">Nome/E-mail</label>
                                                <input type="text" name="uid" placeholder="Nome/E-mail">
                                            </div>
                                            <div class="field">
                                                <label for="pwd">Senha</label>
                                                <input type="password" name="pwd" placeholder="Senha">
                                            </div>
                                        </div>
                                        <ul class="actions">
                                            <li><input type="submit" name="submit"/></li>
                                            
                                        </ul>
                                    </form>
								</div>
							</div>

					</section>
<?php include('parts/footer.php'); ?>