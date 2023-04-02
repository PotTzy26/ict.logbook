<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="system";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{   
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{	
    $date_today = date('y-m-d');
    $Name = $_POST['Name'];
    $gradeLevel= $_POST['gradeLevel'];
    $section = $_POST['section'];
    $tabletPCNo = $_POST['tabletPCNo'];
    $time_git initIn = $_POST['time_In'];
    $time_Out = $_POST['time_Out'];

    $sql_query = "INSERT INTO ashscom_digital_logbook (dateRegistered, Name, gradeLevel, section, tabletPCNo, time_In, time_Out)
    VALUES ('$date_today','$Name','$gradeLevel','$section','$tabletPCNo','$time_In','$time_Out')";

    if (mysqli_query($conn, $sql_query)) 
    {
        echo "New Details Entry inserted successfully !";
    } 
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>