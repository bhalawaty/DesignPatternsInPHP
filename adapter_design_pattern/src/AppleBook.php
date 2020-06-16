<?php
namespace Acme;


class AppleBook implements ElearningBookInterface
{

    public function turnOn()
    {
        var_dump('turn ON the Apple Book');
    }

    public function pressNext()
    {
        var_dump('press Next page in Apple Book');

    }
}