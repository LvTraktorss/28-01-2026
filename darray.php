<?php

$students =
[
    ["Students"=>1, "Vārds"=> "Džons","Vecums"=>28, "Atzīmes"=>[90,85,88]],
    ["Students"=>2, "Vārds"=>"Džena","Vecums"=>22, "Atzīmes"=>[92,80,84]],
    ["Students"=>3, "Vārds"=>"Džo", "Vecums"=>21, "Atzīmes"=>[78,85,90]],
];

    foreach ( $students as $biden){
        $avarage = 0;
        echo $biden["Vārds"]." ";

        foreach($biden["Atzīmes"] as $num){
            $avarage =+$num;
        }
        echo $avarage / count($biden["Atzīmes"]).PHP_EOL;
}