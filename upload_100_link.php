<?php 

$con=mysqli_connect('localhost','root','','school');
    if (!$con){
        echo "DB not collected..";
    }else{
        $a=$_REQUEST['t1'];
        $b=$_REQUEST['t2'];
        $c=$_REQUEST['t3'];
        $d=$_REQUEST['t4'];
        $e=$_REQUEST['t5'];
        $to=$c+$d+$e;
        $ave=$to/3;
        if($ave>60){
            $qr="A";
        }
        elseif($ave>50&&$ave<59){
        $qr="B";
        }
        elseif($ave>40&&$ave<49){
        $qr="C";
        }
        else{
        $qr="FAIL";
        }
        
    }
    $in="INSERT INTO tb_score(name, roll,phy,chem,math,total,average,grade) VALUES('$a','$b','$c','$d','$e','$to','$ave','$qr')";
    mysqli_query($con, $in);




?>