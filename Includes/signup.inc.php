<?php
if(isset($_POST["submit"]))
{

    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdrepeat=$_POST["pwdrepeat"];
    $email=$_POST["email"];

    include "../Classes/dbh.class.php";
    include "../Classes/signup.class.php";
    include "../Classes/signupcontr.class.php";

    $signup =new SignupContr($uid,$pwd,$pwdrepeat,$email);
    $signup->signupUser();

    


}


