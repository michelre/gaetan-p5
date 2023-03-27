<?php

require 'vendor/autoload.php';

use Remimichel\P5\Controller\PostController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('src/View');
$twig = new Environment($loader);


$postController = new PostController($twig);

$postController->displayAll();
