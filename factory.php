<?php

/**
 * 工厂方法，抽象工厂，具体工厂，抽象产品，具体产品
 * 优点：解耦，使用对应的工厂方法就可以创建产品，而不需要知道产品是怎么生产的
 * 缺点：每个产品都需要一个单独的工厂
 * 
 * 符合 开放-关闭原则（简单工厂方法违背开放-关闭原则）
 */



/**
 * 抽象工厂接口
 */
interface AbstractFactory {
    public function newProduct();
}


/**
 * 具体工厂类
 */
class ConcreteFactoryA implements AbstractFactory{
    public function newProduct(){
        return new ConcreteProductA();
    }
}

class ConcreteFactoryB implements AbstractFactory{
    public function newProduct(){
        return new ConcreteProductB();
    }
}


/**
 * 抽象产品接口
 */
interface AbstractProduct{
    public function show();
}


/**
 * 具体产品类
 */
class ConcreteProductA implements AbstractProduct{
    public function show(){
        echo 'product A\n';
    }
}

class ConcreteProductB implements AbstractProduct{
    public function show(){
        echo 'product B\n';
    }
}


$factoryA = new ConcreteFactoryA();
$productA = $factoryA->newProduct();
$productA->show();

$factoryB = new ConcreteFactoryB();
$productB = $factoryB->newProduct();
$productB->show();