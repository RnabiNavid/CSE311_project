
<?php 
session_start();
include ("conn.php");




 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/ed4cfa797c.js" crossorigin="anonymous"></script>
    <link rel="Icon" href="Img/Gadget Space-logo-white.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Gadget Space</title>
  </head>

  <body>
    <header>
      <nav>
        
          <a href="index.php"class="logo"><h1>Gadget<span>Space</span></h1></a>
          <input class="searchbar" type="text" placeholder="Search" />
          <button class="button" type="submit">Search</button>
          
        <ul class="nav-link">
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="../html/login.php">login</a></li>
            <li><div ><i class="fa-solid fa-user"></i></div></li>
        </ul>
    </nav>
    
  </header>

 <main>
  <div class="containner">
      <br />
      <br />
      <br />
      <h3 align="center">Tuto - <a href="http://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html" title="My Cart">My Cart</a></h3><br />
      <br /><br />
      <?php
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
      <div class="col-md-4">
        <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

            <input type="text" name="quantity" value="1" class="form-control" />

            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
      <div style="clear:both"></div>
      <br />
      <h3>Order Details</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
          ?>
          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>$ <?php echo $values["item_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?></td>
            <td></td>
          </tr>
          <?php
          }
          ?>
            
        </table>
      </div>
    </div>
  </div>
 </main>
 
<footer>
  <div class="row">
        <div class="col">
          <h2>About us</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium rem ipsum sed facilis debitis enim doloremque iste
            impedit facere tempora nam minus, dolores nobis commodi quo ipsam
            vero. Quo, distinctio!
           
          </p>
        </div>

        <div class="col">
          <h2>Office</h2>
          <p>96/2 , road</p>
          <p>Jigatola, Dhaka</p>
          <p class="email-id">rafiqun.navid@northsouth.edu</p>
          <p>+880 1711033545 <br><br></p>
           <a class="facebook" href="https://www.facebook.com/navid.nabi.7/"><i class="fa-brands fa-facebook fa-2x"></i></a>
           <a class="whatsapp" href="https://www.whatsapp.web"><i class="fa-brands fa-whatsapp fa-2x" ></i></i></a>
           <a class="mail" href="https://www.gmail.com"><i class="fa-solid fa-envelope fa-2x"></i></a>
 <!-- admin page -->
    <?php
$name='naid';
if ($name=='navid') {
echo  '<a class="whatsapp" href="#"> admin panel </a>';
}
?>
        </div>
       
       
        <form name="massege" action="https://formspree.io/f/mpznwrvp" method="post">
        <div class="col">
          <h2>Contact us</h2>
          <input type="text" id="name" name="name" placeholder="  Name">
          <input type="email" id="mail" name="mail" placeholder="  Enter email" />
          <textarea id="message" name="message" cols="30" rows="10" placeholder=" Message"></textarea>
          <button type="submit">Send</i></button>



  
  
  
      </div>
      </form>
      
    
    </div>
<script src="app.js"></script>
  </footer>

      
  </body>
</html>
