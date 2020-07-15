<?php
include_once 'db.php';
include_once 'aboutModel.php';
class AboutMapper
{
    private $about;
    private $connection;
    public function __construct()
    {
        $this->connection=db::getConnection();
    }

    public function withAbout(\About $About)
    {
        $this->about = $about;
    }

    public function Insert()
    {
        $sql = "INSERT INTO user (firstname,lastname) VALUES (:firstname,:lastname)";

        $emri = $this->user->getFirstName();
        $mbiemri = $this->user->getLastName();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":firstname", $firstname);
        $statement->bindParam(":lastname", $lastname);

        $statement->execute();
    }

    public function Update()
    {

        $sql = "INSERT INTO user (firstname,lastname,phone_number) VALUES (:firstname,:lastname";
        $statement = $this->connection->prepare($sql);

        $firstname = $this->user->getFirstName();
        $lastname = $this->user->getLastName();
       
        $statement->bindParam(":firstname", $firstname);
        $statement->bindParam(":lastname", $lastname);
        $statement->execute();
    }

    public function getAboutById($about_id){
        $sth = $this->connection->prepare("SELECT * FROM about WHERE about_id = :about_id");
        $sth->execute(['about_id' => $about_id]);
        $result = $sth->fetch();
        return $result;
    }
}
?>