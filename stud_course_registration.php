<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <style>
        .btn {
            width: 20%;
            padding: 10px;
            margin-bottom: 15px;
            margin-top: 15px;
            font-size: 30px;
            color: white;
            background: #5f9ead;
            border: none;
            border-radius: 5px;
        }

        form {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            background: transparent;
            border-radius: 0px 0px 10px 10px;
        }

        input {
            height: 30px;
            width: 50%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;

        }
    </style>

<body>
    <div class="container">
        <div class="main">
            <h1>
                <center>Register Your Courses </center>
            </h1>
           
        


            <h3>Choose courses for 100Level</h3>
            <form action="stud_course_registration_link.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                    

                        <input type="checkbox" name="course100[]" value="Math111">Mathematics


                        <input type="checkbox" name="course100[]" value="Gns11">English


                        <input type="checkbox" name="course100[]" value="Sta111">Statistic


                        <input type="checkbox" name="course100[]" value="Com111">Basic


                        <input type="checkbox" name="course100[]" value="Com123">Bootstrap


                        <input type="checkbox" name="course100[]" value="Com124">Assembly


                    </div>

                    <div class="col-md-4">

                        <input type="checkbox" name="course100[]" value="Com125">Language

                        <input type="checkbox" name="course100[]" value="Com126">Sql

                        <input type="checkbox" name="course100[]" value="Com127">Python

                        <input type="checkbox" name="course100[]" value="Com128">Technology

                        <input type="checkbox" name="course100[]" value="Com129">Mathematics

                        <input type="checkbox" name="course100[]" value="Com102">Information



                    </div>

                    <div class="col-md-4">

                        <input type="checkbox" name="course100[]" value="Com103">Communication

                        <input type="checkbox" name="course100[]" value="Com104">Telecommunication

                        <input type="checkbox" name="course100[]" value="Com105">Algorithm

                        <input type="checkbox" name="course100[]" value="Com106">Flow Chart

                        <input type="checkbox" name="course100[]" value="Com107">Programining

                        <input type="checkbox" name="course100[]" value="Com108">Fortran


                    </div>

                </div>
                <br>

                <h3>Choose courses for 200Level</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>

                </div>
                <br>
                <h3>Choose courses for 300Level</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>

                </div>
                <br>
                <h3>Choose courses for 400Level</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="stud_course" value="MathematicsS">
                            <label for="maths">Mathematics</label>
                        </div>

                    </div>

                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </div>
            </form>







        </div>


    </div>


    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>