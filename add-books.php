<?php $page = 'add-books';
  require("includes/admin-menu.php");
  include_once 'controller/bookController.php';



  if(isset($_POST['submit'])){
    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $description = $_POST['description'];

        $bookController = new BookController();
        $bookController->InsertBook($title, $author, $price, $description);
        
       header("Location: admin-books.php");
    }
?>
<div class="admin-content">
                    <h1>ADD BOOKS</h1>
                 <div>

                 
                    <div class="add-books">
                        <form action="#" method="POST" id="add-book-form" enctype="multipart/form-data">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="">
       
                            <label for="author">Author</label>
                            <input type="text" id="author" name="author" placeholder="">
       
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" placeholder="">

                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" placeholder="">

                         
                            <button type="submit" name="submit" class="addbutton">Add</button>
                            <a href="admin-books.php" type="button" class="cancelbutton" style="margin-right:10px ;">Cancel</a>
                        </form>
                      </div>
      
</body>
</html>