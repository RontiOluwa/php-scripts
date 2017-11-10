<?php 
  include 'db-con.php';
    class AppFunction{

        //GET METHOD 
        public function getInput($string){
           $db_con = AppFunction::appConnect();
            return mysqli_escape_string($db_con, $_GET[$string]);
        }

        //POST METHOD
        public function postInput($string){
           $db_con = AppFunction::appConnect();
            return mysqli_escape_string($db_con, $_POST[$string]);
        }

        //SELECT QUERY
        public function selectQuery($string){
           $db_con = AppFunction::appConnect();
            $query_data = mysqli_query($db_con, $string);
            if(mysqli_num_rows($query_data) > 0){
                return true;
            }else{
                return false;
            }
        }

        //CONNECTION
        function appConnect(){
            $host = "localhost"; $user = "root"; $password = ""; $db_name = "smartshelf";
            $db_con = createConnection($host, $user, $password, $db_name);
            if($db_con->connect_errno){
               return "ERROR";
            }
            else {
                return $db_con;
            }
        }
    }