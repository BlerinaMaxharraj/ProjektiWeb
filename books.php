<?php include_once 'core/init.php';
        include_once 'models/user.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Demo | Books</title>


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

    <div class="books-banner">
    </div>

        <div class="books2">
            <div class="container">
                <div style="text-align: center; margin-top: 70px; margin-bottom: 40px; color: black;">
                    <h2>Books to buy</h2>
                </div>
                <?php 
                  $bookController = new bookController();
                  $result = $bookController->GetBooks();
                  foreach ($result as $book){ ?>
                <div class="box">
                    <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['author']; ?>" width="150" height="180">
                    <p style="color:black"><b><?php echo $book['author']; ?><br><?php echo $book['title']; ?> </br><br><?php echo $book['price']; ?> </br></b></p>

                    <a href="https://www.amazon.com/The-Martian/dp/B082BHWQCJ/ref=sr_1_1?crid=2IDD1MWYQR5AE&dchild=1&keywords=the+martian+by+andy+weir&qid=1589884367&s=books&sprefix=the+martian%2Cstripbooks-intl-ship%2C290&sr=1-1"
                        target="_blank" class="myButton">Buy</a>

                </div>
               <?php }?>
            </div>
        </div>

    


        <?php include 'includes/footer.php'; ?>       

</body>

</html>