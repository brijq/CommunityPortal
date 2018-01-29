<?php

use PHPUnit\Framework\TestCase;



class UserManagerDBTest extends TestCase{


    public function testLogin(){

        $this->getActualOutput('http://localhost:8080/CommunityPortal/public/login.php');


    }

}

?>