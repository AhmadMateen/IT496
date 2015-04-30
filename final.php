<?php




require 'connect.php';

$array_all= array();
$array_string= array();

// Reading the text file
    $my_input_file = fopen("characters.txt", "r");


while (!feof($my_input_file)) { $array_all[] = fgets($my_input_file);
}



foreach($array_all as $i) { if ((int)$i == 0 && $i != "0"){
     $array_string[] = $i;
 
   }
    else{ $array_int[] = (int)$i;
   }
}

foreach ($array_string as $i){ echo $i.'<br>';
}

foreach ($array_int as $i){ echo $i.'<br>';
}

print_r($array_string);

print_r(str_split($i));

$result = array_merge($array_string, str_split($i));
print_r($result);

function randomPassword() {
    $pass = array(); 
    $resultLength = strlen($result) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $resultLength);
        $pass[] = $result[$n];
    }
    return implode($pass);
}

$pass = randomPassword()
echo $pass;

?>