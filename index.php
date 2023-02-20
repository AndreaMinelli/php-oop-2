<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Bed.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Genre.php';

$dog = new Genre('dog');
$cat = new Genre('cat');
$bird = new Genre('crow');

$dog_ball = new Game('Palla', 'https://shop-cdn-m.mediazs.com/bilder/palla/gioco/per/cani/snackball/5/400/22569_pla_snackball_fg_7746_6_5.jpg', 20.99, 'Palla da gioco con premi all\'interno', 'Royal Canin', $dog, 'Game', 'Plastica', 'Divertimento');
$dog_mat = new Product('Tappetino assorbente', 'https://img.grouponcdn.com/deal/GhLf5x4rQ7n47QAFdSQf8zgHfhk/Gh-1000x600/v1/t600x362.jpg', 10.99, 'Tappetino assorbente per i bisogni dei cani in casa. Senza odori', 'Pet&Pet', $dog, 'Products');
$cat_food = new Food('Bocconcini con manzo', 'https://i.ebayimg.com/images/g/m0QAAOSwgCpiSvpl/s-l500.jpg', 2.49, 'Teneri bocconcini con aggiunta di manzo', 'Miglior Gatto', $cat, 'Food', ['manzo', 'carne', 'conservanti'], 'can', 250);
$bird_food = new Food('Semi premium', 'https://shop-cdn-m.mediazs.com/bilder/verselelaga/prestige/premium/per/canarini/8/800/106041_pla_verselelaga_prestige__canaries_8.jpg', 4.99, 'Semi scelti per canarini e parrocchetti', 'Prestige', $bird, 'Food', ['semi di girasole', 'semi di papavero'], 'plastic bag', 250);
$bird_nest = new Bed('Nido per uccelli sm', 'https://ae01.alicdn.com/kf/H82995713eba6496a875845f1e27688b40/Nido-caldo-per-uccelli-appeso-amaca-casa-gabbia-invernale-tenda-peluche-letto-a-scomparsa-letto-per.jpg_Q90.jpg_.webp', 29.99, 'Nido per uccelli di piccola taglia con supporti', 'Nisini', $bird, 'Bed', 'Cotone', [20, 25, 30]);
$cat_ball = new Game('Palla con sonaglino', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwc5c84f3c/images_dmail/large/389837l_1.jpg', 9.99, 'Palla trasparente con sonaglino interno', 'Dmail', $cat, 'Game', 'Plastica', 'Divertimento');

$products = [$dog_ball, $dog_mat, $cat_food, $bird_food, $bird_nest, $cat_ball];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous' />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Pet Shop</h1>
    </header>
    <main>
        <div class="container py-4">
            <div class="row row-cols-3 gy-4">
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="card cs-card">
                            <img src="<?= $product->getPic() ?>" class="card-img-top" alt="<?= $product->getName() ?>">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="m-0"><?= $product->getCategory() ?></h3>
                                    <i class="fa-solid fa-<?= $product->getGenre() ?>"></i>
                                </div>
                                <h5><?= $product->getName() ?></h5>
                                <p class="card-text"><?= $product->getDescription() ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><?= $product->getBrand() ?></h6>
                                    <h6 class="text-danger"><?= $product->getPrice() ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>