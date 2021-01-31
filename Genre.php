<?php


class Genre
{
    public $books = array();
    private $label;
    private $shelf;

    public function __construct($genreLabel, $shelf)
    {
        $this->label = $genreLabel;
        $this->shelf = $shelf;
        $shelf->addGenre($this);
    }

    public function placeABook($book)
    {
        $books_index = $this->getBookIndex($book->getTitle());
        if (count($this->books) != 0) {
            for ($i = count($this->books) - 1; $i >= $books_index; $i--) {
                $this->books[$i + 1] = $this->books[$i];
            }
            $this->books[$books_index] = $book;
        } else {
            $this->books[0] = $book;
        }
    }

    private function getBookIndex($bookTitle)
    {
        if (count($this->books) != 0) {
            $index_counter = 0;
            while ($index_counter < count($this->books) && $bookTitle > $this->books[$index_counter]->getTitle()) {
                $index_counter++;
            }
            return $index_counter;

        } else {
            return 0;
        }
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getAllBooks()
    {
        return $this->books;
    }
}