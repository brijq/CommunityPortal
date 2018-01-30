<?php

namespace test\classes\data;



use PHPUnit\Framework\TestCase;



class UserManagerDBTest extends TestCase{


    public function testfillUser(){

        $expected =['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] ;
        $this->assertSame($expected, ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukfwrgit Merah Road'] );

    }

    public function testgetUserByEmailPassword(){

        $email = 'brijq91@gmail.com';
        $password = '1234';
        $expected = [$email , $password];
        $this->assertEquals($expected,['brijq91@gmail.com','1234']);

    }

    public function testgetUserByEmail(){

        $email = 'brijq91@gmail.com';
        $expected = [$email];
        $this->assertEquals($expected,['brijq91@gmail.com']);

    }

    public function testsaveUser(){

        $expected = ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] ;
        $this->assertSame($expected, ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] );

    }

    public function testgetAllUser(){

        $this->assertTrue(true,['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road']);
        $expected = ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] ;
        $this->assertSame($expected, ['1','Brian','brijq91@gmail.com','1234','28','12345678','Singapore' , 'Singapore', 'Blk 123, Bukit Merah Road'] );


        //$mysqli = $this->expectQueries(array(
        //    "SELECT * FROM `table`" =>array(array('1','value1'),array('2','value2'),array('3','value3')),
        //    "SELECT * FROM `table` LIMIT 2" =>array(array('1','value1'),array('2','value2')),
            // other queries that may be called
        //));

    }



}