<?php


class Shelf
{
    public $genres = array();
    private $shelfID;

    public function __construct($newShelfID)
    {
        $this->shelfID = $newShelfID;
    }

    public function addGenre($newGenre)
    {
        $this->genres[] = $newGenre;
    }
}