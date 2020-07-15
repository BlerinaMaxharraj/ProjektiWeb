<?php 
  require("includes/admin-menu.php");
  include_once 'controller/bookController.php';
  
  $bookController = new bookController();
  $result = $bookController->GetBookById($_GET["books_id"]);

  if(isset($_POST['submit'])){
    $bookModel = new Book();

    $bookModel->setBookId($_GET["books_id"]);
    $bookModel->setTitle($_POST['title']);
    $bookModel->setAuthor($_POST['author']);
    $bookModel->setPrice($_POST['price']);
    $bookModel->setDescription($_POST['description']);
    $bookController->Update($bookModel);

    header("Location: admin-books.php");

}
 
?>
<div class="admin-content">
                    <h1>EDIT BOOKS</h1>
                 <div>
                 <div class="add-books">
                 <form action="#" method="POST" id="edit-book-form" enctype="multipart/form-data"> 
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" value="<?php echo $result['title']; ?>" >
       
                            <label for="author">Author</label>
                            <input type="text" id="author" name="author" value="<?php echo $result['author']; ?>" >
       
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" value="<?php echo $result['price']; ?>">

                            <label for="description">Description</label>
                            <input type="text" id="description" name="description"value=" <?php echo $result['description']; ?>" >

                         
                            <button type="submit" name="submit" class="addbutton">Add</button>
                            <a href="admin-books.php" type="button" class="cancelbutton" style="margin-right:10px ;">Cancel</a>
                        </form>
                      </div>

</body>
</html>