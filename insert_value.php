<?php
$servername='localhost';
$username='root';
$password='';
$dbname='labfinal';
 $conn=new mysqli($servername,$username, $password,$dbname);
 if($conn->connect_error){
          echo $conn->connect_error;
 }
  $sql="INSERT INTO users (id, name, age, username, password) VALUES('192152853', 'Amran', 23, 'Ali', 'AmranAli'),('192152840','Sabbir', 22,'Ahmed','SabbirAhmed'),('192152811','Iftekhar',22,'Ridoy','IftekharRidoy')";
 if( $conn->query($sql)==TRUE)
 {
    echo "Inserted";
 }
 else
 {
    echo $conn->connect_error;
 }
 $conn->close();
?>
