<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
</head>
<body>
<?php
session_start();
$con=mysqli_connect('localhost','root','','school') or die(mysqli_error($con));
if(mysqli_connect_error()){
    echo "failed to connect to MySQL:" . mysqli_connect_error();

}else{

$matric=$_SESSION['matric']; //You really gave me tough time but thank God
$query= "SELECT * FROM tb_student WHERE matric_id='$matric'"; //and you too
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
    <title>Student portal</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: whitesmoke;
        }
        h1{
            
            text-align: center;
        }
        table, tr, td{
            border: 1px solid;
            width: 50%;
            padding: 20px;
            text-align: center;
           
        }
        tr{
            background-color: #5f9ead;
            color: #fff;
        }
    </style>
   
</head>

<body>

   <table>
       <h1>Student Personal Details</h1>
       <tr>
           <td><h5>Student Matric Number</h5></>
           <td><?php echo "HND/14/FT/COM/" . $_SESSION['matric'];?></td>
       </tr>
       <tr>
           <td><h5>Session</h5></td>
           <td><?php echo $row['session'];?></td>
       </tr>
       <tr>
           <td><h5>Surname</h5></td>
           <td><?php echo $row['sname'];?></td>
       </tr>
       <tr>
           <td><h5>First Name</h5></td>
           <td><?php echo $row['fname'];?></td>
       </tr>
       <tr>
           <td><h5>Email</h5></td>
           <td><?php echo  $row['email'];?></td>
       </tr>
       <tr>
           <td><h5>Address</h5></td>
           <td><?php echo $row['address'];?></td>
       </tr>
       <tr>
           <td><h5>Phone Number</h5></td>
           <td><?php echo $row['phone'];?></td>
       </tr>
       <tr>
           <td><h5>State Of Origin</h5></td>
           <td><?php echo$row['origin'];?></td>
       </tr>
       <tr>
           <td><h5>Local Gov't</h5></td>
           <td><?php echo $row['lga'];?></td>
       </tr>
       <tr>
           <td><h5>Birthday</h5></td>
           <td><?php echo $row['birthday'];?></td>
       </tr>
       <tr>
           <td><h5>Gender</h5></td>
           <td><?php echo $row['gender'];?></td>
       </tr>
       <tr>
           <td><h5>Department</h5></td>
           <td><?php echo $row['department'];?></td>
       </tr>
       <tr>
           <td><h5>Mode of Entry</h5></td>
           <td><?php echo $row['moe'];?></td>
       </tr>
       <tr>
           <td><h5>Level</h5></td>
           <td><?php echo $row['level'];?></td>
       </tr>
      
       
      
                                
   </table>

            
           








    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>
</body>
</html>