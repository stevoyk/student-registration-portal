
<?php
session_start();
$con=mysqli_connect('localhost','root','','school') or die(mysqli_error($con));
if(mysqli_connect_error()){
    echo "failed to connect to MySQL:" . mysqli_connect_error();

}else{

    $matric=$_SESSION['matric']; //WHERE matric_id='$matric'"You really gave me tough time but thank God
    $query= "SELECT * FROM tb_score"; //and you too
    $result= mysqli_query($con, $query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
   

}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2px" align="center" style="width: 700px;" >
        <tr>
            <th><h3>Code</h5></th>
            <th><h3>Title</h5></th>
            <th><h3>Unit</h3></th>
            <th><h3>Status</h3></th>
            <th><h3>1st CA </h3></th>
            <th><h3>2nd CA </h3></th>
            <th><h3>Exam</h3></th>
            <th><h3>Grade</h3></th>         
            
        </tr>
        
        <?php
        while($row=mysqli_fetch_assoc($result)){
           
            
            echo '<tr>';
            echo '<td>' .$row['course_code']. '</td>';
            echo '<td>' .$row['course_title']. '</td>';
            echo '<td>' .$row['course_unit']. '</td>';
            echo '<td>' .$row['course_status']. '</td>';
            echo '<td>' .$row['course_first']. '</td>';
            echo '<td>' .$row['course_second']. '</td>';
            echo '<td>' .$row['course_exam']. '</td>';
            echo '<td>' .$row['course_grade']. '</td>';
          
            echo '</tr>';
          
           
            
          
           
        } 
        ?>      
       
    </table>
  
</body>
</html>