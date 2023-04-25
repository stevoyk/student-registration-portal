<?php
       session_start();
        $con=mysqli_connect('localhost','root', '');
        mysqli_select_db($con, 'school');

        $matric = $_POST['matric'];
        $password = $_POST['pass'];
       

        print  $_SESSION['matric'];

                $s = "SELECT id FROM tb_student WHERE matric_id='$matric' AND password='$password'";
                $result=mysqli_query($con, $s);
                $_SESSION['matric']=$matric;

                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count=mysqli_num_rows($result);

                if($count==1){
                 header("location:stud_portal.php");
                }
                    else{
                    
                        echo "<script>alert('wrong credentials')</script>";
            
                        
                    }

                 
                

?> 
