<?php
session_start();//session is a way to store information (in variables) to be used across multiple pages.
if((isset($_POST['Username']) && $_POST['Username']!='') || (isset($_POST['Password']) && $_POST['Password']!='' )) {
$name=$_POST['Username'];
$password=$_POST['Password'];
                                
      if($name=='test' && $password=='portal')
        {
            $_SESSION['Username']=$name;
            $_SESSION['uid']=10;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (15 * 60); //set session timeout 15 mins
            echo json_encode('LOGIN SUCCESSFUL');exit;
            
            //header("Location: index.php");
            
        }
	else if($name!='test'){
	     echo json_encode('LOGIN UNSUCCESSFUL.'); 
	}
	else{
	    echo json_encode('LOGIN UNSUCCESSFUL.');
        }
      
}
else{
    echo json_encode("ÒLOGIN UNSUCCESSFUL");
}
?>