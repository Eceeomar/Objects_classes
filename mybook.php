<?php

// book.php

class Book {
    // Properties (Attributes)
    public $title;
    public $author;
    public $year;
    public $genre;
    public $price;

    // Constructor to initialize attributes
    public function __construct($title, $author, $year, $genre, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
        $this->price = $price;
    }

    // Method to display book information
    public function displayInfo() {
        echo "Title: {$this->title}\n";
        echo "Author: {$this->author}\n";
        echo "Year: {$this->year}\n";
        echo "Genre: {$this->genre}\n";
        echo "Price: ₦{$this->price}\n";
    }

    // Method to apply a discount to the price
    public function applyDiscount($discountPercentage) {
        $this->price -= $this->price * ($discountPercentage / 100);
        echo "New Price after {$discountPercentage}% discount: ₦{$this->price}\n";
    }

    // Method to change the genre of the book
    public function changeGenre($newGenre) {
        $oldGenre = $this->genre;
        $this->genre = $newGenre;
        echo "Genre changed from '{$oldGenre}' to '{$this->genre}'\n";
    }
}

// Create instances (objects) of the Book class with Nigerian books
$book1 = new Book("Things Fall Apart", "Chinua Achebe", 1958, "Tragedy", 2000);
$book2 = new Book("Half of a Yellow Sun", "Chimamanda Ngozi Adichie", 2006, "Historical Fiction", 2500);

// Interacting with the objects
echo "Book 1 Details:\n";
$book1->displayInfo();
$book1->applyDiscount(10);
$book1->changeGenre("Classic Literature");

echo "\n---\n\n";

echo "Book 2 Details:\n";
$book2->displayInfo();
$book2->applyDiscount(15);
?>
