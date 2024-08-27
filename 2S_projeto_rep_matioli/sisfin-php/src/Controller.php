<?php

namespace Sisfin;

class Controller {
    protected function render($view, $data = [], $state=null,  $errors=[]) {
        extract($data);
        extract($errors);
        //extract($state);

        include "Views/$view.php";
    }
}
    