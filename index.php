<html>
<head>
<title>Template test</title>
<link rel="stylesheet" href="css/knacss.css" />
<link rel="stylesheet" href="css/templateTest.css" />
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css" />
<link  href="js/jquery.fancybox.min.css" rel="stylesheet" />
<link  href="js/flexslider.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <header>
        <div class="mw960p" id="logoSite">
           	<a href="index.html">
            	<img src="logoNina.png"/>
            </a>    
        </div>
        <nav role="navigation">
        <a class="menuBurger" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <ul class="mw960p flex-container">
            <li><a href="rubrique.html">Rubrique Test</a>
                <ul>
                    <li><a href="page.html">Page test</a>
                        <ul>
                            <li><a href="#">Picon Bière</a></li>
                            <li><a href="#">Melfor</a></li>
                            <li><a href="#">Carola</a></li>
                        </ul>
                    </li>
                    <li><a href="galerie.html">Galerie</a></li>
                    <li><a href="#">Carola</a></li>
                    <li><a href="#">Flammekueche</a></li>
                    <li><a href="#">Wurscht</a></li>
                </ul>
            </li>
            <li><a href="#">Melfor</a>
                <ul>
                    <li><a href="#">Picon bière</a></li>
                    <li><a href="#">Melfor</a></li>
                    <li><a href="#">Carola</a></li>
                    <li><a href="#">Flammekueche</a></li>
                    <li><a href="#">Wurscht</a></li>
                </ul>
            </li>
            <li><a href="#">Carola</a></li>
            <li><a href="#">Flammekueche</a></li>
            <li><a href="#">Wurscht</a></li>
        </ul>
        </nav>
    </header>
    <?php

    if(isset($_GET['p']) && preg_match("/^[a-z0-9]+$/i",$_GET['p'])){ $p=strtolower($_GET['p']); if(file_exists("pages/$p.html")) { include "pages/$p.html"; }

    else{ include "pages/404.html"; }

    } else{ include "pages/index.html";

    } 
    
    ?>
    <footer>
        <nav id="arboFooter">
        <ul class="mw960p flex-container">
            <li><a href="rubrique.html">Rubrique Test</a>
                <ul>
                    <li><a href="page.html">Page Test</a></li>
                    <li><a href="galerie.html">Galerie</a></li>
                    <li><a href="#">Carola</a></li>
                    <li><a href="#">Flammekueche</a></li>
                    <li><a href="#">Wurscht</a></li>
                </ul>
            </li>
            <li><a href="#">Melfor</a>
                <ul>
                    <li><a href="#">Picon bière</a></li>
                    <li><a href="#">Melfor</a></li>
                    <li><a href="#">Carola</a></li>
                    <li><a href="#">Flammekueche</a></li>
                    <li><a href="#">Wurscht</a></li>
                </ul>
            </li>
            <li><a href="#">Carola</a></li>
            <li><a href="#">Flammekueche</a></li>
            <li><a href="#">Wurscht</a></li>
        </ul>
        </nav>
        <div class="mw960p" id="liensFooter">
            <a href="#">Plan du site</a>
            <a href="#">Recherche</a>
            <a href="#">Mentions légales</a>
            <div>Super template de test réalisé par Nadège</div>
        </div>
    </footer>
    <script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script src="js/verge.js"></script>
	<script src="js/js.js"></script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
		$('.flexslider').flexslider();
	  });
	</script>
</body>
</html>