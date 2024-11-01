<?php
    print "HOla mundo";

    //Declarar variables 

    $x = 9;
    $f = 12.12;
    $s="String";
    $b=TRUE;
    $arr = [1,2,3,4];

    print $x.$f.$s.$b.$arr[1];


    if ($x > $f) {
        print "X es mayor que F";
    }else{
        "F es menor que x";
    };

    print ($x > $f)? "X es mayor que F" : "F es menor que x";

    do {
        print $a;
        ++$a;
    }while($a <= 10);


    $i = 0;
    while($i <=10){
        print $i;
        ++$i;
    }

    

    function foo($name){
        return  "Hola $name";

    }

    function bar ($name,$d='Default'){
        return "Hola" .$name. "$d";
    }

    bar("f00");
    bar($d="FooBar",$name="Joe Doe");


    function foobar($np,$np2,...$P){
        print "NORMAL PARAM" .$np. "---" .$np2;
        foreach ($P as $args){
            print "  array argas:" .$args;
        }
    }
    foobar(1,2,3,4,5,6,7);
?>