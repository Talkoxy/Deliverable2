<?php

class Login extends Dbh{

    protected function  getUser($uid,$pwd) {
        $stmt =$this->connect()->prepare('SELECT userPassword FROM users WHERE username = ? OR userEmail= ?');

        
        if(!$stmt->execute(array($uid,$pwd))) {

            $stmt=null;
            header("location:../index.php?erro=stmtfailed");
            exit();

        }


        if($stmt->rowCount()==0){
            $stmt=null;
            header("location:../index.php?error=usernotfound");
            exit();

        }

        $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd=password_verify($pwd,$pwdHashed[0]["userPassword"]);

        if($checkPwd==false){
            $stmt=null;
            header("location:../index.php?error=usernotfound");
            exit();

        }
        elseif($checkPwd==true){
            $stmt =$this->connect()->prepare('SELECT * FROM users WHERE username = ? OR userEmail= ? AND userPassword=?');

            if(!$stmt->execute(array($uid,$uid,$pwd))) {

                $stmt=null;
                header ("Location:Delivarable 2 ITECA3\Homepage.php");
                exit();
    
            }

            if($stmt->rowCount()==0){
                $stmt=null;
                header ("Location:../Homepage.php");
                exit();
    
            }
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();

            $_SESSION["id"]=$user[0]["id"];
            $_SESSION["username"]=$user[0]["username"];


        }

        $resultCheck=null;
    }    

}