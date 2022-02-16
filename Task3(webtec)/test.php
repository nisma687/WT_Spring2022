<!doctype html>

<html>
<head>
    
</head>


<body>
    <h2> Registration Form </h2>
    <hr>
<form method="post" action="Control/results.php" enctype="multipart/form-data">
    
    <label> First Name : </label>
    <input type="text" name="first_name" placeholder="Enter your name">
    <br>
    <label> Last Name : </label>
    <input type="text" name="last_name" placeholder="Enter your  last name">
    <br>
    <label> Age : </label>
    <input type="number" min="0" name="age" ><br>
    <label> Designation : 
    <input type="radio" name="designation" value="designation">Junior Programmer

    <input type="radio" name="designation" value="designation">Senior Programmer
   
    <input type="radio" name="designation" value="designation">Project Lead<br>
    </label>
    <label>Preferred Language:
        <input type="checkbox" name="language_java">Java
        <input type="checkbox" name="language_php">PHP
        <input type="checkbox" name="language_cpp">C++ <br>
</label>
<label>E-mail:
    <input type="email" name="email"><br>
</label>
<label>Password:
    <input type="password" name="password">
</label>

<p>Please choose a file  <input type="file" value="Choose File" name="myfile">  </p>


<input type="submit" value="submit">












</form>
</body>












</html>