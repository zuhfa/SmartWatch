<?php
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Login Form</title> 
            <?php include'Links.php' ?>
            <?php include'Dbconnect.php' ?>
            <link rel="stylesheet" href="css/style1.css">
            <style>
               @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

body{
   background-color: var(--light-bg);
}

.header{
   background-color: #F1948A;
   position: sticky;
   top:0; left:0;
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   padding:0rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color:var(--white);
   text-decoration: none;
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
   text-decoration: none;
}

.header .flex .navbar a:hover{
   color:yellow;
}
.header .flex a i{
   font-size: 30px;
   padding-right: 25px;
   color:#d3675b;
}
.header .flex a i:hover{
   color:#FF676D;
}
.header .flex .navbar a i{
   color:#4E5364;
  }
  .header .flex .navbar a i:hover{
   color:#777D93;
  }
.header .flex .prod a{
 font-size: 20px;
}


.message{
   position: sticky;
   top:0; left:0; right:0;
   padding:15px 10px;
   background-color: var(--white);
   text-align: center;
   z-index: 1000;
   box-shadow: var(--box-shadow);
   color:var(--black);
   font-size: 20px;
   text-transform: capitalize;
   cursor: pointer;
}

.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   color:var(--white);
   border-radius: 5px;
   text-transform: capitalize;
   text-decoration: none;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
   text-decoration: none;
   color:var(--white);
}

.btn{
   background-color: var(--blue);
   margin-top: 10px;
  
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 70px;
}

.form-container form{
   width: 500px;
   border-radius: 5px;
   border:var(--border);
   padding:20px;
   text-align: center;
   background-color: var(--white);
}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   border:var(--border);
   padding:12px 14px;
   font-size: 18px;
   margin:10px 0;
}

.form-container form p{
   margin-top: 20px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   padding:0 20px;
   margin:0 auto;
   max-width: 1200px;
   padding-bottom: 70px;
}

.container .heading{
   text-align: center;
   margin-bottom: 20px;
   font-size: 40px;
   text-transform: uppercase;
   color:var(--black);
}

.container .user-profile{
   padding:20px;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: 5px;
   margin:20px auto;
   max-width: 500px;
}

.container .user-profile p{
   margin-bottom: 10px;
   font-size: 25px;
   color:var(--black);
}

.container .user-profile p span{
   color:var(--red);
}

.container .user-profile .flex{
   display: flex;
   justify-content: center;
   flex-wrap: wrap;
   gap:10px;
   align-items: flex-end;
}
.container .user-profile .flex a{
   text-decoration: none;
}
.container  .box-container{
   display: flex;
   flex-wrap: wrap;
   gap:15px;
   justify-content: center;
}

.container  .box-container .box{
   text-align: center;
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   border:var(--border);
   position: relative;
   padding:20px;
   background-color: var(--white);
   width: 350px;
}

.container  .box-container .box img{
   height: 250px;
}

.container  .box-container .box .name{
   font-size: 20px;
   color:var(--black);
   padding:5px 0;
}

.container  .box-container .box .price{
   position: absolute;
   top:10px; left:10px;
   padding:5px 10px;
   border-radius: 5px;
   background-color: var(--orange);
   color:var(--white);
   font-size: 25px;
}

.container  .box-container .box input[type="number"]{
   margin:10px 0;
   width: 100%;
   border:var(--border);
   border-radius: 5px;
   font-size: 20px;
   color:var(--black);
   padding:12px 14px
}
.container  .box-container .box .btn{
   background-color:#d3675b;
}
.container  .box-container .box .btn:hover{
   background-color:#4E5364;
}
.container .shopping-cart{
   padding:20px 0;
}

.container .shopping-cart table{
   width: 100%;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
}

.container .shopping-cart table thead{
   background-color: var(--black);
}

.container .shopping-cart table thead th{
   padding:10px;
   color:var(--white);
   text-transform: capitalize;
   font-size: 20px;
}

.container .shopping-cart table .table-bottom{
   background-color: var(--light-bg);
}

.container .shopping-cart table tr td{
   padding:10px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart table tr td:nth-child(1){
   padding:0;
}

.container .shopping-cart table tr td input[type="number"]{
   width: 80px;
   border:var(--border);
   padding:12px 14px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart .cart-btn{
   margin-top: 10px;
   text-align: center;
}

.container .shopping-cart .disabled{
   pointer-events: none;
   background-color: var(--red);
   opacity: .5;
   user-select: none;
}

.filters input[type="submit"]{
   margin-left: 24px;
   margin-top: 10px;
   color:white;
   background-color: #676c7c;
   padding: 5px 20px 5px 20px;
   border-radius: 15px;
   transition: all 0.4s ease;
}
.filters input[type="submit"]:hover{
   background-color: #989aa1;
   transform: translateY(-8px);
}
@media (max-width:1200px){
   .container .shopping-cart{
      overflow-x: scroll;
   }

   .container .shopping-cart table{
      width: 1200px;
   }
}

@media (max-width:450px){
   .container .heading{
      font-size: 30px;
   }
   .container  .box-container .box img{
      height: 200px;
   }
} 
</style>

      </head>

      <header class="header">

      <div class="flex">
      
        <a href="#" class="logo">WRAPPEDHEARTS</a>

      <nav class="navbar prod">
        <a href="HomeProducts.php" >Products</i></a>
      </nav>
      </div>

</header>

      <body>

      <?php

if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated successfully!';
 }
 
 if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:cart.php');
 }
   
 if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
 }
 
 if(isset($message)){
    foreach($message as $message){
       echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
 }
?>

<div class="container">


<div class="user-profile">

<?php
   $select_user = mysqli_query($conn, "SELECT * FROM `signupdb` WHERE id = '$user_id'") or die('query failed');
   if(mysqli_num_rows($select_user) > 0){
      $fetch_user = mysqli_fetch_assoc($select_user);
   };
?>

<p> Username : <span><?php echo $fetch_user['UName']; ?></span> </p>
<p> Email : <span><?php echo $fetch_user['Email']; ?></span> </p>
 
</div>
      <div class="shopping-cart">

      <h1 class="heading">shopping cart</h1>

   <table>
      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>
      <tbody>
      
     <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr>
            <td><img src="ProductsImg/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>$<?php echo $fetch_cart['price']; ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <input type="submit" name="update_cart" value="update" class="option-btn">
               </form>
            </td>
            <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="4">grand total :</td>
         <td>$<?php echo $grand_total; ?>/-</td>
         <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>
   </tbody>
   </table>

   <div class="cart-btn">  
      <a href="#" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</div>
        </div>
        </body>
        </html>