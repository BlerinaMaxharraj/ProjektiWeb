<?php 
  require("includes/admin-menu.php");
  include_once 'controller/contactController.php';
 
?>

<div class="admin-content">
          <h1>CONTACT</h1>
           
         <table class="table">
            <thead>
              <th>Questions</th>
              <th>Order ID</th>
              <th>Email</th>
              <th>Details</th>
            </thead>
        <tbody>  
        <?php
                  $contactController = new contactController();
                  $result = $contactController->GetContact();
                  foreach ($result as $contact){ ?>

           
                <tr>
                  <td><?php echo $contact['questions']; ?></td>
                  <td><?php echo $contact['orderID']; ?></td>
                  <td><?php echo $contact['email']; ?></td>
                  <td><?php echo $contact['details']; ?></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>  
</body>
</html>
