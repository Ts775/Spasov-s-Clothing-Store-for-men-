<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="text/javascript" href="script.js">
    <title>Spasov's Shop</title>
    <script src="https://kit.fontawesome.com/5d3e818418.js" crossorigin="anonymous"></script>
</head>
<body>
   <section id="header">
        <a href="#"><img src="logos/LOGOwhite.png" class="logo" alt="" id="log"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="SignIN.php">LOGOUT</a></li>
                <li id="lg-bag"><a href="bag.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa-solid fa-bag-shopping" style="color: #fff;"></i></a>
            <i id="bar" class="fa-solid fa-bars" style="color: #fff;"></i>
            
        </div>
   </section>

   <section id="page-header">
    <div id="flag">
    <h2>#BeDiffrent</h2>
    <p>Create your own style</p>
    </div>
    
   </section>

   <div class="wrapper">
        <div id="search-container">
            <input type="search" id="search-input" placeholder="Search products...">
            <button id="search">Search</button>
        </div>
        <div id="filters">
            <button class="button-value" onclick="filterProduct('All')">Show All</button>
            <button class="button-value" onclick="filterProduct('Topwear')">Topwear</button>
            <button class="button-value" onclick="filterProduct('Bottomwear')">Bottomwear</button>
            <button class="button-value" onclick="filterProduct('Shoes')">Shoes</button>
        </div>
        <div id="product"></div>
   </div>


   


   <footer class="section-p1">
    <div class="col">
        <img src="logos/LOGOwhite.png" id="log2">
        <h4>Contact</h4>
        <p><strong>Adress:</strong> Josuke Joestar 222, street 024, Morioh</p>
        <p><strong>Phone:</strong> 0877105657</p>
        <p><strong>Hours:</strong> 24/7</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <a href="https://bg-bg.facebook.com/cvetelin.spasov.54"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/t.spasov05/"><i class="fa-brands fa-instagram"></i></a> 
                </div>
            </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">Delivery information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="SignIN.php">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">Help</a>
    </div>

    <div class="copyright">
        <p>©2024. Curdis inc.</p>
    </div>
   </footer>


    <script src="script.js"></script>

</body>
</html>