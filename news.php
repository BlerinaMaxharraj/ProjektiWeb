<?php include_once 'core/init.php';
        include_once 'models/user.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo | News</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <link rel="stylesheet" href="css/themes.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {

      
      $("#slider1").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "centered-btns"
      });

      
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "transparent-btns"
      });

      
      $("#slider3").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
      });

    });
  </script>
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


<div id="wrapper">

<h3>New Books</h3>
    <div class="rslides_container">
      <ul class="rslides" id="slider2">
        <li><img src="img/boss.jpg" alt=""></li>
        <li><img src="img/boss2.jpg" alt=""></li>
        <li><img src="img/images.jpg" alt=""></li>
      </ul>
    </div>
 </div>

  <?php include 'includes/footer.php';?>


</body>

</html>