<?php include_once 'core/init.php';
    if(input::exists()){
        if(token::check(input::get('token'))){
            $validate=new validate();
            $validation=$validate->check($_POST, array(
                'username' =>array('required'=>true),
                'password' =>array('required'=>true)

            ));

            if($validation->passed()){
                $user=new User();

                $remember = (input::get('remember') === 'on')? true : false;
                $login=$user->login(input::get('username'), input::get('password'), $remember);

                if($login && $user->hasPermission('admin')){
                    redirect::to('admin.php');
                 }
                else if($login){
                    redirect::to('index.php');
                } 

            }else{
                foreach($validation->errors()as $error){
                    echo "<div id='test' style='display:none'>".$error."</div>";
                }
            }
        }
   
    }



?>

<html>
<head>
    <title>Demo | LogIn</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="register">
        <form action="" method="post">
        <div class="field">
            <laberl for="username"> Username </label>
            <input type="text" name="username" id="username" autocomplete="off">
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off">
        </div>

        <div class="field">
            <label for="remember"></label>
            <input type="checkbox" name="remember" id="remember" > Remember me
        </div>

        <input type="hidden" name="token" value="<?php echo token::generate();?>">
        <input type="submit" value="log in">
    
        </form>
        <form action="register.php" method="POST">
       <input type="submit" value="register"/>
     </form>
        <div id="errors" style="color:black"></div>
    </div>

    



<script type="text/javascript" src="js/script.js"></script>
<?php include 'includes/footer.php'; ?>


</body>

</html>