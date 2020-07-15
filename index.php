<?php
require_once 'core/init.php';


?>
<!DOCTYPE html>
<html>

<head>
    <title>Demo | Home</title>


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
    include_once 'controller/bookController.php';
    
    ?>

        <div class="welcome-text">
            <h1>"A reader lives a thousand lives before he dies "</h1>
        </div>

    <div class="home-banner">
    </div>

    <div class="bestsellers">
        <div class="div2">
            <div style="text-align: center; margin-top: 70px; margin-bottom: 40px;">
                <h2>Bestsellers For This Month</h2>
            </div>
            <?php 
                  $bookController = new bookController();
                  $result = $bookController->GetLastBook();
                  foreach ($result as $book){
                       ?>
            <div class="box">
                <img src="<?php echo $book['image']; ?>" alt="Camino Winds" width="150" height="180">
                <p style="color:black"><?php echo $book['author'];?></p>

                <a href="https://www.amazon.com/Book-Longings-Sue-Monk-Kidd/dp/052542976X" target="_blank"
                    class="myButton">Buy</a>
            </div>
            <?php }?>
              
        </div>
    </div>

    <div class="contact-us">
        <div class="heading-design">
            <div class="icon-box">
                <i style="color: white;" class="fas fa-book fa-4x"></i>
                <h2>Novel</h2>
            </div>
            <div class="icon-box">
                <i style="color: white;" class="fas fa-address-book fa-4x"></i>
                <h2>Biography</h2>
            </div>
            <div class="icon-box">
                <i style="color: white;"  class ="fas fa-book-open fa-4x"></i>
                <h2>Poems</h2>
            </div>
        </div>
    </div>

    <div class="bestsellers">
        <div class="div2">
            <div style="text-align: center; margin-top: 70px; margin-bottom: 40px;">
                <h2>Most Famous Authors</h2>

            </div>
            <div class="box-33">
                <img src="img/sk.jpg" alt="Camino Winds" width="200" height="200">
                <p style="color:black">Stephen King </p>
            </div>
            <div class="box-33">
                <img src="img/jkr.jpg" alt="Celeste Ng" width="200" height="200">
                <p style="color:black">JK Rowling</p>
            </div>
            <div class="box-33">
                <img src="img/gm.jpg" alt="Stephen King" width="200" height="200">
                <p style="color:black">George R.R. Martin</p>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>
    <?php require_once 'core/init.php'; ?>
</body>

</html>
