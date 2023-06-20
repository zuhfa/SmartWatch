<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>
   <?php include'Links.php' ?>
   <?php include'DBconnect.php' ?>
   <link rel="stylesheet" href="styleproduct1.css">

</head>
<header class="header">

   <div class="flex">
   <a href="Admin.php" ><i class="fa-solid fa-house"></i></a> 
      <a href="#" class="logo">WRAPPEDHEARTS</a>

      <nav class="navbar">
         <ah href="#" class=""><h1>USER'S LIST</h1></a>
        
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
<body>

<form action="" method="post">
<section class="display-product-table">

   <table>

      <thead>
      <th>ID</th>
         <th>User Name</th>
         <th>Email ID</th>
         <th>Contact</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `signupdb`");
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><?php echo $fetch_product['ID']; ?></td>
            <td><?php echo $fetch_product['UName']; ?></td>
            <td><?php echo $fetch_product['Email']; ?></td>
            <td><?php echo $fetch_product['Phone']; ?></td>
            <td class="view"><button>View</button></td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>
        </form>
        </body>
        </html>