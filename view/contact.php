<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=".././src/css/styles.css">
</head>
<body>
      <?php
        require "../view/header.php";
     ?>
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