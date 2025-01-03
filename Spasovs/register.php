<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="text/javascript" href="script.js">
    <title>Spasov's Register</title>
    <script src="https://kit.fontawesome.com/5d3e818418.js" crossorigin="anonymous"></script>
    
</head>
<body>
   <section id="header">
        <a href="index.php"><img src="logos/LOGOwhite.png" class="logo" alt="" id="log"></a>

        <div>
            <ul id="navbar">
                <li><a href="SignIN.php" class="active">Sign In/Log In</a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa-solid fa-bag-shopping" style="color: #fff;"></i></a>
            <i id="bar" class="fa-solid fa-bars" style="color: #fff;"></i>
            
        </div>
   </section>

   <div class="container">
    <div class="box form-box">

        <?php 


        session_start();

           
            
            if ( isset( $_POST['submit'] ) ) {
	
                // записване на данните от полетата в променливи за по-удобно
                include 'config.php';
                $name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                // INSERT заявка към базата, с която се записват полетата
        
                
                if ( !$error ){
            
                    $hash = hash('sha256', $password);
                    
                    $sql = "INSERT INTO users (Username, Email, Password) VALUES (?,?,?)";
                    $connection->prepare($sql)->execute([$name, $email, $hash]);
                    header("location: index.php");
	                exit;
                    
        
                   
                }    
            }
                
            
        ?>

        <header>Sign Up</header>
        <form action="register.php" method="POST">

            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email"  required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="field">
             <input type="submit" class="btn" name="submit" value="Register">
            </div>

            <div class="links">
                Already have an Account? <a href="SignIN.php">Sign in now</a>
            </div>
        </form>
    </div>
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
        <a href="#">Help</a>
    </div>

    <div class="copyright">
        <p>©2024. Curdis inc.</p>
    </div>
   </footer>
  
   

    <script src="script.js"></script>

</body>
</html>