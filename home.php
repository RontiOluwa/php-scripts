<?php 
    include('scripts/doLogin.php');
    if(!$isLogged){
        //REDIRECT IF YOU WANT TO!
        echo "ERROR";
    }else{
        ?>
       <!--HTML GOES HERE-->
        <a href="<?php LogOut($session); ?>">logout</a>
<?php        
    }
?>