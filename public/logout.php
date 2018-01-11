<?php
/**
 *The logout page when user logout will land here
 */

 session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>