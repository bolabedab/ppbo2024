<?php

require_once 'Author.php';
require_once 'Publisher.php';
require_once 'Book.php';

$author = new Author("Eichiro Oda", "Penulis dari One Piece");
$publisher = new Publisher("Jepang", "Onigashima, Jepang");
$publisher->setPhone("123456789");
$book = new Book(9780747532743, "One Piece Volume 97", "Komik", "Adventure", "Jepang", 200, $author->name, $publisher->name);

echo "Informasi Buku:\n";
print_r($book->showAll());

echo "Detail Buku dengan ISBN 9780747532743:\n";
print_r($book->detail(9780747532743));

echo "Informasi Author:\n";
print_r($author->show('name'));

echo "Informasi Publisher dan Nomor Telepon:\n";
echo "Nama: " . $publisher->name . "\n";
echo "Alamat: " . $publisher->address . "\n";
echo "Telepon: " . $publisher->getPhone() . "\n";

?>