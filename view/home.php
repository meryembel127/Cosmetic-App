
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MR BEAUTY</title>
  <link rel="stylesheet" href="././src/css/style.css" />
  <script src="public/js/user.js"></script>
</head>
<body>

  <?php include 'header.php'; ?>

  
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
        <a href="#"><img src="././src/rpfe.jpg" alt="La Roche-Posay"></a>
      </div>
      <div class="text">
        <a href="#"><h3>La Roche-Posay</h3></a>
      </div>
    </div>

    <div class="box">
      <div class="imbox">
        <a href="#"><img src="././src/vpfe.jpg" alt="Vichy"></a>
      </div>
      <div class="text">
        <a href="#"><h3>Vichy</h3></a>
      </div>
    </div>

    <div class="box">
      <div class="imbox">
        <a href="#"><img src="././src/cpfe.jpg" alt="CeraVe"></a>
      </div>
      <div class="text">
        <a href="#"><h3>CeraVe</h3></a>
      </div>
    </div>
  </div>
   <h1 id="RochePosay">LA ROCHE POSAY</h1>
        <div class="RP-cards">
            
            <div class="card">
                <img src="././src/rochs.jpg" alt="">
                <h2>SUNSCREM</h2>
                <p>"Reveal your natural glow with La Roche-Posay advanced sun protection for radiant, healthy skin every day</p>
                <button class="price">170 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/roch.jpg" alt="">
                <h2>MOISTURIZER</h2>
                <p>"Nourish your skin with La Roche-Posay's hydrating cream deep moisture for soft, radiant beauty all day long</p>
                <button class="price">150 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/rochj.jpg" alt="">
                <h2>Cleansing gel</h2>
                <p>Purify your skin with La Roche-Posay’s cleansing gel gentle, effective care for a fresh and clear complexion.</p>
                <button class="price">140 DH</button>
                <button>Shop Now</button>
            </div>
        </div>
        <h1 id="cerave">CERAVE</h1>
        <div class="RP-cards">
            
            <div class="card">
                <img src="././src/cers.jpg" alt="">
                <h2>SUNSCREM</h2>
                <p>Defend your skin daily with CeraVe’s lightweight sun protection gentle, dermatologist-recommended care for healthy, protected beauty</p>
                <button class="price">170 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/cerc.jpg" alt="">
                <h2>MOISTURIZER</h2>
                <p>Keep your skin hydrated and healthy with CeraVe’s moisturizing cream trusted by dermatologists for lasting moisture and softness</p>
                <button class="price">150 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/cerj.jpg" alt="">
                <h2>Cleansing gel</h2>
                <p>Cleanse gently with CeraVe’s hydrating cleansing gel removes impurities while maintaining your skin’s natural moisture</p>
                <button class="price">140 DH</button>
                <button>Shop Now</button>
            </div>
        </div>
 <h1 id="vichy">VICHY</h1>
        <div class="RP-cards">
            
            <div class="card">
                <img src="././src/vs.jpg" alt="">
                <h2>SUNSCREM</h2>
                <p>Protect and revitalize your skin with Vichy’s sun protection powerful defense enriched with mineralizing thermal water</p>
                <button class="price">170 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/vc.jpg" alt="">
                <h2>MOISTURIZER</h2>
                <p>Hydrate and soothe your skin with Vichy’s moisturizing cream enriched with soothing mineral-rich thermal water for lasting comfort</p>
                <button class="price">150 DH</button>
                <button>Shop Now</button>
            </div>
            
            <div class="card">
                <img src="././src/vj.jpg" alt="">
                <h2>Cleansing gel</h2>
                <p>Gently cleanse your skin with Vichy’s cleansing gel purifies and refreshes while respecting your skin’s natural balance</p>
                <button class="price">140 DH</button>
                <button>Shop Now</button>
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