<?php
include_once 'models/bookMapper.php';
include_once 'models/bookModel.php';
class BookController
{
    public function InsertBook($title, $author, $price, $description)
    {
        
        $bookMapper = new BookMapper();
        $bookMapper->Insert($title, $author, $price, $description);

    }
   

    public function GetBooks()
    {
       
        $bookMapper = new bookMapper();
        $books = $bookMapper->GetBooks();
        return $books;

    }

    public function GetBookById($books_id)
    {
       
        $bookMapper = new BookMapper();
        $book = $bookMapper->GetBookById($books_id);
        return $book;

    }
    public function GetLastBook()
    {
       
        $bookMapper = new BookMapper();
        $book = $bookMapper->GetLastBook(); 
        return $book;

    }
    public function Update($book){
        $bookMapper = new BookMapper();
        $bookMapper->Update($book);
    }
    public function Delete($books_id){
        $bookMapper = new bookMapper();
        $bookMapper->Delete($books_id); 
    }
}