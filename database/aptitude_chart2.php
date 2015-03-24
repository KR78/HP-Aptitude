<?php
// Connect to the database
$con = mysqli_connect("localhost","root","","csv_db");

// Set content type to JSON (JavaScript Object Notation) for this page to be seen as an actual JSON object 
header('Content-Type: application/json');

// Check to make sure connection has been established, if not echo error 
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    // Query to get data from the table in the database csv_db
    $data = mysqli_query($con, "SELECT * FROM tbl_name");
    
    // Array that will contain the elements 'label' and 'y' with data from columns in the database to generate the graph
    $chart = array();

    // Get the value of all rows from
    while($row = mysqli_fetch_array($data))
    {        
        // Assign 'label' => to 'district' column from table and assign  'y' => to 'stocking level(units)' column from table
        $elements = array("label" => $row['district'] , "y" => $row['stocking level(units)']);

        // Add the elements 'label' and 'y' to the $chart array
        array_push($chart, $elements);        
    }

// Return result in JSON format for use by JavaScript as JSON object to generate the chart using CanvasJS library  
    echo json_encode($chart, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
?>