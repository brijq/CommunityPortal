<?php
namespace classes\business;

use classes\entity\User;
use classes\data\UserManagerDB;

class UserManager
{
    public static function getAllUsers(){
        return UserManagerDB::getAllUsers();
    }
    public function getUserByEmailPassword($email,$password){
        return UserManagerDB::getUserByEmailPassword($email,$password);
    }
    public function getUserByEmail($email){
        return UserManagerDB::getUserByEmail($email);
    }
    public function getUserByEmailReset($email){
        return UserManagerDB::getUserByEmailReset($email);
    }
    public function saveUser(User $user){
        UserManagerDB::saveUser($user);
    }
}

?>