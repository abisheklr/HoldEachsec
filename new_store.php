<?php
$con = mysqli_connect("localhost","root","","products");
session_start();
if(isset($_SESSION['user']))
{
     if(isset($_POST["add_to_cart"]))  
     {  
          if(isset($_SESSION["shopping_cart"]))  
          {  
               $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
               if(!in_array($_GET["id"], $item_array_id))  
               {  
                    $count = count($_SESSION["shopping_cart"]);  
                    $item_array = array(  
                         'item_id'               =>     $_GET["id"],  
                         'item_name'               =>     $_POST["hidden_name"],  
                         'item_price'          =>     $_POST["hidden_price"],  
                         'item_quantity'          =>     $_POST["quantity"]  
                    );  
                    $_SESSION["shopping_cart"][$count] = $item_array;  
               }  
               else  
               {  
                    echo '<script>alert("Item Already Added")</script>';  
                    echo '<script>window.location="new_store.php"</script>';  
               }  
          }  
          else  
          {  
               $item_array = array(  
                    'item_id'               =>     $_GET["id"],  
                    'item_name'               =>     $_POST["hidden_name"],  
                    'item_price'          =>     $_POST["hidden_price"],  
                    'item_quantity'          =>     $_POST["quantity"]  
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
                         echo '<script>window.location="new_store.php"</script>';  
                    }  
               }  
          }  
     }
}
else
{
     echo header("Location: redirect_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="store_style.css"> 
 <link rel="stylesheet" href="style.css">
 <title>Store</title>
</head>
<body>
<nav>
      <ul>
        <li class="logo">Hold Each Sec</li>
        <li class="items"><a href="index.php">Home</a></li>
        <li class="items"><a href="new_store.php">Shop</a></li>
        
        <?php
        if(isset($_SESSION['user']))
        {
          echo("<li class='items'><a>Hi " .$_SESSION['user']. "</a></li>");
          echo'<li class="items"><a href="logout.php?logout">Logout</a></li>';
        }

        else
        {
          echo'<li class="items"><a href="register.php">Register</a></li>';
          echo'<li class="items"><a href="login.php">Login</a></li>';
        }
        ?>
        <li class="items"><a href="about.php">About</a></li>
        <li class="items"><a href="contact.php">Feedback</a></li>

      </ul>
</nav>
<div class="backgd">
      <h1 class="toptitle">Welcome to WatchZone</h1>
      <p class="topquote">View our Exciting Watch collections</p>
      <style>
           .txtb{
               margin: 20px 20px;
               background: #000;
               color: white;
               box-shadow: black;
               height: 40px;
               font-size: 15px;
               border-radius: 6px;
               opacity: 100%;
               size: 50px;
               text-align: center;
          }
      </style>
      <?php 
        $query = 'SELECT * FROM details ORDER BY id';
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_array($result))
          {
      ?>
      <div class = "card">
      <form method = "POST" action = "new_store.php?action=add&id=<?php echo $row['id']; ?>">
      <div class="image">  
            <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
          </div>
          <div class = "title">  
            <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
          </div>
          <div class = "des">
            <h4 class="text-danger">₹ <?php echo $row["price"]; ?></h4>  
          </div>
            <input type="text" name="quantity" class="txtb" value="1" />  
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
      </div>  
      </form>
      <?php
        }
        }
      ?>
</div>
<div style="clear:both"></div>  
     <br />  
     <h3>Order Details</h3>  
     <div class="table-responsive" style="position: absolute;bottom: -1;right: -1;z-index: 1;background: #2f2f2f;color: white;text-align: center;">  
          <table class="table table-bordered" border = "3px" >  
               <tr>  
                    <th width="40%">Item Name</th>  
                    <th width="10%">Quantity</th>  
                    <th width="15%">Price(Per Watch)</th>
                    <th width="15%">Total</th>  
                    <th width="20%">Action</th>  
               </tr>  
               <?php   
               if(!empty($_SESSION["shopping_cart"]))  
               {  
                    $total = 0;  
                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                    {  
               ?>  
               <tr>
                    <style>
                         th{
                         background-color: #ba68c8;
                         color: #fafafa;
                         font-family: 'Open Sans',Sans-serif;
                         font-weight: 200;
                         text-transform: uppercase;
                         
                    }
                    tr{
                         
                         background-color: #fafafa;
                         font-family: 'Montserrat', sans-serif;
                    }
                    
                    tr:nth-child(even)
                    {
                         
                         color:  blue;
                         font-size: 20px;
                         background: orange;
                    }
                    tr:nth-child(odd)
                    {
                         color: red;
                         font-size: 20px;
                         background: yellow;
                    }
                    </style>  
                    <td align="justify"><?php echo $values["item_name"]; ?></td>  
                    <td><?php echo $values["item_quantity"]; ?></td>  
                    <td>₹ <?php echo $values["item_price"]; ?></td>  
                    <td>₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                    <td><a href="new_store.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger" style="color: black;">Remove</span></a></td>  
               </tr>  
               <?php  
                         $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                    }  
               ?>  
               <tr style="color: black;background: #ba68c8;">  
                    <td colspan="3" align="right">Total</td>  
                    <td align="center">₹ <?php echo number_format($total, 2); ?></td>  
                    <td></td>  
               </tr>  
               <?php  
               }  
               ?>
               <?php 
               
               ?>  
          </table>
          <div style="position: relative;top: 20%;left: 1%; text-align: center;">
          <form method = "POST" action="new_store.php">
          <input type="submit" name="generate" class="btn btn2" value="Generate Bill">
          <style>
               .btn{
                    background: black;
                    color: #fff;
                    border: 3px solid #000;
                    font-family: "montserrat",sans-serif;
                    font-size: 25px;
                    text-transform: uppercase;
                    text-shadow: 3px 2px 7px #000;
                    padding: 12px 20px;
                    min-width: 200px;
                    margin: 10px;
                    cursor: pointer;
                    border-radius: 25px;
                    }
               .btn:hover{
                    background: #fff;
                    color: #000;
                    transition: color  0.5s;
               }
                    
          </style>
          <?php
          if(isset($_REQUEST['generate']))
          {
               $xml = new DOMDocument("1.0","UTF-8");
               $xml->load("mycart.xml");
               $time = date("D M j G-i-s T Y");
               $customer = $_SESSION['user'];
               $rootTag = $xml->getElementsByTagName ("Mycart")->item(0);
               $dataTag = $xml->createElement("data");
               foreach($_SESSION['shopping_cart'] as $mycart)
               {
               $dataTag = $xml->createElement("data",NULL);
               $pro_id = $xml->createElement("ProductID",$mycart['item_id']);
               $pro_name = $xml->createElement("ProductName",$mycart['item_name']);
               $pro_price = $xml->createElement("Price",$mycart['item_price']);
               $pro_quantity = $xml->createElement("Quantity",$mycart['item_quantity']);
               
               $dataTag->appendChild($pro_id);
               $dataTag->appendChild($pro_name);
               $dataTag->appendChild($pro_price);
               $dataTag->appendChild($pro_quantity);
               $rootTag->appendChild($dataTag);
               
               }
               
               $xml->save("mycart_$time-$customer.xml");
               $billfile = "mycart_$time-$customer.xml";
               $_SESSION['billname']=$billfile;
               echo '<script type="text/javascript">alert("bill generated successfully");</script>';
               echo '<a class="btn btn2" href="bill.php">Review my Bill</a>';
          }
     ?>
     </form>  
     </div>
     </div>  
</div>  
<br />  
</body>
</html>