<?php
require_once 'vendor\autoload.php';
use App\classes\HelloWorld;

$hello = new HelloWorld('Test Class Work'.'<br>');
$hello->index();
