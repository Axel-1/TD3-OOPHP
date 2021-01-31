<?php


class Book
{
    private $title;
    private $genre;

    public function __construct($bookTitle, $bookGenre)
    {
        $this->title = $bookTitle;
        $this->genre = $bookGenre;
        $this->genre->placeABook($this);
    }

    public function getTitle()
    {
        return $this->title;
    }
}