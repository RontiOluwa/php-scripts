<?php 
    //import functions
    include_once('functions/AppFunction.php');
    include_once('functions/Session.php');
    //get appfunction class and method
    $app = new AppFunction();
    $session = new Session();

    //assing variable index to retrive
    $email =  $app->postInput('email');
    $password = $app->postInput('password'); 
    $isLogged = "";

    //query database
    try{
        $query = "SELECT 'id' FROM user WHERE email ='$email' AND password='$password'";
    if($app->selectQuery($query)){
        $isLogged = true;
        $session->onSession('email');
        echo "done";
    }else{
        $isLogged = false;
        echo "failed";
    }
    }catch(Exception $error){
        echo $error;
    }

    //DO LOGOUT FUNCTION
    function LogOut($session){
        $session->OffSession();
    }

   