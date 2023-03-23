<?php
class Kennel extends Product {
    public $material;
    public $color;
   

    public function __construct(
        string $_name,
        string $_image,
        int $_price,
        string $_category,
        string $_material,
        string $_color
    )
    {
        parent::__construct($_name, $_image, $_price,$_category);

        $this->material = $_material;
        $this->color = $_color;
    }
 }