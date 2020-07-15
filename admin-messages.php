<!DOCTYPE html>
<html lang="en">

<head>
<title>Bookstore |  
        <?php
        if($page == 'admin'){
            echo 'User';
        }else if($page == 'messages'){
            echo 'Messages';
        }else if($page == 'admin-books'){
            echo 'Cars';
        }else if($page == 'add-books'){
            echo 'Add';
        }else if($page == 'edit-books'){
            echo 'Edit';
        }

    ?> </title>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body>

 <header>
        <div class="admin-header">
                <div class="admin-logo">
                    <h3>Bookstore</h3>
                </div>
        </div>
    </header>

    <div class="side-nav">
        <nav>
            <ul>
                <li>
                    <a href="admin.php">
                        <p><i class="fa fa-user" style="margin-right: 5px;"></i> Users</p>
                    </a>
                </li>
                <li>
                    <a href="admin-messages.php">
                        <p><i class="fa fa-envelope" style="margin-right: 5px;"></i> Messages</p>
                    </a>
                </li>
                <li>
                    <a href="admin-books.php">
                        <p><i class="fa fa-book" aria-hidden="true" style="margin-right: 5px;"></i> Books</p>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div> 
<div class="admin-content">
          <h1>MESSAGES</h1>
           
         <table class="table">
            <thead>
              <th>Date</th>
              <th>E-mail</th>
              <th>Subject</th>
              <th>Message</th>
            </thead>
        <tbody>  
            
                <tr>
                  <td>vbeb</td>
                  <td>ebea</td>
                  <td>abre</td>
                  <td>erger</td>
                </tr>

        </tbody>
          </table>
        </div>
</body>
</html>
