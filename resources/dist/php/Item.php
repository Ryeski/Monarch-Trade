<?php


class Item
{
    public $postTitle;
    public $postImage;
    public $postDescription;
    public $itemPrice;
    public $itemOwner;
    public $postAge;
    public $isBook;
    public $bookISBN;
    public $bookAuthor;
    public $bookEdition;

    public function __construct($title, $image, $description, $price, $owner, $age, $book, $isbn, $author, $edition)
    {
        $this->postTitle = $title;
        $this->postImage = $image;
        $this->postDescription = $description;
        $this->itemPrice = $price;
        $this->itemOwner = $owner;
        $this->postAge = $age;
        $this->isBook = $book;
        $this->bookISBN = $isbn;
        $this->bookAuthor = $author;
        $this->bookEdition = $edition;
    }
}

$object = new Item;