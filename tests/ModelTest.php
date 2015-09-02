<?php

/**
 * Created by PhpStorm.
 * User: Boss
 * Date: 2015/9/2
 * Time: 20:21
 */
require "../vendor/autoload.php";
require "../src/Common/functions.php";
use Think\Model;

//define('MEMORY_LIMIT_ON',false);

class ModelTest extends PHPUnit_Framework_TestCase{

    public function testModel(){

        $config = array(
            'db_type'          =>  'mysql',
            'db_user'      =>  'root',
            'db_pwd'      =>  'root123',
            'db_host'      =>  'localhost',
            'db_port'      =>  '3306',
            'db_name'      =>  'test',
        );
        $modle = new Model('user','',$config);
        var_dump($modle->select());
    }

}