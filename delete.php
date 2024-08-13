<?php
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Attempt to delete record
    $delete_query = "DELETE FROM `user_form` WHERE id = $id";

    $result = mysqli_query($conn, $delete_query);

    if ($result) {
        echo "Record deleted successfully";
        // Redirect or display a success message
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        // Handle the error appropriately, such as logging it or displaying a user-friendly message
    }
} else {
    echo "No ID specified for deletion";
    // Handle the case where no ID is provided for deletion
}
?>
