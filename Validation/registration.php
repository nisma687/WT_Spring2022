


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styleregi.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <!-- <link href="Validation.js"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"> -->
</head>

<body>
    <div class="container" >
        <div class="header">
            <h2> Create Account </h2>
        </div>
        <form action="../Control/PHP/control.php" method="post" class="form" id="form">
            <div class="form-control">
                <label>First Name :</label>
                <input type="text" name="fname" id="fname" placeholder="Enter your name" autofocus required>
                <span class="material-icons-round" id='validfname'></span>
                <small id='fnameerror'></small>

                
            </div>
            <div class="form-control">
                <label>Last Name :</label>
                <input type="text" name="lname" id="lname" placeholder="Enter your last name" required>
                <span class="material-icons-round" id='validlname'></span>
                <small id='lnameerror'></small>
                  
            </div>
            <div class="form-control">
                <label>User Name :</label>
                <input type="text" name="uname" id="uname" placeholder="nawme07" required>
                <span class="material-icons-round" id="validuname"></span>
                <small id=unameerror></small>
                
               
            </div>
            <div class="form-control">
                <label>Phone no :</label>
                <input type="number" name="phnno" id="phnno" placeholder="013645373468" required>
                <span class="material-icons-round" id="validphnno"></span>
                
                <small id='phoneerror'></small>
                
               
            </div>
            <div class="form-control">
                <label>Email :</label>
                <input type="email" name="email" id="email" placeholder="nisma34@gmail.com" required>
                <span class="material-icons-round" id="validemail"></span>
                <small id='emailerror'></small>
                
                
            </div>
            <div class="form-control">
                <label>Password :</label>
                <input type="password" name="password" id="password"  placeholder="Password" required>
                <span class="material-icons-round" id="validpass"></span>
                
                <small id='passerror'></small>
                
              
            </div>
            <div class="form-control">
                <label>Confirm Password :</label>
                <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password" required>
                <span class="material-icons-round" id="validconpass"></span>
              
                <small id='confirmpasserror'></small>
                
               
            </div>
            <div class="form-control">
                <label>Region :</label>
                <input type="text" name="region" id="region" placeholder="Your region" required>
                <span class="material-icons-round" id="validregion"></span>
                
                <small id='regionerror'></small>
                
              
            </div>
            <div class="form-control">
                <label>Gender:</label>
                
                <input type="radio" name="gender" id="male" value="Male"required>Male
                <input type="radio" name="gender" id="female" value="Female" required>Female
                <input type="radio" name="gender" id="others" value="Others" required>Others
                <span class="material-icons-round" id="validgender"></span>
             
                <small id='gendererror'></small>
                
               
            </div>

            <div>
                <button class="Submit" name="submit">Submit</button>
                
                <br>
                <a href="">Login</a>


            </div>

        </form>
    <script src="Validation.js"></script>
    </div>
</body>

</html>







