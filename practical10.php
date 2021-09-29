<!-- Implementation of PHP code for following database queries.
Select.
Insert.
Update.
Delete. -->

<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  

// connection to database

$conn = mysqli_connect($host, $user, $pass, $dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  

// creating table in database

$sql = "create table emp4(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,salary INT NOT NULL,primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table emp4 created successfully<br/>";  
}else{  
echo "Could not create table: ".mysqli_error($conn);  
}  
  
// insert data into database 
  
$sql = 'INSERT INTO emp4(name,salary) VALUES ("kavan", 90000)';  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully<br/>";  
}else{  
echo "<br/>Could not insert record: ".mysqli_error($conn);  
}  
  
// Update Record in database

$id=2;  
$name="Rahul";  
$salary=80000;  
$sql = "update emp4 set name=\"$name\", salary=$salary where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully<br/>";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  

// delete record in database

$id=2;  
$sql = "delete from emp4 where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully</br>";  
}else{  
echo "Could not deleted record: ". mysqli_error($conn);  
}  

// select record in database

$sql = 'SELECT * FROM emp4';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP NAME : {$row['name']} <br> ".  
         "EMP SALARY : {$row['salary']} <br> ".  
         "--------------------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}  

mysqli_close($conn);  
?>  