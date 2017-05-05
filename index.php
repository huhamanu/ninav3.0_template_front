<?php
    include "twig.inc.php";
    include "connexionBDD.inc.php";
    
    require "class/actu.php";

    setlocale(LC_TIME, 'Fr_fr');

    $requeteListeActus = "SELECT * FROM actus";
    $resultatListeActus = $conn->query($requeteListeActus);

    $listeActus=array();
    while($data=mysqli_fetch_array($resultatListeActus)){
        extract($data);
        $listeActus[$idActu]= new actu($titreActu, $lienActu, $imageActu, $dateActu, $texteActu);
    }
?>
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
    <?php
    
    echo $twig->render('header.html', array());
    
    if(isset($_GET['p']) && preg_match("/^[a-z0-9]+$/i",$_GET['p'])){ $p=strtolower($_GET['p']); if(file_exists("templates/$p.html")) {  
        
        echo $twig->render("$p.html", array(
        'listeActus' => $listeActus
        ));

    }
    else{ include "templates/404.html"; }

    } else{ 
        
        echo $twig->render('accueil.html', array(
        'listeActus' => $listeActus
        ));

    } 
    
    echo $twig->render('footer.html', array());
    
    ?>
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