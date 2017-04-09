<?php

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['fullname']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];
    $fullname = $_POST['fullname'];
    $pass_hash = md5($password);

    if($password != $confirm_pass)
    {
        echo 'Passwords didn\'t match.!!';
    }
    else
    {
        $query = "SELECT username FROM users WHERE username = '$username' ";
        if($run = mysql_query($query))
        {
            if(mysql_num_rows($run) >= 1)
            {
                echo 'Username already exists..!!';
            }
            else
            {
                $query = "INSERT INTO users VALUES (NULL,'".mysql_real_escape_string($username)."','".mysql_real_escape_string($pass_hash)."','".mysql_real_escape_string($fullname)."')";
                if($run = mysql_query($query))
                {
                    echo 'Registration successful..!!PleaseLog in to continue..!';
                    header('Location:loginform.inc.php');
                }
                else
                {
                    mysql_error();
                }
            }
        }
        else
        {
            mysql_error();
        }
    }

}

?>
<!doctype html>
<html lang='en'>
    <head>
        <title>Sign up form</title>
        <meta charset = 'utf-8' />
    </head>
    <body>
        <form action = "<?php echo $current_file; ?>" method = "POST">
            <p>Username : <input type = "text" name = "username" required /></p>
            <p>Password : <input type = "password" name = "password" required /></p>
            <p>Confirm : <input type = "password" name = "confirm_password" required /></p>
            <p>Fullname : <input type = "text" name = "fullname" required " /></p>
            <p><input type = "submit" value = "Submit" onclick = "check()" /></p>
        </form>
    </body>
</html>