
document.getElementById("fname").addEventListener('keyup',function(){
   
    if(document.getElementById('fname').value==""){
        document.getElementById('fnameerror').innerHTML='Name cannot be empty';
        document.getElementById("validfname").style.color = "red";
        document.getElementById("validfname").innerHTML='clear';
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('fname').value)==false){
        document.getElementById("fnameerror").innerHTML='Name can only contain alphabets';
        document.getElementById("validfname").innerHTML='clear';
        document.getElementById("validfname").style.color = "red";
    }
    else{
        document.getElementById('fnameerror').innerHTML='';
        document.getElementById("validfname").innerHTML = "check";
        document.getElementById("validfname").style.color = "green";
    }
});

document.getElementById('lname').addEventListener('keyup',function(){
    if(document.getElementById('lname').value=="")
    {
        document.getElementById('lnameerror').innerHTML="Lastname can't be empty";
        document.getElementById('validlname').innerHTML="clear";
        document.getElementById('validlname').style.color="red";
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('lname').value)==false){
        document.getElementById("lnameerror").innerHTML='Name can only contain alphabets';
        document.getElementById("validlname").innerHTML='clear';
        document.getElementById("validlname").style.color = "red";
    }
    else{
        document.getElementById('lnameerror').innerHTML='';
        document.getElementById("validlname").innerHTML = "check";
        document.getElementById("validlname").style.color = "green";
    }

});

document.getElementById('uname').addEventListener('keyup',function()
{
    if(document.getElementById('uname').value=="")
    {
        document.getElementById('phoneerror').innerHTML="Username can't be empty";
        document.getElementById('validuname').innerHTML="clear";
        document.getElementById('validuname').style.color="red";
    }
    else if(/^[a-zA-Z]+[0-9]*$/.test(document.getElementById('uname').value)==false)
    {
        document.getElementById('phoneerror').innerHTML="Invalid username";
        document.getElementById('validuname').innerHTML="clear";
        document.getElementById('validuname').style.color="red";
    }
    else
    {
        document.getElementById('phoneerror').innerHTML='';
        document.getElementById("validuname").innerHTML = "check";
        document.getElementById("validuname").style.color = "green";

    }

});
document.getElementById('phnno').addEventListener('keyup',function()
{
    if(document.getElementById('phnno').value=="")
    {
        document.getElementById('phoneerror').innerHTML="Phone no can't be empty";
        document.getElementById('validphnno').innerHTML="clear";
        document.getElementById('validphnno').style.color="red";
    }
    else if(/^[0-9]{11}$/.test(document.getElementById('phnno').value)==false)
    {
        document.getElementById('phoneerror').innerHTML="Invalid phone number";
        document.getElementById('validphnno').innerHTML="clear";
        document.getElementById('validphnno').style.color="red";
    }
    else
    {
        document.getElementById('phoneerror').innerHTML='';
        document.getElementById("validphnno").innerHTML = "check";
        document.getElementById("validphnno").style.color = "green";

    }

});

document.getElementById('email').addEventListener('keyup',function()
{
    if(document.getElementById('email').value=="")
    {
        document.getElementById('emailerror').innerHTML="Email no can't be empty";
        document.getElementById('validemail').innerHTML="clear";
        document.getElementById('validemail').style.color="red";
    }
    else if(/^\S+@+[a-z]{5}\S+.\S+$/.test(document.getElementById('email').value)==false)
    {
        document.getElementById('emailerror').innerHTML="Invalid Email Address";
        document.getElementById('validemail').innerHTML="clear";
        document.getElementById('validemail').style.color="red";
    }
    else
    {
        document.getElementById('emailerror').innerHTML='';
        document.getElementById("validemail").innerHTML = "check";
        document.getElementById("validemail").style.color = "green";

    }

});

document.getElementById("region").addEventListener('keyup',function(){
   
    if(document.getElementById('region').value==""){
        document.getElementById('regionerror').innerHTML='Region cannot be empty';
        document.getElementById("validregion").style.color = "red";
        document.getElementById("validregion").innerHTML='clear';
    }
    else if(/^[a-zA-Z]+$/.test(document.getElementById('region').value)==false){
        document.getElementById("regionerror").innerHTML='Region can only contain alphabets';
        document.getElementById("validregion").innerHTML='clear';
        document.getElementById("validregion").style.color = "red";
    }
    else{
        document.getElementById('regionerror').innerHTML='';
        document.getElementById("validregion").innerHTML = "check";
        document.getElementById("validregion").style.color = "green";
    }
});

document.getElementById("password").addEventListener('keyup',function(){
   
    if(document.getElementById('password').value==""){
        document.getElementById('passerror').innerHTML='Password cannot be empty';
        document.getElementById("validpass").style.color = "red";
        document.getElementById("validpass").innerHTML='clear';
    }
    else if(/^(?!.*\s)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*().]).{8,}$/
    .test(document.getElementById('password').value)==false){
        document.getElementById("passerror").innerHTML='Password must contain one uppercase,lowercase,special character,number';
        document.getElementById("validpass").innerHTML='clear';
        document.getElementById("validpass").style.color = "red";
    }
    else{
        document.getElementById('passerror').innerHTML='';
        document.getElementById("validpass").innerHTML = "check";
        document.getElementById("validpass").style.color = "green";
    }
});

document.getElementById("confirmpass").addEventListener('keyup',function(){

    if(document.getElementById('confirmpass').value==""){
        document.getElementById('confirmpasserror').innerHTML='Confirm your Password';
        document.getElementById("validconpass").style.color = "red";
        document.getElementById("validconpass").innerHTML='clear';
    }
    else if(document.getElementById('confirmpass').value!=document.getElementById('password').value)
    {
        document.getElementById("confirmpasserror").innerHTML='Password must be the same';
        document.getElementById("validconpass").innerHTML='clear';
        document.getElementById("validconpass").style.color = "red";

    }
    else
    {
        document.getElementById('confirmpasserror').innerHTML='';
        document.getElementById("validconpass").innerHTML = "check";
        document.getElementById("validconpass").style.color = "green";

    }
   

});



