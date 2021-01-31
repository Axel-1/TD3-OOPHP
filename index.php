<?php

include "Library.php";
include "Shelf.php";
include "Genre.php";
include "Book.php";

$library1 = new Library();

$shelf1 = new Shelf(1);
$library1->addShelf($shelf1);

$shelf2 = new Shelf(2);
$library1->addShelf($shelf2);

$genre1 = new Genre("Roman", $shelf1);
$genre2 = new Genre("Biographie", $shelf1);

$genre3 = new Genre("BD", $shelf2);

$book1 = $library1->newBook("C", "BD");
$book2 = $library1->newBook("A", "BD");
$book3 = $library1->newBook("B", "BD");

$book4 = $library1->newBook("Z", "Roman");
$book5 = $library1->newBook("Y", "Roman");

$book6 = $library1->newBook("O", "Biographie");
$book7 = $library1->newBook("M", "Biographie");
$book8 = $library1->newBook("N", "Biographie");

print_r($library1);