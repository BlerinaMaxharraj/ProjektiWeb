<?php 
  require("includes/admin-menu.php");
  include_once 'controller/bookController.php';
 
?>

   

        <div class="admin-content">
                    <h1>Books</h1>
                    <a href="add-books.php" class="admin-add-button" type="button">Add</a>
                   
 
           
         <table class="table">
            <thead>
              <th>Title</th>
              <th>Author</th>
              <th>Price</th>
              <th>Description</th>
              <th>Edit</th>
            </thead>
        <tbody>  
            <?php
                  $bookController = new bookController();
                  $result = $bookController->GetBooks();
                  foreach ($result as $books){ ?>

           
                <tr>
                  <td><?php echo $books['title']; ?></td>
                  <td><?php echo $books['author']; ?></td>
                  <td><?php echo $books['price']; ?></td>
                  <td><?php echo $books['description']; ?></td>
                  <td>
                    <a href="edit-books.php?books_id=<?php echo $books['books_id'] ?>"><i class="fas fa-edit" style="margin-right: 10px;"></i> </a>
                 
                  </td>
                </tr>

              <?php } ?>
             
       
        </tbody>
           
          </table>
        </div>
</body>
</html>