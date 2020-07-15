<?php include_once 'core/init.php';
        include_once 'models/user.php';

?>
        <!DOCTYPE html>
<html>

<head>
    <title>Demo | About</title>


    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


</head>

<body>
    <?php 
    $user= new User();
    if($user->isLoggedIn()===true){
        include 'includes/header-logout.php'; 
    }
    else{
        include 'includes/header.php'; 
    }
?>
   <?php 
   include 'controller/aboutController.php';
     ?>


    <div class="about-banner">
    </div>
    <div class="about-us">
        <div class="heading-design">
            <h1>BOOKSHOP</h1>
    </div>
   
    <?php

    $aboutController = new aboutController();
     $result = $aboutController->GetAboutById(1);

     ?>

    <p><?php echo $result['about']; ?></p>
        <p><br><?php echo $result['about1']; ?> </br></p>
    </div>
    
<?php include 'includes/footer.php'; ?>

</body>

</html>