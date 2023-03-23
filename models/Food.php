<?php

class Food extends Product {
    public $dateExp;
    public $weight;
    public $taste;
    public $type;

    public function __construct(
        string $_name,
        string $_image,
        int $_price,
        string $_category,
        string $_dateExp,
        int $_weight,
        string $_taste,
        string $_type
    )
    {
        parent::__construct($_name, $_image, $_price, $_category);

        $this->dateExp = $_dateExp;
        $this->weight = $_weight;
        $this->taste = $_taste;
        $this->type = $_type;
    }

 }

 