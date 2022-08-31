
<?php 
session_start();
 $conn = mysqli_connect('localhost','root', '','ecommerceapp');

 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

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
    <link rel="stylesheet" href="../css/productstyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
		
    <title>Gadget Space</title>
  </head>

  <body>
    <header>
      <nav>
        
          <a href="../html/index.php"class="logo"><h1>Gadget<span>Space</span></h1></a>
          <input class="searchbar" type="text" placeholder="Search" />
          <button class="button" type="submit">Search</button>
          
        <ul class="nav-link">
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="../html/login.php">login</a></li>
            <li><div ><i class="fa-solid fa-user"></i></div></li>
        </ul>
           
          
          
    
       
     

    </nav>
    <div class="catagories">
      <ul class="items">
           <li> <a href="product.php" class="phone"><h2>phone</h2></a></li> 
           <li> <a href="product.php"class="case"><h2>phone Case</h2></a></li>
           <li> <a href="product.php"class="Earphone"><h2>Earphones</h2></a></li>
           <li> <a href="product.php"class="Charger"><h2>Charger</h2></a></li>
           <li> <a href="product.php"class="powerbank"><h2>PowerBank</h2></a></li>
      </ul>

 
    </div>
  </header>

 <main>

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
                               <td align="center"><?php echo $values["item_name"]; ?></td>  
                               <td  align="center"><?php echo $values["item_quantity"]; ?></td>  
                               <td  align="center">$ <?php echo $values["item_price"]; ?></td>  
                               <td  align="center">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td  align="center"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="center">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
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
