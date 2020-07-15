<?php
include_once 'db.php';
include_once 'bookModel.php';
class BookMapper
{
    private $book;
    private $connection;
    public function __construct()
    {
        $this->connection=db::getConnection();
    }

    public function Insert($title, $author, $price, $description)
    {
        $sql = "INSERT INTO books (title, author, price, description) 
                VALUES (:title, :author, :price, :description)";
                 
            
                 $statement = $this->connection->prepare($sql);
                 $statement->bindParam('title', $title);
                 $statement->bindParam('author', $author);
                 $statement->bindParam('price', $price);
                 $statement->bindParam('description', $description);
                  $statement->execute();

    }

    public function Update($book){
            $title= $book->getTitle();
            $author = $book->getAuthor();
            $price = $book->getPrice();
            $description = $book->getDescription();
            $books_id = $book->getBookId();
    
            $sql = 'UPDATE books SET title=:title,
                                   author=:author, 
                                   price=:price,
                                   description=:description
                                   WHERE books_id =:book';
    
            $statement = $this->connection->prepare($sql);
    
            $statement->bindParam('title', $title);
            $statement->bindParam('author', $author);
            $statement->bindParam('price', $price);
            $statement->bindParam('description', $description);
            $statement->bindParam('book', $books_id);
            $statement->execute();
    }

    public function getBooks(){
        $sth = $this->connection->prepare("SELECT * FROM books");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }
    public function getLastBook(){
        $sth = $this->connection->prepare("SELECT * FROM books LIMIT 4");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }
    public function getBookById($books_id){
        $sth = $this->connection->prepare("SELECT * FROM books WHERE books_id = :books_id");
        $sth->execute(['books_id' => $books_id]);
        $result = $sth->fetch();
        return $result;
    }
   
    public function Delete($books_id){
        $statement = $this->connection()->prepare("DELETE FROM books WHERE books_id = :books_id");
        $statement->execute(['books_id' => $books_id]);
    }
}