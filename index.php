<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

require_once __DIR__ . "/models/Kennel.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Game.php";

 class Product {
    public $name;
    public $image;
    public $price;
    public $category;

    public function __construct(
        string $_name,
        string $_image,
        int $_price,
        string $_category
    )
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }
    

 }

 


//  $prova = new Food("crocchette", "img", 10, "10-11", 3, "pollo", "secco");

//  var_dump($prova);
$pallaImg = "https://ss-pics.s3.eu-west-1.amazonaws.com/files/1118832/large-51VM4ajmkYL._AC_SL1200_.jpg?1587282538";

$pallaPerCani = new Game("Palla riccio", $pallaImg, 4,  "Cane", "Plastica", "Rosso");
// echo $giochino->category;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class=" container mx-auto py-10">


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src=" <?php echo $pallaPerCani->image?>" alt="" />
            </a>
            <div class="p-5 text-center">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <?php echo $pallaPerCani->name?></h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span
                        class=" font-semibold">Prezzo:</span>
                    <?php echo $pallaPerCani->price?>€
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span
                        class=" font-semibold">Categoria:</span>
                    <?php echo $pallaPerCani->category?>
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span
                        class=" font-semibold">Materiale:</span>
                    <?php echo $pallaPerCani->material?>
                </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span
                        class=" font-semibold">Colore:</span>
                    <?php echo $pallaPerCani->color?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>