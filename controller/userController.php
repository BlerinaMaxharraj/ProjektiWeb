<?php
include_once 'models/userMapper.php';
include_once 'models/userModel.php';
class UserController
{
    

    public function GetUsers()
    {
       
        $userMapper = new UserMapper();
        $users = $userMapper->GetUsers(); 
        return $users;

    }
}
?>