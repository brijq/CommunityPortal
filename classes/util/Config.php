<?php
/**
 * This is the config page
 */
namespace classes\util;

class Config
{
    public static $config;
    public $mysqlServer;
    public $mysqlUser;
    public $mysqlPassword;
    public $mysqlDB;

    public static function getConfig($reload = false){
        if(isset($config)==false || $reload==true){
            $ini =  parse_ini_file(self::getApplicationRoot()."/config/config.ini");
            $config=new Config();
            $config->mysqlServer=$ini['mysqlserver'];
            $config->mysqlUser=$ini['mysqluser'];
            $config->mysqlPassword=$ini['mysqlpassword'];
            $config->mysqlDB=$ini['mysqldb'];
            return $config;
        }
    }

    public static function getApplicationRoot(){
        $path = $_SERVER['DOCUMENT_ROOT'] . "/CommunityPortal/";
        return $path;
    }
}