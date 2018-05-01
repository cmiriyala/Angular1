<?php 
include 'connection.php';
error_reporting(0);
$_POST = json_decode(file_get_contents('php://input'), true);
$useridis = $_POST['userid'];
//echo $_POST['userid'];
//echo $useridis;
    
$getemail="SELECT * FROM `users` WHERE Email='$useridis';";
$getemailexecuted=mysqli_query($connection, $getemail);
$count = mysqli_num_rows($getemailexecuted);

if( $count ==1)
{
    $row = mysqli_fetch_assoc($getemailexecuted);
    session_start();
    $_SESSION['username'] = $row['Name'];
    echo "accessAllowed";
    exit();
}
else{
echo "notallowed";
}
?>