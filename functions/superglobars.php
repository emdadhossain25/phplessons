<?php
/**
 * Created by PhpStorm.
 * User: Emdad
 * Date: 9/12/2018
 * Time: 4:36 PM
 */


// these here are the super glolbals
/***
 * $GLOBALS
 * $_GET
 * $_POST
 * $_SESSION
 * $_COOKIE
 */

$x = 5;
function getGlobal(){
    $y = 10;
    echo "y = ".$y;
    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo "x = ".$GLOBALS['x'];

}

getGlobal();
?>