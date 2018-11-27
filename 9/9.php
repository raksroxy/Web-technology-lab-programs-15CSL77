<?php
header('Content-Type: text/plain');
$states=array("Mississippi","Alabama","Texas","Massachusetts","Kansas");
$statesArray=[];
foreach($states as $s){
        if(preg_match('/xas$/',($s))){
                $statesArray[0] = ($s);
                echo "\nThe States that ends in xas:".$s;
                echo "\n $s is at position 0";
}
        if(preg_match('/^k.*s$/i', ($s))){     // i for case insensitive
                $statesArray[1] = ($s);
                echo "\nThe states that begins with k and ends in s:" . $s;
                echo "\n $s is at position 1";
}
        if(preg_match('/^M.*s$/', ($s))){
                $statesArray[2] = ($s);
                echo "\nThe states that begins with M and ends in s:" . $s;
                echo "\n $s is at position 2";
}
        if(preg_match('/a$/', ($s))){
                $statesArray[3] = ($s);
                echo "\nThe states that ends in a:".$s;
                echo "\n $s is at position 3";
}
}
?>
