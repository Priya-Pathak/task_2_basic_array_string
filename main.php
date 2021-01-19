<?php

require 'array_basics.php';
require 'string_functions.php';

$str = new string_functions();
$arr = new array_basics();
$str->set_name("Strawberry Milkshake");
$str->print_name();
$str->operations();
//Function call for the arrays

$arr->set_indexed_array(array("Volvo","BMW","Toyota"));
$arr->print_indexed_array();
$arr->set_associative_array(array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"));
$arr->print_associative_array();

$arr->set_mutlidimensional_array(array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
));

$arr->print_multidimensional_array();

?>

