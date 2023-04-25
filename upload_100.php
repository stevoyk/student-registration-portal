<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Students Scores</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">


    <style>
        body {
            padding: 0;
            margin: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: 'poppine', sans-serif;
            background: #ededff;
        }

        body .container {
            width: 100%;
            height: 100%;
            background: #ededff;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn {
            padding: 10px;
            margin-bottom: 15px;
            margin-top: 15px;
            font-size: 15px;
            color: white;
            background: #5f9ead;
            border: none;
            border-radius: 5px;
        }


        select {
            width: 120px;
            border: 1px solid whitesmoke;
            border-radius: 05px;
            box-shadow: 1px 1px 2px 1px grey;
            padding: 5px 5px;
            ;
        }

        table,
        tr,
        td {
            border: 1px solid;
            border-collapse: collapse;
            width: 70%;
            margin: 0px auto;
            padding: 5px 10px;
            background: transparent;
            border-radius: 0px 0px 10px 10px;
        }

        label {
            display: block;
            text-align: left;
            margin: 3px;
            font-weight: 100;
        }

        input {
            height: 30px;
            width: 120px !important;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;

        }
    </style>

<body>
    <div class="container">
        <div class="main">
            <h1>Upload scores for 100L students</h1>
            <table>
                <form action="upload_100_link.php" method="POST">
                    <div class="form-group" style="display:flex;">
                        <select name="session" id="session" style="width: 250px;">
                            <option value="">session</option>
                            <option value="computer">2016/2017</option>
                            <option value="mass">2017/2018</option>
                            <option value="mass">2018/2019</option>
                        </select>
                        <label for="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Student Matric No:</label><input
                            type="number" name="stud_matric" required>

                        <label for="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCourse Unit:</label><input type="number"
                            name="stud_matric" required>
                    </div>

                    <tr class="form-group">
                        <td>
                            <h5>Carefully choose the student courses:</h5>
                        </td>
                        <td>
                            <h5>1st CA</h5>
                        </td>
                        <td>
                            <h5>2nd CA</h5>
                        </td>
                        <td>
                            <h5>Exam</h5>
                        </td>

                    </tr>
                   
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                    </tr>
                    
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    <tr class="form-group">
                        <td> <select name="session" id="session">
                                <option value="">Course</option>
                                <option value="computer">2016/2017</option>
                                <option value="mass">2017/2018</option>
                                <option value="mass">2018/2019</option>
                            </select></td>
                        <td> <input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>
                        <td><input type="number" name="stud_matric" required></td>

                    </tr>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </div>

                </form>





            </table>










        </div>


    </div>


    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>