<?php

// var_dump($_POST);
if(empty($_POST['first_name'])){
    echo "Please write your first name<br>";
} 
else if(!empty($_POST['first_name']) && strlen($_POST['first_name']) < 6){
    echo "Please enter a valid name. mininum 6 characters<br>";
}
else {
    echo "First name: " . $_POST['first_name'] . '<br>';
}

if(empty($_POST['last_name'])){
    echo "Please write your first name<br>";
} 
else if(!empty($_POST['last_name']) && strlen($_POST['last_name']) < 6){
    echo "Please enter a valid name. mininum 6 characters<br>";
}
else {
    echo "Last name: " . $_POST['last_name'] . '<br>';
}
if(empty($_POST['designation']))
{
    echo"You must select a designation".'<br>';
}
if(empty($_POST['age']))
{
    echo"You must give your age".'<br>';
}
if(empty($_POST['language_java']) && empty($_POST['language_cpp']) && empty($_POST['language_php']))
{
    echo"You must select at least one prefered language<br>";
}
else
{
    if(!empty($_POST['language_java']))
    echo "you have selcted java as prefered language<br>";
    if(!empty($_POST['language_cpp']))
    echo "you have selcted C++ as prefered language<br>";
    if(!empty($_POST['language_php']))
    echo "you have selcted PHP as prefered language<br>";

}
if(empty($_POST['email']))
{
    echo "you must enter an email";
}
if(empty($_POST['password']))
{
    echo "you must enter password";
}