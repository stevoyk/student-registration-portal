<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: sans-serif, Poppins;
}

* .container {
  width: 100%;
  height: 100vh;
  background: #5f9ead;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

* .container .btn {
  padding: 10px 60px;
  background: #fff;
  border: 0;
  outline: none;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
  border-radius: 30px;
}

* .container .popup {
  width: 400px;
  background-color: #fff;
  border-radius: 6px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  text-align: center;
  padding: 0 30px 30px;
  color: #333;
  -webkit-transition: top 0.4s, -webkit-transform 0.4s;
  transition: top 0.4s, -webkit-transform 0.4s;
  transition: transform 0.4s, top 0.4s;
  transition: transform 0.4s, top 0.4s, -webkit-transform 0.4s;
  /*.open-popup{
                        visibility: visible;
                        top: 50%;
                        transform: translate(-50%, -50%) scale(1);
                    }*/
}

* .container .popup img {
  width: 100px;
  margin-top: -50%;
  border-radius: 50%;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

* .container .popup h2 {
  font-size: 38px;
  font-weight: 500;
  margin: 30px 0 10px;
}

* .container .popup button {
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  background: #6fd649;
  color: #fff;
  border: 0;
  outline: none;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}


/*# sourceMappingURL=stlye.css.map */
    </style>
</head>
<body>
    
</body>
</html>
<div class="container">
    <div class="popup" id="popup">
        <img src="download.jfif">
        <h2>Thank you!</h2>
        <p>Your details has been successfully submitted. you can now login</h2></p>
        <button type="button"><a href="stud_login.php">Ok</a></button>
    </div>
</div>

 
</body>
</html>