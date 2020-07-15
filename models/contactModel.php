<?php
class Contact
{
    
    private $contactId;
    private $questions;
    private $email;
    private $details;
    private $orderID;
    public function __construct()
    {

    }

    public function getContactId()
    {
        return $this->contactId;
    }

    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }
    public function getQuestions()
    {
        return $this->questions;
    }
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getDetails()
    {
        return $this->details;
    }
    public function setDetails($details)
    {
        $this->details = $details;
    }
    public function getOrderID()
    {
        return $this->orderID;
    }
    public function setOrderID($orderID)
    {
        $this->OrderID = $orderID;
    }
   
}
?>