<?php
use PHPUnit\Framework\TestCase;

class UserManagerDBTest extends TestCase{

    public function testfillUser(){

        $expected = ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] ;

        $this->assertEquals($expected, array($expected));

    }

    public function getUserByEmailPasswordTest($email,$password){

        $expected = ['brijq91@gmail.com','1234'] ;

        $this->assertEquals($expected, array($expected));

    }
}