<?php
$first = $_GET['n1'] + 0; 
$second= $_GET['n2'] + 0;
$operator = $_GET['op'];
switch($operator)
{
    case "add" :
    echo "Answer is: ".($first + $second);
    break; 
    case "sub":
    echo "Answer is: " .($first - $second);
    break;
    case "mul" :
    echo "Answer is: " .($first * $second);
    break; 
    case "div":
    echo "Answer is: " .$first / $second;
    break;
}
?>
<!-- 
to run this program you need ot open the file using local server and populate the variables using get as follows
after the name of the php file write ? then the name of the variable with the value 
incase of multiple variables to be passed use & 
example
http://localhost/calc.php?n1=20&n2=2&op=add
http://localhost/calc.php?n1=20&n2=2&op=mul
-->



