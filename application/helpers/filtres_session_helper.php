<?php
 
if(!function_exists('session_user'))
{

      //test sesion by Nicolas
     function session_user()
    {
        //!isset($_SESSION['id']) && !isset($_SESSION['pass']) && !isset($_SESSION['email'] && !isset($_SESSION['pseudo'])
       if(!isset($_SESSION['login']) && !isset($_SESSION['password']) && 
            empty($_SESSION['password']) && empty($_SESSION['email']) )
            {
                 $p=explode('/' ,$_SERVER['REQUEST_URI']);
                 $_SESSION['forwarding_url'] =$p[2];
                 $_SESSION['statusDisconnect'] = "disconnect";
                 redirect('Authentification/index');
                 exit();
            }        
    }
}

if(!function_exists('session_home'))
{
      //test sesion by Nicolas
     function session_home()
    {
        //!isset($_SESSION['id']) && !isset($_SESSION['pass']) && !isset($_SESSION['email'] && !isset($_SESSION['pseudo'])
       if(isset($_SESSION['login']) && isset($_SESSION['password']) && 
            !empty($_SESSION['login']) && !empty($_SESSION['password']) )
            {
                 $p=explode('/' ,$_SERVER['REQUEST_URI']);
                 $_SESSION['forwarding_url'] =$p[2];
                 $_SESSION['statusConnect'] = "connect";
                 redirect('Admin/index');
                 exit();
            }        
    }
}

?>