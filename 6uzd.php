<?php

$arr= ['red', 'blue', 'green', 'yellow'];


//$colors =['red', 'blue', 'green', 'yellow'];




//$result= "color:";
//echo "color";
//foreach($colors as $color)
//{
  //  $result = $result . $color . ",";
    //echo $color . ",";
//}
//echo $result;


for($i=0;$i<count($arr); $i++)
{
   

    if($i == count($arr)-1)
    {
        echo $arr[$i].".";
    }
    else
    {
        echo $arr[$i].", " ;
    }
}

