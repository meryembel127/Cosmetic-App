<?php
        require __DIR__ . '/header.php';
     ?>
 <div class="contact-container">
    <form action="index.php?page=contact" method="POST">
      <h1>Contact Us</h1>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
      </div>
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your Message"></textarea>
      </div>
      <button type="submit">Send Message</button>
  </form>
</div>
</body>
</html>

