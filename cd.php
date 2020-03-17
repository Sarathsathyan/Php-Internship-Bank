
<!--  Connection Database    -->
<?php
$servername ="localhost";
$user ="root";
$pass = "";
$dbname="bank";
$conn = new mysqli($servername,$user,$pass,$dbname);
if($conn-> connect_error){
    die("connection failed". $conn-> connect_error);

}
else{
   // echo "connected";
}
//
//$sql = "INSERT INTO register(first_name,last_name,email,phone,password)
//VALUES ('Sarath','Sathyan','sarath@gmail.com','95392479','12345')";
//
//if($conn->query($sql)==TRUE){
//    echo "New record inserted successfully";
//}
//else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//$conn->close();
?>