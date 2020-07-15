<?php include_once 'core/init.php';
        include_once 'models/user.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Demo | Contact</title>


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
       include_once 'controller/infoController.php';
         include_once'controller/contactController.php';

    if(isset($_POST['submit'])){
    $questions = $_POST['questions'];
    $email = $_POST['email'];
    $details = $_POST['details'];
    $orderID = $_POST['orderID'];
 
    
        $contactController = new contactController();
        $contactController->Insert($questions,$email,$details,$orderID);
    
}

?>
         <div class="contact-banner"></div>
    </body>

    <div class="contact">
        <div class="container">
            <div class="contact-info">
               <br><h2 style="color: darkslategray;">
                    Contact Methods
                </h2><br>
                <?php

         $infoController = new InfoController();
         $result = $infoController->GetInfoById(1);
 
              ?>



             <p><i style="color: black;" class="far fa-envelope fa-1x"></i>
                </i><b> Email:</b><?php echo $result['email']; ?></p></p>
              <br><p><i style="color: black;" class="fas fa-phone-alt fa-1x"></i>
                <b>Phone:</b> <?php echo $result['phone'];?></p></p></br>


            <div class="contact-form">
              <form action="#" method="POST" id="contact-form" enctype="multipart/form-data"> 
                    <label for="customer service"></label>
                      <h2>I have a question about:</h2>
                   
                    <input type="text" id="questions" name="questions" placeholder="Your Questions..">
                    <label for="orderid">Order ID</label>
                    <input type="text" id="orderID" name="orderID" placeholder="Your Order ID..">
                    <label for="text">Your Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Your Email Address..">
                    <label for="details">Details</label>
                    <input type="text" id="details" name="details" placeholder="Your Email Address..">
                     <input type="submit" value="submit" name="submit">
    
                </form>
            </div>
            
        </div>
    </div>
</div>

<<?php include 'includes/footer.php'; ?>

    

 
</body>


</html>