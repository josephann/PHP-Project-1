<?php
require('mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $firstname= $_POST['firstname'];
			$address = $_POST['address'];
            $city = $_POST['city'];
            $product_id= $_GET['id'];
            $qua= $_GET['qua'];

            $quantity_new=$qua-1;

            $q="INSERT INTO users(u_firstname, u_address, u_city, p_id) values ('$firstname', '$address','$city', '$product_id')";
            $r = @mysqli_query($dbc,$q);
            $s="UPDATE products SET p_quantity = $quantity_new WHERE p_id = $product_id";
            $t = @mysqli_query($dbc, $s);

            echo 'Confirm order on the below address<br>';
            echo 'Name : ' .$firstname. '<br>';
            echo 'Address : ' .$address;

		}
?>
<html>

    <style>
    .card1{
        width:120px;
        height: 120px;
    }

    .foot{
        background-color: #263238;
        color: aliceblue;
        height: 50px;
        text-align: center;
        vertical-align: middle;
    }
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right,
  ul.topnav li {float: none;}
}
        .lin{
            color: white;
            background-color: blue;
        }
        body{
            text-align: center;
            height:50%;
        }
</style>
    <body>
    <a class="lin" href="store_index.php">Confirm Order</a></body>
</html>
