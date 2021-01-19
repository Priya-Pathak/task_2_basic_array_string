<?php

class array_basics{
    public $indexed_arr;
    public $associative_arr;
    public $mutli_dimensional_arr;
    function set_indexed_array($val){
        $this->indexed_arr = $val;
    }

    function get_indexed_array(){
        return $this->indexed_arr;
    }
    function print_indexed_array(){
        echo "<br> $this->indexed_arr";
       
        echo "<br>Printing indexed array using foreach loop<br>";
       
        foreach($this->indexed_arr as $item){
            echo "<br>$item";
        }
    }

    function set_associative_array($val){
        $this->associative_arr = $val;
    }
    
    function get_associative_array(){
        return $this->associative_arr;
    }

    function print_associative_array(){
        
        echo "<br>Printing associated array using foreach loop<br>";
        foreach($this->associative_arr as $key=> $value){
            echo "<br> key : $key => value : $value";
          //  print("\n".$key."\n");
          //  print("\n".$this->associative_arr[$key]."\n");

        }
    }


    function set_mutlidimensional_array($val){
        $this->mutli_dimensional_arr = $val;
    }

    function get_multidimensional_array(){
        return $this->multi_dimensional_array;
    }

    function print_multidimensional_array(){
        print("\n".$this->mutli_dimensional_arr."\n");
        //Printing the array
        echo "<br>";
        echo "<br>This is the multidimensional array<br>";
        echo "<br>";
        for($i=0; $i < count($this->mutli_dimensional_arr); $i++){
            for($j = 0; $j < count($this-> mutli_dimensional_arr[0]); $j++){
                print($this->mutli_dimensional_arr[$i][$j]."\t");
            }
            echo "<br>";
        }
    }
}

?>