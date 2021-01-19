<?php

class string_functions{
    public $variable;
    
    function set_name($name){
        $this->variable = $name;
    }
    function print_name(){
        print $this->variable."<br>";
    }

    function operations(){
        echo "String length :".strlen($this->variable)."<br>";
        echo "String word count :".str_word_count($this->variable)."<br>";
        echo "String reverse :".strrev($this->variable)."<br>";
        echo "Character position of \"Milk\" in string :    ".strpos($this->variable, "Milk")."<br>";
        echo "Replace Milk with Plant   :".str_replace("Milk","Plant",$this->variable)."<br>";
    }
    
}

?>