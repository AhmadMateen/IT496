<?php


$S1 = 14.8;
$S2 = 20.3;
$S3 = 25.3;


$A1 = 36;
$A2 = 53;
$A3 = 91;


// Perimeter of Triangle
    $perimeter = $S1 + $S2 + $S3 ;


// Area of Triangle
    $area = sqrt(($perimeter/2) * (($perimeter/2) - $S1) * (($perimeter/2) - $S2) * (($perimeter/2) - $S3));


// Sine of angle 1
    $SINE = sin ( deg2rad ($A1) );


// Cosine of angle 1
    $COSINE = cos ( deg2rad ($A1) );


// Tangent of angle 1
    $TANGENT = tan ( deg2rad ($A1) );


//printing results 
            
echo '<br/>';

echo "S1 = 14.8" . '<br/>';
echo "S2 = 20.3" . '<br/>';
echo "S3 = 25.3" . '<br/>';

echo '<br/>';

echo "A1 = 36" . '<br/>';
echo "A2 = 53" . '<br/>';
echo "A3 = 91" . '<br/>';

echo '<br/>';

echo "Perimeter = " .$perimeter. '<br/>';

echo '<br/>';

echo "Area = " .$area. '<br/>';

echo '<br/>';

echo "Sine = " .$SINE. '<br/>';

echo '<br/>';

echo "Cosine = " .$COSINE. '<br/>';

echo '<br/>';

echo "Tangent = " .$TANGENT. '<br/>';

echo '<br/>';

?>