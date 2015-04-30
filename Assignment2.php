<?php
	


// Initializing 3 different Arrays
    $array_all = array();
    $array_int = array();
    $array_string = array();



// Reading text file
    $my_input_file = fopen("input.txt", "r");


// Adding everything into array_all
    while ( !feof ($my_input_file) ) { $array_all[] = fgets ($my_input_file);}



// Printing array_all
    echo "Array_all<br>";
    foreach ( $array_all as $i ) { echo $i . "<br>"; }



// Seperating text and numbers
    foreach ( $array_all as $i ) {
    if ( (int) $i == 0 && $i != "0" ) { $array_string[] = $i; }
    else { $array_int[] = (int) $i; }}



// Sorting array_int
    asort ( $array_int );
    echo '<br>';


// Printing array_int
    foreach ( $array_int as $i ) { echo $i . '<br>'; }


// Sorting array_string
    asort ( $array_string );
    echo '<br>';

// Printing array_string
    foreach ( $array_string as $i ) { echo $i . '<br>'; }


// Closing File
    fclose ($my_input_file);
?>