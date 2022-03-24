
<?php
session_start();
if (isset($_SESSION["name"]))
{
    header("location:home.php");
}
$connect = mysqli_connect("localhost", "root", "", "testing");
if (isset($_POST["login"]))
{
    if (!empty($_POST["user_name"]) && !empty($_POST["user_password"]))
    {
        $name = mysqli_real_escape_string($connect, $_POST["user_name"]);
        $password = md5(mysqli_real_escape_string($connect,
                                               $_POST["user_password"]));
        $sql = "Select * from login where name = '" . $name . "
                                   ' and password = '" . $password . "'";
        $result = mysqli_query($connect, $sql);
        $user = mysqli_fetch_array($result);
        if ($user)
        {
            // Saving the username and password as cookies
            if (!empty($_POST["rememberme"]))
            {
  
                // Username is stored as cookie for 10 years as
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("user_login", $name, time() +
                                    (10 * 365 * 24 * 60 * 60));
  
                // Password is stored as cookie for 10 years as 
                // 10years * 365days * 24hrs * 60mins * 60secs
                setcookie("user_password", $password, time() +
                                    (10 * 365 * 24 * 60 * 60));
  
                // After setting cookies the session variable will be set
                $_SESSION["name"] = $name;
  
            }
            else
            {
                if (isset($_COOKIE["user_login"]))
                {
                    setcookie("user_login", "");
                }
                if (isset($_COOKIE["user_password"]))
                {
                    setcookie("user_password", "");
                }
            }
            header("location:home.php");
        }
        else
        {
            $message = "Invalid Login Credentials";
        }
    }
    else
    {
        $message = "Both are Required Fields. Please fill both the fields";
    }
}
?>