<?php 
	global $pageTitle;
	$pageTitle = "Sign up";
	include('parts/header.php'); 
?>
                    <!-- Wrapper -->
                    <section id="wrapper">
						<header>
							<div class="inner">
								<h2>Sign up</h2>
								<p>Phasellus non pulvinar erat. Fusce tincidunt nisl eget ipsum.</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
									<h2 class="major">Entre com seus dados</h2>
                                    <form action="includes/signup.inc.php" method="POST">
                                        <div class="fields">
                                            <div class="field">
                                                <label for="first">Primeiro Nome</label>
                                                <input type="text" name="first" placeholder="Primeiro Nome">
                                            </div>
                                            <div class="field">
                                                <label for="last">Último Nome</label>
                                                <input type="text" name="last" placeholder="Último Nome">
                                            </div>
                                            <div class="field">
                                                <label for="email">E-mail</label>
                                                <input type="text" name="email" placeholder="E-mail">
                                            </div>
                                            <div class="field">
                                                <label for="uid">Nome de usuário</label>
                                                <input type="text" name="uid" placeholder="Nome de usuário">
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