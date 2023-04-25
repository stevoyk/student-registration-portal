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
        body {
            margin-top: 20px;
            background-color: lightgray;
        }

        .main {
            padding: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topbar {
            background-color: teal;
            overflow: hidden;
        }

        .topbar a {
            float: right;
            color: whitesmoke;
            padding: 20px 26px;
            text-align: center;
            text-decoration: none;
            font-size: 26px;
        }

        .sidebar {
            background-color: #5f9ead;
            color: white;
            height: 81vh;
        }

        .sidebar a {
            margin-left: 10px;
            display: block;
            color: white;
            padding-bottom: 10px;
            font-size: 30px;
            text-decoration: none;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .content {
            background-color: whitesmoke;
        }
    </style>
</head>

<body>

    <div class="contaner">
        <div class="main">
            <div class="topbar">
                <a href="stud_portal.php">Home</a>
                <a href="">Support</a>
                <a href="">Logout</a>

            </div>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="FullSizeRender-188.jpg" class="rounded-circle" width="150" alt="">
                            <div class="mt-3">
                                <h3><?php 
                                    echo strtoupper($row['sname']." ". $row['fname']);?></h3>
                                <a href="">Home</a>
                                <a href="personal_details.php">Personal Details</a>
                                <a href="">Course Registration</a>
                                <a href="check_result_link.php">Check Result</a>

                                <select name="" id="" style="background-color: transparent; color: #fff; font-size: 30px; border: none;">
                                    <option value="" >School Fees payment type</option>
                                    <option value="" >Frsher</option>
                                    <option value="" >Stallite</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Matric No:</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php 
                                    echo "HND/14/FT/COM/" . $_SESSION['matric'];?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Full Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php 
                                      echo strtoupper ($row['sname']." ". $row['fname']);?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php 
                                    echo $row['email'];?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                <?php 
                                    echo $row['phone'];?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Address</h5>
                                </div>
                                <div class="col-md-9">
                                <?php  echo strtoupper ($row['address']);?>
                                </div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="card mb-3 content">
                        <h1 class="m-3">Recent</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5></h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non repellendus totam corrupti ipsa expedita velit? Nisi quas omnis deleniti vero nihil tenetur ab eum voluptatum culpa, temporibus amet id ipsam.lorem
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolorem obcaecati aspernatur, non fuga quia. Laborum deserunt sed dolor id nulla necessitatibus minus ea doloribus, enim reprehenderit eum harum saepe.
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolores qui at, culpa tempora deleniti quidem voluptas distinctio labore libero fugit officia magnam facilis explicabo natus sit veritatis quae dolorem.
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam placeat similique in necessitatibus voluptatem tempora sapiente ad optio incidunt totam, magni quaerat et quo minima? Eligendi sapiente consequuntur nulla quas.
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nobis rerum porro nulla ullam consectetur veniam obcaecati ab ipsam. Quam fugiat facere fuga explicabo minus. Labore dicta placeat laudantium magni?
                                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum eaque dolor nostrum aperiam necessitatibus, hic consequatur. Suscipit a magni nam dolore praesentium laborum. Libero minus exercitationem ducimus eligendi modi eos!locale_get_region
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum maxime delectus dignissimos, non similique ut velit totam adipisci ipsum ad tempora, officia laudantium ex eaque, provident eius eligendi quae laboriosam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>