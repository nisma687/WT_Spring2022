<!doctype html>
<?php


include("../Controller/Registrationcheck.php");



?>
<html>
    <body>
        <h2> Registration form : </h2>
        <form action="../Controller/Registrationcheck.php" method="post">
        <table>
            <tr><td>
            <b>First name :</b> <input type="text" name="fname"> <br>
            </td> 
            </tr>
            <!-- <br> -->
            <tr>
                 <td>
                <b> Last name  : </b> <input type="text" name="lname">
                <!-- <br> -->
                </td>
              <!-- <br> -->
            </tr>

            <tr>
                <td>
            <b> Age  :</b> <input type="text" name="age"><br>
            </td>
            </tr>
            <tr>
            <td>
            <b> salary :</b> <input type="text" name="salary">
            </td>
            </tr>
            <tr>
            <td>
            <b> degisnation :</b>
            <input type="radio" name="designation" value="junior">Junior Programmer
            <input type="radio" name="designation" value="senior">Senior Programmer
            <input type="radio" name="designation" value="lead">Project Lead<br>
            </td>
            </tr>
            <tr>
                <td>
                <b> Email : </b> <input type="text" name="email"><br>
                </td>
              <!-- <br> -->
            </tr>
            
            <tr>
                <td>
                    <br>
               <input type="submit" value="submit" name="submit">
                </td>
              <!-- <br> -->
            </tr>
            
        </table>
        </form>
        
    </body>
</html>