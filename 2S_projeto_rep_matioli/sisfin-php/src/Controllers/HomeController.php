<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;

class HomeController extends Controller {
    public function index() {
        $this->render('home/index', []);
    }
}
    