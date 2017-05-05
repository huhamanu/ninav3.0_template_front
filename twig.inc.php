<?php

    require_once __DIR__ . '/vendor/autoload.php';

    

    $loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates

    $twig = new Twig_Environment($loader, array(

      'cache' => false

    ));