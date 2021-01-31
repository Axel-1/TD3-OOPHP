<?php


class Library
{
    public $myShelves = array();

    public function __construct()
    {

    }

    public function newBook($bookTitle, $genreLabel)
    {
        return new Book($bookTitle, $this->getGenre($genreLabel));
    }

    public function getGenre($genreLabel)
    {
        foreach ($this->myShelves as $key1 => $val1) {
            foreach ($val1->genres as $key2 => $val2) {
                if ($val2->getLabel() == $genreLabel) {
                    return $val2;
                }
            }
        }
    }

    public function addShelf($newShelf)
    {
        $this->myShelves[] = $newShelf;
    }
}