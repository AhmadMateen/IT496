<?php

// Connecting to Database using connect.php file
    require 'connect.php';


$result = $db -> query("SELECT * FROM inventory");


// Call funtion to change column name.
        ColumnN($db);

// Call function to Trim column description.
        ColumnD($db);

// Funtion for changing column name of date_received column to date_updated
        function ColumnN($db){$db->query("ALTER TABLE `inventory` CHANGE `Date_Received` `Date_Updated` VARCHAR(25);");}

// Function to trim the description column to a length of 20
        function ColumnD($db){$db->query("ALTER TABLE `inventory` CHANGE `Description` `Description` VARCHAR(20);");}

// Function to remove the timestamp from Date_Received column
        function removeT($dateStr){return substr($dateStr,0,10);}


// Printing our table

    if ($result -> num_rows >0) {
        echo "<table><tr><th>Inventory_ID</th><th>Part_Number</th><th>Descripton</th><th>Quantity</th><th>Price</th><th>Date_Updated</th></tr>";
        while($rows = $result->fetch_assoc()) {

// Call removeT funtion
            echo "<tr><td>".$rows["Inventory_Id"]."</td><td>".$rows["Part_Number"]."</td><td>".$rows["Description"]."</td><td>".$rows["Quantity"]."    </td><td>".$rows["Price"]."</td><td>".removeT($rows["Date_Updated"])."</td></tr>";}
    echo "</table>";} 
    else {
    echo "0 results";}


// Close database db
$db -> close();

?>