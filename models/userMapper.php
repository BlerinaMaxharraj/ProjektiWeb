<?php
include_once 'db.php';
class UserMapper
{
    private $user;
    private $connection;
    public function __construct()
    {
        $this->connection=db::getConnection();
    }

    public function withUser(\User $user)
    {
        $this->user = $user;
    }

    public function getUsers(){
        $sth = $this->connection->prepare("SELECT * FROM users");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }
}
?>