
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
 <tbody>
              
<form method="post" action="post-data.php" class="text-start">
    <button type="submit" name="post-data" class="btn btn-primary">Export Data</button>
</form>
    </form>
</body>
</html>
<?php


$conn= mysqli_connect('localhost','root','','login_sample_db') or die('cannot connect to the DB');

if(!$conn){
    die("Database connection failed: ". mysqli_connect_error());
}
else{
  echo "DB connection successfull<br/>";
}


$sql = "SELECT id, airvalue, moisture, dates FROM air_quality";
$result = $conn->query($sql); 
echo "<table>";
echo "<tr><th>ID</th><th>AIR QUALITY</th><th>SOIL MOISTURE</th><th>DATES</th> </tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["airvalue"] .  "</td>";
    echo "<td>" . $row["moisture"] .  "</td>";
    echo "<td>" . $row["dates"] .  "</td>";
    echo "</tr>";
    }echo "</table>";
} else {
    echo "0 results";
}


?>


