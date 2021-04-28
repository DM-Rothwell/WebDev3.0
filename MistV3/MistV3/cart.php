<?php session_start();
      require "Templates/Header.php";
      include_once "data/config.php";
?>


<html>
<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" href="Images/Mists%20favicon-01.png">
    <title>Cart</title>
</head>

<body>
    <img src="Images/david-lezcano-Lv1di_d7tso-unsplash.jpg" width="100%" height="700px">

    <div class="hotDeals">
        <h2>Your Items Will Appear Here</h2>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Price</th>
            <th>Shoe</th>
            <th>Shoe Description</th>
        </tr>

        <?php
        $sql = "SELECT id, price, shoe, shoedesc from data";
        $result = $pdo->query($sql);

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr><td>" . $row['id']."</td><td>". $row['price']."</td><td>" . $row['shoe']."</td><td>" . $row['shoedesc']."</td><td>". "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "error! try again";
        }

        $pdo ->close();
        ?>
    </table>





    <div class="checkoutDiv">
     <a href="checkout.php"> <center><button class="cAcc">Checkout</button></center><br></a>
    </div>
</body>
<?php require "Templates/Footer.php"?>

</html>