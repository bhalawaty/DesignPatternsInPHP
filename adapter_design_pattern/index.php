<?php

require 'vendor/autoload.php';

use Acme\AppleBook;
use \Acme\BookInterface;
use Acme\Book;
use Acme\Kindle;
use \Acme\ElearningBookAdapter;


class Person{

public function read(BookInterface $book){

    $book->open();
    $book->turnPage();
}

}


(new Person)->read(new Book);
//(new Person)->read(new ElearningBookAdapter(new AppleBook));
//(new Person)->read(new ElearningBookAdapter(new Kindle));
