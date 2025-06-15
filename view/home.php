
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MR BEAUTY</title>
  <link rel="stylesheet" href="../src/style.css" />
  <script src="public/js/user.js"></script>
</head>
<body>

  <?php include './header.php'; ?>

  
  <section class="hero">
    <div class="content">
      <h1>Welcome to MR BEAUTY - Your Destination for Premium Global Cosmetic Brands</h1>
      <p>
        Discover a world of beauty with our exclusive selection of high-end cosmetic products from the most renowned international brands.<br>
        At MR BEAUTY, we are dedicated to bringing you the latest in skincare – all in one place.<br>
        Whether you're looking for timeless classics or trending beauty essentials, our curated collection guarantees authenticity, quality, and elegance with every purchase.
      </p>
      <a href="produit.html" class="btn">Shop Now</a>
    </div>
  </section>

  
  <div class="titre">
    <h1>Home of Global Cosmetic Brands</h1>
  </div>

  
  <div id="boxs">
    <div class="box">
      <div class="imbox">
        <a href="#"><img src="../src/rpfe.jpg" alt="La Roche-Posay"></a>
      </div>
      <div class="text">
        <a href="#"><h3>La Roche-Posay</h3></a>
      </div>
    </div>

    <div class="box">
      <div class="imbox">
        <a href="#"><img src="../src/vpfe.jpg" alt="Vichy"></a>
      </div>
      <div class="text">
        <a href="#"><h3>Vichy</h3></a>
      </div>
    </div>

    <div class="box">
      <div class="imbox">
        <a href="#"><img src="../src/cpfe.jpg" alt="CeraVe"></a>
      </div>
      <div class="text">
        <a href="#"><h3>CeraVe</h3></a>
      </div>
    </div>
  </div>
  <div id="center">
    <div class="container">
<form>
      <h1>Contact Us</h1>
      <input type="text" id="FirstName" placeholder="First Name" required>

      <input type="text" id="LastName" placeholder="Last Name" required>

      <input type="email" id="Email" placeholder="Email" required>
      
      <input type="text" id="Mobile" placeholder="Mobile" required>

      <input type="text" id="SkinType" placeholder="Skin Type" required>

      <input type="text" id="Adresse" placeholder="Adresse" required>

      <h4>type your message here...</h4>
      <textarea ></textarea>
      <input type="submit" value="Send" id="button">
  </form>
    </div>
</div>

</body>
</html>