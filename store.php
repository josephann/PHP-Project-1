<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body{
        background-color: black;
    }
    .foot{
        background-color: #263238;
        color: aliceblue;
        height: 50px;
        text-align: center;
        vertical-align: middle;
        }
    #outDiv{
        height: 355px;
        width:330px;
        float:left;
         margin-left: 8%;

    }
    hr{
        color: white;
    }
    .card1{
        /*padding-bottom: 10px;*/
        width:330px;
        height: 345px;
        float:left;
        margin-left: 10%;

        color: black;
        background-color: white;
        display: flex;
        align-content: center;
        justify-content: center;
        border-color:2px solid blue;
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
 </style>
 </head>
 <body>
     <ul class="topnav">
        <li><a  href="store_index.php">Home</a></li>
        <li><a class="active">Book Store</a></li>
     </ul>
     <div style="padding-top:50px; padding-bottom:50px">
         <?php
            require('mysqli_connect.php');
            $q = "SELECT * FROM products";
            $r = @mysqli_query($dbc,$q);

            while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                echo '<div id ="outDiv"><div class="card1">
                <a href="checkout.php?id=' . $row['p_id'] .  '"><br>' . $row['p_name'] . '<br>Quantity: ' . $row['p_quantity'].'<br><br>
                <img height="220px" width="220px" src="upload/'.$row['p_image'].'.jpg"></img>
                <br>Price:$ '.$row['p_price'].'</a><br><a style="width:90px" href ="https://www.bookseries.org/authors/j-k-rowling/">Read More</a><br></div></div>';
            }
            echo '<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>';

         ?>
    </div>

    </body>
    <footer><div class="foot">© 2021 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> J. K. Book-store</a></div>
    </footer>
</html>



