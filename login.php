<!DOCTYPE html>
<?php
	require_once 'controller/login.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CheyPoducion</title>
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.min.css" rel="stylesheet">
    <link href="static/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/login.css">
  
    <link rel="shortcut icon" href="static/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="static/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="static/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="static/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="static/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="static/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="index.php">Home</a></li>
                        <li class="scroll"><a href="#features">Features</a></li>
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll"><a href="#meet-team">Team</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#blog">Blog</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li> 
                        <li class="scroll active"><a href="login.php">Administrador</a></li>                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="cta" class="wow fadeIn">
        	
       	<div class="module form-module">
            <div class="form">
				 <h2>Acceso Administración</h2>
				 <form action="" method="post" >
				     <input type="text" id="username" name="username" placeholder="Username"/>
				     <input type="password" id="password" name="password" placeholder="Password"/>
				     <p><?php echo $msjError ?></p>
				     <button type="submit" id="btnLogin" name="btnLogin">Login</button>
				 </form>
			</div> 
       	</div>

    </section>

    <!--<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Designed by <a target="_blank" href="http://webprogress.com.ve" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Web Progress</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>-->

    <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  
</body>
</html>