<?php
$servername = "localhost";
$username   = "root";
$password   ="123";
$dbname     = "Sample";

 $conn = new mysqli($servername , $username ,$password,$dbname);

 if ($conn->connect_error) {
     die("connetionfailed :".$conn->connect_error );
 }
 //Data insertion in Employee table
 $sql = "INSERT INTO Employee (emp_id, emp_name, salary, dept_id) VALUES (114, 'Zainulabidin', 50000, 100)";
 if ($conn->query($sql) == TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 //Data updation in Employee table
 $sql1 = "UPDATE Employee SET salary = 60000 WHERE emp_id = 112";
 if ($conn->query($sql1) == TRUE) {
   echo "ecord UPDATED successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }

  //Select data from Employee Table
  $sql2 = "SELECT emp_id,emp_name FROM  Employee ";
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
           echo $row["emp_id"]."   ". $row["emp_name"]."<br>";
      }
  }else {
    echo "0 Results";
  }
  $conn->close();
 ?>
