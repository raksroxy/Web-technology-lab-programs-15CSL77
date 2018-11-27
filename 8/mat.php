<?php
header('Content-Type: text/plain'); // to enable '\n'
$matrix1 = array( 
array(1, 2), 
array(4, 5), 
); 

$matrix2 = array( 
array(1, 2), 
array(4, 5), 
);

$rowCount= count($matrix1);
$colCount = count($matrix1[0]);

echo "\nThe output Transpose of matrix A is:\n";
for($r = 0; $r < $colCount; $r++)
{ 
	for($c=0; $c < $rowCount; $c++) 
	{ 
	echo $matrix1[$c][$r]." \t"; 
	
	} 
	echo " \n";
}

echo "\nThe sum of matrix is:\n"; 
for($r = 0; $r < $rowCount; $r++) 
{ for($c=0; $c < $colCount; $c++) 
{ 
$val= $matrix1[$r][$c] + $matrix2[$r][$c]; 
echo $val."\t"; 
} 
echo "\n"; 
}

// multiplication 
echo "\nThe product of matrix A and B is:\n"; 
for($r = 0; $r < $rowCount; $r++) 
{ for($c=0; $c < $colCount; $c++) 
{ 
$val= $matrix1[$r][$c] * $matrix2[$r][$c]; 
echo $val."\t"; 
} 
echo "\n"; 
} 

?>
