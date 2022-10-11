<?php
require_once 'vendor\autoload.php';
use App\classes\HelloWorld;

$hello = new HelloWorld('hello world'.'<br>');
$hello->index();
