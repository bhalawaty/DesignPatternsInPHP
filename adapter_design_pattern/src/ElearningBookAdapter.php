<?php

namespace Acme;
use Acme\BookInterface;
use Acme\ElearningBookInterface;


class ElearningBookAdapter implements BookInterface
{
    private $book;
    public function __construct(ElearningBookInterface $book)
    {
        $this->book=$book;
    }

    public function open(){
        $this->book->turnOn();
    }

    public function turnPage(){
        $this->book->pressNext();
    }
}