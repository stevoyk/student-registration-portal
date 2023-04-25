<?php

session_start();
$con=mysqli_connect('localhost','root','','school') or die(mysqli_error($con));

if(isset($_POST['save'])){
        $session = $_POST['session'];
        $img = $_FILES['stud_img']['name'];
        $matric = $_POST['stud_matric'];
        $sname = $_POST['stud_sname'];
        $fname = $_POST['stud_fname'];
        $email = $_POST['stud_email'];
        $password = $_POST['stud_spassword_1'];
        $confirm = $_POST['stud_spassword_2'];
        $address = $_POST['stud_address'];
        $phone = $_POST['stud_phone'];
        $origin = $_POST['stud_origin'];
        $lga = $_POST['stud_lga'];
        $birthday = $_POST['stud_birthday'];
        $gender = $_POST['stud_gender'];
        $department = $_POST['stud_department'];
        $moe = $_POST['stud_moe'];
        $level = $_POST['stud_level'];



        if ($password != $confirm){

            echo "The Password do not match";
    
            }else if($password == $confirm){

                $u = "SELECT email FROM tb_student WHERE email ='$email'";
                $uu=mysqli_query($con, $u);
            
                if(mysqli_num_rows($uu)>0){
                    echo "<script>alert('Email already exist')</script>";
                    die;
                }
            
                else{
                    $reg="INSERT INTO tb_student(matric_id, session, image,sname,fname,email,password,address,phone,origin,lga,birthday,gender,department,moe,level,ngender,nsname,nfname,nrelationship,naddress,nphone,nemail,ggender,gsname,gfname,gaddress,gphone,gemail) VALUES ('$matric', '$session', '$img', '$sname', '$fname', '$email', '$password', '$address', '$phone', '$origin', '$lga', '$birthday', '$gender', '$department', '$moe', '$level', '$ngender', '$nsname', '$nfname', '$nrelationship', '$naddress', '$nphone', '$nemail', '$ggender', '$gsname', '$gfname', '$gaddress', '$gphone', '$gemail')";
            
                    $result= mysqli_query($con, $reg);
                    $_SESSION['session']="$session ";
                    $_SESSION['matric']="$matric ";
                    $_SESSION['sname']="$sname";
                    $_SESSION['fname']="$fname";
                    $_SESSION['email']="$email ";
                    $_SESSION['address']="$address";
                    $_SESSION['phone']="$phone";
                    $_SESSION['origin']="$origin ";
                    $_SESSION['lga']="$lga ";
                    $_SESSION['birthday']="$birthday";
                    $_SESSION['gender']="$gender";
                    $_SESSION['department']="$department";
                    $_SESSION['moe']="$moe";
                    $_SESSION['level']="$level";
                    $_SESSION['image']=$_FILES['stud_img']['name'];
            
            
                    $ngender = $_POST['nxt_gender'];
                    $nsname = $_POST['nxt_sname'];
                    $nfname = $_POST['nxt_fname'];
                    $nrelationship = $_POST['nxt_relationship'];
                    $naddress = $_POST['nxt_address'];
                    $nphone = $_POST['nxt_phone'];
                    $nemail = $_POST['nxt_email'];
            
                    $_SESSION['ngender']="$ngender";
                    $_SESSION['nsname']="$nsname";
                    $_SESSION['nfname']="$nfname";
                    $_SESSION['nrelationship']="$nrelationship";
                    $_SESSION['naddress']="$naddress";
                    $_SESSION['nphone']="$nphone";
                    $_SESSION['nemail']="$nemail";
            
            
            
                    $ggender = $_POST['ggender'];
                    $gsname = $_POST['gsname'];
                    $gfname = $_POST['gfname'];
                    $gaddress = $_POST['gaddress'];
                    $gphone = $_POST['gphone'];
                    $gemail = $_POST['gemail'];
            
                    $_SESSION['ggender']="$ggender";
                    $_SESSION['gsname']="$gsname";
                    $_SESSION['gfname']="$gfname";
                    $_SESSION['gaddress']="$gaddress";
                    $_SESSION['gphone']="$gphone";
                    $_SESSION['gemail']="$gemail";
            
            
                if($result){
                    move_uploaded_file($_FILES['stud_img']['tmp_name'],"upload/".$_FILES['stud_img']['name']);
                    header("location:successful.php");
                }else{
                    echo "<script>alert('failed')</script>";
                }
            }
            }

            }


   

?>