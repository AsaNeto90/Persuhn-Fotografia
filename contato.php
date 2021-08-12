<?php 
    global $pageTitle;
    $pageTitle = "Contato";
    include('parts/header.php'); 
    
    $name = '';
    $email = '';
    $message = '';
    $formError = '';
    $formSuccess = '';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(
        $name != '' 
        && $email != '' 
        && $message != '')
        {
            // user correct
            $emailMessage = 'Name: '. $name . ' - E-mail: '. $email . ' - Message: '. $message;
            if(mail('luana.persuhn@gmail.com', 'Contact Message', $emailMessage)){
                //email sent
                $formSuccess = 'Message sent successfully!';
            }else{
                //email not sent
                $formError = "Não foi possível enviar o e-mail! Tente novamente mais tarde, ou entre em contato por luana.persuhn@gmail.com.";
            }
        }else{
            $formError = "Por favor verifique o conteúdo dos campos!";
        }
    }
?>
				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Contato</h2>
								<p>Para qualquer esclarecimento de preços e ensaios, entre em contato!</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
                                    <form action="contato.php" method="post">
                                        <?php if($formError != ''): ?>
                                            <div class="form__error">
                                                <?php echo "Não foi possível enviar o e-mail! Tente novamente mais tarde, ou entre em contato por luana.persuhn@gmail.com." ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($formSuccess != ''): ?>
                                            <div class="form__success">
                                                <?php echo "Mensagem enviada com sucesso!" ?>
                                            </div>
                                        <?php endif; ?>
                                            <div class="fields">
                                                <div class="field">
                                                    <label for="name">Nome</label>
                                                    <input type="text" name="name" id="name" />
                                                </div>
                                                <div class="field">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" />
                                                </div>
                                                <div class="field">
                                                    <label for="message">Mensagem</label>
                                                    <textarea name="message" id="message" rows="4"></textarea>
                                                </div>
                                                
                                                <input type="submit" value="Enviar" name="submit"/>
                                                
                                            </div>
                                            
                                    </form>
								</div>
							</div>

					</section>
<?php include('parts/footer.php'); ?>