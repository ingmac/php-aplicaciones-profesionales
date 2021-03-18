<html>
<head>
<title>Aplicaciones Profesionales</title>
</head>
<body>
<?php
require '../vendor/autoload.php';
use Carbon\Carbon;
use League\Plates\Engine;

$templates = new Engine('../views');

echo $templates->render('template-test', ['subtitle'=>'Bienvenidos aqui']);

?>
</body>
</html>