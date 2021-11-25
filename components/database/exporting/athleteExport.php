<?php
$SERVER = 'mysql01.cs.virginia.edu';
$USERNAME = 'kkz6dh';
$PASSWORD = 'Dbproject!';
$DATABASE = 'kkz6dh_';

$db = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

$query = $db->query("SELECT * FROM athlete"); 

if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "athlete-data_" . date('Y-m-d') . ".csv"; 

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv; charset=utf-8'); 
    header('Content-Disposition: attachment; filename="' . $filename . '"'); 
     
    // Create a file pointer 
    $f = fopen('php://output', 'w'); 
     
    // Set column headers 
    $fields = array('computing_id', 'First Name', 'Last Name', 'Age', 'Graduation Year', 'TeamID', 'Status'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['computing_id'], $row['first_name'], $row['last_name'], $row['age'], $row['grad_year'], $row['team_id'], $status); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
} 