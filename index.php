<?php

$persons=
[
    ["name"=> "Jānis", "age"=>20, "e-pasts"=>"janis@janis.lv", "valodas"=>["PHP, Python, Java"]],
    ["name"=> "Antra", "age"=>34, "e-pasts"=>"antra@antra.com", "valodas"=>["HTML, Javascript, SQL"]]

];


echo "<ul>";
foreach($persons as $person)
{
    echo "<li>";
    echo "<h1>". $person["name"]. "</h1>";
    echo "<p>". $person["age"]. "</p>";
    echo "<p>". $person["e-pasts"]."</p>";
    
    echo "<ul>";
    foreach($person["valodas"] as $lang)
    {
        echo "<li>".$lang."</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";