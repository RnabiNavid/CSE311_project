<?php 
session_start();
 $conn = mysqli_connect('localhost','root', '','ecommerceapp');
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
        <li> <a href="../html/p_phone.php" class="phone">
            <h2>phone</h2>
          </a></li>
        <li> <a href="../html/p_case.php" class="case">
            <h2>phone Case</h2>
          </a></li>
        <li> <a href="../html/p_ear.php" class="Earphone">
            <h2>Earphones</h2>
          </a></li>
        <li> <a href="../html/p_charge.php" class="Charger">
            <h2>Charger</h2>
          </a></li>
        <li> <a href="../html/p_power.php" class="powerbank">
            <h2>PowerBank</h2>
          </a></li>
      </ul>


    </div>
  </header>

 <main>


  	<div class="container1">
			<br />
			<br />
			<br />
	
      <br />
			<br /><br />
			<?php
				$query = "SELECT * FROM products  WHERE product_cat =14 ORDER BY product_id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form class="cont" method="post" action="cart.php?action=add&id=<?php echo $row["product_id"]; ?>">
				
						<img src="/CSE311_project/Product_image/<?php echo $row["product_image"]; ?>" class="img-responsive" /><br/>
	
						<h4 class="text-info"><?php echo $row["product_title"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["product_price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["product_title"]; ?>" />

						<input type="hidden" name="hidden_price" value= "<?php echo $row["product_price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					
				</form>
      
        <br>
        <br><br><br><br>
			</div>
			<?php
					}
				}		
				
			?>


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
