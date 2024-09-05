<?php

class Author {
    public $name;
    public $description;

}

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Language' => $this->language,
            'Number of Page' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return null;
    }
}

$author = new Author();
$author->name = "Eichiro Oda";
$author->description = "Penulis komik One Piece";

$publisher = new Publisher();
$publisher->name = "Elex Media Komputindo";
$publisher->address = "Jakarta";
$publisher->setPhone("+62-21-53650110");

$book = new Book();
$book->ISBN = 9786230028755;
$book->title = "One piece volume 97";
$book->description = "One Piece bercerita tentang perjalanan Luffy yang mengarungi lautan untuk menjadi Raja Bajak Laut. Dengan jiwa semangat yang kuat, Luffy mengarungi lautan untuk menemukan orang-orang yang bisa ia ajak untuk menjadi bagian dari kru bajak laut miliknya.";
$book->language = "Indonesia";
$book->numberOfPage = 200;
$book->author = $author->name;
$book->publisher = $publisher->name;

print_r($book->showAll());