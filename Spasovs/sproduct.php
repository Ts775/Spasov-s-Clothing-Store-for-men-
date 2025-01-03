<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="text/javascript" href="script.js">
    <title>Spasov's Product</title>
    <script src="https://kit.fontawesome.com/5d3e818418.js" crossorigin="anonymous"></script>
</head>
<body>
   <section id="header">
        <a href="index.php"><img src="logos/LOGOwhite.png" class="logo" alt="" id="log"></a>

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

   <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="products/p1.jpg" width="100%" id="mainImg">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="products/p1.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="products/r1.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="products/r2.jpg" width="100%" class="small-img">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h4>Home / Shirt</h4>
        <h3>Summer flower shirt</h3>
        <h2>80$</h2>
        <select>
            <option>Select Size</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
        <input type="number" value="1">
        <button>Add To Cart</button>
        <h4>Product Details</h4>
        <span>This white men's t-shirt boasts a captivating fusion of minimalist elegance and bold botanical flair. Crafted from luxuriously soft cotton fabric, it promises both comfort and style. Against its pristine white canvas, striking black flower petals emerge, intricately embroidered to create a captivating contrast. <br>

            The dark petals stand out boldly against the white backdrop, their graceful curves and delicate details adding a touch of drama to the design. Each petal is meticulously crafted, lending an air of sophistication to the overall aesthetic.</span>
    </div>
   </section>

   <section id="product1" class="section-p1">
    <h2>Recommendations</h2>
    <div class="pro-container">
        <div class="pro">
            <img src="products/p5.jpg">
            <div class="des">
                <span>Brand</span>
                <h5>Oversized T-Shirt</h5>
                <h4>30$</h4>
            </div>
            
        </div>
        <div class="pro">
            <img src="products/p6.jpg">
            <div class="des">
                <span>Brand</span>
                <h5>Round Neck Shirt </h5>
                <h4>50$</h4>
            </div>
            
        </div>
        <div class="pro">
            <img src="products/p7.jpg">
            <div class="des">
                <span>Lymio</span>
                <h5>Casual Lymio Shirt</h5>
                <h4>90$</h4>
            </div>
            
        </div>
        <div class="pro">
            <img src="products/p8.jpg">
            <div class="des">
                <span>KS International</span>
                <h5>White Sneaker Shoes </h5>
                <h4>150$</h4>
            </div>
            
        </div>
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
        <p>©2024. Spasov's inc.</p>
    </div>
   </footer>

   <script>
    var mainImg = document.getElementById("mainImg");
    var smallImg = document.getElementsByClassName("small-img");

    smallImg[0].onclick = function(){
        mainImg.src = smallImg[0].src;
    }
    smallImg[1].onclick = function(){
        mainImg.src = smallImg[1].src;
    }
    smallImg[2].onclick = function(){
        mainImg.src = smallImg[2].src;
    }
    smallImg[3].onclick = function(){
        mainImg.src = smallImg[3].src;
    }
   </script>
    <script src="script.js"></script>

</body>
</html>