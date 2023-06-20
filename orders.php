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
         <ah href="#" class=""><h1>CURRENT ORDERS</h1></a>
        
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
<body>

<form action="" method="post">
<section class="display-product-table">

   <table>

      <thead>
      <th>SL.NO</th>
         <th>Product Name</th>
         <th>Price</th>
         <th>Status</th>
         <th>action</th>
      </thead>

      <tbody>
        

         <tr>
            <td> 01</td>
            <td>  Box Hamper</td>
            <td> $15/-</td>
            <td> <select id="state" name="state" required placeholder="Select State">
            <option>Processing</option>
               <option>Delivered</option>
               <option>On board</option>
                </select>
            </td>
            <td class="view"><button>Submit</button></td>
         </tr>

         <tr>
            <td> 02</td>
            <td> Tray Hamper</td>
            <td> $12/-</td>
            <td> <select id="state" name="state" required placeholder="Select State">
            <option>Processing</option>
               <option>Delivered</option>
               <option>On board</option>
                </select>
            </td>
            <td class="view"><button>Submit</button></td>
         </tr>

         <tr>
            <td> 03</td>
            <td> Glass Hamper</td>
            <td> $17/-</td>
            <td> <select id="state" name="state" required placeholder="Select State">
            <option>Processing</option>
               <option>Delivered</option>
               <option>On board</option>
                </select>
            </td>
            <td class="view"><button>Submit</button></td>
         </tr>
      </tbody>
   </table>

</section>
        </form>
        </body>
        </html>