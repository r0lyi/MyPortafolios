<?php

require_once "../vendor/autoload.php";
require_once "../src/controller/ProjectController.php";
require_once "../src/controller/TechnologyControler.php";

// prepare twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

/*$twig = new \Twig\Environment($loader, [
	'templates' => 'tempaltes',
]);*/
  
$pc = new ProjectController();
$cp = new TechnologyControler();



$poner= $pc->getProjects();

print_r($cp->gettecnology());


// Este array lo tiene que devolver el controlador
echo $twig->render('index.html', compact('poner'));

?>
