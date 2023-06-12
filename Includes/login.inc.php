<?php
if(isset($_POST["submit"]))
{

    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];


    include "../Classes/dbh.class.php";
    include "../Classes/Login.class.php";
    include "../Classes/logincontr.class.php";


    $Login =new loginContr($uid,$pwd);
    $Login->LoginUser();

    header("Location:Homepage.php");

    


}


