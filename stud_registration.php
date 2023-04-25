<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration portal</title>
  <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/css.css">
  

  <style>
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
        select{
          width: 50%;
          border: 1px solid whitesmoke;
          border-radius: 05px;
          box-shadow: 1px 1px 2px 1px grey;
          padding: 10px 15px 10px 15px;
        }
        form {
        width: 70%;
        margin: 0px auto;
        padding: 20px;
        background: transparent;
        border-radius: 0px 0px 10px 10px;
        }
        .input-group {
          margin: 10px 0px 10px 0px;
        }
          label {
            display: block;
            text-align: left;
            margin: 3px;
            font-weight: 100;
          }
  
          input {
            height: 40px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
         
          }
          p{
              padding-top: 10px;
          }
          a{
              text-decoration: none;
              color: black;    
          }
  </style>

<body>
  <div class="container">
    <div class="main">
          <h1>Student Registration Portal</h1><br>
          
              <form action="stud_registration_link.php" method="POST" enctype="multipart/form-data">
                <h3>Personal Details</h3><br>
                
                <div class="form-group" style="display:flex;">
                    <label for="session">session:</label>
                    <select name="session" id="session">
                    <option value="">--Please select session--</option>
                    <option value="2016/2017">2016/2017</option>
                    <option value="2017/2018">2017/2018</option>
                    <option value="2018/2019">2018/2019</option>
                    </select> &nbsp&nbsp 
                    <label for="session">&nbsp&nbsp&nbsp&nbspPassport:</label>            
                  <input type="file" name="stud_img" class="form-control" >
                </div><br>
            <div class="form-group">
                <label>Matric No:</label>
                <input type="number" name="stud_matric" class="form-control" required >
            </div>
            <div class="form-group">
                <label>Surname:</label>
                <input type="text" name="stud_sname" class="form-control" required>
            </div>
            <div class="form-group">
              <label>First Name:</label>
              <input type="text" name="stud_fname" class="form-control" required >
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" name="stud_email" class="form-control" >
        </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="stud_spassword_1" class="form-control" required >
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" name="stud_spassword_2" class="form-control" required>
            </div>
                        
            
            <div class="form-group">
                <label>Permamnet Home/Address:</label>
                <input type="text" name="stud_address" class="form-control" required >
            </div>
            <div class="form-group">
              <label>Student Phone No:</label>
              <input type="text" name="stud_phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label>State of Origin:</label>
                <input type="text" name="stud_origin" class="form-control" required >
            </div>
            <div class="form-group">
                <label>LGA:</label>
                <input type="text" name="stud_lga" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Birthday:</label>
                <input type="date" name="stud_birthday" class="form-control"required >
            </div><br>
            <div class="form-group" style="display:flex;">
                <label for="">Gender</label>
                <select name="stud_gender" id="Gender">
                <option value="">--Please choose your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select> &nbsp&nbsp 
                <label for="department">Department:</label>
                <select name="stud_department" id="department">
                <option value="">--Please choose a department</option>
                <option value="computer">Computer Science</option>
                <option value="mass">Mass communication</option>
                <option value="telecom">Telecommunication</option>
                </select>
            </div><br>
            <div class="form-group" style="display:flex;">
                <label for="moe">MOE&nbsp&nbsp&nbsp&nbsp</label>
                <select name="stud_moe" id="EntryMood">
                <option value="">--Please choose Your Mood of Entry</option>
                <option value="computer">Fresher</option>
                <option value="mass">Stalite</option>
                </select>&nbsp&nbsp&nbsp&nbsp
                <label for="level">&nbsp&nbsp&nbsp&nbspLevel &nbsp&nbsp&nbsp&nbsp</label>
                <select name="stud_level" id="level">
                <option value="">--Please choose Your level</option>
                <option value="100l">100L</option>
                <option value="200l">200L</option>
                <option value="300l">300L</option>
                <option value="400l">400L</option>
               
                </select>
            </div>
       
          
      
    <br>
    <br>
    <br>
    <br>

    
      <h3>NEXT OF KIN'S DETAILS</h3>
        <div class="form-group">
          <label for="ngender">Gender:</label>
          <select name="nxt_gender" id="gender">
            <option value="">--Please choose your Gender</option>
            <option value="nmale">Male</option>
            <option value="nfemale">Female</option>
          </select>
        </div><br>

          <div class="form-group">
              <label>Surname:</label>
              <input type="text" name="nxt_sname" class="form-control" required >
          </div>
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" name="nxt_fname" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Relationship:</label>
            <input type="text" name="nxt_relationship" class="form-control" required >
        </div>
        <div class="form-group">
            <label>Address:</label>
            <input type="text" name="nxt_address" class="form-control" >
        </div>
        <div class="form-group">
            <label>Phone No:</label>
            <input type="text" name="nxt_phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="nxt_email" class="form-control">
        </div>
          <br>
          <br>

         
                <h3>GUARDIAN'S DETAILS</h3>
                  <div class="form-group">
                    <label for="ggender">Gender:</label>
                    <select name="ggender" id="gender">
                      <option value="">--Please choose your Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div><br>

                  <div class="form-group">
                    <label>Surname:</label>
                    <input type="text" name="gsname" class="form-control" required >
                  </div>
                  <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="gfname" class="form-control" required>
                  </div>
                
                  <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="gaddress" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Phone No:</label>
                    <input type="text" name="gphone" class="form-control" required >
                  </div>

                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="gemail" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <p>
                        Already a Student <a href="stud_login.html">Login</a>
                    </p>
      
                  </div>
          

            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="save">Save</button>

            </div>
         


    </form>

  </div>


  </div>


  <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>