<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username']) ) { 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <title>FIEL90 Store</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link rel="icon" href="./RedStore_Img/images/Icon.jpg"  >

</head>
  <body>

    <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
        <a href="index.html"><img src="./RedStore_Img/images/Logo-FIEL90-COPY.png" width="150px" /></a>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#Contact">Contact</a></li>
            <li><a href="account.html">Account</a></li>
          </ul>
        </nav>
        <a href="Cart.html"><img src="./RedStore_Img/images/cart.png" width="30px" height="30px"></a>
        <img src="./RedStore_Img/images/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
      <div class="row" id="about">
        <div class="col-2">
            <h1>Hello, <?php echo $_SESSION['username']; ?> </h1>
            <a href="logout.php">Logout</a>
          <h1>
            Give Your Workout<br />A New Style!
          </h1>
          <p>
            Success isn't always about greatness. It's about consistency. Consistent <br> hard work gains success. Greatness will come.
          </p>
          <a href="" class="btn">Explore Now &#8594;</a>


        </div>
        <div class="col-2">
            <img src="./RedStore_Img/images/image1.png" >
        </div>
      </div>
    </div>
</div>
<div class="categories">
    <div class="small-container">
        <h2 class="title">The best teams</h2>
    <div class="row">
        <div class="col-3">
            <a href="https://www.alahlyegypt.com/en"><img src="./RedStore_Img/images/Al-Ahly.png" ></a>
        </div>
        <div class="col-3">
            <a href="https://www.realmadrid.com/en-US"><img src="./RedStore_Img/images/Real madrid.png"></a>
        </div>
        <div class="col-3">
            <a href="https://www.zamalektoday.com/"><img src="./RedStore_Img/images/Zamalek.png"></a>
        </div>
        <div class="col-3">
            <a href="https://www.fcbarcelona.com/en/"><img src="./RedStore_Img/images/FC Barcelona.png"></a>
        </div>
        <div class="col-3">
            <a href="https://en.psg.fr/"><img src="./RedStore_Img/images/Paris_Saint-Germain_F.C..svg.png"></a>
        </div>
    </div>
    </div>
</div>
<!-- featured products -->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="product-etails.html"><img src="./RedStore_Img/images/product_1_copy-removebg-preview.png"></a>
            <a href="product-etails.html"><h4>Red Printed T-Shirt</h4"></a>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>
            </div>
            <p>EGP.150</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/Starz_1-removebg-preview.png">
            <h4>Stars Puma</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.500</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/Short_2-removebg-preview.png">
            <h4>Black shorts</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.50</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/BRAZIEL_1-removebg-preview.png">
            <h4> Brazil Jacket</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.450</p>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="RedStore_Img/images/bag_3-removebg-preview.png">
            <h4>back bag</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.180</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/bady_1-removebg-preview.png">
            <h4>Training T-shirt</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.90</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/aswer1-removebg-preview.png">
            <h4>Sports accessories</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.45</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/boll_1-removebg-preview.png">
            <h4>Football Ball</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.120</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="RedStore_Img/images/glevs_1-removebg-preview.png">
            <h4>Glove</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/teshert_1_copy-removebg-preview.png">
            <h4>Blue Printed T-Shirt</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.80</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/Starz_2-removebg-preview.png">
            <h4>Stars-shose</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.1150</p>
        </div>
        <div class="col-4">
            <img src="RedStore_Img/images/Intermeami-removebg-preview.png">
            <h4>Intermiami T-Shirt</h4>
            <div class="rating">
                <p> &#11088;&#11088;&#11088;&#11088;</p>

            </div>
            <p>EGP.150</p>
        </div>
    </div>
</div>

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
            <video width="350" height="240" controls autoplay loop >
                <source src="RedStore_Img/images/Meet-Xiaomi-Smart-Band-8-Sport-meets-style.mp4" type="video/mp4">
            </video>
            </div>
            <div class="col-2">
                <p>Exclusively Available on RedStore</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
                <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>


<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <p><h1>&#8220;</h1></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="rating">
                    <p> &#11088;&#11088;&#11088;&#11088;</p>

                </div>
                <a href="https://www.facebook.com/profile.php?id=100076631304550&mibextid=ZbWKwL">
                    <img src="RedStore_Img/images/IMG_20240320_025752_384-copy.jpg">
                </a>
                <h3>Kareem Elatar</h3>
            </div>
            <div class="col-3">
                <p><h1>&#8220;</h1></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="rating">
                    <p> &#11088;&#11088;&#11088;&#11088;</p>

                </div>
                <img src="RedStore_Img/images/WhatsApp Image 2024-03-26 at 22.36.48_592ef765.jpg">
                <h3>Moamen Sayed</h3>
            </div>
            <div class="col-3">
                <p><h1>&#8220;</h1></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="rating">
                    <p> &#11088;&#11088;&#11088;&#11088;</p>

                </div>
                <img src="RedStore_Img/images/WhatsApp Image 2024-03-26 at 22.34.33_1b704900.jpg">
                <h3>Abdallah Ashraf</h3>
            </div>
        </div>
    </div>
</div>


<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <a href="https://web.vodafone.com.eg/en/home"><img src="./RedStore_Img/images/Vodafone_Egypt-Logo.wine.png"></a>
            </div>
            <div class="col-5">
                <a href="https://www.spirospathis.com/"><img src="./RedStore_Img/images/Logo-SpiroSpathis.jpg"></a>
            </div>
            <div class="col-5">
                <a href="https://www.oppo.com/eg-en/"><img src="./RedStore_Img/images/logo-oppo.png"></a>
            </div>
            <div class="col-5">
                <a href="https://www.fawry.com/ar/"><img src="./RedStore_Img/images/Fawry.png"></a>
            </div>
            <div class="col-5">
                <a href="https://www.xbox.com/en-eg"><img src="./RedStore_Img/images/XBOX-removebg-preview.png"></a>
            </div>
        </div>
    </div>
</div>

<div class="footer" id="Contact">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="./RedStore_Img/images/play-store.png">
                    <img src="./RedStore_Img/images/app-store.png">
                
                </div>
            </div>
            <div class="footer-col-2">
                <img src="./RedStore_Img/images/Logo-FIEL90-2.png">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>

            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
        </div>
        <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>Youtube</li>
        </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2020 - RedStore</p>
</div>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
  </body>
</html>

<?php

}

else{
    header("location: index.php");
    exit();
}

?>