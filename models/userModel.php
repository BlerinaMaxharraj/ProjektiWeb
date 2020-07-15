<?php
class User
{
    
    private $firstName;
    private $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setFirstName($name)
    {
        $this->firstName = $name;
    }
    public function setLastName($lastname)
    {
        $this->lastName = $lastname;
    }
}

?>