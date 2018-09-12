<?php
/**
 * Created by PhpStorm.
 * User: Emdad
 * Date: 9/12/2018
 * Time: 3:46 PM
 */

$x = 100;
$a = 15;
// declaring the specific user defined function
function newCalc($x){
    $newnumber = $x * 0.75;

    echo "Here is 75% of what you wrote: ".$newnumber."<br>";
}

newCalc($x);
newCalc($a);
?>