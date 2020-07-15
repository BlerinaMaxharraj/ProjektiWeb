<?php
include_once 'models/aboutMapper.php';
include_once 'models/aboutModel.php';
class AboutController
{
    

    public function GetAbout()
    {
       
        $aboutMapper = new AboutMapper();
        $about = $aboutMapper->GetAbout(); 
        return $about;

    }

    public function GetAboutById($about_id)
    {
       
        $aboutMapper = new AboutMapper();
        $about = $aboutMapper->GetAboutById($about_id); 
        return $about;

    }
}
