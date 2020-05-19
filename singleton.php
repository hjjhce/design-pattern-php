<?php

/**
 * 定义：确保一个类只有一个实例，并提供一个全局访问点
 * 应用：数据库连接
 */

class Singleton
{
    private static $instance;   //静态属性属于类，所有该类的实例都共享静态属性

    private function __construct()
    {
        //私有化构造函数，禁止从类外部实例化
    }

    static function getInstance()
    {
        if (empty(self::$instance)) {
            return new self();
        }
        return self::$instance;
    }
}
