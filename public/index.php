<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$products = ["guitare", "banjo", "piano", "drums"];

echo $twig->render('home.html.twig', ["products" => $products]);
