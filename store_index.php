<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<style>

    body{
        background-color: black;
    }
    hr, h2{
        color: white;
    }
     p, h1,h3,h4,h5{
        color: black;
    }
    #desc{
        padding-bottom: 75px;
        margin-left: auto;
        margin-right: auto;
        align-content: center;
        text-align: center;
        width: 1200px;
        height:150px;
    }
    .foot{
        background-color: #263238;
        color: aliceblue;
        height: 50px;
        text-align: center;
        vertical-align: middle;
    }
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
body {margin: 0;}

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
  <li><a class="active" href="store_index.php">Home</a></li>
  <li><a href="store.php">Book Store</a></li>
</ul>
<div style="width:200px;flex:right;"><h1 style="color:white;font-family: 'Dancing Script', cursive;">J K R Books</h1><br>
</div>
<div style="padding-top:25px; padding-bottom:30px">
 <div class="w3-content w3-display-container" style="width:2000px">
    <a href="store.php"><img class="mySlides" src="slide00.jpg" style="width:100%; height:420px"></a>
    <a href="store.php"><img class="mySlides" src="slide1.jpg" style="width:100%; height:420px"></a>
    <a href="store.php"><img class="mySlides" src="slide2.png" style="width:100%; height:420px"></a>
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div id="leftarrow" class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div id="rightarrow" class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    </div>
 </div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>
</div>

    <hr><br><br>
    <div id="desc">
        <p style="color:white;">J. K. ROWLING is a British author and philanthropist. She is best known for writing the Harry Potter fantasy series, which has won multiple awards and sold more than 500 million copies,[2][3] becoming the best-selling book series in history.[4] The books are the basis of a popular film series, over which Rowling had overall approval on the scripts[5] and was a producer on the final films.[6] She also writes crime fiction under the pen name Robert Galbraith. As of 2020, J.K. Rowling has written at least 19 books in the traditional sense, but has written, published, and produced other fictions.</p>
    </div>
    <hr>

    <div class="w3-container" style="margin-left: auto; margin-right: auto; width: 100em; color:white">
    <h2>Recommended Readings</h2>
    <table class="w3-table" style="height:10px; padding-top:150px; background-color:black;" >
    <tr>
      <td >
        <div class="w3-container" >
         <div class="w3-card-4" style="width:70%;height:800px;background-color:white; ">
            <img src="stone.jpg" alt="Alps" style="width:100%;height:500px;">
            <div class="w3-container w3-center" style="color:black">
            <h5>Harry Potter and the Sorcerer's Stone</h5>
            <p>$ 65.00</p>
            <p>An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world</p>
            <a href="store.php"><button>Go to Book Store</button></a>
            </div>
         </div>
        </div>
    </td>
    <td >
       <div class="w3-container">
        <div class="w3-card-4" style="width:70%; height:800px; background-color:white;">
            <img src="chamber.jpg" alt="Alps" style="width:100%;height:500px;">
            <div class="w3-container w3-center" style="color:black">

            <h5>Harry Potter and the Chamber of Secrets</h5>
            <p>$ 60.00</p>
            <p>An ancient prophecy seems to be coming true when a mysterious presence begins stalking the corridors of a school of magic and leaving its victims paralyzed </p>
            <a href="store.php"><button>Go to Book Store</button></a>
            </div>
        </div>
        </div>
    </td>
    <td >
      <div class="w3-container">
       <div class="w3-card-4" style="width:70%;height:800px; background-color:white;">
            <img src="beedle.jpg" alt="Alps" style="width:100%;height:500px;">
            <div class="w3-container w3-center" style="color:black">
            <h5>The Tales of Beedle the Bard</h5>
            <p>$ 40.00</p>
            <p>The Tales of Beedle the Bard contains five richly diverse fairy tales, each with its own magical character, that will variously bring delight, laughter and the thrill of mortal peril</p>
            <a href="store.php"><button >Go to Book Store</button></a>
       </div>
      </div>
    </div>
   </td>
  </tr>
 </table>

</div>
    <div><a href="store.php"><img src="" style=" left: auto; right: auto; width: 100% "></a></div>
</body>
    <footer><div class="foot">© 2021 Copyright:
        <a href="store_index.php"> J. K. Book-store</a></div>
    </footer>
</html>


<?php
?>
