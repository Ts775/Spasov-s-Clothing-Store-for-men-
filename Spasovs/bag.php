<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="text/javascript" href="script.js">
    <title>Spasov's Bag</title>
    <script src="https://kit.fontawesome.com/5d3e818418.js" crossorigin="anonymous"></script>
</head>
<body>
   <section id="header">
        <a href="#"><img src="logos/LOGOwhite.png" class="logo" alt="" id="log"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="SignIN.php">LOGOUT</a></li>
                <li id="lg-bag"><a class="active" href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
    <h2>#Bag</h2>
    <p>Create your own style</p>
    </div>
    
   </section>

   <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
                    <td><img src="products/p1.jpg" alt=""></td>
                    <td>SUMMER FLOWER SHIRT</td>
                    <td>80$</td>
                    <td><input type="number" value="1"></td>
                    <td>80$</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
                    <td><img src="products/p2.jpg" alt=""></td>
                    <td>LEATHER SHORTS</td>
                    <td>40$</td>
                    <td><input type="number" value="1"></td>
                    <td>40$</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
                    <td><img src="products/p3.jpg" alt=""></td>
                    <td>LEISURE MESH SHOES</td>
                    <td>125$</td>
                    <td><input type="number" value="1"></td>
                    <td>125$</td>
                </tr>
            </tbody>
        </table>

   </section>

   <section id="cart-add" class="section-p1">
    <div id="subtotal">
        <h3>Cart Subtotal</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>245$</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>245$</strong></td>
            </tr>
        </table>
    </div>
   </section>

   


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