<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Portal</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: poppins;
            
        }
        body{
            background-color: #E8EDF2;
        }
        .container{
            position: absolute;
            width: 55%;
            top: 30%;
            left: 25%;
            transform: translate(-50%,-50%,);
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 50px -50px darkslategrey;

        }
        .myform{
            width: 300px;
            margin-right: 30px;
            margin-left: 12px;
        } h2{
            color: #1c1c1e;
            margin-bottom: 20px;
        }

        input{
            border: none;
            outline: none;
            border-radius: 0;
            width: 100%;
            border-bottom: 2px solid #1c1c1e;
            margin-bottom: 25px;
            padding: 7px 0;
            font-size: 20px;
            letter-spacing: 1px;
        }
        button{
            color: #fff;
            background-color: #1c1c1e;
            border: none;
            outline: none;
            border-radius: 2px;
            font-size: 14px;
            padding: 5px 12px;
            font-weight: 500;

        }

        img{
            width: 400px;
            
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="myform">
            <form action="stud_login_link.php" method="POST">
                <h2>LOGIN</h2>
                <input type="text" name="matric" placeholder="Matric" required>
                <!-----<input type="email" name="email" placeholder="email" >-->
                <input type="password" placeholder="Password" name="pass" required>
                <button type="submit">Login</button>
            </form>
        </div>
        </div>
        <div class="col-md-6">
          <div class="image">
            <img src="product-3-720x480.jpg" alt="">

        </div>

        </div>
      </div>
       
        
    </div>
    

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>