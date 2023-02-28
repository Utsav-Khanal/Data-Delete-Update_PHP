
<?php

include("connection.php");
error_reporting(0);

$rollno = $_GET['rn'];
$query = "DELETE FROM checkbox WHERE roll = '$rollno'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert('Record Deleted from database')</script>";

    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/phpproject/multiple_checkbox/display.php">

    <?php

}

else{
    echo "<font color='red'>Data not deleted";
}

?>
