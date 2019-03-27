<?php

/**
 * strategy pattern 策略模式，把算法族抽取出来
 */

interface behaviour {
    public function do();
}


class flyBehaviour implements behaviour {
    public function do(){
        printf("%s\n", "fly");
    }
}


class runBehaviour implements behaviour {
    public function do(){
        printf("%s\n", "run");
    }
}


class bird {
    private $behaviour;

    public function setBehaviour(behaviour $behaviour){
        $this->behaviour = $behaviour;
    }

    public function do(){
        if(empty($this->behaviour)){
            echo "init\n";
            return;
        }
        $this->behaviour->do();
    }
}



 $bird = new bird();
 $bird->do();
 $bird->setBehaviour(new flyBehaviour());
 $bird->do();
 $bird->setBehaviour(new runBehaviour());
 $bird->do();