<?php

/**
 * This is a page of reset.php
 */
    require_once('../../../classes/util/connect.php');


if(isset($_POST) & !empty($_POST)) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $sql = "SELECT * FROM `tb_user` WHERE email = '$email'";
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        echo "Send email to user with password";
    } else {
        echo "User name does not exist in database";
    }

    $r = mysqli_fetch_assoc($res);
    $password = $r['password'];
    $to = $r['email'];
    $subject = "Your Recovered Password";

    $message = "Please use this password to login " . $password;
    $headers = "From : vivek@codingcyber.com";
    if (mail($to, $subject, $message, $headers)) {
        echo "Your Password has been sent to your email id";
    } else {
        echo "Failed to Recover your password, try again";
    }
}

/**
// Was the form submitted?
    if (isset($_POST["ResetPasswordForm"]))
    {
        // Gather the post data
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        $hash = $_POST["q"];

        // Use the same salt from the forgot_password.php file
        $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

        // Generate the reset key
        $resetkey = hash('sha512', $salt.$email);

        // Does the new reset key match the old one?
        if ($resetkey == $hash)
        {
            if ($password == $confirmpassword)
            {
                //has and secure the password
                $password = hash('sha512', $salt.$password);

                // Update the user's password
                $query = $conn->prepare("UPDATE tb_user SET password = :password WHERE email = :email");
                $query->bindParam(':password', $password);
                $query->bindParam(':email', $email);
                $query->execute();
                $conn = null;

                echo "Your password has been successfully reset.";
            }
            else
                echo "Your password's do not match.";
        }
        else
            echo "Your password reset key is invalid.";
    }
**/
?>
