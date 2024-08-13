<?php
//connection to database
$conn= mysqli_connect('localhost','root','','login_sample_db') or die('cannot connect to the DB');

if(!$conn){
    die("Database connection failed: ". mysqli_connect_error());
}
else{
  echo "DB connection successfull<br/>";
}

//var_dump($_POST);

$time = time(); //adds time stamp
$airvalue = $_POST["airvalue"];
$moisture = $_POST["moisture"];
$file = 'temp.html';  //Html file to display POST values
$data = $time."  -Temperature:  ".$airvalue."  -Humidity  ".$moisture;
file_put_contents($file, $data);
$sql = "INSERT INTO air_quality (airvalue, moisture) VALUES ('$airvalue','$moisture')"; //Query to input POST data into tempsen database
//Ensure query is true
if ($conn->query($sql) == TRUE){
echo "worked<br/>";
}
else{
    die('Failed query:' .$sql); //Kills the connection to the database if the query fails
    }
?>