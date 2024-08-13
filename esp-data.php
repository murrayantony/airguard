<?php
/*class Data{
   public $conn='';

    function __construct($airvalue,$moisture)
    {
        $this->connect();
        $this->storeDB($airvalue,$moisture);
    }
}
// Create connection
function connect(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_sample_db";
$this->conn =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
}
/**
 * 
 */

// SQL query to select data from mq135 table
/*function storeDB($airvalue,$moisture){
$sql = "INSERT INTO air_quality SET airvalue='".$airvalue."', moisture='".$moisture."'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
if($_GET['airvalue'] != '' and $_GET['moisture'] !=''){
    $data = new Data($_GET['airvalue'], $_GET['moisture']);
}
/*echo '<table cellspacing="5" cellpadding="5">
      <tr>
        <th>ID</th>
        <th>Location</th>
        <th>Value 1</th>
        <th>Value 2</th>
        <th>Value 3</th>
        <th>Reading Time</th>
      </tr>';

// Execute SQL query
if ($result = $conn->query($sql)) {
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_location = $row["location"];
        $row_value1 = $row["value 1"];
        $row_value2 = $row["value 2"];
        $row_value3 = $row["value 3"];
        $row_reading_time = $row["reading time"];
            
        // Output data in table row format
        echo '<tr>
                <td>' . $row_id . '</td>
                <td>' . $row_location . '</td>
                <td>' . $row_value1 . '</td>
                <td>' . $row_value2 . '</td>
                <td>' . $row_value3 . '</td>
                <td>' . $row_reading_time . '</td>
              </tr>';
    }
    // Free result set
    $result->free();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
</table>
*/
class Data{
public $link='';

 function __construct($airvalue,$moisture){
  $this->connect();
  $this->storeInDB($airvalue,$moisture);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'login_sample_db') or die('Cannot select the DB');
 }
 
 function storeInDB($airvalue,$moisture){
  $query = "INSERT INTO air_quality SET airvalue='".$airvalue."', moisture='".$moisture."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
}
 if( $_POST['airvalue'] != '' and  $_POST['moisture'] !=''){
    $data = new Data( $_POST['airvalue'],  $_POST['moisture']);
}
?>