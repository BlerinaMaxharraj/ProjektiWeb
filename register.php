<?php
require_once 'core/init.php';


if(input::exists()){
     if(token::check(input::get('token'))){
    $validate = new validate();
    $validation = $validate->check($_POST, array(
        'username' => array(
            'required' =>true,
            'min' => 3,
            'max' => 20,
            'unique' =>'users'
        ),
        'password' => array(
            'required' =>true,
            'min'=> 6

        ),
        'password_again' => array(
            'required' =>true,
            'matches'=> 'password'
        ),
        'name' => array(
            'required' => true,
            'min' => 3,
            'max' => 50
        )

    ));

    if($validation->passed()){
      $user =new User();
      
      $salt = hash::salt(32);
       
        try{
            $user->create(array( 
                'username' => input::get('username'),
                'password' => hash::make(input::get('password'), $salt),
                'salt' => $salt,
                'name' => input::get('name'),
                'joined' => date('Y-m-d H:i:s'),
                'grupi' => 1
            ));

            session::flash('home','Jeni regjistruar ,mundeni me u kyç');

        }catch(Exception $e){
            die($e->getMessage());
        }
    
    }else{
        foreach($validation->errors() as $error){
            echo "<div id='test' style='display:none'>".$error."</div>";
        }

     }

}

}

?>
<html>
<head>
    <title>Demo | Register</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
</head>
<body>

<?php include 'includes/header.php'; ?>

</div>
<div class="register">
        <form action="" method="post">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo escape(input::get('username')); ?>" autocomplete="off">
        </div>

        <div class="field">
                <label for="password">Enter a password</label>
                <input type="password" name="password" id="password">
        </div>

        <div class="field">
                <label for="password_again">Enter your password again</label>
                <input type="password" name="password_again" id="password_again">
        </div>


        <div class="field">
                <label for="name">Enter your name</label>
                <input type="text" name="name" value="<?php echo escape(input::get('name')); ?>" id="name">
        </div>
        <input type="hidden" name="token" value="<?php echo token::generate(); ?>">
        <input type="submit" value="Register" id="">
        </form>
        <form action="login.php" method="POST">
       <input type="submit" value="log in"/>
    </form>



        <div id="errors" style="color:black;"></div>
    </div>
   </div> 
<script type="text/javascript" src="js/script.js"></script>
<?php include 'includes/footer.php'; ?>


</body>

</html>