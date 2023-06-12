<?php

class Signup extends Dbh{

    protected function  setUser($uid,$pwd,$email) {
        $stmt =$this->connect()->prepare('INSERT INTO users (username,userPassword,userEmail) VALUES (?,?,?);');

        $hashedpwd= password_hash($pwd,PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($uid,$hashedpwd,$email))) {

            $stmt=null;
            header("location:../index.php?erro=stmtfailed");
            exit();

        }

        $resultCheck=null;
        if($stmt->rowCount() >0 ) {
                $resultCheck=false;

        }
        else{
            $resultCheck=true;
        }
        return $resultCheck;

    }



    protected function CheckUser($uid,$email) {
        $stmt =$this->connect()->prepare('SELECT username FROM users WHERE username= ? OR userEmail = ?;');
        
        if(!$stmt->execute(array($uid,$email))) {

            $stmt=null;
            header("location:../index.php?erro=stmtfailed");
            exit();

        }

        $resultCheck=null;
        if($stmt->rowCount() >0 ) {
                $resultCheck=false;

        }
        else{
            $resultCheck=true;
        }
        return $resultCheck;

    }


}