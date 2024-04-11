<?php
require 'cliente.php';

$clienteObject = new $cliente();

$clienteObject->setNome('Eduardo');

echo $clienteObject->getNome();