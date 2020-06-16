<?php
namespace Acme;


class Book implements BookInterface
{

    public function open()
    {
        var_dump('open the Kindle');
    }

    public function turnPage()
    {
        var_dump('turn next page in Kindle');

    }
}