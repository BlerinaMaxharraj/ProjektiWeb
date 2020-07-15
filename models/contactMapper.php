<?php
include_once 'db.php';
include_once 'contactModel.php';
class ContactMapper
{
    private $contact;
    private $connection;
    public function __construct()
    {
        $this->connection=db::getConnection();
    }

    public function withContact(\Contact $contact)
    {
        $this->contact = $contact;
    }

    public function Insert($questions,$email,$details,$orderID)
    {

        $sql = "INSERT INTO contact (questions,email,details,orderID) 
                VALUES (:questions,:email,:details,:orderID)";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam('questions', $questions);
            $statement->bindParam('email', $email);
            $statement->bindParam('details', $details);
            $statement->bindParam('orderID', $orderID);
            $statement->execute();

    }
    public function getContact(){
        $sth = $this->connection->prepare("SELECT * FROM contact");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }
}
?>