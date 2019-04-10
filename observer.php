<?php

/**
 * 观察者模式
 */


class observer
{

    private $observerList = [];

    public function addObserver($key, $item)
    {
        $this->observerList[$key] = $item;
    }

    public function removeObserver($key)
    {
        unset($this->observerList[$key]);
    }

    private function nofity()
    {
        foreach ($this->observerList as   $item) {
            $item->update();
        }
    }

    public function updateInfo()
    {
        $this->nofity();
    }
}

// 订阅接口
interface subscribe {
    public function update();
}


class subscribeA implements subscribe {
    public function update(){
        echo "subscribeA update\n";
    }
}

class subscribeB implements subscribe {
    public function update(){
        echo "subscribeB update\n";
    }
}


$subscribeAObj = new subscribeA;
$subscribeBObj = new subscribeB;

$observerInstance =  new observer();
$observerInstance->addObserver('subscribeA', $subscribeAObj);
$observerInstance->addObserver('subscribeB', $subscribeBObj);
$observerInstance->updateInfo();
$observerInstance->removeObserver('subscribeA', $subscribeAObj);
$observerInstance->updateInfo();

