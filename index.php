<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Bed.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Genre.php';

$dog = new Genre('dog');
$ball = new Game('Palla', 'https://shop-cdn-m.mediazs.com/bilder/palla/gioco/per/cani/snackball/5/400/22569_pla_snackball_fg_7746_6_5.jpg', 20.99, 'Palla da gioco con premi all\'interno', 'Royal Canin', $dog, 'Gioco', 'Plastica', 'Divertimento');

var_dump($ball);

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
        <div class="container">
            <div class="row row-cols-3 py-4">
                <div class="col">
                    <div class="card">
                        <img src="<?= $ball->getPic() ?>" class="card-img-top img-fluid" alt="<?= $ball->getName() ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="m-0"><?= $ball->getCategory() ?></h3>
                                <i class="fa-solid fa-<?= $ball->getGenre() ?>"></i>
                            </div>
                            <h5><?= $ball->getName() ?></h5>
                            <p class="card-text"><?= $ball->getDescription() ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h6><?= $ball->getBrand() ?></h6>
                                <h6 class="text-danger"><?= $ball->getPrice() ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>