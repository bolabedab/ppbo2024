<?php

class Author {
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array
    {
        if ($type == "name") {
            return ['name' => $this->name];
        } elseif ($type == "description") {
            return ['description' => $this->description];
        } else {
            return ['name' => $this->name, 'description' => $this->description];
        }
    }
}


class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }


    public function getPhone(): string
    {
        return $this->phone;
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array
    {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN): array
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return ['error' => 'ISBN tidak ditemukan'];
        }
    }
}

$author = new Author("Eichiro Oda", "Penulis dari One Piece");
$publisher = new Publisher("Jepang", "50 Bedford Square, Jepang");
$publisher->setPhone("123456789");
$book = new Book(9780747532743, "Harry Potter and the Philosopher's Stone", "Novel fantasi", "Fantasy", "English", 223, $author->name, $publisher->name);

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