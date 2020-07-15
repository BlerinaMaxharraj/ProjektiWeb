<?php
include_once 'models/contactMapper.php';
include_once 'models/contactModel.php';
class ContactController
{
    

    public function GetContact()
    {
       
        $contactMapper = new ContactMapper();
        $contact = $contactMapper->getContact(); 
        return $contact;

    }
    public function Insert($questions,$email,$details,$orderID){
        $contactMapper = new ContactMapper();
        $contact = $contactMapper->Insert($questions,$email,$details,$orderID); 
    }
}

?>