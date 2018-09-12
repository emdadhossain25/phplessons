<!DOCTYPE html>
<html>
<body>


<!--// declaring the method for SUBMIT button using the name attribute as identifier-->
<form METHOD="GET">

    <input type="text" name="user">
    <button>SUBMIT</button>
 <br>
 <br>
 <br>
</form>

</body>
<?php

//loaded faster
echo "hello world ";
print 12 ;

// how to create a variable in php
// get the method for SUBMIT button using the name attribute as identifier
$name = $_GET['user'];



echo $name. "my mane";

$name_arrays = array("emdad","hossain");
echo $name_arrays[1];

echo '<br>';
echo '<br>';
echo '<br>';


/***
 * including the user defined functions
 */
include 'userdefinedfunction.php';
?>
</html>
