<?php
include_once 'models/infoMapper.php';
include_once 'models/infoModel.php';
class InfoController
{
    

    public function GetInfo()
    {
       
        $infoMapper = new InfoMapper();
        $info = $infoMapper->GetInfo(); 
        return $info;

    }

    public function GetInfoById($info_id)
    {
       
        $infoMapper = new InfoMapper();
        $info = $infoMapper->GetInfoById($info_id); 
        return $info;

    }
}