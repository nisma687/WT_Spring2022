<?php

Class DB
{
    function openconn()
    {
        $DBhostname="localhost:8111";
        $DBusername="root";
        $Dbpass="";
        $DBname="final";
        $conn=new mysqli($DBhostname,$DBusername,$Dbpass,$DBname);
        if($conn->error)
        {
            echo "Connection object was not created " .$conn->connect_error;
        }
       return $conn;
    }
    function InsertData($fname,$lname,$age,$sallary,$designation,$tablename,$conn)
    {
        $sqlstr="INSERT INTO person(FirstName,LastName,Age,sallary,designation) Values ('$fname','$lname','$age','$sallary','$designation')";

        if($conn->query($sqlstr)=== TRUE)
        {
            echo "data inserted";
        }
        else
        {
            echo "data insertion failed";
        }
    }

    function closeconn($conn)
    {
            $conn->close();

    }


}















?>