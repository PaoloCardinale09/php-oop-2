<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

 class Product {
    public $name;
    public $image;
    public $price;

    public function __construct(
        string $_name,
        string $_image,
        int $_price
    )
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }

 }

 class Food extends Product {
    public $dateExp;
    public $weight;
    public $taste;
    public $type;

    public function __construct(
        string $_dateExp,
        int $_weight,
        string $_taste,
        string $_type
    )
    {
        parent::__construct($_name, $_image, $_price);

        $this->dateExp = $_dateExp;
        $this->weight = $_weight;
        $this->taste = $_taste;
        $this->type = $_type;
    }


 }

 $prova = new Food("crocchette", "img", 10, "10-11", 3, "pollo", "secco");
//  $prodotto = new Product("ciao", "img", 3);

 var_dump($prova);