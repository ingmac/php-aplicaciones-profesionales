<?php
namespace App\Controllers;

use App\Models\Manual;
use League\Plates\Engine;

class FrontController {
    private $templates;
    public function __construct() {
        $this->templates = new Engine('../views');
    }

    public function home() {
        $manualModel = new Manual();
        $manuals = $manualModel->getAll();
       echo $this->templates->render('sections/home', ['manuals' => $manuals]);
    }

    public function error404() {
        echo $this->templates->render('sections/404');
    }
}