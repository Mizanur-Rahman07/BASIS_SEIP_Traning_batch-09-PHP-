<?php
namespace MyProject;


$test =('Hello i am testing');
echo $test;
print("<pre>".print_r($test,true)."</pre>"); //exit;

echo '<h1>Hello</h1>';
print 'hello';
print '<br>';

echo ('');
print('');
echo '<br>';
echo print('5');
echo '<br>';


// two type off construct = echo and print ....... difference = echo null value return koren na .. r print null value return kore ..

Class Example{

    public $a = 'Hello Test';

    public function test(){
        echo $b = ' test 2 hello';
    }
}
$exp = new Example();
echo $exp->a; 
echo '<br>';

$exp->test();

?>
