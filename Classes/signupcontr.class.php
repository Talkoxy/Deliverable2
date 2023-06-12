<?php


class SignupContr extends Signup{
        private $uid;
        private $pwd;
        private $pwdrepeat;
        private $email;

        public function __construct($uid,$pwd,$pwdrepeat,$email){

            $this->uid = $uid;
            $this->pwd= $pwd;
            $this->pwdrepeat = $pwdrepeat;
            $this->email = $email;
        }


        public function signupUser(){
            if($this->emptyINPUT()==false){

                header("location ./index.php error=emptyinputs");
                exit();
            }
    
            if($this->invalidUid()==false){
    
                header("location ../index.php error=Username");
                exit();
            }
    
            if($this->invalidEmail()==false){

                header("location ../index.php error=Email");
                exit();
            }
    
            if($this->uidTakenCheck()==false){
                header("location ../index.php error=UsernameEmailtaken");
                exit();
            }
    
            if($this->pwdMatch()==false){
    
                header("location ../index.php error=passwordmatch");
                exit();
            }
            
            $this->setUser($this->uid,$this->pwd,$this->email);
    

        }

        private function emptyInput(){
            $result=null;
            if(empty($this->uid)||empty($this->pwd)||empty($this->pwdrepeat)||empty($this->email)){
                $result=false;
            }
            else{
                $result=true;
            }

            return $result;

        }

        private function invalidUid(){
            $result=null;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
                $result=false;
            }
            else{
                $result=true;
            }

            return $result;

        }


        private function invalidEmail(){
            $result=null;
            if(!filter_var($this -> email,FILTER_VALIDATE_EMAIL)){
                $result=false;
            }
            else{
                $result=true;
            }

            return $result;

        }


        private function pwdMatch(){
            $result=null;
            if($this -> pwd !== $this ->pwdrepeat){
                $result=false;
            }
            else{
                $result=true;
            }

            return $result;

        }

        private function uidTakenCheck(){
            $result=null;
            if(!$this->checkUser($this->uid,$this->email)){
                $result=false;
            }
            else{
                $result=true;
            }

            return $result;

        }







}