<?php
include_once 'db.php';
include_once 'infoModel.php';
class InfoMapper
{
    private $info;
    private $connection;
    public function __construct()
    {
        $this->connection=db::getConnection();
    }

    public function withInfo(\Info $Info)
    {
        $this->info = $info;
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

    public function getInfoById($info_id){
        $sth = $this->connection->prepare("SELECT * FROM info WHERE info_id = :info_id");
        $sth->execute(['info_id' => $info_id]);
        $result = $sth->fetch();
        return $result;
    }
}
?>