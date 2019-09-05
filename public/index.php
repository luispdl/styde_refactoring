<?php

require '../vendor/autoload.php';

$element = new \App\HtmlElement('p', [], 'hola gato');

echo $element->render();

