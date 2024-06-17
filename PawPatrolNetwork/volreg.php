<?php
$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "pawpatrolnetwork"; 
//$employeeid=mysqli_real_escape_string($link, $_REQUEST['id1']); 
//$empsalary=mysqli_real_escape_string($link, $_REQUEST['salary']);  
//$empname=mysqli_real_escape_string($link, $_REQUEST['ename']);  
// Create connection    
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO ppw(username,category,name_,email,dob,gender,phone,aadhar,
        city,password_,confirmpassword_,active)
VALUES ('$_POST[username]', 'v','$_POST[name]','$_POST[email]'
        ,'$_POST[dob]','$_POST[gender]','$_POST[phone]','$_POST[aadhar]'
        ,'$_POST[city]','$_POST[pass]','$_POST[pass1]',0);";
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

