<?php
namespace Acme;


class Kindle implements ElearningBookInterface
{

    public function turnOn()
    {
        var_dump('turn ON the book');
    }

    public function pressNext()
    {
        var_dump('press Next page in book');

    }
}