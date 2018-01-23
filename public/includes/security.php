<?php
/**
 * Security page to ensure users are signed in.
 */
session_start();
if(!isset($_SESSION['email'])){
    header("Location:/CommunityPortal/public/login.php");
}
?>