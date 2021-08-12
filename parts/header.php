<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head lang="pt-BR">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script>
     	function myFunction(){
			var xr = new XMLHttpRequest();
			var url = "saveNewText.php";
			var text = document.getElementById("myDiv").innerHTML;
			var vars = "newText="+text;
			
			xr.open("POST", url, true);
			xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xr.send(vars);
    	 }
     
  </script>
		<?php 
        $title = "Persuhn Fotografia";
        global $pageTitle;
        if($pageTitle != ''){
            $title .= ' | ' . $pageTitle;
		}
    	?>
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/moon-black.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Persuhn Fotografia</a></h1>
						<nav>
							<?php
								if(isset($_SESSION['u_id'])){
									echo '<a href="#"><form action="includes/logout.inc.php" method="POST">
											<button type="submit" name="submit">Logout</button>
										</form></a>';
								}
							?>
							<a href="#menu">Menu</a>
						</nav>
					</header>
				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="portfolio.php">Portfolio</a></li>
								<li><a href="contato.php">Contato</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

