<?php
?>
     <?php
        require __DIR__ . '/header.php';
     ?>
      <div class="hero">
      <div class="content">
        <h1>Welcome to MR BEAUTY Your Destination for Premium Global Cosmetic Brands</h1>
        <p>Discover a world of beauty with our exclusive selection of high-end cosmetic products from the most renowned international <br> At MR BEAUTY, we are dedicated to bringing you the latest in skincare,  <br> all in one place. Whether you're looking for timeless classics or trending beauty essentials, <br>our curated collection guarantees authenticity, quality, and elegance with every purchase.</p>
        <a href="index.php?page=products" class="btn">Shop Now</a>
      </div>
      <div class="hero-image">
        <img src="./src/logo.jpg" alt="Beauty Products">
      </div>
      </div>
      <?php
        if (isset($products)) {
            foreach ($products as $key => $value) {
            }
        }
      ?>
   </body>
   </html>
   <?php
?>

