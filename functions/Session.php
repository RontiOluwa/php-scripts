<?php 

    class SESSION {
        public function onSession($var){
            session_start();
            $_SESSION[$var] = $var;
            $state = session_status();
            if($state){
                echo 'session is now running with '.$var.' ';
            }
        }

        public function offSession(){
            $state = session_status();
            if($state){
                session_destroy();
               print  "login.php";
            }else{
                echo "cannot destory if session does not exist";
            }
        }
    }