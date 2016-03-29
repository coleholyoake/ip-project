<!DOCTYPE html>
<html>
<head>
	<title>+NZVR360°</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<link href="css/bootstrap.min.css" rel="stylesheet">
   
	<link href="css/custom.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
	<nav id="top" class="navbar navbar-default">
                <div class="containr">
                    <div class="navbar-header">
                        <button type="button" id="hamburger" class="navbar-toggle collapsed" 
                        data-toggle="collapse" data-target="#collapsemenu"
                        aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="navbar-brand">
                            <img src="img/logo_inline.svg" alt="logo" onerror="this.src='images/png/logo.png'">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="collapsemenu">
                        <ul class="nav navbar-nav">
                            <li><a href="/">+NZVR360°</a></li>
                            <li><a href="/live">LIVE</a></li>
                            <li><a href="/capture">CAPTURE</a></li>
                            <li><a href="/delivery">DELIVERY</a></li>
                            <li><a href="/architecture">PROJECTS</a></li>
                            
                        </ul>
                    </div>  
                </div>
            </nav>

		@yield('content')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/owl.carousel.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.interactive_bg.min.js"></script>
		<script type="text/javascript" src="js/vivus.min.js"></script>
		<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.1/scrollreveal.min.js"></script>
        
		<script type="text/javascript">
            window.sr = ScrollReveal();
                // sr.reveal('.moving-zone');
                // sr.reveal('.test');
                sr.reveal('.hero-logo', { duration: 3000 });
                sr.reveal('.slogan', { duration: 5000 });
                sr.reveal('.slogan2', { duration: 1500 });
                sr.reveal('.button', { duration: 2000 });
                sr.reveal('iframe', { duration: 1000 });
                sr.reveal('.carousel', { duration: 1000 });
		</script>
</body>
</html>