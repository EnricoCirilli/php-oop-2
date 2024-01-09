<?php
  include_once __DIR__ . '/classi/accessori.php';
    include_once __DIR__ . '/classi/prodotto.php';
    include_once __DIR__ . '/classi/category.php';
    include_once __DIR__ . '/classi/cibo.php';
    include_once __DIR__ . '/classi/giocattoli.php';

    $category = [
        'cane' => new Categorie('cane', 'fa-solid fa-dog'),
        'uccello' => new Categorie('uccello', 'fa-solid fa-dove'),
        'gatto' => new Categorie('gatto', 'fa-solid fa-cat')
    ];