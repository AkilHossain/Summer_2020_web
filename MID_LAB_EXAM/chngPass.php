<?php  

session_start();

    
    if(isset($_POST['chngSubmit']))
    {
        $currentPass = $_POST['curPass'];
        $newPass = $_POST['newPass'];
        $confPass = $_POST['confPass'];
        
        if(empty($currentPass) || empty($newPass) || empty($confPass))
        {
            echo "Null Submission!";
        }
        else if($_SESSION['password'] != $currentPass)
        {
            echo "Entered Wrong Current Password!";
        }
        else if($newPass != $confPass)
        {
            echo "New Password is not matched with Confirm Password";
        }
        else
        {
            $_SESSION['password'] = $confPass;
            echo "Password Changed";
            header('location:dashboard.php');
        }
    }
    else
    {
        echo "Invalid Submission!";
    }
                    

?>