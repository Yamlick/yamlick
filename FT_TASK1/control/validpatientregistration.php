<?php
include("../model/model.php");

$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio1="";
$validateradio2="";
$validatebg="";
$validateuname="";

$validatepass="";




$fname= $lname= $gender= $Occupation= $age= $bg= $email= $uname= $pass=$bpconarray ="";
$vfname=$vlname=$vradio1=$vradio2=$vage=$vbg=$vemail=$vuname=$vpass= $vcheckbox=0;

if(isset($_POST["submit"]))
{


    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $age=$_REQUEST["age"];
    $bg=$_REQUEST["bg"];
    $email=$_REQUEST["email"];
    $uname=$_REQUEST["uname"];

    $pass=$_REQUEST["pass"];





    if(empty($fname) || (strlen($fname)<3))
    {
        $validatefname= "Please Enter Your First Name at least 3 character long";
    }
    else{
        $validatefname=$fname;
        $vfname=1;
    }


    if(empty($lname) || (strlen($lname)<4))
    {
        $validatelname= "Please Enter Your Last Name at least 3 character long";
    }
    else{
        $validatelname=$lname;
        $vlname=1;
    }




if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
    $validateradio1= $gender;
    $vradio1=1;
}
else{
    $validateradio1= "Please Select One gender";
}
if(isset($_REQUEST["Occupation"]))
{
    $Occupation=$_REQUEST["Occupation"];
    $validateradio2= $Occupation;
    $vradio2=1;
}
else{
    $validateradio2= "Please Select One Occupation";
}


    

if(empty($age))
{
    $validateage= "Please Enter Your Age";
}
else{
    $validateage= $age;
    $vage=1;
}

if (empty($bg)) {
    $validatebg= "Please Enter Your blood group";
}
else{
    $validatebg= $bg;
    $vbg=1;
}


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please Enter Your Email";
}
else{
    $validateemail= "Your Email is ".$email;
    $vemail=1;
}


if(empty($pass))
{
    $validatepass= "Please Enter Password";
}
else{
    $validatepass= $pass;
    $vpass=1;
}
if(empty($uname))
{
    $validateuname= "Please Enter user";
}
else{
    $validateuname= $uname;
    $vuname=1;
}



if(isset($_REQUEST["BPCONDITION"]))
{
    $bpconarray=$_REQUEST["BPCONDITION"];
    $bpcon= implode(',',$bpconarray);
    $validatecheckbox= $bpcon;
    $vcheckbox=1;
}
else{
    $validatecheckbox = "Please Select at least One BP CONDITION ";
}

if($vfname==1 && $vlname==1 &&  $vradio1==1 && $vradio2==1 &&  $vage==1 && $vbg==1 &&   $vemail==1 &&  $vpass==1 &&  $vcheckbox==1)
    {
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData("$fname","$lname","$gender","$Occupation", "$age", "$bg", "$pass","$uname",$conobj);
    $mydb->closecon($conobj);
    
}
else{
    echo "Please Insert All Field";
    echo "<br>";

}
}


?>