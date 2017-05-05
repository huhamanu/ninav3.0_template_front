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