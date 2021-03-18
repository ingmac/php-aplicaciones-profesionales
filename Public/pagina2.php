<?php
require '../vendor/autoload.php';
use Carbon\Carbon;
use League\Plates\Engine;

$templates = new Engine('../views');

echo $templates->render('pagina');