<?php 
  require("includes/admin-menu.php");
  include_once 'controller/userController.php';
?>
   
        <div class="admin-content">
          <h1 style="display">USER</h1>
         <table class="table">
            <thead>
              <th>Username</th>
              <th>Firstname</th>
              <th>Joined</th>
              <th>Grupi</th>
            </thead>
            <tbody>

            <?php
                  $userController = new userController();
                  $result = $userController->GetUsers();
                  foreach ($result as $user){ ?>

           
                <tr>
                  <td><?php echo $user['username']; ?></td>
                  <td><?php echo $user['name']; ?></td>
                  <td><?php echo $user['joined']; ?></td>
                  <td><?php echo $user['grupi']; ?></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>  
</body>
</html>