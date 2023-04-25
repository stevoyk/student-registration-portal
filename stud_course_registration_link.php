<?php
session_start();
$con=mysqli_connect('localhost','root','','school') or die(mysqli_error($con));

if(isset($_POST['submit'])){
 $course = $_POST['course100'];
 //echo $course;

 foreach($course as $item){
     //echo $item;
     $sql="INSERT INTO tb_course(course_code) VALUES ('$item')";
     $sql_run=mysqli_query($con, $sql);

    
     if($sql_run){
         $_SESSION['status'] = "Course Registration Done Successfully";
         header("location: stud_course_registration.php");
     } else{
        $_SESSION['status'] = "Course Registration is not Successfully";
        header("location: stud_course_registration.php");

     }
 }
}

?> 