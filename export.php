<?php  
$connect = mysqli_connect("localhost", "root", "", "login_sample_db");
$output = '';
if(isset($_POST["export"]))
{
    $query = "SELECT id, name, email, user_type FROM user_form";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= '
            <table class="table" bordered="1">  
                <tr>  
                    <th>ID</th>
                    <th>Name</th>  
                    <th>Email</th>  
                    <th>User Type</th>
                </tr>
        ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                <tr>  
                    <td>'.$row["id"].'</td>
                    <td>'.$row["name"].'</td>  
                    <td>'.$row["email"].'</td>  
                    <td>'.$row["user_type"].'</td>  
                </tr>
            ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=download.xls');
        echo $output;
    }
}
?>
