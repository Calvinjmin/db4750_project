<?php
$SERVER = 'mysql01.cs.virginia.edu';
$USERNAME = 'kkz6dh';
$PASSWORD = 'Dbproject!';
$DATABASE = 'kkz6dh_';

$db = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

$query = $db->query("SELECT * FROM awards"); 

if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "award-data_" . date('Y-m-d') . ".csv"; 

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv; charset=utf-8'); 
    header('Content-Disposition: attachment; filename="' . $filename . '"'); 
     
    // Create a file pointer 
    $f = fopen('php://output', 'w'); 
     
    // Set column headers 
    $fields = array('Award ID', 'Award Name', 'Year Won', 'All Star Appearances'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['award_id'], $row['award_name'], $row['year_won'], $row['all_star_appearances']);
        fputcsv($f, $lineData, $delimiter); 
    } 
     
} 