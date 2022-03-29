<?php

include("../Model/model.php");


if(isset($_POST["submit"]))
    {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $age=$_POST["age"];
        $salary=$_POST["salary"];
        $designation;
        if(isset($_POST["designation"]))
        {
            $designation=$_POST["designation"];

        }
        

        if(empty($fname) || empty($lname) || empty($age) || empty($designation) || empty($salary))
        {
            echo "all fields must be filled";
        }
        else
        {
            $mydB=new DB();
            $conobj=$mydB->openconn();
            $mydB->InsertData($fname,$lname,$age,$salary,$designation,"person",$conobj);
            $mydB->closeconn($conobj);
        }


    }
   
?>