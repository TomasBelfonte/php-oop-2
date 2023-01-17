<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";
require_once "./models/Game.php";


$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");
$officeCategory = new Category("Cancelleria", "fa-briefcase");

$penna = new Product("Penna stilografica", 100.00, $officeCategory);
$bloccoNote = new Product("Blocco Note", 5.50, $officeCategory);
$pateScatola = new Food("patè in scatola", .50, $catCategory, 300);
$croccantiniManzo = new Food("Croccantini di manzo", 5.20, $dogCategory, 380);
$palla = new Game("Palla da tennis", .99, $dogCategory, ["feltro", "plastica"]);
$tiragraffi = new Game("Tiragraffi", 21.80, $catCategory, ["legno", "pvc"]);


$prodotti = [
    $penna,
    $bloccoNote,
    $pateScatola,
    $croccantiniManzo,
    $palla,
    $tiragraffi,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Oop_2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <main class="container">
        <h1 class="texr-center">Php Oop 2</h1>

        <div class="row">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col">
                    <div class="card">
                        <div class="card_body">
                            <h3><?php echo $prodotto->getName() ?></h3>
                            <h4><?php echo $prodotto->getPrice() ?></h4> 
                            <h4><?php echo $prodotto->getCategory() ?></h4>
                            <h4><?php echo $prodotto->getIcon() ?></h4>

                            <?php if (method_exists($prodotto, "getCalories")) {
                                echo "<div>Calorie: {$prodotto->getCalories()}</div>";
                            } ?>

                            <?php if (method_exists($prodotto, "getMateriali")) {
                            echo "<div>Materiali:{implode($prodotto->getMateriali())}</div>";
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

    </main>

</body>
</html>