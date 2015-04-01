<?php

include __DIR__. '/vendor/autoload.php';

class Something {
    protected $arr;

    public function __construct()
    {
        $this->arr = [];
    }

    public function add($val)
    {
        array_push($this->arr, $val);
    }

    public function highestOdd()
    {
        return __::chain($this->arr)
            ->filter(function($val) { return $val % 2 === 1; })
            ->max(function($val){ return $val; });
    }

    public function lastEven()
    {
        $_ = new __();
        return $_->chain($this->arr)
            ->filter(function($val) { return $val % 2 === 0; })
            ->last()
            ->value();
    }

    public function getArr()
    {
        return $this->arr;
    }
}

$s = new Something();

for ($i = 0; $i < 100; $i++) {
    $s->add(rand(0, 99));
}

printf("vals: %s\n", print_r($s->getArr(), true));
printf("highestOdd: %d\n", $s->highestOdd());
printf("lastEven: %s\n", print_r($s->lastEven(), true));
