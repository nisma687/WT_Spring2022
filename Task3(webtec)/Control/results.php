<?php


$_language_java  = $_language_php = $_language_cpp  = "null";
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
    echo "you must enter password".'<br>';
}


$formdata = array(
    'name'=> $_POST["first_name"],
    'name2'=>$_POST["last_name"],
    'age'=> $_POST["age"],
    'email'=>$_POST["email"],
    'radio'=>$_POST["designation"],
    'checkbox1' => $_language_java ,
    'checkbox2' => $_language_php ,
    'checkbox3' => $_language_cpp ,

 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;

 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);


 if(file_put_contents("data.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "your ".$key." is ".$value."<br>";
}
}   

?>
//$_FILES['myfile']['type']=="image/jpg" && $_FILES['myfile']['size']>2048



// if($_FILES['myfile']['type']=="image/jpg")
// {
//     echo "file is not jpg";

// }
//  else if( $_FILES['myfile']['size']>2048)
//     {
//         echo "size greater than 2";
      
//     }

//   else if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$_FILES["myfile"]["name"]))
//     {
//         echo "file uploaded";
//     }
//     else
//     {
//         echo "file can't upload";
//     }
    