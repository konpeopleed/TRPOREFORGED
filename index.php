<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'Tyreckix/Linear.php';
include_once 'Tyreckix/Square.php';
include_once 'Tyreckix/TyreckixException.php';
include_once 'Tyreckix/Log.php';

$arr=array();

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new Tyreckix\Square();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    Tyreckix\Log::log("roots: " . implode(" , ", $roots));
   
}catch(Tyreckix\TyreckixException $e) {

    Tyreckix\Log::log($e->getMessage());
}
Tyreckix\Log::write();