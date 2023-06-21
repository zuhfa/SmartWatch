<?php

include 'Dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:Login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:Login.php');
};

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'product added to cart!';
   }

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <?php include'Links.php' ?>
   <!-- custom css file link  -->
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
   <a href="index.php" ><i class="fa-solid fa-house"></i></a> 
      <a href="#" class="logo">WRAPPEDHEARTS</a>

      <nav class="navbar">
         <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      
      </nav>
   </div>

</header>

<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
 <div class="filters">
<form method="post" action="" >
    
 <input type="submit"  value="Box Hampers" name="category" >
 <input type="submit"  value="Tray Hampers" name="category2" >
 <input type="submit"  value="Glass Hampers" name="category3" >
 <input type="submit"  value="Classic Hampers" name="category4" >
 <input type="submit"  value="Chocolate Bouquet" name="category5" >
 <input type="submit"  value="Snack Cone" name="category6" >
  <!-- <input type="button"  value="Boxr" id="removeButton"> -->
</form>	
</div>
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
   <div class="flex">
      
       <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
   </div>

</div>

<div class="products">
<div class="box-container">
     
   <?php
@$category = "B1";
@$category2 = "T2";
@$category5 = "CH5";
  if(isset($_POST['category']))
     {?> 
      <br>
      
     
       <?php
      $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = '$category'") or die('query failed');
      if(mysqli_num_rows($select_product1) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product1)){
            ?>
            <form method="post" class="box" action="">
            <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_product['name']; ?></div>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="number" min="1" name="product_quantity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
         
      <?php
         }
      }
   }  
      elseif(isset($_POST['category2'])){?> 
      
       <?php
      $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = '$category2'") or die('query failed');
         if(mysqli_num_rows($select_product1) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_product1)){
               ?>
               
               <form method="post" class="box" action="">
               <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
               <div class="name"><?php echo $fetch_product['name']; ?></div>
               <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
               <input type="number" min="1" name="product_quantity" value="1">
               <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
               <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
               <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
           
         <?php
            };
         };
      }
      elseif(isset($_POST['category2'])){?> 
      
       <?php
      $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = '$category2'") or die('query failed');
         if(mysqli_num_rows($select_product1) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_product1)){
               ?>
               
               <form method="post" class="box" action="">
               <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
               <div class="name"><?php echo $fetch_product['name']; ?></div>
               <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
               <input type="number" min="1" name="product_quantity" value="1">
               <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
               <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
               <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
           
         <?php
            };
         };
      }elseif(isset($_POST['category2'])){?> 
      
       <?php
      $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = '$category2'") or die('query failed');
         if(mysqli_num_rows($select_product1) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_product1)){
               ?>
               
               <form method="post" class="box" action="">
               <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
               <div class="name"><?php echo $fetch_product['name']; ?></div>
               <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
               <input type="number" min="1" name="product_quantity" value="1">
               <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
               <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
               <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
           
         <?php
            };
         };
      }
      elseif(isset($_POST['category5'])){?> 
      
         <?php
        $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = '$category5'") or die('query failed');
           if(mysqli_num_rows($select_product1) > 0){
              while($fetch_product = mysqli_fetch_assoc($select_product1)){
                 ?>
                 
                 <form method="post" class="box" action="">
                 <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
                 <div class="name"><?php echo $fetch_product['name']; ?></div>
                 <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                 <input type="number" min="1" name="product_quantity" value="1">
                 <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                 <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                 <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                 <input type="submit" value="add to cart" name="add_to_cart" class="btn">
              </form>
             
           <?php
              };
           };
        }
      ?>
 </div>
       
       <br><br>
<section>
<h1 class="heading">ALL products</h1>
<div class="box-container">

<?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products` ") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>

      <form method="post" class="box" action="" name="form2" id="boxr">
     
         <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
         <div class="name"><?php echo $fetch_product['name']; ?></div>
         <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
         <input type="number" min="1" name="product_quantity" value="1">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
   <?php
      };
   };
   ?>
   </div>
</section>
     

 
  

</div>


</div>

</body>
<!-- <script>
   document.getElementById("removeButton").addEventListener("click", function() {
    var boxr = document.getElementById("boxr");
    if (boxr) {
      boxr.remove();
    }
});
</script> -->
</html>